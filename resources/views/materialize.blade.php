<!DOCTYPE html>
<html>
	<head>
		<title>{{ config('site.title') }} - {{ config('site.name') }}</title>
		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="194x194" href="/assets/images/favicons/favicon-194x194.png">
		<link rel="icon" type="image/png" sizes="192x192" href="/assets/images/favicons/android-chrome-192x192.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png">
		<link rel="manifest" href="/assets/images/favicons/manifest.json">
		<link rel="mask-icon" href="/assets/images/favicons/safari-pinned-tab.svg" color="#ff9800">
		<link rel="shortcut icon" href="/assets/images/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#ff9800">
		<meta name="msapplication-TileImage" content="/assets/images/favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="/assets/images/favicons/browserconfig.xml">
		<meta name="theme-color" content="#ff9800">
		<!-- /Favicons -->

		<!-- Search Engine Optimizations -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="{{config('site.description')}}">
		<meta name="author" content="Jean Gérard Bousiquot">
		<meta name="keywords" content="Web,Mobile,HTML,CSS,XML,JavaScript,PHP,MySQL,Laravel,Vue,Angular,React,Ionic,WordPress,Linux,Ubuntu,Sublime Text, Visual Studio Code,Java,Node,Express,Nginx,Jekyll">

		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="twitter:site" content="@{{config('site.twitter}}" />
		<meta name="twitter:creator" content="@{{config('site.twitter}}"/>

		<meta property="fb:admins" content="jeangerarddev"/>
		<meta property="fb:app_id" content="112699365802983"/>
		<meta property="og:locale" content="en_EN"/>
		<meta property="og:type" content="website"/>
		<meta property="og:site_name" content="{{config('site.name')}}"/>
		<link rel="canonical" href="{{ config('site.url') }}"/>

		<!-- Open Graph -->
		<meta property="og:image" content="/assets/images/{{config('site.image')}}">
		<meta property="og:image:width" content="1433">
		<meta property="og:image:height" content="750">
		<meta property="og:title" content="{{ config('site.title') }} - {{ config('site.name')}}">
		<meta property="og:description" content="{{config('site.description')}}">
		<meta property="og:url" content="{{config('site.url')}}">
		<!-- Open Graph -->
		<!-- / SEO -->


		<!-- Font Awesome -->
		<link rel="stylesheet" type="text/css" href="/fonts/vendor/font-awesome/css/font-awesome.min.css">
		<!--Import Google Icon Font-->
		<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

		<!--Import materialize.css-->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body>


{{-- {% include navigation.html %} --}}

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
				<h2>App Categories</h2>
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
			<div class="col m4">
				<h4><i class="material-icons">public</i> Simple Website</h4>
				<p>
					Your are looking for a simple website with a couple of static pages,
					a nice looking landing page, a magazine or even a blog.
				</p>
			</div>
			<div class="col m4">
				<h4><i class="material-icons">desktop_mac</i> Web App</h4>
				<p>
					You need a web platform, want to manage users, sell products,
					services with real time analytics or a backend to support your mobile application.
				</p>
			</div>
			<div class="col m4">
				<h4><i class="material-icons">smartphone</i> Mobile App</h4>
				<p>
					You want a mobile application that will consume data from an API,
					do calculations, allow your web platform's users to reach the service in real time.
					Or it may be as simple as a presentation application with a couple of screens.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col m4">
				<h4><i class="material-icons">storage</i> Web Hosting</h4>
				<p>
					Every website or web application needs a home on the internet so
					they can be accessed all over the world. I happen to be good at that too.
					Ranging from simple shared hosting to a customized VPS (Virtual Private Server)
					to a dedicated server, or configuring a CDN (Content Delivery Network) for even
					faster loading time, I can help you get the best for your budget.
				</p>
			</div>
			<div class="col m4">
				<h4><i class="material-icons">domain</i> Domain Name</h4>
				<p>
					Every successful online endeavor starts with a good name and a sweet web address.
					The latter is called a domain name and is what people will type in their browsers'
					address bar to access your business online. I can help with finding and registering
					a great domain name.
				</p>
			</div>
			<div class="col m4">
				<h4><i class="material-icons">mic_none</i> Online Radio</h4>
				<p>
					Whether you are in the media, a church, an organization or even a DJ and want
					to broadcast live audio online to reach more people/fans/users,
					I have experience with that. I can even get you international number(s) for
					people outside the country to call and listen. And much more.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col m4">
				<h4><i class="material-icons">tv</i> Online TV</h4>
				<p>
					It's {{ date('Y') }} and people spend more time on their computer
					and mobile devices more than ever. So if you are a TV, doing multimedia events,
					an organization... and want to reach more users, broadcasting images and/or videos
					online might be a good option. Depending on your budget and the size of the audience
					you want to target, I might have something for you.
				</p>
			</div>
			<div class="col m4">
				<h4><i class="material-icons">web</i> WP Theme Dev</h4>
				<p>
					You already have a design and want to code it or that static site
					is already online but you can't update it regularly because you don't
					know anything about HTML or don't want to get your hands dirty each time
					you want to make an update. It's frustrating. Isn't it? It's okay.
					Let me translate that design or static site to a WordPress theme for you
					so you can use WordPress, the most popular Content Management System in the world,
					to do it yourself. I'll even provide educational assistance and materials to help you
					get on speed with the platfom.
				</p>
			</div>
			<div class="col m4">
				<h4><i class="material-icons">dashboard</i> Marketing & SEO</h4>
				<p>
					Having a presence online is great. Good job, you've made it! But wait.
					You have no visitors, or not the amount you'd expected?
					You should know by now that people won't know about your website/app if
					you don't market it. And it has to be optimized for search engine such as Google
					so people can find it when they search for something related to your business.
					Luckily for you I've been managing websites that have thousands of visitors a day.
					And I can help you. I'll leverage social media and other search engine optimization
					techniques to get people to know about your business.
				</p>
			</div>
		</div>
	</div>
</section>
{{-- {% include partials/parallax-2.html %} --}}
<!-- <div class="parallax-container">
	<div class="parallax"><img src="/assets/images/parallax-2.jpg"></div>
 </div> -->
{{-- {% include work.html %} --}}
<section id="work" class="section no-mb orange pt_30 pb_30">
    <div class="container">
        <div class="row">
            <div class="col m12">
               <h2 class="center">My Portfolio</h2>
					<div class="divider orange lighten-1"></div>
               <h4 class="center orange-text text-lighten-5">Some Works I've done</h4>
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
						<div class="divider orange lighten-1"></div>
						<h4 class="center orange-text text-lighten-5">What I'm working on</h4>
						<div class="row">
							{{-- {% for work in config('site.data.works.current %}
                    		{% capture modulo %}{{ forloop.index | modulo:3 }}{% endcapture %}
               			<div class="col m4">
                     		{% include partials/card.html %}
                  		</div>
                        {% if modulo == '0' %}
                  			</div><div class="row">
								{% endif %}
							{% endfor %} --}}
						</div>
                </div>
            </div>
        </div>
</section>

{{-- {% include contact.html %} --}}
<section id="contact" class="section no-mb pt_30 pb_30">
    <div class="container">
        <div class="row">
            <div class="col m8 offset-m2">
                <h2 class="center">Let's Get In Touch</h2>
                <p class="center grey-text">
                    Wanna hire me for your next project or just say hi? <br>
                    <i class="fa fa-envelope"></i> Drop me a line at
                    <a href="mailto:hello@jgbneatdesign.com">hello@jgbneatdesign.com</a> <br>
                    Call me directly at <a href="tel:+50941830318">(509) 4183 0318</a> <br>
                    Or just use the form below.<br><br>
                </p>
                <div class="row">
                    <form class="col s12" action="/thank-you.html" netlify name="Contact_Me">
                        <div class="input-field">
                            <input name="full_name" placeholder="Enter Your Full Name" id="full_name" type="text" class="validate" required>
                            <label for="full_name">Full Name</label>
                            <span class="helper-text" data-error="Your full name is required"></span>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="email" placeholder="Enter Your E-mail" id="email" type="email" class="validate" required="">
                                <label for="email">E-mail</label>
                                <span class="helper-text" data-error="Your entered a wrong e-mail."></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="subject" placeholder="Enter The Subject of Your Message" id="subject" type="text" class="validate" required>
                                <label for="subject">Subject</label>
                                <span class="helper-text" data-error="The subject is required."></span>
                            </div>
                        </div>
                        <div class="input-field">
                            <textarea name="message" placeholder="Enter Your Message" id="message" class="materialize-textarea" required></textarea>
                            <label for="message">Message</label>
                            <span class="helper-text" data-error="Your message is required."></span>
                        </div>
                        <div class="input-field">
                            <button class="btn orange btn-large waves-effect waves-light" type="submit">
                                <i class="material-icons right">send</i> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include ('partials.footer')