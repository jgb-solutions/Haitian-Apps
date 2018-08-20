@extends('layouts.app')

@section('content')
{{-- {% include about.html %} --}}
<section class="blue white-text no-mb" id="about">
        <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src="/images/banner1.jpeg"></a>
        <a class="carousel-item" href="#two!"><img src="/images/banner1.jpeg"></a>
        <a class="carousel-item" href="#three!"><img src="/images/banner1.jpeg"></a>
        <a class="carousel-item" href="#four!"><img src="/images/banner1.jpeg"></a>
      </div>
    {{-- <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div> --}}
</section>

{{-- {% include partials/parallax-1.html %} --}}
<!-- <div class="parallax-container">
    <div class="parallax"><img src="/assets/images/parallax-1.jpg"></div>
 </div> -->
{{-- {% include services.html %} --}}
<section class="section no-mb grey darken-4 white-text pt_30 pb_30" id="services">
    <div class="container">
        <div class="row">
            <div class="col m8 offset-m2 center">
                <h2>Intro</h2>
                <div class="text-flow">
                    <p>
                        More than 5 years of experience building for the web and the mobile platforms
                        has led me to using a variety of tools and technologies that are
                        right for the job at hand. It means that I will use my skills
                        and the variety of tools in my arsenal to solve your problems.
                    </p>
                    <p>
                        And don't take my word for granted, head to the <a href="#work">portfolio</a> section
                        to see some of the work that I've done and am proud of.

                        You may still <a href="#contact">get in touch</a> for a specific problem you might have
                        or a custom solution your want buit.
                    </p>
                    <p>
                        Meanwhile here's a short list of direct services I can offer,
                        you might need one of them:
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- {% include partials/parallax-2.html %} --}}
<!-- <div class="parallax-container">
    <div class="parallax"><img src="/assets/images/parallax-2.jpg"></div>
 </div> -->
{{-- {% include work.html %} --}}
<section id="work" class="section no-mb blue white-text pt_30 pb_30">
    <div class="container">
        <div class="row">
            <div class="col m12">
               <h2 class="center">Latest Apps</h2>
                    <div class="divider orange lighten-1"></div>
               {{-- <h4 class="center orange-text text-lighten-5">Some Works I've done</h4> --}}
                    <div class="row">
                    {{-- {% for work in config('site.data.works.done %} --}}
                            {{-- {% capture modulo %}{{ forloop.index | modulo:3 }}{% endcapture %} --}}
                        <div class="col m4">
                            {{-- {% include partials/card.html %} --}}
                            <!-- Modal Structure -->

                                    <div class="card">
                                        <div class="card-image">
                                            <a class="modal-trigger" href="#modal-1">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/e3fd7e9f5a38dfb0674869ab55afbe86cb33d3fc/1cb06/assets/images/works/akolad-logo.jpg" class="responsive-img" width="100%">
                                            </a>
                                            <div id="modal-1" class="modal">
                                                <img src="https://d33wubrfki0l68.cloudfront.net/e3fd7e9f5a38dfb0674869ab55afbe86cb33d3fc/1cb06/assets/images/works/akolad-logo.jpg" class="responsive-img">
                                                <div class="modal-content">
                                                    <h4 class="center">Akolad</h4>
                                                    <p>description</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#!" class="modal-action modal-close waves-effect waves-light orange btn">OK</a>
                                                </div>
                                            </div>
                                            <span class="card-title">title</span>
                                        </div>
                                        <!--<div class="card-content"></div> -->
                                            <div class="card-action">
                                                <a style="font-size: .8em;" href="http://yeah" target="_blank"><i class="fa fa-globe"></i> yeah.com</a>
                                            </div>
                                    </div>
                        </div>
                    {{--     {% if modulo == '0' %}
                            </div><div class="row">
                                {% endif %}
                            {% endfor %} --}}
                        </div>
                </div>
            </div>
        </div>
</section>
@endsection
