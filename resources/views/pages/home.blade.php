@extends('layouts.app')

@section('content')
{{-- {% include about.html %} --}}
<section class="blue no-mb">
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://picsum.photos/580/250/?image=900"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big like yeah!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://picsum.photos/580/250/?image=900"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://picsum.photos/580/250/?image=900"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://picsum.photos/580/250/?image=900"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
</section>

{{-- {% include partials/parallax-2.html %} --}}
<!-- <div class="parallax-container">
    <div class="parallax"><img src="/assets/images/parallax-2.jpg"></div>
 </div> -->
{{-- {% include work.html %} --}}
<section class="section blue white-text">
    <div class="container">
        <div class="row">
            <div class="col m12">
               <h3 class="center">Latest Products</h3>
                    <div class="row">
                        <div class="col m4">
                           @include('partials.card')
                        </div>
                        <div class="col m4">
                           @include('partials.card')
                        </div>
                        <div class="col m4">
                           @include('partials.card')
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
