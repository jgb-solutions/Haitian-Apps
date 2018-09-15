@extends('layouts.app')

@section('content')
<section id="users-index" class="section no-mb grey lighten-5">
    <div class="container">
        <div class="row">
            <div class="col m4 s12">
                <div class="sidenav z-depth-2" id="slide-out">
                    @include('users.profile-sidebar')
                </div>

                <div class="profile-sidebar z-depth-2 hide-on-small-only">
                    @include('users.profile-sidebar')
                </div>
                <div class="hide-on-med-and-up">
                    <div class="fixed-action-btn">
                        <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating btn-large blue">
                            <i class="large material-icons">menu</i>
                        </a>
                    </div>
                </div>
              </div>

              <div class="col m8 s12">
                @yield('profile-content')
              </div>
        </div>
    </div>
</section>
@endsection
