<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\RegisterFormRequest;
use Laravel\Socialite\Two\InvalidStateException;

class AuthController extends Controller
{
	public function register(RegisterFormRequest $request)
	{
		return User::create([
			'name' 			=> $request->name,
			'username' 		=> str_slug($request->name),
			'email' 			=> $request->email,
			'password' 		=> bcrypt($request->password),
			'telephone' 	=> $request->telephone
		]);
	}

	public function login(Request $request)
	{
		// grab credentials from the request
		$credentials = $request->only('email', 'password');

		try {
		   	// attempt to verify the credentials and create a token for the user
		   	if (! $token = auth()->guard('api')->attempt($credentials)) {
		       		return response()->json(['message' => 'Imel oubyen Modpas la pa bon.'], 401);
		   	}
		} catch (JWTException $e) {
		   	// something went wrong whilst attempting to encode the token
		   	return response()->json(['message' => 'Nou pa rive kreye kòd tokenn nan.'], 500);
		}

		// all good so return the token
		$user = auth()->guard('api')->user();

		// return response
		return response()->json([
			'user' => new UserResource($user),
			'token' => $token
		]);
	}

	public function me()
    {
        return response()->json([
        		'user ' => New UserResource(auth()->guard('api')->user()),
        	]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout(true);

        alert()->success('You have been logged out.', 'Good bye!');

        return redirect('/');
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->guard('api')->refresh());
    }

	public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
	public function handleProvider($provider, Request $request)
	{
		try {
			$provider_user = Socialite::driver($provider)->user();
			// for example we might do something like... Check if a user exists with the email and if so, log them in.
			// $user = User::where()
			// $user = User::orWhere('email', $provider_user->email)->firstOrCreate([
			//    'facebook_id' 	=> $provider_user->id,
			// ], [
			// 	'name' 				=> $provider_user->name,
			// 	'avatar' 			=> $provider_user->avatar,
			// 	'facebook_link' 	=> $provider_user->profileUrl
			// ]);

			$providerId = $provider . '_id';
			$providerLink = $provider . '_link';

			$user = User::where('email', $provider_user->getEmail())
							->orWhere($providerId, $provider_user->getId())
							->first();

			if ($user) {
				if (empty($user->email)) {
					$user->email = $provider_user->getEmail();
				}

				if (empty($user->name)) {
					$user->name = $provider_user->getName();
				}

				if (empty($user->{$providerId})) {
					$user->{$providerId} = $provider_user->getId();
				}

				if (empty($user->{$providerLink})) {
					$user->{$providerLink} = $provider_user->profileUrl;
				}

				if (empty($user->avatar)) {
					$user->avatar = $provider_user->getAvatar();
				}

			} else {
				$user = User::create([
					'name' 			=> $provider_user->getName(),
					'email'			=> $provider_user->getEmail(),
					'avatar' 		=> $provider_user->getAvatar(),
					$providerId 	=> $provider_user->getId(),
					$providerLink 	=> $provider_user->profileUrl
				]);

			}

			auth()->login($user);

			alert()->success("You've been successfully logged in.");

			return redirect()->intended(route('profile'));
		} catch (InvalidStateException $e) {
			alert()->warning('There was a problem logging you in.');

			return redirect(route('login'));
		}
	}

	protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}