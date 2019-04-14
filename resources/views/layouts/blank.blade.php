<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-company">
    @yield('content')
</body>
    <script src="{{ asset('js/app.js') }}"></script>
    @if (session('alert'))
      <script>notif('{{session('type')}}', '{{session('title')}}', '{{session('message')}}', '{{session('icon') ?? "check"}}')</script>
    @endif
    @if ($errors->count())
      <script>notif('danger', 'Ada Kesalahan', '{{$errors->first()}}', 'exclamation')</script>
    @endif
</html>
