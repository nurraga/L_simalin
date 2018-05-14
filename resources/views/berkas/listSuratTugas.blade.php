@extends('layouts.admin')

@section('content')
    <div class="box" style="border-top-color: #2a3b48">
        <div class="box-body no-padding">
            <table class="table table-striped table-responsive">
                <tr>
                    <th>Lokasi Gangguan</th>
                    <th>Jenis Layanan</th>
                    <th>Kategori</th>
                    <th>PDF</th>
                </tr>
                <tbody>
                @forelse($gangguan as $gangguan)
                    <tr>
                        <td>{{ $gangguan->getLokasiGangguan() }}</td>
                        <td>{{ $gangguan->Jenis()->first()->nama_jenis }}</td>
                        <td>{{ $gangguan->Kategori()->first()->nama_kategori }}</td>
                        <td><a href="{{ route('pdf.surat.laporan',$gangguan->no_track) }}" class="btn btn-default btn-xs"><i class="fa fa-print"></i> Cetak</a></td>
                    </tr>
                @empty
                    <br>
                    <center>Tidak ada surat tugas tersedia.</center>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
