<div class="profile-user-info center-align blue white-text">
    <br>
    <a href="{{route('profile')}}">
        <img src="{{$user->avatar}}" class="circle" />
    </a>

    <br>

    <a href="{{route('profile')}}" class="white-text">
        <span>{{$user->name}}</span>
    </a>

    @isset($user->profession)
        <small><span><i class="fa fa-suitcase"></i> {{$user->profession}}</span></small><br>
    @endisset

    @isset($user->website)
        <small><span><a href="{{$user->website}}" class="white-text"><i class="fa fa-globe"></i> {{$user->webiste_text}}</a></span></small><br>
    @endisset

    @isset($user->telephone)
        <small><span><a href="tel:+509{{$user->telephone}}" class="white-text"><i class="fa fa-whatsapp"></i> {{$user->telephone}}</a></span></small>
    @endisset

    @if ($user->has_any_links())
        <p class="profile-social-links">
            @isset($user->github)
            <a href="{{$user->github}}) }}"
                target="blank"
                class="btn-floating black btn-small">
                <i class="fa fa-github"></i>
            </a>
            @endisset

            @isset($user->facebook)
                <a href="{{$user->facebook}}"
                    target="blank"
                    class="btn-floating black btn-small">
                    <i class="fa fa-facebook"></i>
                </a>
            @endisset

            @isset($user->twitter)
            <a href="{{$user->twitter}}) }}"
                target="blank"
                class="btn-floating black btn-small">
                <i class="fa fa-twitter"></i>
            </a>
            @endisset

            @isset($user->linkedin)
            <a href="{{$user->linkedin}}) }}"
                target="blank"
                class="btn-floating black btn-small">
                <i class="fa fa-linkedin"></i>
            </a>
            @endisset

            @isset($user->instagram)
            <a href="{{$user->instagram}}) }}"
                target="blank"
                class="btn-floating black btn-small">
                <i class="fa fa-instagram"></i>
            </a>
            @endisset

            @isset($user->youtube)
            <a href="{{$user->youtube}}) }}"
                target="blank"
                class="btn-floating black btn-small">
                <i class="fa fa-youtube"></i>
            </a>
            @endisset

            @isset($user->email)
            <a href="{{$user->email_url}}"
                target="blank"
                class="btn-floating black btn-small">
                <i class="fa fa-envelope-o"></i>
            </a>
            @endisset
        </p>
    @endif
    <br>
</div>
<ul class="collection no-mt">
    <li class="collection-item">
        <a href="{{route('users.works')}}" class="black-text">
            <i class="fa fa-suitcase"></i> @lang('text.profile.works')
        </a>
    </li>
    <li class="collection-item">
        <a href="{{route('users.works.add')}}" class="black-text">
            <i class="fa fa-plus"></i> Add a Work
        </a>
    </li>
    <li class="collection-item">
        <a href="{{route('profile.edit')}}" class="black-text">
            <i class="fa fa-user"></i> Edit Profile
        </a>
    </li>
</ul>