@extends('users.profile')

@section('profile-content')
<h4 class="no-mt"><i class="fa fa-suitcase"></i> {{$title}}</h4>
<br>

<form action="{{route('profile.update')}}" method="POST">
    @csrf
    @method('PUT')

    <div class="input-field">
        <input name="name" id="name" type="text"
            placeholder="@lang('text.profile.name_placeholder')"
            class="validate"
            value="{{$user->name}}">
        <label for="name">@lang('text.profile.name')</label>
        <span class="helper-text" data-error="Your full name is required"></span>
    </div>

    <div class="input-field">
        <input name="email" placeholder="@lang('text.profile.email_placeholder')"
        id="email" type="email" class="validate" value="{{$user->email}}">
        <label for="email">@lang('text.profile.email')</label>
        <span class="helper-text" data-error="@lang('text.profile.error_')"></span>
    </div>

    <div class="input-field">
        <input name="profession" placeholder="@lang('text.profile.profession_placeholder')"
            id="profession" type="text" class="validate" value="{{$user->profession}}">
        <label for="profession">@lang('text.profile.profession')</label>
        <span class="helper-text" data-error="@lang('text.profile.error_')"></span>
    </div>

    <div class="input-field">
        <input name="facebook" placeholder="@lang('text.profile.facebook_placeholder')"
            id="facebook" type="url" class="validate" value="{{$user->facebook}}">
        <label for="facebook">@lang('text.profile.facebook')</label>
        <span class="helper-text" data-error="@lang('text.profile.error_')"></span>
    </div>

    <div class="input-field">
        <input name="google" placeholder="@lang('text.profile.google_placeholder')"
            id="google" type="url" class="validate" value="{{$user->google}}">
        <label for="google">@lang('text.profile.google')</label>
        <span class="helper-text" data-error="@lang('text.profile.error_')"></span>
    </div>

    <div class="input-field">
        <input name="youtube" placeholder="@lang('text.profile.youtube_placeholder')"
            id="youtube" type="url" class="validate" value="{{$user->youtube}}">
        <label for="youtube">@lang('text.profile.youtube')</label>
        <span class="helper-text" data-error="@lang('text.profile.error_')"></span>
    </div>

    <div class="input-field">
        <input name="github" placeholder="@lang('text.profile.github_placeholder')"
            id="github" type="url" class="validate" value="{{$user->github}}">
        <label for="github">@lang('text.profile.github')</label>
        <span class="helper-text" data-error="@lang('text.profile.error_')"></span>
    </div>

    <div class="input-field">
        <input name="twitter" placeholder="@lang('text.profile.twitter_placeholder')"
            id="twitter" type="url" class="validate" value="{{$user->twitter}}">
        <label for="twitter">@lang('text.profile.twitter')</label>
        <span class="helper-text" data-error="@lang('text.profile.error_')"></span>
    </div>

    <div class="input-field">
        <input name="linkedin" placeholder="@lang('text.profile.linkedin_placeholder')"
            id="linkedin" type="url" class="validate" value="{{$user->linkedin}}">
        <label for="linkedin">@lang('text.profile.linkedin')</label>
        <span class="helper-text" data-error="@lang('text.profile.error_')"></span>
    </div>

    <div class="input-field">
        <input name="instagram" placeholder="@lang('text.profile.instagram_placeholder')"
            id="instagram" type="url" class="validate" value="{{$user->instagram}}">
        <label for="instagram">@lang('text.profile.instagram')</label>
        <span class="helper-text" data-error="@lang('text.profile.error_')"></span>
    </div>

     <div class="input-field">
        <input name="website" placeholder="@lang('text.profile.website_placeholder')"
            id="website" type="url" class="validate" value="{{$user->website}}">
        <label for="website">@lang('text.profile.website')</label>
        <span class="helper-text" data-error="@lang('text.profile.error_')"></span>
    </div>

    <div class="input-field">
        <textarea name="bio" placeholder="@lang('text.profile.bio_placeholder')"
            id="bio" class="materialize-textarea">{{$user->bio}}</textarea>
        <label for="bio">@lang('text.profile.bio')</label>
        <span class="helper-text" data-error="Your bio is required."></span>
    </div>

    <div class="input-field">
        <button class="btn blue btn-large waves-effect waves-light" type="submit">
            <i class="material-icons right">send</i> @lang('text.profile.update')
        </button>
    </div>
</form>
@endsection