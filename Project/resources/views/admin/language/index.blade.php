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
    <link rel="stylesheet" href="{{ asset('template/styles/app.skins.css') }}"/>
    <script src="{{asset('js/flugin/angular/angular.min.js')}}"></script> 
    <script src="{{ asset('js/controllers/admin/language.js') }}"></script>
    <!-- endbuild -->
    <style type="text/css">
    #loading{
      background:center no-repeat #fff;
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
    <div class="app no-padding no-footer layout-static" ng-app="pa-language" ng-controller="language">
      <div class="session-panel">
        <div class="session">
          <div class="session-content">
            <div class="card card-block form-layout">
              <form role="form" id="validate" ng-submit="login(email,password)">
                <div class="text-xs-center m-b-3">
                  <img src="{{asset('template/images/logo-icon.png')}}" height="80" alt="" class="m-b-1"/>
                  @verbatim 
                  <h5>
                    Welcome {{user.fullname}}
                  </h5>
                  @endverbatim
                  <p class="">
                    <span>chọn ngôn ngữ: </span>  
                  </p>
                  <div class="col-md-12">
                    <span ng-repeat="language in listLanguage">
                      <img src="{{ asset('img/flags/vietnam.png') }}" class="img-responsive">
                    </span>
                  </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg" type="submit">
                  Next
                </button>
              </form>
               
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
  </body>
</html>
