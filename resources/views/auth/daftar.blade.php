<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SiMALIN | Daftar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/assets/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('/assets/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/assets/dist/css/AdminLTE.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        button{
            background: #2a3b48;
        }
        button:hover{
            background: #2b669a;
        }
        @keyframes animatedBackground{
            from{
                background-position: 500px;
            }
            to{
                background-position: -1920px 0;
            }}
        #animated-area{
            width: 560px;
            height: 400px;
            background-image: url("assets/img/bg-pyk.jpg");
            background-size: cover;
            background-position: 0px 0px;
            background-repeat: repeat-x;
            animation: animatedBackground 550s linear infinite;
        }
    </style>
</head>
<body class="hold-transition login-page body" style="width: 100%; height: 100%;" id="animated-area">
<nav class="navbar navbar-default navbar-static-top" style="background: #2a3b48">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}" style="color: #fff">
                <i class="fa fa-phone-square"></i> DISKOMINFO KOTA PAYAKUMBUH
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav navbar-left">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('login') }}" style="color: #fff"><i class="fa fa-user"></i> Masuk</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="login-box" style="border-radius: 5px; background-color: rgba(255,255,255,0.8); border: 1px solid white">
    <div class="login-logo">
        <br/>
        <b class="content__container__text" style="color: #2a3b48; text-shadow: 1px 3px 15px #2a3b48">SiMALIN</b>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" style="color: #000000; border-radius: 5px;background-color: rgba(255,255,244,0)">
        <strong>
            <p class="login-box-msg" style="color: #2a3b48; text-shadow: 1px 3px 15px #2a3b48">Daftar akun baru untuk memulai menggunakan SiMALIN</p>
        </strong>
        <form role="form" method="POST" action="{{ route('submit.daftar') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }} has-feedback">
                <input id="nik" name="nik" type="numeric" class="form-control" placeholder="Nomor Induk Keluarga" value="{{ old('nik') }}" required autofocus>
                <span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
                @if ($errors->has('nik'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('nik') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('asal') ? ' has-error' : '' }} has-feedback">
                <select name="asal" id="asal" class="form-control" value="{{ old('asal') }}" required>
                    <option disabled="true" selected="true">- Pilih Asal -</option>
                    @forelse($asals as $asal)
                        <option value="{{ $asal->id }}">{{ $asal->nama_asal }}</option>
                    @empty

                    @endforelse
                </select>
                @if ($errors->has('asal'))
                    <span class="help-block">
                        <strong>{{ $errors->first('asal') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }} has-feedback">
                <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="{{ old('nama') }}" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('nama'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nama') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }} has-feedback">
                <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat" value="{{ old('alamat') }}" required autofocus>
                <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
                @if ($errors->has('alamat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('alamat') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <input id="email" name="email" type="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input id="password" name="password" type="password" class="form-control" placeholder="Kata Sandi" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Ketik ulang Kata Sandi" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-8" style="color: #2a3b48; text-shadow: 1px 3px 15px #2a3b48">

                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-block btn-flat" style="color: #ffffff ">Daftar</button>
                </div>
                <!-- /.col -->
            </div>

        </form>
        <br/><br/>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 2.2.3 -->
<script src="{{ url('/assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ url('/assets/plugins/iCheck/icheck.min.js') }}"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
