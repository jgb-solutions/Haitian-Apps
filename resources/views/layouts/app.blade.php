<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('site.title') }} - {{ config('app.name') }}</title>
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
    <link href="{{ asset('css/summernote-bs4.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')

    @yield('content')

    @include('partials.footer')

<!--JavaScript at end of body for optimized loading-->
    <!-- <script src="/assets/dist/js/jquery.min.js"></script> -->
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
     {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
     @include('partials.scripts')
</body>
</html>