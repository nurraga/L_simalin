@extends('layouts.simalin')

@section('content')
    <!-- List untuk mobile -->
    <div class="row hidden-md hidden-lg" style="padding-top: 2px; padding-left: 5px; padding-right: 5px">
        @if(session()->has('message'))
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <div class="alert alert-success">
                        Laporan telah dikirim. Kode tracking Anda: <h3><code>{{ session()->get('message') }}</code></h3> Silakan cek status laporan Anda dengan kode tersebut.
                    </div>
                </div>
            </div>
        @endif
    </div>
    @forelse($gangguan as $itemmobile)
        <div class="row hidden-md hidden-lg no-pad-top">
            <div class="nav-tabs-custom">
                <ul class="nav">
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <!-- Post -->
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="{{ url('/assets/img/'.Auth()->user()->foto) }}" alt="user image">
                                    <span class="username">
                                        <a href="#">{{ ucwords(Auth()->user()->nama) }}.</a>
                                    </span>
                                    <span class="description"> {{ $itemmobile->getCreatedAt()->diffForHumans() }}.</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    {{ ucfirst($itemmobile->detail_info) }}.
                                </p>
                                <ul class="list-inline">
                                    @if($itemmobile->id_jenis==1)
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-signal"></i> {{ $itemmobile->Jenis()->first()->nama_jenis }}</a></li>
                                    @else
                                        <li><a href="#" class="link-black text-sm"><i class="fa fa-bug"></i> {{ $itemmobile->Jenis()->first()->nama_jenis }}</a></li>
                                    @endif
                                    <li>
                                        <a href="#" class="link-black text-sm"><i class="fa fa-meh-o "></i> {{ $itemmobile->Kategori()->first()->nama_kategori }}</a>
                                    </li>
                                    <li class="pull-right">

                                    </li>
                                </ul>
                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
                            </div>
                        <!-- /.post -->
                    </div>
                <!-- /.tab-pane -->
                </div>
            <!-- /.tab-content -->
            </div>
        </div>
        @empty
        <div class="alert alert-info hidden-lg hidden-md">
                <h4>
                    <center>Hai {{ ucwords(Auth()->user()->getNamaDepan()) }}, Selamat Datang.</center> <br>
                    <center>Jangan ragu untuk melaporkan gangguan melalui SiMALIN <b><i class="fa fa-smile-o"></i></b></center>
                </h4>
        </div>
    @endforelse

    <!-- /.List untuk mobile -->

    <!-- List untuk desktop -->
    <section class="content-header hidden-sm hidden-xs">
        <h1>
            Lapor Gangguan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> SiMALIN</a></li>
            <li class="active"><a href="#">Lapor Gangguan</a></li>
        </ol>
    </section>
    <section class="content hidden-sm hidden-xs">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-default">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{ url('/assets/img/'.Auth()->user()->foto) }}" alt="User profile picture">
                        <h3 class="profile-username text-center">{{ ucwords(Auth()->user()->nama) }}</h3>

                        <p class="text-muted text-center">{{ Auth()->user()->nik }}</p>

                        <ul class="list-group list-group-unbordered">

                        </ul>

                        <a href="{{ route('lapor-gangguan') }}" class="btn btn-primary btn-block"><b>Laporan Gangguan</b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">
                @if(session()->has('message'))
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body text-center">
                                <div class="alert alert-success">
                                    Laporan telah dikirim. Kode tracking Anda: <h3><code>{{ session()->get('message') }}</code></h3> Silakan cek status laporan Anda dengan kode tersebut.
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @forelse($gangguan as $itemdesktop)

                    <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav">
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="{{ url('/assets/img/'.Auth()->user()->foto) }}" alt="user image">
                                            <span class="username">
                                        <a href="#">{{ ucwords(Auth()->user()->nama) }}.</a>
                                    </span>
                                            <span class="description"> {{ $itemdesktop->getCreatedAt()->diffForHumans() }}.</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            {{ ucfirst($itemdesktop->detail_info) }}.
                                        </p>
                                        <ul class="list-inline">
                                            @if($itemdesktop->id_jenis==1)
                                                <li><a href="#" class="link-black text-sm"><i class="fa fa-signal"></i> {{ $itemdesktop->Jenis()->first()->nama_jenis }}</a></li>
                                            @else
                                                <li><a href="#" class="link-black text-sm"><i class="fa fa-bug"></i> {{ $itemdesktop->Jenis()->first()->nama_jenis }}</a></li>
                                            @endif
                                            <li>
                                                <a href="#" class="link-black text-sm"><i class="fa fa-meh-o "></i> {{ $itemdesktop->Kategori()->first()->nama_kategori }}</a>
                                            </li>
                                            <li class="pull-right">

                                            </li>
                                        </ul>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input class="form-control input-sm" type="text" placeholder="{{ Auth()->user()->asal()->first()->nama_asal }}" disabled>
                                        </div>
                                    </div>

                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                    @empty
                        <div class="alert alert-info">
                            <div class="box-body">
                                <h4>
                                    <center>Hai {{ ucwords(Auth()->user()->getNamaDepan()) }}, Selamat Datang.</center> <br>
                                    <center>Jangan ragu untuk melaporkan gangguan melalui SiMALIN <b><i class="fa fa-smile-o"></i></b></center>
                                </h4>
                            </div>
                        </div>
                    @endforelse
            </div>
        </div>
    </section>
    <!-- /.List untuk desktop -->
@endsection
