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
    <!-- end page stylesheets -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="{{ asset('template/vendor/bootstrap/dist/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('template/vendor/pace/themes/blue/pace-theme-minimal.css') }}"/>
    <link rel="stylesheet" href="{{ asset('template/vendor/font-awesome/css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ asset('template/vendor/animate.css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('template/styles/app.css') }}" id="load_styles_before"/>
    <link rel="stylesheet" href="{{ asset('template/template/tyles/app.skins.css') }}"/>
    <script src="{{asset('js/flugin/angular/angular.min.js')}}"></script> 
    <script src="{{ asset('js/controllers/admin/login.js') }}"></script>
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
    <div class="loading" id="loading"></div>
    <div class="app no-padding no-footer layout-static" ng-app="pa-login" ng-controller="login">
      <div class="session-panel">
        <div class="session">
          <div class="session-content">
            <div class="card card-block form-layout">
              <form role="form" id="validate" ng-submit="login(email,password)">
                <div class="text-xs-center m-b-3">
                  <img src="{{ asset('template/images/logo-icon.png') }}" height="80" alt="" class="m-b-1"/>
                  <h5>
                    Welcome back!
                  </h5>
                  <p class="">
                    Sign in with your app id to continue.
                  </p>
                  @verbatim
                  <p class="" style="color: red">
                    {{error}}
                  </p>
                  @endverbatim
                </div>
                <fieldset class="form-group">
                  <label for="username">
                    Enter your email
                  </label>
                  <input ng-model='email' type="email" class="form-control form-control-lg" name="email" placeholder="email" required/>
                </fieldset>
                <fieldset class="form-group">
                  <label for="password">
                    Enter your password
                  </label>
                  <input ng-model='password' type="password" class="form-control form-control-lg" id="password" placeholder="********" required name="password" />
                </fieldset>
                <label class="custom-control custom-checkbox m-b-1">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Stay logged in</span>
                </label>
                <button class="btn btn-primary btn-block btn-lg" type="submit">
                  Login
                </button>
              </form>
              <a href="extra-forgot.html" class="">
                Forgot password?
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
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
    <script src="{{ asset('template/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <!-- end page scripts -->

    <!-- initialize page scripts -->
    <script type="text/javascript">
      $('#validate').validate({
        rules:({
          email:({
            required:true,
            email:true,
          }),
          password:({
            required:true
          })
        }),
        messages:({
          email:({
            email:'Sai định dạng email',
            required:'Email không được để trông'
          }),
          password:({
            required:"Mật khẩu không được để trống",
          })
        })
      });
    </script>
    <!-- end initialize page scripts -->
    
  </body>
</html>
