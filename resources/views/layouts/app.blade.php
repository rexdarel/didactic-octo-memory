<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <!-- Vendor CSS -->
    <link href="{{ elixir('assets/vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ elixir('assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ elixir('assets/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet">
    <!-- <link href="assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">  -->
    <link href="{{ elixir('assets/vendors/bower_components/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet">
        <link href="{{ elixir('assets/vendors/farbtastic/farbtastic.css') }}" rel="stylesheet">
        <link href="{{ elixir('assets/vendors/bower_components/chosen/chosen.css') }}" rel="stylesheet">
        <link href="{{ elixir('assets/vendors/summernote/dist/summernote.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ elixir('assets/css/app_1.min.css') }}" rel="stylesheet">
    <link href="{{ elixir('assets/css/app_2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    @yield('css')
</head>
<body>
    @yield('content')
<!-- Javascript -->
<!-- Javascript Libraries -->
<script src="{{ elixir('assets/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ elixir('assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script src="{{ elixir('assets/vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
<!-- <script src="assets/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> -->
<script src="https://www.gstatic.com/firebasejs/3.6.4/firebase.js"></script>
<script type="text/javascript" src="{{ elixir('assets/js/chat.js') }}"></script>
<script src="{{ elixir('assets/vendors/bootstrap-growl/bootstrap-growl.min.js') }}"></script>

<script src="{{ elixir('assets/js/app.min.js') }}"></script>
@yield('js')

</body>



<!-- <script type="text/javascript" src="assets/js/post.js"></script> -->

</html>
