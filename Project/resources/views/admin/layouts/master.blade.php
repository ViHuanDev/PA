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
  <link rel="stylesheet" href="template/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.css"/>
  <!-- end page stylesheets -->

  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link rel="stylesheet" href="template/vendor/bootstrap/dist/css/bootstrap.css"/>
  <link rel="stylesheet" href="template/vendor/pace/themes/blue/pace-theme-minimal.css"/>
  <link rel="stylesheet" href="template/vendor/font-awesome/css/font-awesome.css"/>
  <link rel="stylesheet" href="template/vendor/animate.css/animate.css"/>
  <link rel="stylesheet" href="template/styles/app.css" id="load_styles_before"/>
  <link rel="stylesheet" href="template/styles/app.skins.css"/>
  <link rel="stylesheet" href="template/styles/style.css"/>
  <!-- endbuild -->
</head>
<body>

  <div class="app">
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
      <div class="nav-profile dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
          <div class="user-image">
            <img src="template/images/avatar.jpg" class="avatar img-circle" alt="user" title="user"/>
          </div>
          <div class="user-info expanding-hidden">
            Betty Simmons
            <small class="bold">Administrator</small>
          </div>
        </a>
      </div>
      <!-- main navigation -->
      <nav>
        <ul class="nav">
          <!-- dashboard -->
          <li>
            <a href="index.html">
              <i class="material-icons">home</i>
              <span>Home</span>
            </a>
          </li>
          <!-- /dashboard -->
          <!-- apps -->
          <li>
            <a href="javascript:;">
              <span class="menu-caret">
                <i class="material-icons">arrow_drop_down</i>
              </span>
              <i class="material-icons">font_download</i>
              <span>Apps</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="app-calendar.html">
                  <span>Calendar</span>
                </a>
              </li>
              <li>
                <a href="app-media.html">
                  <span>Media</span>
                </a>
              </li>
              <li>
                <a href="app-messages.html">
                  <span>Messages</span>
                </a>
              </li>
              <li>
                <a href="app-social.html">
                  <span>Social</span>
                </a>
              </li>
              <li>
                <a href="app-people.html">
                  <span>People</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /apps -->
          <!-- ui -->
          <li>
            <a href="javascript:;">
              <span class="menu-caret">
                <i class="material-icons">arrow_drop_down</i>
              </span>
              <i class="material-icons">explore</i>
              <span>Components</span>
            </a>
            <ul class="sub-menu">
              <!-- cards -->
              <li>
                <a href="javascript:;">
                  <span class="menu-caret">
                    <i class="material-icons">arrow_drop_down</i></span>
                    <span>Cards</span>
                  </a>
                  <ul class="sub-menu">
                    <li>
                      <a href="card-basic.html"><span>Basic</span>
                      </a>
                    </li>
                    <li>
                      <a href="card-portlets.html"><span>Portlets</span>
                      </a>
                    </li>
                    <li>
                      <a href="card-draggable.html"><span>Draggable</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- /cards -->
                <!-- forms -->
                <li>
                  <a href="javascript:;">
                    <span class="menu-caret">
                      <i class="material-icons">arrow_drop_down</i></span>
                      <span>Forms</span>
                    </a>
                    <ul class="sub-menu">
                      <li>
                        <a href="form-basic.html">
                          <span>Basic</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-plugins.html">
                          <span>Plugins</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-editors.html">
                          <span>Editors</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-validation.html">
                          <span>Validation</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-masks.html">
                          <span>Masks</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-upload.html">
                          <span>Upload</span>
                        </a>
                      </li>
                      <li>
                        <a href="form-wizard.html">
                          <span>Wizard</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- /forms -->
                  <!-- tables -->
                  <li>
                    <a href="javascript:;">
                      <span class="menu-caret">
                        <i class="material-icons">arrow_drop_down</i></span>
                        <span>Tables</span>
                      </a>
                      <ul class="sub-menu">
                        <li>
                          <a href="table-basic.html">
                            <span>Basic</span>
                          </a>
                        </li>
                        <li>
                          <a href="table-responsive.html">
                            <span>Responsive</span>
                          </a>
                        </li>
                        <li>
                          <a href="table-datatables.html">
                            <span>Datatables</span>
                          </a>
                        </li>
                        <li>
                          <a href="table-xeditable.html">
                            <span>xeditable</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- /tables -->
                    <li>
                      <a href="ui-buttons.html">
                        <span>Buttons</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-social-buttons.html">
                        <span>Social buttons</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-general.html">
                        <span>General</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-navs.html">
                        <span>Navs</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-progressbars.html">
                        <span>Progress bars</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-pagination.html">
                        <span>Pagination</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-sliders.html">
                        <span>Sliders</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-notifications.html">
                        <span>Notifications</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-spinners.html">
                        <span>Spinners</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-alerts.html">
                        <span>Alerts</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-palette.html">
                        <span>Palette</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-material.html">
                        <span>Material icons</span>
                      </a>
                    </li>
                    <li>
                      <a href="ui-fontawesome.html">
                        <span>Fontawesome</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- /ui -->
                <!-- charts -->
                <li>
                  <a href="javascript:;">
                    <span class="menu-caret">
                      <i class="material-icons">arrow_drop_down</i>
                    </span>
                    <i class="material-icons">assessment</i>
                    <span>Charts</span>
                  </a>
                  <ul class="sub-menu">
                    <li>
                      <a href="chart-flot.html">
                        <span>Flot</span>
                      </a>
                    </li>
                    <li>
                      <a href="chart-easypie.html">
                        <span>Easypie</span>
                      </a>
                    </li>
                    <li>
                      <a href="chart-chartjs.html">
                        <span>ChartJS</span>
                      </a>
                    </li>
                    <li>
                      <a href="chart-rickshaw.html">
                        <span>Rickshaw</span>
                      </a>
                    </li>
                    <li>
                      <a href="chart-c3.html">
                        <span>C3js</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- /charts -->
              </ul>
              <ul class="nav">
                <!-- maps -->
                <li>
                  <a href="javascript:;">
                    <span class="menu-caret">
                      <i class="material-icons">arrow_drop_down</i>
                    </span>
                    <i class="material-icons">beenhere</i>
                    <span>Maps</span>
                  </a>
                  <ul class="sub-menu">
                    <li>
                      <a href="map-google.html">
                        <span>Google</span>
                      </a>
                    </li>
                    <li>
                      <a href="map-googlefull.html">
                        <span>Google fullscreen</span>
                      </a>
                    </li>
                    <li>
                      <a href="map-vector.html">
                        <span>Vector</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- /maps -->
                <!-- extras -->
                <li>
                  <a href="javascript:;">
                    <span class="menu-caret">
                      <i class="material-icons">arrow_drop_down</i>
                    </span>
                    <i class="material-icons">stars</i>
                    <span>Extras</span>
                  </a>
                  <ul class="sub-menu">
                    <!-- emails -->
                    <li>
                      <a href="javascript:;">
                        <span class="menu-caret">
                          <i class="material-icons">arrow_drop_down</i></span>
                          <span>Transactional Emails</span>
                        </a>
                        <ul class="sub-menu">
                          <li>
                            <a href="http://milestone.nyasha.me/latest/emails/action.html" target="_blank">
                              <span>Action</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://milestone.nyasha.me/latest/emails/alert.html" target="_blank">
                              <span>Alert</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://milestone.nyasha.me/latest/emails/billing.html" target="_blank">
                              <span>Billing</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://milestone.nyasha.me/latest/emails/progress.html" target="_blank">
                              <span>Progress</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://milestone.nyasha.me/latest/emails/survey.html" target="_blank">
                              <span>Survey</span>
                            </a>
                          </li>
                          <li>
                            <a href="http://milestone.nyasha.me/latest/emails/welcome.html" target="_blank">
                              <span>Welcome</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- /emails -->
                      <li>
                        <a href="extra-invoice.html">
                          <span>Invoice</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-timeline.html">
                          <span>Timeline</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-lists.html">
                          <span>Lists</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-signin.html">
                          <span>Signin</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-signup.html">
                          <span>Signup</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-forgot.html">
                          <span>Forgot</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-lockscreen.html">
                          <span>Lockscreen</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-404.html">
                          <span>404</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-500.html">
                          <span>500</span>
                        </a>
                      </li>
                      <li>
                        <a href="extra-pricing.html">
                          <span>Pricing tables</span>
                        </a>
                      </li>
                      <li>
                        <a href="blank.html">
                          <span>Starter page</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- /extras -->
                  <!-- menu levels -->
                  <li>
                    <a href="javascript:;">
                      <span class="menu-caret">
                        <i class="material-icons">arrow_drop_down</i>
                      </span>
                      <i class="material-icons">line_weight</i>
                      <span>Menu levels</span>
                    </a>
                    <ul class="sub-menu">
                      <li>
                        <a href="javascript:;">
                          <span class="menu-caret">
                            <i class="material-icons">arrow_drop_down</i>
                          </span>
                          <span>Menu Item 1.1</span>
                        </a>
                        <ul class="sub-menu">
                          <li>
                            <a href="javascript:;">
                              <span class="menu-caret">
                                <i class="material-icons">arrow_drop_down</i>
                              </span>
                              <span>Menu Item 2.1</span>
                            </a>
                            <ul class="sub-menu">
                              <li>
                                <a href="javascript:;">
                                  <span>Menu Item 3.1</span>
                                </a>
                              </li>
                              <li>
                                <a href="javascript:;">
                                  <span>Menu Item 3.1</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:;">
                              <span>Menu Item 2.2</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:;">
                          <span>Menu Item 1.2</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- menu levels -->
                  <li><hr/></li>
                  <!-- static -->
                  <li>
                    <a href="http://milestone.nyasha.me/latest/angular" target="_blank">
                      <i class="material-icons">navigation</i>
                      <span>Angular version</span>
                    </a>
                  </li>
                  <!-- /static -->
                  <!-- documentation -->
                  <li>
                    <a href="http://milestone.nyasha.me/latest/documentation" target="_blank">
                      <i class="material-icons">local_library</i>
                      <span>Documentation</span>
                    </a>
                  </li>
                  <!-- /documentation -->
                </ul>
              </nav>
              <!-- /main navigation -->
            </div>
            <!-- /sidebar panel -->
            <!-- content panel -->
            <div class="main-panel">
              <!-- top header -->
              <nav class="header navbar">
                <div class="header-inner">
                  <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
                    <!-- toggle offscreen menu -->
                    <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen">
                      <i class="material-icons">menu</i>
                    </a>
                    <!-- /toggle offscreen menu -->
                    <!-- logo -->
                    <a class="brand-logo hidden-xs-down">
                      <img src="template/images/logo_white.png" alt="logo"/>
                    </a>
                    <!-- /logo -->
                  </div>
                  <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="#">
                    <span>Dashboard</span>
                  </a>
                  <div class="navbar-search navbar-item">
              <!-- <form class="search-form">
                <i class="material-icons">search</i>
                <input class="form-control" type="text" placeholder="Search" />
              </form> -->
            </div>
            <div class="navbar-item nav navbar-nav">
              <div class="nav-item nav-link dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="material-icons">public</i>
                  <span>View website</span>
                </a>
              </div>
              <div class="nav-item nav-link dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="material-icons">notifications</i>
                  <span class="tag tag-danger">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right notifications">
                  <div class="dropdown-item">
                    <div class="notifications-wrapper">
                      <ul class="notifications-list">
                        <li>
                          <a href="javascript:;">
                            <div class="notification-icon">
                              <div class="circle-icon bg-success text-white">
                                <i class="material-icons">arrow_upward</i>
                              </div>
                            </div>
                            <div class="notification-message">
                              <b>Sean</b>
                              launched a new application
                              <span class="time">2 seconds ago</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <div class="notification-icon">
                              <div class="circle-icon bg-danger text-white">
                                <i class="material-icons">check</i>
                              </div>
                            </div>
                            <div class="notification-message">
                              <b>Removed calendar</b>
                              from app list
                              <span class="time">4 hours ago</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <span class="notification-icon">
                              <span class="circle-icon bg-info text-white">J</span>
                            </span>
                            <div class="notification-message">
                              <b>Jack Hunt</b>
                              has
                              <b>joined</b>
                              mailing list
                              <span class="time">9 days ago</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <span class="notification-icon">
                              <span class="circle-icon bg-primary text-white">C</span>
                            </span>
                            <div class="notification-message">
                              <b>Conan Johns</b>
                              created a new list
                              <span class="time">9 days ago</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="notification-footer">Notifications</div>
                  </div>
                </div>
              </div>
              <div class="nav-item nav-link dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="template/images/us.png">
                  <span>English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="javascript:;"><img src="template/images/us.png"><span>English</span></a>
                  <a class="dropdown-item" href="javascript:;"><img src="template/images/vn.png"><span>Tiếng Việt</span></a>
                </div>
              </div>
              <div class="nav-item nav-link dropdown nav-end">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="template/images/face1.jpg" class="image-avata" />
                  <span>Betty Simmons</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-end">
                  <a class="dropdown-item" href=""><i class="material-icons">person</i><span>Profile</span></a>
                  <a class="dropdown-item" href=""><i class="material-icons">lock_outline</i><span>Logout</span></a>
                </div>
              </div>
            </div>
          </nav>
          <!-- /top header -->

          <!-- main area -->
          <div class="main-content">
            <div class="content-view">
              <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-2">
                  <div class="card card-block">
                    <h5 class="m-b-0 v-align-middle text-overflow">
                      <span class="small pull-xs-right">
                        <i class="material-icons text-success" style="width: 16px;">arrow_drop_up</i>
                        <span style="line-height: 24px;">+76%</span>
                      </span>
                      <span>804</span>
                    </h5>
                    <div class="small text-overflow text-muted">
                      Memory usage
                    </div>
                    <div class="small text-overflow">
                      Updated:&nbsp;<span>05:35 AM</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                  <div class="card card-block">
                    <h5 class="m-b-0 v-align-middle text-overflow">
                      <span class="small pull-xs-right tag bg-success p-y-0 p-x-xs" style="line-height: 24px;">
                        <span >+20K</span>
                      </span>
                      <span>403</span>
                    </h5>
                    <div class="small text-overflow text-muted">
                      Disk usage
                    </div>
                    <div class="small text-overflow">
                      Updated:&nbsp;<span>12:42 PM</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                  <div class="card card-block">
                    <h5 class="m-b-0 v-align-middle text-overflow">
                      <span class="small pull-xs-right">
                        <i class="material-icons text-danger" style="width: 16px;">arrow_drop_down</i>
                        <span style="line-height: 24px;">+40%</span>
                      </span>
                      <span>976</span>
                    </h5>
                    <div class="small text-overflow text-muted">
                      GPU compute
                    </div>
                    <div class="small text-overflow">
                      Updated:&nbsp;<span>09:26 AM</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                  <div class="card card-block">
                    <h5 class="m-b-0 v-align-middle text-overflow">
                      <span class="small pull-xs-right">
                        <i class="material-icons text-success" style="width: 16px;">arrow_drop_up</i>
                        <span style="line-height: 24px;">+94%</span>
                      </span>
                      <span>457</span>
                    </h5>
                    <div class="small text-overflow text-muted">
                      CPU usage
                    </div>
                    <div class="small text-overflow">
                      Updated:&nbsp;<span>06:45 AM</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                  <div class="card card-block">
                    <h5 class="m-b-0 v-align-middle text-overflow">
                      <span class="small pull-xs-right">
                        <i class="material-icons text-danger" style="width: 16px;">arrow_drop_down</i>
                        <span style="line-height: 24px;">+04%</span>
                      </span>
                      <span>239</span>
                    </h5>
                    <div class="small text-overflow text-muted">
                      Ram usage
                    </div>
                    <div class="small text-overflow">
                      Updated:&nbsp;<span>11:23 PM</span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                  <div class="card card-block">
                    <h5 class="m-b-0 v-align-middle text-overflow">
                      <span class="small pull-xs-right">
                        <i class="material-icons text-success" style="width: 16px;">arrow_drop_up</i>
                        <span style="line-height: 24px;">+67%</span>
                      </span>
                      <span>392</span>
                    </h5>
                    <div class="small text-overflow text-muted">
                      RAM test
                    </div>
                    <div class="small text-overflow">
                      Updated:&nbsp;<span>08:52 AM</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-block">
                  <div class="m-b-1">
                    <div class="dropdown pull-right">
                      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <span>
                          Period
                        </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a class="dropdown-item" href="#">
                          Today
                        </a>
                        <a class="dropdown-item" href="#">
                          This week
                        </a>
                        <a class="dropdown-item" href="#">
                          This month
                        </a>
                        <a class="dropdown-item" href="#">
                          This year
                        </a>
                      </div>
                    </div>
                    <h6>
                      Activity
                    </h6>
                  </div>
                  <div class="dashboard-line chart" style="height:300px"></div>
                  <div class="row text-xs-center m-t-1">
                    <div class="col-sm-3 col-xs-6 p-t-1 p-b-1">
                      <h6 class="m-t-0 m-b-0">
                        $ 89.34
                      </h6>
                      <small class="text-muted bold block">
                        Daily Sales
                      </small>
                    </div>
                    <div class="col-sm-3 col-xs-6 p-t-1 p-b-1">
                      <h6 class="m-t-0 m-b-0">
                        $ 498.00
                      </h6>
                      <small class="text-muted bold block">
                        Weekly Sales
                      </small>
                    </div>
                    <div class="col-sm-3 col-xs-6 p-t-1 p-b-1">
                      <h6 class="m-t-0 m-b-0">
                        $ 34,903
                      </h6>
                      <small class="text-muted bold block">
                        Monthly Sales
                      </small>
                    </div>
                    <div class="col-sm-3 col-xs-6 p-t-1 p-b-1">
                      <h6 class="m-t-0 m-b-0">
                        $ 98,343.49
                      </h6>
                      <small class="text-muted bold block">
                        Yearly Sales
                      </small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="card card-block p-b-0">
                    <div class="piechart center-block m-b-1" style="width: 120px; height: 120px;">
                      <div class="tasks-pie" data-percent="86">
                        <div>
                          Tasks
                        </div>
                      </div>
                    </div>
                    <div class="text-xs-center m-b-2">
                      <p class="m-a-0">
                        <span class="task-percent">
                        </span>
                        % complete
                      </p>
                    </div>
                    <ul class="list-unstyled m-x-n m-b-0">
                      <li class="b-t p-a-1">
                        <span class="pull-right">
                          45,677
                        </span>
                        Accelaration
                      </li>
                      <li class="b-t p-a-1">
                        <span class="pull-right">
                          234,456
                        </span>
                        Braking
                      </li>
                      <li class="b-t p-a-1">
                        <span class="pull-right">
                          43,554
                        </span>
                        Cornering
                      </li>
                      <li class="b-t p-a-1">
                        <span class="pull-right">
                          223,545
                        </span>
                        Mixing
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="card card-block">
                    <div class="">
                      <div>Memory usage</div>
                      <h5 class="m-b-0">
                        <span>804</span> &nbsp;
                        <span class="small">
                          <i class="fa fa-level-up text-success"></i>
                          +76%
                        </span>
                      </h5>
                      <div class="small">
                        Updated:&nbsp;
                        <span>
                          05:35 AM
                        </span>
                      </div>
                    </div>
                    <hr class="m-x-n m-y-2" />
                    <div class="dashboard-bar chart" style="height:269px"></div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card card-block p-b-0">
                    <div class="text-overflow">
                      <span class="text-success">
                        10 minutes
                      </span>
                      to Space Headquaters
                    </div>
                    <small>1 Infinite Loop</small>
                    <div class="us-map" style="height: 292px"></div>
                    <div class="m-x-n">
                      <a href="javascript:;" class="b-t p-a-1 block l-h">
                        <i class="material-icons">arrow_forward</i>
                        <span>Navigate to this location</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <h6>Recent notifications</h6>
              <ul class="list-group m-b-1">
                <li class="list-group-item notification-bar-success">
                  <div href="#" class="notification-bar-icon">
                    <div><i></i></div>
                  </div>
                  <div class="notification-bar-details">
                    <a href="#" class="notification-bar-title">
                      Betty Simmons completed a task
                    </a>
                    <span class="text-muted">
                      14 hours ago
                    </span>
                  </div>
                </li>
              </ul>
              <ul class="list-group">
                <li class="list-group-item notification-bar-fail">
                  <div href="#" class="notification-bar-icon">
                    <div><i></i></div>
                  </div>
                  <div class="notification-bar-details">
                    <a href="#" class="notification-bar-title">
                      You have 8 projects still pending
                    </a>
                    <span class="text-muted">
                      26 mins ago
                    </span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- bottom footer -->
            <div class="content-footer">
              <nav class="footer-right">
                <ul class="nav">
                  <li>
                    <a href="javascript:;">Feedback</a>
                  </li>
                </ul>
              </nav>
              <nav class="footer-left">
                <ul class="nav">
                  <li>
                    <a href="javascript:;">
                      <span>Copyright</span>
                      &copy; 2016 Your App
                    </a>
                  </li>
                  <li class="hidden-md-down">
                    <a href="javascript:;">Privacy</a>
                  </li>
                  <li class="hidden-md-down">
                    <a href="javascript:;">Terms</a>
                  </li>
                  <li class="hidden-md-down">
                    <a href="javascript:;">help</a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- /bottom footer -->
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
      <script src="template/vendor/jquery/dist/jquery.js"></script>
      <script src="template/vendor/pace/pace.js"></script>
      <script src="template/vendor/tether/dist/js/tether.js"></script>
      <script src="template/vendor/bootstrap/dist/js/bootstrap.js"></script>
      <script src="template/vendor/fastclick/lib/fastclick.js"></script>
      <script src="template/scripts/constants.js"></script>
      <script src="template/scripts/main.js"></script>

      <!-- endbuild -->

      <!-- page scripts -->
      <script src="template/vendor/flot/jquery.flot.js"></script>
      <script src="template/vendor/flot/jquery.flot.resize.js"></script>
      <script src="template/vendor/flot/jquery.flot.stack.js"></script>
      <script src="template/vendor/flot-spline/js/jquery.flot.spline.js"></script>
      <script src="template/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="template/data/maps/jquery-jvectormap-us-aea.js"></script>
      <script src="template/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js"></script>
      <script src="template/vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js"></script>
      <script src="template/scripts/helpers/noty-defaults.js"></script>
      <!-- end page scripts -->

      <!-- initialize page scripts -->
      <script src="template/scripts/dashboard/dashboard.js"></script>
      <!-- end initialize page scripts -->

    </body>
    </html>
