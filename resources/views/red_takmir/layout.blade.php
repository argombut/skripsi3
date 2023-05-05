<!DOCTYPE html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.1.2/css/rowGroup.dataTables.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    {{-- ===================select2===================== --}}
    <link rel="stylesheet" href="{{asset('assets/css/lib/select2/select2.min.css')}}">



    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


</head>

<body>
    <style>
        a:link {
            text-decoration: none;
          }
          
          a:visited {
            text-decoration: none;
          }
          
          a:hover {
            text-decoration: none;
          }
          
          a:active {
            text-decoration: none;
          }
    </style>

    <!-- loading -->
    <div id='loader-wrapper'>
        <div id="loader"></div>
    </div>

    <!-- New Sidebar -->
    <div>
        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <div class="sidebar-search">
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control search-menu" placeholder="Search...">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <ul>
                            <li class="header-menu justify-content-start">
                                <span style="color : white">REKAP TAKMIR</span>
                            </li>
                            <li class="{{ '/red_takmir'    == $InfoPage['Navbar'] ? 'active' : ''}}">
                                <a href="{{ url ('/red_takmir')}}">
                                    <i class="fa fa-home" style="color : white"></i>
                                    <span style="color : white">Home</span>
                                </a>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                    <i class="fa fa-tachometer-alt" style="color : white"></i>
                                    <span style="color : white">Menu</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li class="{{ '/red_takmir/warga'    == $InfoPage['Navbar'] ? 'active' : ''}}">
                                            <a href="{{ url ('/red_takmir/warga')}}" style="color : white">Data Warga</a>
                                        </li>
                                        <li class="{{ '/red_takmir/datakk' == $InfoPage['Navbar'] ? 'active' : ''}}">
                                            <a href="{{ url ('/red_takmir/datakk')}}" style="color : white">Data Kartu Keluarga</a>
                                        </li>
                                        <li class="{{ '/red_takmir/agama' == $InfoPage['Navbar'] ? 'active' : ''}}">
                                            <a href="{{ url ('/red_takmir/agama')}}" style="color : white">Data Ibadah</a>
                                        </li>
                                        <li class="{{ '/red_takmir/keahlian' == $InfoPage['Navbar'] ? 'active' : ''}}">
                                            <a href="{{ url ('/red_takmir/keahlian')}}" style="color : white">Data Keahlian</a>
                                        </li>
                                        <li class="{{ '/red_takmir/gol_darah' == $InfoPage['Navbar'] ? 'active' : ''}}">
                                            <a href="{{ url ('/red_takmir/gol_darah')}}" style="color : white">Data Golongan Darah</a>
                                        </li>
                                        <li class="{{ '/red_takmir/ekonomi' == $InfoPage['Navbar'] ? 'active' : ''}}">
                                            <a href="{{ url ('/red_takmir/ekonomi')}}" style="color : white">Data Level Ekonomi</a>
                                        </li>
                                        <li class="{{ '/red_takmir/pekerjaan' == $InfoPage['Navbar'] ? 'active' : ''}}">
                                            <a href="{{ url ('/red_takmir/pekerjaan')}}" style="color : white">Data Pekerjaan Warga</a>
                                        </li>
                                        <li class="{{ '/red_takmir/pendidikan' == $InfoPage['Navbar'] ? 'active' : ''}}">
                                            <a href="{{ url ('/red_takmir/pendidikan')}}" style="color : white">Data Pendidikan</a>
                                        </li>
                                        <li class="{{ '/red_takmir/baca' == $InfoPage['Navbar'] ? 'active' : ''}}">
                                            <a href="{{ url ('/red_takmir/baca')}}" style="color : white">Data Kemampuan Baca</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="{{ '/md_user'    == $InfoPage['Navbar'] ? 'active' : ''}}">
                                <a href="{{ url ('/md_user')}}">
                                    <i class="fa fa-users" style="color : white"></i>
                                    <span style="color : white">Atur User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="{{url('img/mosque.png')}}" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{url('img/mosque.png')}}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">

                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{url('img/user.png')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{url('logout')}}"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#Header-->

        <!-- Content-->
        @yield('container')
        <!-- /#Content-->

        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->

    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>


    <script src="{{asset('assets/js/init/fullcalendar-init.js')}}"></script>

    <script src="{{asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js"></script>
    <script src="{{asset('assets/js/init/datatables-init.js')}}"></script>
    {{-- chart tambahan --}}
    
    

    <!--Local Stuff-->
    {{-- ===================select2===================== --}}
    <script src="{{asset('assets/js/lib/select2/select2.min.js')}}"></script>

    @yield('customscript')

</body>

</html>