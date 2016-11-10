<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TAP - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('layouts.cssscript')
    @yield('head')
  </head>
  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">
      @include('layouts.header')
      @include('layouts.kiri')
      @yield('content')
      @include('layouts.script')
      @stack('js')
    </div>
  </body>
</html>
