@extends('layouts.simalin')

@section('content')
    <section class="content-header hidden-sm hidden-xs">
        <h1>
            Hasil Tracking
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> SiMALIN</a></li>
            <li class="active"><a href="#">Cek Gangguan</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="box box-widget">
                    <div class="box-header with-border">
                        <h1 class="box-title">
                            @if($gangguan)
                                Data Laporan

                            @else
                                Info
                            @endif
                        </h1>
                    </div>
                    <div class="box-body no-padding">
                        <table class="table table-responsive table-striped">
                            @if($gangguan)
                                <tr>
                                    <td class="col-md-3">Nama Pelapor</td>
                                    <td>{{ ucwords(Auth()->user()->nama) }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Layanan</td>
                                    <td>{{ $gangguan->jenis()->first()->nama_jenis }}</td>
                                </tr>
                                @if($gangguan->id_jenis == 1)
                                    @if($gangguan->id_jar_atau_app == 1)
                                        <tr>
                                            <td>Gangguan</td>
                                            <td>
                                                Jaringan {{ $gangguan->getAsal() }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lokasi</td>
                                            <td>
                                                {{ $gangguan->getLokasiGangguan() }}
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td>Gangguan</td>
                                            <td>
                                                {{ $gangguan->getSkpd() }}
                                            </td>
                                        </tr>
                                    @endif
                                @else
                                    <tr>
                                        <td>Gangguan</td>
                                        <td>
                                            {{ ucwords($gangguan->getAplikasi()) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td>
                                            {{ $gangguan->getAsal() }}
                                        </td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>Kategori</td>
                                    <td>{{ $gangguan->Kategori()->first()->nama_kategori }}</td>
                                </tr>
                                <tr>
                                    <td>Media Pelaporan</td>
                                    <td>{{ $gangguan->media()->first()->nama_media }}</td>
                                </tr>
                                <tr>
                                    <td>Info Tambahan</td>
                                    <td>{{ $gangguan->detail_info }}</td>
                                </tr>
                                <tr>
                                    <td>Status laporan</td>
                                    <td>
                                        @if($gangguan->id_status==1)
                                            <div class="progress active">
                                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                                        {{ $gangguan->Status()->first()->nama_status }}. Menunggu untuk diproses.
                                                </div>
                                            </div>
                                        @elseif($gangguan->id_status==2)
                                            <div class="progress active">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    Penanganan online sedang dilakukan.
                                                </div>
                                            </div>
                                        @elseif($gangguan->id_status==3)
                                            <div class="progress active">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    Sedang ditindaklanjuti.
                                                </div>
                                            </div>
                                        @else
                                            <div class="progress active">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                    {{ $gangguan->Status()->first()->nama_status }}. Laporan selesai ditindaklanjuti.
                                                </div>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                                @if($gangguan->Status()->first()->id != 4)
                                @else
                                    <tr>
                                        <td>Hasil Perbaikan</td>
                                        <td>{{ $gangguan->getHasil() }}</td>
                                    </tr>
                                @endif
                            @else
                                <tr>
                                    <td>
                                        <center>
                                            Tidak ada hasil untuk kode {{ $no }}.
                                        </center>
                                    </td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
