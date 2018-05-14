@extends('layouts.simalin')

@section('content')
    <section class="content-header hidden-sm hidden-xs">
        <h1>
            Lapor Gangguan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> SiMALIN</a></li>
            <li class="active"><a href="#">Lapor Gangguan</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="box box-widget">
                    <form class="form-horizontal" role="form" method="post" action="{{ route('lapor-gangguan-store') }}">
                        {{ csrf_field() }}
                        <div class="box-header with-border">
                            <h1 class="box-title">
                                Data Laporan
                            </h1>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box box-widget">
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <tr>
                                                    <td class="col-md-3">Nama Pelapor</td>
                                                    <td>{{ ucwords(Auth()->user()->nama) }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Layanan</td>
                                                    <td>{{ $jenis->nama_jenis }}</td>
                                                </tr>
                                                @if($jenis->id == 1)
                                                    @if($app_jar->id == 1)
                                                        <tr>
                                                            <td>Gangguan</td>
                                                            <td>
                                                                Jaringan {{ $app_jar->nama_jaringan }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lokasi</td>
                                                            <td>
                                                                {{ Auth::user()->asal()->first()->nama_asal }}
                                                            </td>
                                                        </tr>
                                                    @else
                                                        <tr>
                                                            <td>Gangguan</td>
                                                            <td>
                                                                {{ $app_jar->nama_jaringan }}
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @else
                                                    <tr>
                                                        <td>Gangguan</td>
                                                        <td>
                                                            {{ ucwords($app_jar->nama_aplikasi) }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td>
                                                            {{ Auth::user()->asal()->first()->nama_asal }}
                                                        </td>
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <td>Kategori</td>
                                                    <td>{{ $kategori->nama_kategori }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Media Pelaporan</td>
                                                    <td>{{ $media->nama_media }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Info Tambahan</td>
                                                    <td>{{ $detil_info }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" value="{{ $app_jar->id }}" name="id_app_jar">
                                <input type="hidden" value="{{ $jenis->id }}" name="id_jenis">
                                <input type="hidden" value="{{ $kategori->id }}" name="kategori">
                                <input type="hidden" value="{{ $detil_info }}" name="detil_info">
                                <div class="col-md-9">
                                    <a href="{{ URL::previous() }}" class="btn btn-default btn-sm pull-right edit hidden-xs"><i class="fa fa-pencil"></i> kembali</a>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-default btn-sm">
                                        <i class="fa fa-check text-green"></i> konfirmasi
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer with-border">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
