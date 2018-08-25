<div class="profile-user-info center-align blue white-text">
    <br>
    <img src="{{auth()->user()->avatar}}" class="circle"><br>
    <span>{{auth()->user()->name}}</span><br>
    <small><span><i class="fa fa-suitcase"></i> Software Engineer</span></small><br>
    <small><span><a href="https://jgb.solutions" class="white-text"><i class="fa fa-globe"></i> JGB.Solutions</a></span></small><br>
    <small><span><a href="tel:+50941830318" class="white-text"><i class="fa fa-whatsapp"></i> 4183 0318</a></span></small>
    <p class="profile-social-links">
        <a href="{{ config('site.social.github') }}"
            target="blank"
            class="btn-floating black btn-small">
            <i class="fa fa-github"></i>
        </a>
        {{-- &nbsp; --}}
        <a href="{{ config('site.social.facebook') }}"
            target="blank"
            class="btn-floating black btn-small">
            <i class="fa fa-facebook"></i>
        </a>

        <a href="{{ config('site.social.twitter') }}"
            target="blank"
            class="btn-floating black btn-small">
            <i class="fa fa-twitter"></i>
        </a>

        <a href="{{ config('site.social.linkedin') }}"
            target="blank"
            class="btn-floating black btn-small">
            <i class="fa fa-linkedin"></i>
        </a>

        <a href="{{ config('site.social.instagram') }}"
            target="blank"
            class="btn-floating black btn-small">
            <i class="fa fa-instagram"></i>
        </a>

        <a href="{{ config('site.social.youtube') }}"
            target="blank"
            class="btn-floating black btn-small">
            <i class="fa fa-youtube"></i>
        </a>
    </p>
    <br>
</div>
<ul class="collection no-mt">
    <li class="collection-item">
        <a href="{{route('users.works')}}" class="black-text">
            <i class="fa fa-suitcase"></i> My Works
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