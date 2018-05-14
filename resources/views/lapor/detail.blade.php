@extends('layouts.admin')

@section('content')
    <div class="box box-danger">
        <div>
            <center>
                <h4 class="box-title">
                    @if($gangguan)
                        {{ $gangguan->getAsal() }}
                    @endif
                </h4>
            </center>
        </div>
        <div class="box-body table-responsive no-padding">
            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <td class="col-md-3" style="text-align: right"><b>Jenis Layanan</b></td>
                    <td>{{ $gangguan->jenis()->first()->nama_jenis }}</td>
                </tr>
                <tr class="form-group has-error">

                    <td class="col-md-3" style="text-align: right"><b>Kategori Gangguan</b></td>
                    <td>{{ $gangguan->kategori()->first()->nama_kategori }}</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right">
                        @if($gangguan->id_jenis == 1)
                            @if($gangguan->id_jar_atau_app == 1)
                                <b>Lokasi</b>
                            @else
                                <b>Lokasi Wifi ID</b>
                            @endif
                        @else
                            <b>Nama Aplikasi</b>
                        @endif
                    </td>
                    <td>
                        @if($gangguan->id_jenis == 1)
                            @if($gangguan->id_app_atau_jar == 1)
                                {{ $gangguan->getAsal() }}
                            @else
                                {{ $gangguan->getAsal() }}
                            @endif
                        @else
                            {{ $gangguan->getAplikasi() }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right"><b>Media Pelaporan</b></td>
                    <td>{{ $gangguan->getMedia() }}</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right"><b>Nama Pelapor</b></td>
                    <td>{{ $gangguan->pelapor()->first()->nama }}.</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right"><b>No Tracking</b></td>
                    <td>{{ $gangguan->no_track }}.</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right"><b>Info Tambahan</b></td>
                    <td>{{ ucfirst($gangguan->detail_info) }}.</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right"><b>Waktu Pelaporan</b></td>
                    <td>
                        {{ $gangguan->created_at->format('H:i') }} WIB | {{ $gangguan->getCreatedAt()->format('j F Y') }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><a class=" pull-right btn btn-default" href="#penanganan" data-toggle="modal" data-target="#penanganan"><i class="fa fa-cogs"></i> Penanganan</a></td>
                </tr>
                </tbody>
            </table>
            <div class="modal fade" id="penanganan">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <center><h4 class="modal-title"><i class="fa fa-info"></i>nfo</h4></center>
                        </div>
                        <div class="modal-body">
                            Pilih jenis penanganan yang akan dilakukan!
                        </div>
                        <div class="modal-footer">
                            <table class="table">
                                <tr>
                                    <td style="text-align: right">
                                        <form role="form" method="POST" action="{{ route('petugas.online.view',$gangguan->id) }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id_gangguan" value="{{ $gangguan->id }}">
                                            <input type="hidden" name="id_status" value="2">
                                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-globe"></i> online</button>
                                        </form>
                                    </td>
                                    <td style="text-align: left">
                                        <form role="form" method="POST" action="{{ route('petugas.offline.view',$gangguan->id) }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id_gangguan" value="{{ $gangguan->id }}">
                                            <input type="hidden" name="id_status" value="3">
                                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-wrench"></i> offline</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
    </div>
@endsection
