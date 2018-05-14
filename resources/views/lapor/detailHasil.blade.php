@extends('layouts.admin')

@section('content')
    <div class="box" style="border-top-color: #2a3b48">
        <div>
            <center>
                <h4 class="box-title">
                    @if($gangguan)
                        {{ $gangguan->getAsal() }}
                    @endif
                </h4>
            </center>
        </div>
        <div class="box-body no-padding">
            <table class="table table-responsive table-striped">
                <tbody>
                <tr>
                    <td class="col-md-3" style="text-align: right">Jenis Layanan</td>
                    <td>{{ $gangguan->jenis()->first()->nama_jenis }}</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right">Kategori Gangguan</td>
                    <td>{{ $gangguan->kategori()->first()->nama_kategori }}</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right">
                        @if($gangguan->id_jenis == 1)
                            @if($gangguan->id_jar_atau_app == 1)
                                Lokasi
                            @else
                                Lokasi Wifi ID
                            @endif
                        @else
                            Nama Aplikasi
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
                    <td class="col-md-3" style="text-align: right">Media Pelaporan</td>
                    <td>{{ $gangguan->getMedia() }}</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right">Nama Pelapor</td>
                    <td>{{ $gangguan->pelapor()->first()->nama }}.</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right">No Tracking</td>
                    <td>{{ $gangguan->no_track }}.</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right">Info Tambahan</td>
                    <td>{{ ucfirst($gangguan->detail_info) }}.</td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right">Waktu Pelaporan</td>
                    <td>
                        {{ $gangguan->created_at->format('H:i') }} WIB | {{ $gangguan->getCreatedAt()->format('j F Y') }}
                    </td>
                </tr>
                <tr>
                    <td class="col-md-3" style="text-align: right">Hasil Perbaikan</td>
                    <td class="callout callout-success">
                        Laporan selesai ditanggapi. {{ ucfirst($hasil->hasil) }}.
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
