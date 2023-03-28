<!-- jQuery -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>user Login - @yield('title')</title>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('backend/css/all.min.css') }}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{asset('backend/pluging/css/toastr.min.css')}}">
      <link rel="stylesheet" href="{{ asset('backend/css/adminlte.min.css') }}">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div style="position: absolute;top: 25%;left: 35%;z-index:100; display:none;" id="loader">
          <img src="{{asset('img/loder2.gif')}}" alt="loder" width="450" height="350">
        </div>
    @yield('content')
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/pluging/js/toastr.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/js/adminlte.min.js') }} "></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/js/demo.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
@stack('scripts')
</body>
</html>
