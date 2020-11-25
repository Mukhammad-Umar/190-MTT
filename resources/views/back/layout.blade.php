<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>190-MTM | Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- AdminLTE -->        
        <link rel="stylesheet" href="{{ asset('AdminLTE/css/bootstrap.min.css')}}">
        <link type="text/css" href="{{ asset('AdminLTE/js/jquery-ui-1.9.2.custom/development-bundle/themes/base/jquery-ui.css')}}" rel="stylesheet" />

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->

        <link rel="stylesheet" href="{{ asset('AdminLTE/css/AdminLTE.min.css')}}">
        <link rel="stylesheet" href="{{ asset('AdminLTE/css/_all-skins.min.css')}}">
        <link rel="stylesheet" href="{{ asset('AdminLTE/css/main_v2.1.9.css')}}">

        <!-- sort icon -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
        
        <!-- my customer.css -->
        <link rel="stylesheet" href="{{ asset('AdminLTE/css/back.css')}}">

        <!-- awesome -->  
        <link rel="stylesheet" href="{{ asset('AdminLTE/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

        <!-- my style.css -->
        <link rel="stylesheet" href="{{ asset('AdminLTE/css/style.css')}}">

        @yield('css')
        
    </head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">

<div class="wrapper">

    <header class="main-header">
        <a href="{{ route('dashboard')}}" class="logo">
            <span class="logo-mini"><b>190</b></span>
            <span class="logo-lg">190-MTM</span>
        </a>

        <nav class="navbar navbar-static-top">
            <a href="{{ route('dashboard')}}" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-user fa-fw"></i>
                          <!-- Auth-user -->
                          {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                           <li>   
                              <ul class="menu">
                                 <li>
                                    <div class="add_funct_top">
                                      <a class="btn btn-default btn-xs btn-block page_content" href="#" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><div class="dropdown-menu-div"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</div></a>
                                      <!-- Logout form -->
                                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                      </form>
                                    </div>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

     <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="header bolder" style="color: white;">MENU</li>
                <li>
                    <a href="{{ route('index')}}">
                        <i class="fa fa-home"></i> <span>Bosh sahifa</span>
                    </a>
                </li>
                <li class="header" style="font-size: 15px;"><i class="fa fa-arrow-down" aria-hidden="true"></i> Admin Panel <i class="fa fa-arrow-down" aria-hidden="true"></i>
                </li>
                <hr>
                <li>
                    <a href="{{ route('news.index')}}">
                        <i class="fa fa-newspaper-o"></i> <span>Yangiliklar | News</span>
                    </a>
                </li>
            @if (Auth::user()->role == 'redac' || Auth::user()->role == 'admin')
                <li>
                    <a href="{{ route('news.create')}}">
                        <i class="fa fa-plus"></i> <span>Yangi Xabar Qo`shish</span>
                    </a>
                </li>
            @endif
                <hr>
                <li>
                    <a href="{{ route('galleries.index')}}">
                        <i class="fa fa-picture-o"></i> <span>Gallereya | Gallery</span>
                    </a>
                </li>
            @if (Auth::user()->role == 'redac' || Auth::user()->role == 'admin')
                <li>
                    <a href="{{ route('galleries.create')}}">
                        <i class="fa fa-plus"></i> <span>Rasm Qo`shish</span>
                    </a>
                </li>
            @endif
                <hr>
                <li>
                    <a href="{{ route('admin-contact')}}">
                        <i class="fa fa-envelope-o"></i> <span>Bog`lanish | Contact</span>
                    </a>
                </li>
                <hr>
                @admin
                    <li>
                        <a href="{{ route('users.index')}}">
                            <i class="fa fa-user-circle"></i> <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.create')}}">
                            <i class="fa fa-plus"></i> <span>Admin yoki User qoshish</span>
                        </a>
                    </li>
                    <hr>
                @endadmin
            </ul>
        </section>

    </aside>

    <div class="content-wrapper">

       @yield('main')    
              
    </div>

    <footer class="main-footer">
        <div id="arrowup"><i class="fa fa-angle-double-up"></i></div>
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2020 <a href="#">190-MTM</a>.</strong> All rights reserved.
    </footer>

</div>

<!-- AdminLTE -->
<script src="{{ asset('AdminLTE/js/jQuery-2.2.0.min.js') }}"></script>
<script src="{{ asset('AdminLTE/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('AdminLTE/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('AdminLTE/js/app.min.js') }}"></script>

    @yield('js')
    
</body>

</html>
    