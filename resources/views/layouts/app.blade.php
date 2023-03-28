<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
      
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('backend/css/dropify.min.css')}}">
        <link href="{{asset('backend/css/summernote-bs4.css')}}" rel="stylesheet" />
        <link href="{{asset('backend/css/toastr.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('backend/css/parsley.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/buttons.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/css/dataTables.bootstrap4.min.css')}}">
        
     <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('backend/css/all.min.css') }}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{ asset('backend/css/adminlte.min.css') }}">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        @include('_partials.admin.navbar')
      </nav>
      <!-- /.navbar -->

    <!-- Main Sidebar Container -->
      @include('_partials.admin.sidebar')
    <!-- Main Sidebar Container -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('content')
      </div>
      <!-- /.content-wrapper -->

      
    <!-- Main footer Container -->
      @include('_partials.admin.footer')
    <!-- Main footer Container -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @if(isset($modal))
        <!-- Remote source -->
        <div id="modal_remote" class="modal fade border-top-success rounded-top-0" tabindex="-1"  data-backdrop="static">
            <div class="modal-dialog modal-{{ $modal }}">
                <div class="modal-content">
                    <div class="modal-header bg-light border-grey-300">
                        <h5 class="modal-title">{{$title}}</h5>
                        <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                    </div>
                    <div id="modal-loader" style="display: none; text-align: center;"> <img src="{{ asset('img/loading.gif') }}"> </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>
        <!-- /remote source -->
        @endif
<!-- jQuery -->
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/page.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('backend/js/plugins/pace.min.js')}}"></script>
<script src="{{ asset('backend/js/parsley.min.js') }}"></script>
<script type="text/javascript" src="{{asset('backend/js/plugins/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backend/js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('backend/js/dropify.min.js')}}"></script>
<script src="{{asset('backend/js/summernote-bs4.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{asset('backend/pluging/js/toastr.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/js/adminlte.min.js') }} "></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/js/demo.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@stack('scripts')
<script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
</body>
</html>
