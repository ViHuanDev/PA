<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content=""/>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
  <meta name="msapplication-tap-highlight" content="no">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Milestone">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Milestone">

  <meta name="theme-color" content="#4C7FF0">

  <title>Milestone - Bootstrap 4 Dashboard Template</title>

  <!-- page stylesheets -->
  <link rel="stylesheet" href="/template/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.css"/>
  <!-- end page stylesheets -->

  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link rel="stylesheet" href="{{ asset('template/vendor/bootstrap/dist/css/bootstrap.css')}}"/>
  <link rel="stylesheet" href="{{ asset('template/vendor/pace/themes/blue/pace-theme-minimal.css')}}"/>
  <link rel="stylesheet" href="{{ asset('template/vendor/pace/themes/blue/pace-theme-minimal.css')}}"/>
  <link rel="stylesheet" href="{{ asset('template/vendor/font-awesome/css/font-awesome.css')}}"/>
  <link rel="stylesheet" href="{{ asset('template/vendor/animate.css/animate.css')}}"/>
  <link rel="stylesheet" href="{{ asset('template/styles/app.css')}}"/>
  <link rel="stylesheet" href="{{ asset('template/styles/app.skins.css')}}"/>
  <link rel="stylesheet" href="{{ asset('template/styles/style.css')}}"/>
  <script src="{{ asset('js/flugin/angular/angular.min.js')}}"></script>
  <script src="{{ asset('js/controllers/admin/header.js') }}"></script> 
  <script src="{{ asset('js/controllers/admin/app.js') }}"></script>


  <!-- endbuild -->
  <style type="text/css">
  #loading{
    background: url({{ asset('img/loading.gif') }}) center no-repeat #fff;
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999
  }
</style>
</head>
<body>

  <div class="app" ng-app="PA">
    <div class="loading" id="loading"></div>
    <!--sidebar panel-->
    <div class="off-canvas-overlay" data-toggle="sidebar"></div>
    <div class="sidebar-panel">
      <div class="brand">
        <!-- toggle offscreen menu -->
        <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
          <i class="material-icons">menu</i>
        </a>
        <!-- /toggle offscreen menu -->
        <!-- logo -->
        <a class="brand-logo">
          <img class="expanding-hidden" src="template/images/logo.png" alt=""/>
        </a>
        <!-- /logo -->
      </div>
      @verbatim
      <div class="nav-profile dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
          <div class="user-image">
            <img src="template/images/avatar.jpg" class="avatar img-circle" alt="user" title="user"/>
          </div>
          <div class="user-info expanding-hidden">
            {{user.fullname}}
            <small class="bold">Administrator</small>
          </div>
        </a>
      </div>
      @endverbatim
            @include('admin.layouts.menu')
          </div>
        <div class="main-panel">
              <!-- top header -->
          @include('admin.layouts.header')
          <!-- main area -->
          <div class="main-content">
              @yield('content')
          </div>
          <!-- /main area -->
        </div>
        <!-- /content panel -->


      </div>

      <script type="text/javascript">
        window.paceOptions = {
          document: true,
          eventLag: true,
          restartOnPushState: true,
          restartOnRequestAfter: true,
          ajax: {
            trackMethods: [ 'POST','GET']
          }
        };
      </script>

      <!-- build:js({.tmp,app}) scripts/app.min.js -->
      <script src="{{ asset('template/vendor/jquery/dist/jquery.js') }}"></script>
      <script src="{{ asset('template/vendor/pace/pace.js') }}"></script>
      <script src="{{ asset('template/vendor/tether/dist/js/tether.js') }}"></script>
      <script src="{{ asset('template/vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
      <script src="{{ asset('template/vendor/fastclick/lib/fastclick.js') }}"></script>
      <script src="{{ asset('template/scripts/constants.js') }}"></script>
      <script src="{{ asset('template/scripts/main.js') }}"></script>

      <!-- endbuild -->

      <!-- page scripts -->
      <script src="{{ asset('template/vendor/flot/jquery.flot.js') }}"></script>
      <script src="{{ asset('template/vendor/flot/jquery.flot.resize.js') }}"></script>
      <script src="{{ asset('template/vendor/flot/jquery.flot.stack.js') }}"></script>
      <script src="{{ asset('template/vendor/flot-spline/js/jquery.flot.spline.js') }}"></script>
      <script src="{{ asset('template/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
      <script src="{{ asset('template/data/maps/jquery-jvectormap-us-aea.js') }}"></script>
      <script src="{{ asset('template/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js') }}"></script>
      <script src="{{ asset('template/vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js') }}"></script>
      <script src="{{ asset('template/scripts/helpers/noty-defaults.js') }}"></script>
      <!-- end page scripts -->

      <!-- initialize page scripts -->
      <script src="{{ asset('template/scripts/dashboard/dashboard.js') }}"></script>
      <!-- end initialize page scripts -->

    </body>
    </html>
