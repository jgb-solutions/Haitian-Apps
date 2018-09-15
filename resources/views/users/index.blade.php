@extends('users.profile')

@section('profile-content')
<h4 class="no-mt"><i class="fa fa-suitcase"></i> {{$title}}</h4>

<div class="row">
    @foreach (range(1, 4) as $stuff)
        <div class="col m6">
           @include('partials.card')
        </div>
    @endforeach
@endsection
