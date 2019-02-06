<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin Grasud</title>
  <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
  <meta name="author" content="Pike Web Development - https://www.pikephp.com">
  <meta name="csrf-token" content="{{ csrf_token() }}">


  {{-- <!-- <link rel="stylesheet" href="{{ asset('adminlte/vendor/bootstrap/css/bootstrap.min.css') }}"> --> --}}
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('Admin/assets/images/favicon.ico') }}">

  <!-- Bootstrap CSS -->
  <link href="{{ asset('Admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Font Awesome CSS -->
  <link href="{{ asset('Admin/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Custom CSS -->
  <link href="{{ asset('Admin/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

  <!-- BEGIN CSS for this page -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
  <!-- END CSS for this page -->
  <link href="{{ asset('Admin/assets/plugins/datetimepicker/css/daterangepicker.css') }}" rel="stylesheet" /> 
  <!-- Switchery css -->
  <link href="{{ asset('Admin/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
  <!-- Boostrap datepicker -->
  <link href="{{ asset('Admin/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />
  <!-- Bootstrap DatePicker css -->
  <link href="{{ asset('Admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
  <link href="{{ asset('Admin/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
  {{--  --}}

<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
    <style type="text/css">
        a.fancybox img {
            border: none;
            box-shadow: 0 1px 7px rgba(0,0,0,0.6);
              -o-transform: scale(1,1);
              -ms-transform: scale(1,1); 
              -moz-transform: scale(1,1); 
              -webkit-transform: scale(1,1); 
            transform: scale(1,1); 
              -o-transition: all 0.2s ease-in-out; 
              -ms-transition: all 0.2s ease-in-out; 
              -moz-transition: all 0.2s ease-in-out; 
              -webkit-transition: all 0.2s ease-in-out;  
            transition: all 0.2s ease-in-out;
        } 
        a.fancybox:hover img {
            position: relative; 
            z-index: 999; 
              -o-transform: scale(1.03,1.03); 
              -ms-transform: scale(1.03,1.03); 
              -moz-transform: scale(1.03,1.03); 
              -webkit-transform: scale(1.03,1.03); 
            transform: scale(1.03,1.03);
        }
    </style>

    <style type="text/css">
      .select2 span { display:block }
    </style>
<!-- BEGIN CSS for this page -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" /> --}}
    <!-- END CSS for this page -->

  <!-- BEGIN CSS for this page -->
    <link href="{{ asset('Admin/assets/plugins/lightbox/ekko-lightbox.css') }}" rel="stylesheet" /> 
    <!-- END CSS for this page -->

    <!-- BEGIN CSS for this page -->
    <link href="{{ asset('Admin/assets/plugins/bootstrap-magnify/bootstrap-magnify.min.css') }}" rel="stylesheet" /> 
    <!-- END CSS for this page -->
</head>

<body class="adminbody">

  <div id="main">

   <!-- top bar navigation -->
   <div class="headerbar">

    <!-- LOGO -->
    <div class="headerbar-left">
     <a href="{{ route('home') }}" class="logo"><img alt="Logo" src="{{ asset('Admin/assets/images/lg.png') }}" /> <span>Admin</span></a>
   </div>

   <nav class="navbar-custom">

    <ul class="list-inline float-right mb-0">

      <li class="list-inline-item dropdown notif">
        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
          <!-- item-->
          <div class="dropdown-item noti-title">

          </div>

          <!-- item-->
          <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">                                    

          </a>

          <!-- item-->
          <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">                                    

          </a>                               

          <!-- All-->
          <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all">

          </a>

        </div>
      </li>

      <li class="list-inline-item dropdown notif">
        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
          {{-- <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span> --}}
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
          <!-- item-->
          <div class="dropdown-item noti-title">
            {{-- <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5> --}}
          </div>

          <!-- item-->
          <a href="#" class="dropdown-item notify-item">                                    
                       {{--  <p class="notify-details ml-0">
                            <b>Jokn Doe</b>
                            <span>New message received</span>
                            <small class="text-muted">2 minutes ago</small>
                          </p> --}}
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">                                    
                       {{--  <p class="notify-details ml-0">
                            <b>Michael Jackson</b>
                            <span>New message received</span>
                            <small class="text-muted">15 minutes ago</small>
                          </p> --}}
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">                                    
                       {{--  <p class="notify-details ml-0">
                            <b>Foxy Johnes</b>
                            <span>New message received</span>
                            <small class="text-muted">Yesterday, 13:30</small>
                          </p> --}}
                        </a>

                        <!-- All-->
                        <a href="#" class="dropdown-item notify-item notify-all">
                         {{--    View All --}}
                       </a>

                     </div>
                   </li>

                   <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                      <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
                      <!-- item-->
                      <div class="dropdown-item noti-title">
                       {{--  <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5> --}}
                     </div>

                     <!-- item-->
                     <a href="#" class="dropdown-item notify-item">
                      <div class="notify-icon bg-faded">
                       {{--  <img src="{{ asset('Admin/assets/images/avatars/avatar2.png') }}" alt="img" class="rounded-circle img-fluid"> --}}
                     </div>
                        {{-- <p class="notify-details">
                            <b>John Doe</b>
                            <span>User registration</span>
                            <small class="text-muted">3 minutes ago</small>
                          </p> --}}
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                          <div class="notify-icon bg-faded">
                           {{--  <img src="{{ asset('Admin/assets/images/avatars/avatar3.png') }}" alt="img" class="rounded-circle img-fluid"> --}}
                         </div>
                      {{--   <p class="notify-details">
                            <b>Michael Cox</b>
                            <span>Task 2 completed</span>
                            <small class="text-muted">12 minutes ago</small>
                          </p> --}}
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                          <div class="notify-icon bg-faded">
                           {{--  <img src="{{ asset('Admin/assets/images/avatars/avatar4.png') }}" alt="img" class="rounded-circle img-fluid"> --}}
                     {{--    </div>
                        <p class="notify-details">
                            <b>Michelle Dolores</b>
                            <span>New job completed</span>
                            <small class="text-muted">35 minutes ago</small>
                          </p> --}}
                        </a>

                        <!-- All-->
                        <a href="#" class="dropdown-item notify-item notify-all">
                          {{-- View All Allerts --}}
                        </a>

                      </div>
                    </li>

                    <li class="list-inline-item dropdown notif">
                      <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fa fa-user"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                          <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                        </div>

                        <!-- item-->
                        <a href="{{ url ('profile') }}" class="dropdown-item notify-item">
                          <i class="fa fa-user"></i> <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item" onclick="logout()">
                          <i class="fa fa-power-off"></i> <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>

                        <!-- item-->
                        <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                         {{--    <i class="fa fa-external-link"></i> <span>Pike Admin</span> --}}
                       </a>
                     </div>
                   </li>

                 </ul>

                 <ul class="list-inline menu-left mb-0">
                  <li class="float-left">
                    <button class="button-menu-mobile open-left">
                      <i class="fa fa-fw fa-bars"></i>
                    </button>
                  </li>                        
                </ul>

              </nav>

            </div>
            <!-- End Navigation -->


            <!-- Left Sidebar -->
            <div class="left main-sidebar">

              <div class="sidebar-inner leftscroll">

               <div id="sidebar-menu">

                 <ul>
                  {{-- home --}}
                  <li {{ Request::is('home') ? 'class=active' : '' }}>
                    <a href="{{ route('home') }}" class="active"> <i class="fa fa-fw fa-home"></i><span> Dashboard </span> </a>
                  </li>
                  {{-- user --}}
                  <li {{ Request::is('users') ? 'class=active' : '' }}>
                    <a href="#userdropdown" aria-expanded="false" data-toggle="collapse"><i class="fa fa-fw fa-address-book"></i> <span> Data Users </span> <span class="menu-arrow"></span></a>
                    <ul id="userdropdown" class="collapse list-unstyled">
                      <li><a href="{{ url ('users') }}"><i class="fa fa-fw fa-user"></i>Users</a></li>
                      <li><a href="{{ url ('biodatas') }}"><i class="fa fa-fw fa-user"></i>Biodata</a></li>
                    </ul>
                  </li>
                  {{-- warga --}}
                  {{-- koordinator --}}
                  {{-- petugas --}}
                  <li {{ Request::is('members') ? 'class=active' : '' }}>
                   <a href="#memberdropdown" aria-expanded="false" data-toggle="collapse"><i class="fa fa-fw fa-users"></i> <span> Data Warga </span> <span class="menu-arrow"></span></a>
                   <ul id="memberdropdown" class="collapse list-unstyled">
                    <li><a href="{{ url ('members') }}"><i class="fa fa-fw fa-user"></i>Warga</a></li>
                    {{-- <li><a href="{{ url ('coordinators') }}"><i class="fa fa-fw fa-user"></i>Koordinator</a></li> --}}
                    <li><a href="{{ url ('officers') }}"><i class="fa fa-fw fa-user"></i>Petugas</a></li>
                  </ul>
                </li>
                {{-- kegiatan --}}
                <li {{ Request::is('events') ? 'class=active' : '' }}>
                  <a href="{{ url ('events') }}"> <i class="fa fa-fw fa-calendar"></i><span> Kegiatan </span> </a>
                </li>
                {{-- Iuran --}}
                {{-- kategori --}}
                {{-- pengeluaran --}}
                <li {{ Request::is('groups') ? 'class=active' : '' }}>
                 <a href="#iurandropdown" aria-expanded="false" data-toggle="collapse"><i class="fa fa-fw fa-money"></i> <span> Data Iuran </span> <span class="menu-arrow"></span></a>
                 <ul id="iurandropdown" class="collapse list-unstyled">
                   <li><a href="{{ url ('categories') }}"><i class="fa fa-fw fa-bookmark"></i>Kategori</a></li>
                   <li><a href="{{ url ('countributions') }}"><i class="fa fa-fw fa-bookmark"></i>Iuran</a></li>
                   <li><a href="{{ url ('proofs') }}"><i class="fa fa-fw fa-bookmark"></i>Data Bukti</a></li>
                   <li><a href="{{ url ('spendings') }}"><i class="fa fa-fw fa-bookmark"></i>Pengeluaran</a></li>
                 </ul>
               </li>
               {{-- keluhan --}}
               <li {{ Request::is('complaints') ? 'class=active' : '' }}>
                <a href="{{ url ('complaints') }}"> <i class="fa fa-fw fa-comment"></i><span> Keluhan </span> </a>
              </li>
              {{-- kontak --}}
              <li {{ Request::is('contacts') ? 'class=active' : '' }}>
                <a href="{{ url ('contacts') }}"> <i class="fa fa-fw fa-phone"></i><span> Kontak </span> </a>
              </li>
        {{-- <li class="submenu">
            <a href="#"><i class="fa fa-fw fa-tv"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
                <li><a href="ui-alerts.html">Alerts</a></li>
                <li><a href="ui-buttons.html">Buttons</a></li>
                <li><a href="ui-cards.html">Cards</a></li>
                <li><a href="ui-carousel.html">Carousel</a></li>
                <li><a href="ui-collapse.html">Collapse</a></li>
                <li><a href="ui-icons.html">Icons</a></li>
                <li><a href="ui-modals.html">Modals</a></li>
                <li><a href="ui-tooltips.html">Tooltips and Popovers</a></li>
            </ul>
          </li> --}}

        {{-- <li class="submenu">
            <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
                <li><a href="forms-general.html">General Elements</a></li>
                <li><a href="forms-select2.html">Select2</a></li>
                <li><a href="forms-validation.html">Form Validation</a></li>
                <li><a href="forms-text-editor.html">Text Editors</a></li>
                <li><a href="forms-upload.html">Multiple File Upload</a></li>
                <li><a href="forms-datetime-picker.html">Date and Time Picker</a></li>
                <li><a href="forms-color-picker.html">Color Picker</a></li>
            </ul>
          </li> --}}

        {{-- <li class="submenu">
          <a href="#"><i class="fa fa-fw fa-th"></i> <span> Plugins </span> <span class="menu-arrow"></span></a>
          <ul class="list-unstyled">
            <li><a href="star-rating.html">Star Rating</a></li>
            <li><a href="range-sliders.html">Range Sliders</a></li>
            <li><a href="tree-view.html">Tree View</a></li>
            <li><a href="sweetalert.html">SweetAlert</a></li>
            <li><a href="calendar.html">Calendar</a></li>
            <li><a href="gmaps.html">GMaps</a></li>
            <li><a href="counter-up.html">Counter-Up</a></li>
        </ul>
      </li> --}}

    {{-- <li class="submenu">
        <a href="#"><i class="fa fa-fw fa-image"></i> <span> Images and Galleries </span> <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">
            <li><a href="media-fancybox.html"><span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a></li>                
            <li><a href="media-masonry.html">Masonry</a></li>
            <li><a href="media-lightbox.html">Lightbox</a></li>
            <li><a href="media-owl-carousel.html">Owl Carousel</a></li>
            <li><a href="media-image-magnifier.html">Image Magnifier</a></li>

        </ul>
      </li> --}}

    {{-- <li class="submenu">
        <a href="#"><span class="label radius-circle bg-danger float-right">20</span><i class="fa fa-fw fa-copy"></i><span> Example Pages </span></a>
        <ul class="list-unstyled">                
            <li><a href="page-pricing-tables.html">Pricing Tables</a></li>
            <li><a target="_blank" href="page-coming-soon.html">Countdown</a></li>                
            <li><a href="page-invoice.html">Invoice</a></li>                        
            <li><a href="page-login.html">Login / Register</a></li>               
            <li><a href="page-blank.html">Blank Page</a></li>
        </ul>
      </li> --}}

    {{-- <li class="submenu">
        <a href="#"><span class="label radius-circle bg-primary float-right">9</span><i class="fa fa-fw fa-indent"></i><span> Menu Levels </span></a>
        <ul>
            <li>
                <a href="#"><span>Second Level</span></a>
            </li>
            <li class="submenu">
                <a href="#"><span>Third Level</span> <span class="menu-arrow"></span> </a>
                <ul style="">
                    <li><a href="#"><span>Third Level Item</span></a></li>
                    <li><a href="#"><span>Third Level Item</span></a></li>
                </ul>
            </li>                                
        </ul>
      </li> --}}

    {{-- <li class="submenu">
        <a class="pro" href="#"><i class="fa fa-fw fa-star"></i><span> Pike Admin PRO </span> <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">                
            <li><a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro">Admin PRO features</a></li>
            <li><a href="pro-settings.html">Settings</a></li>
            <li><a href="pro-profile.html">My Profile</a></li>
            <li><a href="pro-users.html">Users</a></li>
            <li><a href="pro-articles.html">Articles</a></li>
            <li><a href="pro-categories.html">Categories</a></li>
            <li><a href="pro-pages.html">Pages</a></li>               
            <li><a href="pro-contact-messages.html">Contact Messages</a></li>
            <li><a href="pro-slider.html">Slider</a></li>
        </ul>
      </li> --}}

    </ul>

    {{-- <div class="clearfix"></div> --}}

  </div>

  {{-- <div class="clearfix"></div> --}}

</div>

</div>
<!-- End Sidebar -->


<div class="content-page">

  <!-- Start content -->
  <div class="content">

    {{-- <div class="container-fluid"> --}}

                       {{--  <div class="row">
                                    <div class="col-xl-12">
                                            <div class="breadcrumb-holder">
                                                    <h1 class="main-title float-left">Dashboard</h1>
                                                    <ol class="breadcrumb float-right">
                                                        <li class="breadcrumb-item">Home</li>
                                                        <li class="breadcrumb-item active">Dashboard</li>
                                                    </ol>
                                                    <div class="clearfix"></div>
                                            </div>
                                    </div>
                                  </div> --}}
                                  <!-- end row -->

                        {{-- <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Info!</h4>
                        <p>Do you want custom development to integrate this theme in your project? Or add new features? Contact us on <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin Website</b></a></p>
                        <p>Or try our PRO version: <b>Save over 50 hours of development with our Pro Framework: Registration / Login / Users Management, CMS, Front-End Template (who will load contend added in admin area and saved in MySQL database), Contact Messages Management, manage Website Settings and many more, at an incredible price!</b></p>
                        <p>Read more about all PRO features here: <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro"><b>Pike Admin PRO features</b></a></p>
                      </div> --}}

                      {{-- <div class="row"> --}}
                                    {{-- <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card-box noradius noborder bg-default">
                                                    <i class="fa fa-file-text-o float-right text-white"></i>
                                                    <h6 class="text-white text-uppercase m-b-20">Orders</h6>
                                                    <h1 class="m-b-20 text-white counter">1,587</h1>
                                                    <span class="text-white">15 New Orders</span>
                                            </div>
                                          </div> --}}

                                    {{-- <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card-box noradius noborder bg-warning">
                                                    <i class="fa fa-bar-chart float-right text-white"></i>
                                                    <h6 class="text-white text-uppercase m-b-20">Visitors</h6>
                                                    <h1 class="m-b-20 text-white counter">250</h1>
                                                    <span class="text-white">Bounce rate: 25%</span>
                                            </div>
                                          </div> --}}

                                    {{-- <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card-box noradius noborder bg-info">
                                                    <i class="fa fa-user-o float-right text-white"></i>
                                                    <h6 class="text-white text-uppercase m-b-20">Users</h6>
                                                    <h1 class="m-b-20 text-white counter">120</h1>
                                                    <span class="text-white">25 New Users</span>
                                            </div>
                                          </div> --}}

                                    {{-- <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card-box noradius noborder bg-danger">
                                                    <i class="fa fa-bell-o float-right text-white"></i>
                                                    <h6 class="text-white text-uppercase m-b-20">Alerts</h6>
                                                    <h1 class="m-b-20 text-white counter">58</h1>
                                                    <span class="text-white">5 New Alerts</span>
                                            </div>
                                          </div> --}}
                                        {{-- </div> --}}
                                        <!-- end row -->



                                        {{-- <div class="row"> --}}

                                          {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">                       --}}
                                            {{-- <div class="card mb-3"> --}}
                                            {{-- <div class="card-header">
                                                <h3><i class="fa fa-line-chart"></i> Items Sold Amount</h3>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                              </div> --}}

                                            {{-- <div class="card-body">
                                                <canvas id="lineChart"></canvas>
                                              </div> --}}                          
                                              {{-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
                                            {{-- </div> --}}
                                            <!-- end card-->                  
                                          {{-- </div> --}}

                                          {{-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">                         --}}
                                            {{-- <div class="card mb-3"> --}}
                                            {{-- <div class="card-header">
                                                <h3><i class="fa fa-bar-chart-o"></i> Colour Analytics</h3>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                              </div> --}}

                                           {{--  <div class="card-body">
                                                <canvas id="pieChart"></canvas>
                                              </div> --}}
                                              {{--  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
                                            {{-- </div> --}}
                                            <!-- end card-->                  
                                          {{-- </div> --}}

                                          {{-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">                         --}}
                                        {{-- <div class="card mb-3">
                                            <div class="card-header">
                                                <h3><i class="fa fa-bar-chart-o"></i> Colour Analytics 2</h3>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                            </div>
                                                
                                            <div class="card-body">
                                                <canvas id="doughnutChart"></canvas>
                                            </div>
                                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                          </div> --}}
                                          <!-- end card-->                  
                                        {{-- </div> --}}

                                      {{-- </div> --}}
                                      <!-- end row -->


                                      {{-- <div class="row"> --}}

                                        {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">                       --}}
                                          {{-- <div class="card mb-3"> --}}
                                            {{-- <div class="card-header">
                                                <h3><i class="fa fa-users"></i> Staff details</h3>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                                              </div> --}}

                                              {{-- <div class="card-body"> --}}

                                                {{-- <table id="example1" class="table table-bordered table-responsive-xl table-hover display"> --}}
                                                    {{-- <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                      </thead> --}}                                                    
                                                    {{-- <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cedric Kelly</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2012/03/29</td>
                                                            <td>$433,060</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Airi Satou</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>33</td>
                                                            <td>2008/11/28</td>
                                                            <td>$162,700</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brielle Williamson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>New York</td>
                                                            <td>61</td>
                                                            <td>2012/12/02</td>
                                                            <td>$372,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Herrod Chandler</td>
                                                            <td>Sales Assistant</td>
                                                            <td>San Francisco</td>
                                                            <td>59</td>
                                                            <td>2012/08/06</td>
                                                            <td>$137,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rhona Davidson</td>
                                                            <td>Integration Specialist</td>
                                                            <td>Tokyo</td>
                                                            <td>55</td>
                                                            <td>2010/10/14</td>
                                                            <td>$327,900</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Colleen Hurst</td>
                                                            <td>Javascript Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>39</td>
                                                            <td>2009/09/15</td>
                                                            <td>$205,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sonya Frost</td>
                                                            <td>Software Engineer</td>
                                                            <td>Edinburgh</td>
                                                            <td>23</td>
                                                            <td>2008/12/13</td>
                                                            <td>$103,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jena Gaines</td>
                                                            <td>Office Manager</td>
                                                            <td>London</td>
                                                            <td>30</td>
                                                            <td>2008/12/19</td>
                                                            <td>$90,560</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Quinn Flynn</td>
                                                            <td>Support Lead</td>
                                                            <td>Edinburgh</td>
                                                            <td>22</td>
                                                            <td>2013/03/03</td>
                                                            <td>$342,000</td>
                                                        </tr>                                       
                                                        <tr>
                                                            <td>Fiona Green</td>
                                                            <td>Chief Operating Officer (COO)</td>
                                                            <td>San Francisco</td>
                                                            <td>48</td>
                                                            <td>2010/03/11</td>
                                                            <td>$850,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shou Itou</td>
                                                            <td>Regional Marketing</td>
                                                            <td>Tokyo</td>
                                                            <td>20</td>
                                                            <td>2011/08/14</td>
                                                            <td>$163,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonas Alexander</td>
                                                            <td>Developer</td>
                                                            <td>San Francisco</td>
                                                            <td>30</td>
                                                            <td>2010/07/14</td>
                                                            <td>$86,500</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shad Decker</td>
                                                            <td>Regional Director</td>
                                                            <td>Edinburgh</td>
                                                            <td>51</td>
                                                            <td>2008/11/13</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Michael Bruce</td>
                                                            <td>Javascript Developer</td>
                                                            <td>Singapore</td>
                                                            <td>29</td>
                                                            <td>2011/06/27</td>
                                                            <td>$183,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Donna Snider</td>
                                                            <td>Customer Support</td>
                                                            <td>New York</td>
                                                            <td>27</td>
                                                            <td>2011/01/25</td>
                                                            <td>$112,000</td>
                                                        </tr>
                                                      </tbody> --}}
                                                    {{-- </table> --}}

                                                  {{-- </div>                                                       --}}
                                                {{-- </div> --}}
                                                <!-- end card-->                  
                                              {{-- </div> --}}


                                              {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">                        --}}
                                                {{-- <div class="card mb-3"> --}}
                                            {{-- <div class="card-header">
                                                <h3><i class="fa fa-star-o"></i> Tasks progress</h3>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                              </div> --}}

                                              {{-- <div class="card-body"> --}}
                                                {{-- <p class="font-600 m-b-5">Task 1 <span class="text-primary pull-right"><b>95%</b></span></p> --}}
                                               {{--  <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-xs bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95"></div>
                                                </div>
                                                --}}
                                                {{-- <div class="m-b-20"></div> --}}
                                                
                                                {{-- <p class="font-600 m-b-5">Task 2 <span class="text-primary pull-right"><b>88%</b></span></p> --}}
                                                {{-- <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-xs bg-primary" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="88"></div>
                                              </div> --}}

                                              {{-- <div class="m-b-20"></div> --}}

                                              {{-- <p class="font-600 m-b-5">Task 3 <span class="text-info pull-right"><b>75%</b></span></p> --}}
                                               {{--  <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-xs bg-info" role="progressbar" style="width: 78%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                                              </div> --}}

                                              {{-- <div class="m-b-20"></div> --}}

                                              {{-- <p class="font-600 m-b-5">Task 4 <span class="text-info pull-right"><b>70%</b></span></p> --}}
                                                {{-- <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-xs bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"></div>
                                              </div> --}}

                                              {{-- <div class="m-b-20"></div> --}}

                                              {{-- <p class="font-600 m-b-5">Task 5 <span class="text-warning pull-right"><b>68%</b></span></p> --}}
                                                {{-- <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-xs bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="68"></div>
                                              </div> --}}

                                              {{-- <div class="m-b-20"></div> --}}

                                              {{-- <p class="font-600 m-b-5">Task 6 <span class="text-warning pull-right"><b>65%</b></span></p> --}}
                                                {{-- <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-xs bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="65"></div>
                                              </div>  --}} 

                                              {{-- <div class="m-b-20"></div> --}}

                                              {{-- <p class="font-600 m-b-5">Task 7 <span class="text-danger pull-right"><b>55%</b></span></p> --}}
                                                {{-- <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-xs bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55"></div>
                                                </div>  
                                                --}}
                                                {{-- <div class="m-b-20"></div> --}}
                                                
                                                {{-- <p class="font-600 m-b-5">Task 8 <span class="text-danger pull-right"><b>40%</b></span></p> --}}
                                               {{--  <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-xs bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                              </div>  --}}                                 
                                            {{-- </div> --}}
                                            {{--  <div class="card-footer small text-muted">Updated today at 11:59 PM</div> --}}
                                          {{-- </div> --}}
                                          <!-- end card-->                  
                                        {{-- </div> --}}


                                        {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">                        --}}
                                          {{-- <div class="card mb-3"> --}}
                                           {{--  <div class="card-header">
                                                <h3><i class="fa fa-envelope-o"></i> Latest messages</h3>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                              </div> --}}

                                              {{-- <div class="card-body"> --}}

                                                {{-- <div class="widget-messages nicescroll" style="height: 400px;"> --}}
                                                                {{-- <a href="#">
                                                                    <div class="message-item">
                                                                        <div class="message-user-img"><img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt=""></div>
                                                                        <p class="message-item-user">John Doe</p>
                                                                        <p class="message-item-msg">Hello. I want to buy your product</p>
                                                                        <p class="message-item-date">11:50 PM</p>
                                                                    </div>
                                                                  </a> --}}
                                                                {{-- <a href="#">
                                                                    <div class="message-item">
                                                                        <div class="message-user-img"><img src="assets/images/avatars/avatar5.png" class="avatar-circle" alt=""></div>
                                                                        <p class="message-item-user">Ashton Cox</p>
                                                                        <p class="message-item-msg">Great job for this task</p>
                                                                        <p class="message-item-date">14:25 PM</p>
                                                                    </div>
                                                                  </a> --}}
                                                                {{-- <a href="#">
                                                                    <div class="message-item">
                                                                        <div class="message-user-img"><img src="assets/images/avatars/avatar6.png" class="avatar-circle" alt=""></div>
                                                                        <p class="message-item-user">Colleen Hurst</p>
                                                                        <p class="message-item-msg">I have a new project for you</p>
                                                                        <p class="message-item-date">13:20 PM</p>
                                                                    </div>
                                                                  </a> --}}
                                                                {{-- <a href="#">
                                                                    <div class="message-item">
                                                                        <div class="message-user-img"><img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt=""></div>
                                                                        <p class="message-item-user">Fiona Green</p>
                                                                        <p class="message-item-msg">Nice to meet you</p>
                                                                        <p class="message-item-date">15:45 PM</p>
                                                                    </div>
                                                                  </a> --}}
                                                                {{-- <a href="#">
                                                                    <div class="message-item">
                                                                        <div class="message-user-img"><img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt=""></div>
                                                                        <p class="message-item-user">Donna Snider</p>
                                                                        <p class="message-item-msg">I have a new project for you</p>
                                                                        <p class="message-item-date">15:45 AM</p>
                                                                    </div>
                                                                  </a> --}}
                                                                {{-- <a href="#">
                                                                    <div class="message-item">
                                                                        <div class="message-user-img"><img src="assets/images/avatars/avatar5.png" class="avatar-circle" alt=""></div>
                                                                        <p class="message-item-user">Garrett Winters</p>
                                                                        <p class="message-item-msg">I have a new project for you</p>
                                                                        <p class="message-item-date">15:45 AM</p>
                                                                    </div>
                                                                  </a> --}}
                                                               {{--  <a href="#">
                                                                    <div class="message-item">
                                                                        <div class="message-user-img"><img src="assets/images/avatars/avatar6.png" class="avatar-circle" alt=""></div>
                                                                        <p class="message-item-user">Herrod Chandler</p>
                                                                        <p class="message-item-msg">Hello! I'm available for this job</p>
                                                                        <p class="message-item-date">15:45 AM</p>
                                                                    </div>
                                                                  </a> --}}
                                                                {{-- <a href="#">
                                                                    <div class="message-item">
                                                                        <div class="message-user-img"><img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt=""></div>
                                                                        <p class="message-item-user">Jena Gaines</p>
                                                                        <p class="message-item-msg">I have a new project for you</p>
                                                                        <p class="message-item-date">15:45 AM</p>
                                                                    </div>
                                                                  </a> --}}
                                                                {{-- <a href="#">
                                                                    <div class="message-item">
                                                                        <div class="message-user-img"><img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt=""></div>
                                                                        <p class="message-item-user">Airi Satou</p>
                                                                        <p class="message-item-msg">I have a new project for you</p>
                                                                        <p class="message-item-date">15:45 AM</p>
                                                                    </div>
                                                                  </a> --}}
                                                                {{-- <a href="#">
                                                                    <div class="message-item">
                                                                        <div class="message-user-img"><img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt=""></div>
                                                                        <p class="message-item-user">Brielle Williamson</p>
                                                                        <p class="message-item-msg">I have a new project for you</p>
                                                                        <p class="message-item-date">15:45 AM</p>
                                                                    </div>
                                                                  </a> --}}
                                                                {{-- </div> --}}

                                                              {{-- </div> --}}
                                                              {{-- <div class="card-footer small text-muted">Updated today at 11:59 PM</div> --}}
                                                            {{-- </div> --}}
                                                            <!-- end card-->                  
                                                          {{-- </div> --}}

                                                        {{-- </div>           --}}

                                                        {{-- content --}}


                                                      {{-- </div> --}}
                                                      <!-- END container-fluid -->

                                                    {{-- </div> --}}
                                                    <!-- END content -->

                                                  {{-- </div> --}}
                                                  <!-- END content-page -->
                                                  <div class="content-inner" id="app">
                                                    @yield('content')
                                                  </div>
                                                  <footer class="footer">
                                                    <span class="text-right">
                                                      Copyright <a target="_blank" href="#">Grasud</a>
                                                    </span>
                                                    <span class="float-right">
                                                      Powered by <a target="_blank" href="#"><b>Admin Grasud</b></a>
                                                    </span>
                                                  </footer>

                                                </div>
                                                <!-- END main -->

<script src="{{ asset('Admin/assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('Admin/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('Admin/assets/js/moment.min.js') }}"></script>

<script src="{{ asset('Admin/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('Admin/assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('Admin/assets/js/detect.js') }}"></script>
<script src="{{ asset('Admin/assets/js/fastclick.js') }}"></script>
<script src="{{ asset('Admin/assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('Admin/assets/js/jquery.nicescroll.js') }}"></script>
{{--  --}}
<script src="{{ asset('Admin/assets/plugins/datetimepicker/js/moment.min.js') }}"></script>
<script src="{{ asset('Admin/assets/plugins/datetimepicker/js/daterangepicker.js') }}"></script>
<!-- App js -->
<script src="{{ asset('Admin/assets/js/pikeadmin.js') }}"></script>

<!-- BEGIN Java Script for this page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<!-- sweet -->
<!-- <script src="assets/js/detect.js"></script> -->
<!-- <script src="assets/js/fastclick.js"></script> -->
<!-- <script src="assets/js/jquery.blockUI.js"></script> -->
<!-- <script src="assets/js/jquery.nicescroll.js"></script> -->
<script src="{{ asset('Admin/assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('Admin/assets/plugins/switchery/switchery.min.js') }}"></script>
<!-- Counter-Up-->
<script src="{{ asset('Admin/assets/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<!-- Bootstrap date -->
<script src="{{ asset('Admin/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
<!-- Counter-Up-->
<script src="{{ asset('Admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
{{--  --}}
<script src="{{ asset('Admin/assets/plugins/counterup/jquery.counterup.min.js') }}"></script>     
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.12/sweetalert2.all.js"></script>
<script src="{{ asset('Admin/assets/plugins/select2/js/select2.min.js') }}"></script>

<!-- BEGIN Java Script for this page -->
<script src="{{ asset('Admin/assets/plugins/bootstrap-magnify/bootstrap-magnify.min.js') }}"></script>
<!-- END Java Script for this page -->

<!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="{{asset('fancybox-master/lib/jquery.mousewheel-3.0.6.pack.js')}}"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
    
    <script type="text/javascript">
        $(function($){
            var addToAll = true;
            var gallery = true;
            var titlePosition = 'inside';
            $(addToAll ? 'img' : 'img.fancybox').each(function(){
                var $this = $(this);
                var title = $this.attr('title');
                var src = $this.attr('data-big') || $this.attr('src');
                var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
                $this.wrap(a);
            });
            if (gallery)
                $('a.fancybox').attr('rel', 'fancyboxgallery');
            $('a.fancybox').fancybox({
                titlePosition: titlePosition
            });
        });
        $.noConflict();
    </script>

<!-- BEGIN Java Script for this page -->
<script src="{{ asset('Admin/assets/plugins/lightbox/ekko-lightbox.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('.besar').ekkoLightbox();
});
</script>
<!-- END Java Script for this page -->
  
  {{-- dropdwon --}}
  <script>                
    $(document).ready(function() {
      $('.select2').select2();
    });
  </script>
  {{-- bulan --}}
  <script>
    $(document).ready(function() {
      $('.date').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
format: 'MMMM'
}
      });
    });
  </script>
  {{-- datatables --}}
  <script>
      $(document).ready(function() {
      // data-tables
      $('.datatable').DataTable();

      // counter-up
      $('.counter').counterUp({
        delay: 10,
        time: 600
      });
    } );    
  </script>
  
  <script>

    const logout = ()=>{
      swal({
        type:"info",
        title: "Logout from here?",
        confirmButtonText: "<i class='fa fa-thumbs-up'></i> Yes, Log me out",
        showCancelButton:true,
        cancelButtonColor: '#d33',
        cancelButtonText: "<i class='fa fa-close'></i> Cancel"
      }).then(res=>{
        if(res.value){
          $("#logout-form").submit();
        }
      });
    }

  </script>
  {{-- angka --}}
  <script type="text/javascript">
    function hanyaAngka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
  return true;
}
  </script>
  {{-- rupiah --}}
<script type="text/javascript">
  var rupiah = document.getElementById("rupiah");
rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "Rp. ");
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}

</script>

  <!-- END Java Script for this page -->
  @yield('script')
</body>
</html>