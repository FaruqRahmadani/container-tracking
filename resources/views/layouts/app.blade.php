<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
          <i class="fas fa-truck"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Tracking<sup>1.0</div>
        </a>
        <hr class="sidebar-divider my-0">
        {{-- main menu --}}
        @include('layouts.sidebar.admin')
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          @include('layouts.navbar')
          <div class="container-fluid">
            <h1 class="h3 mb-1 text-gray-800">
              @yield('page-title')
            </h1>
            <p class="mb-4">
              @yield('page-explaination')
            </p>
            @yield('content')
          </div>
        </div>
        @include('layouts.footer')
      </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <script src="{{ asset('js/app.js') }}"></script>
    @if (session('alert'))
      <script>notif('{{session('type')}}', '{{session('title')}}', '{{session('message')}}', '{{session('icon') ?? "check"}}')</script>
    @endif
    @if ($errors->count())
      <script>notif('danger', 'Ada Kesalahan', '{{$errors->first()}}', 'exclamation')</script>
    @endif
  </body>
  </html>
