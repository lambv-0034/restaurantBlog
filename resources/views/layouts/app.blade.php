<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('images/icons/favicon.io') }}" rel="icon" type="img/png">
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Font-Awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
  <main>
    @yield('login')
  </main>
  <main>
    @yield('register')
  </main>

  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/popper.js') }}"></script>
  <script src="{{asset('select2/select2.min.js') }}"></script>
  <script src="{{asset('js/tilt.jquery.min.js') }}"></script>
  <script src="{{asset('js/main.js') }}"></script>
</body>
</html>
