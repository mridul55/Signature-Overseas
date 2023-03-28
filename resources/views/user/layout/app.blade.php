<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('backend/css/parsley.css')}}">
  <link rel="stylesheet" href="{{asset('backend/pluging/css/toastr.min.css')}}">
</head>
<body>
 
<div class="container">
  @yield('content')
</div>
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/pluging/js/toastr.min.js')}}"></script>\
<script src="{{ asset('backend/js/parsley.min.js') }}"></script>
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