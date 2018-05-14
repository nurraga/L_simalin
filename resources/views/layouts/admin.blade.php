<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SiMALIN</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/assets/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('/assets/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/assets/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ url('/assets/dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav fixed">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo untuk mobile-->
        <a href="{{ route('admin.beranda') }}" class="logo hidden-md hidden-lg" style="background: #2a3b48;">
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                <i class="fa fa-phone-square"></i> SiMALIN
            </span>
        </a>
        <!-- /.Logo untuk mobile-->

        @if(Auth::guest())
            <nav class="navbar navbar-static-top" style="background-color: #2a3b48">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ route('admin.beranda') }}" class="navbar-brand hidden-sm hidden-xs"><i class="fa fa-phone-square"></i> SiMALIN</a>
                        <span class="logo logo-lg hidden-md hidden-lg" style="background-color: red">
                            Terjadi Kesalahan!
                        </span>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

                    </div>
                </div>
            </nav>
        @else
            <nav class="navbar navbar-static-top" style="background-color: #2a3b48">
                <div class="container">
                    <div class="navbar-header">

                        <a href="#" class="sidebar-toggle hidden-md hidden-lg" data-toggle="offcanvas" role="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- logo untuk desktop -->
                        <a href="{{ route('admin.beranda') }}" class="navbar-brand hidden-sm hidden-xs"><i class="fa fa-phone-square"></i> SiMALIN</a>
                        <!-- /.logo untuk desktop -->

                        <!-- Judul halaman untuk mobile -->
                        <a class="navbar-brand hidden-md hidden-lg pull-center">{{ ucwords($judul) }}</a>
                        <!-- ./Judul halaman untuk mobile -->

                        <!-- Menu kanan atas untuk mobile -->
                        <a href="{{ $urlmenu }}" class="navbar-brand hidden-md hidden-lg pull-right">
                            @if(Auth::guest())

                            @else
                                {!! $menu !!}
                            @endif
                        </a>
                        <!-- /.Menu kanan atas untuk mobile -->

                    </div>

                    <!-- Cek laporan input untuk desktop -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">

                        </ul>
                    </div>
                    <!-- /.Cek laporan input untuk desktop -->

                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                            @if(Auth::guest())

                            @else
                                <li class="dropdown user user-menu hidden-sm hidden-xs">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ url('/assets/img/pelapor.png') }}" class="user-image image-circle" alt="User Image">
                                        {{ ucfirst(Auth()->user()->getNamaDepan()) }}
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="fa fa-gear"></i> Pengaturan</a></li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i> Keluar
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                                </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        @endif

    </header>

    <aside class="main-sidebar hidden-md hidden-lg">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ url('/assets/img/malin.png') }}" class="img-circle profile-user-img img-responsive" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>
                    @if(Auth::guest())

                    @else
                        <center id="ucapan"></center>
                        <p>
                            <script type="text/javascript">
                                function dayMsg()
                                {
                                    setInterval("changeSuasana();",1000);
                                }

                                function changeSuasana()
                                {
                                    var d = new Date();
                                    var curr_jam = d.getHours();
                                    var suasana = "";
                                    if(curr_jam < 12)
                                        suasana = "Selamat Pagi"+' <i class="fa fa-sun-o"></i>';
                                    else
                                    if(curr_jam >= 12 && curr_jam < 17)
                                        suasana = "Selamat Siang"+' <i class="fa fa-sun-o"></i>';
                                    else
                                    if(curr_jam >= 17 && curr_jam < 19)
                                        suasana = "Selamat Sore"+' <i class="fa fa-sun-o"></i>';
                                    else
                                    if(curr_jam >= 19)
                                        suasana = "Selamat Malam"+' <i class="fa fa-moon-o"></i>';
                                    document.getElementById('ucapan').innerHTML = suasana;
                                }

                                function timedMsg()
                                {
                                    setInterval("change_time();",1000);
                                }

                                function change_time()
                                {
                                    var d = new Date();
                                    var curr_hour = d.getHours();
                                    var curr_min = d.getMinutes();
                                    var curr_sec = d.getSeconds();

                                    document.getElementById('Hour').innerHTML = curr_hour+':';
                                    document.getElementById('Minut').innerHTML = curr_min+':';
                                    document.getElementById('Second').innerHTML = curr_sec;
                                }

                                dayMsg();
                                timedMsg();
                            </script>
                        <table>
                            <tr>
                                <td id="Hour" style="color:#ffffff;"></td>
                                <td id="Minut" style="color:#ffffff;"></td>
                                <td id="Second" style="color:#ffffff;"></td>
                                <td style="width: 5px"> </td>
                                <td style="color:#ffffff;">WIB</td>
                            <tr>
                        </table>
                        </p>
                        @endif
                        </p>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Cek Laporan...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">Pengaturan</li>
                <li class="treeview">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <span><i class="fa fa-sign-out"></i></span>
                        Keluar
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="content col-md-3">
            <div class="box" style="border-top-color: #2a3b48">
                <div class="box-title">

                </div>
                <div class="box-body">
                    <div class="list-group">
                        <a href="{{ route('admin.beranda') }}" class="list-group-item">
                            <i class="fa fa-circle-o text-red"> {{ $baru }}</i> Laporan Terbaru
                        </a>
                        <a href="{{ route('admin.beranda.online') }}" class="list-group-item">
                            <i class="fa fa-circle-o text-aqua"> {{ $online }}</i> Penanganan Online
                        </a>
                        <a href="{{ route('admin.beranda.offline') }}" class="list-group-item">
                            <i class="fa fa-circle-o text-yellow"> {{ $offline }}</i> Penanganan Offline
                        </a>
                        <a href="{{ route('admin.beranda.teratasi') }}" class="list-group-item">
                            <i class="fa fa-circle-o text-green"> {{ $teratasi }}</i> Gangguan Teratasi
                        </a>
                        <div class="divider"><hr></div>
                        <a href="{{ route('pdf.formulir.list') }}" class="list-group-item">
                            <i class="fa fa-file-pdf-o text-red"></i> Formulir
                        </a>
                        <a href="{{ route('pdf.surat.list') }}" class="list-group-item">
                            <i class="fa fa-file-pdf-o text-red"></i> Surat Tugas
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content col-md-9">
            @yield('content')
        </div>
    </div>
        <!-- /.container -->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="container">
            <strong>Copyright &copy; 2017.</strong> All rights
            reserved.
        </div>
        <!-- /.container -->
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ url('/assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ url('/assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('/assets/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/assets/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/assets/dist/js/demo.js') }}"></script>
</body>
</html>
