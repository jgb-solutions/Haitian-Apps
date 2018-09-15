<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
	public function index()
	{
		return view('users.index', [
            'title' => trans('text.profile.works')
        ]);
	}

	public function edit()
	{
		return view('users.edit', [
            'title' => trans('text.profile.edit'),
            'user' => auth()->user()
        ]);
	}

	public function update(Request $request)
	{
		$user_data = $request->validate([
			'name' => 'number'
		]);
	}
}
