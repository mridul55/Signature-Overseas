<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from inspirothemes.com/Signature Overseas/menu-overlay.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 14:29:53 GMT -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    <meta name="author" content="INSPIRO" />    
	<meta name="description" content="Themeforest Template Signature Overseas, html template">
    <!--<link rel="icon" type="image/png" href="images/favicon.png">-->   
    <link rel="icon" type="image/png" href="images/favicon.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
   <title>SIGNATURE OVERSEAS</title>
    <!-- Stylesheets & Fonts -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="">
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Topbar -->
       @include('frontend.body.topbar')
        <!-- end: Topbar -->
        <!-- Header -->
        @include('frontend.body.header')
        <!-- end: Header -->
        
         @yield('main')

        <!-- Footer -->
        @include('frontend.body.footer')
        <!-- end: Footer -->
    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
</body>


<!-- Mirrored from inspirothemes.com/Signature Overseas/menu-overlay.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 14:29:53 GMT -->
</html>