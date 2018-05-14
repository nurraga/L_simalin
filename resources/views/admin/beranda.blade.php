@extends('layouts.admin')

@section('content')
    <div class="box box-danger">
        <div class="box-body no-padding">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th style="text-align: center">No</th>
                        <th>Lokasi Gangguan</th>
                        <th>Jenis Layanan</th>
                        <th>Kategori</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($gangguan as $item)
                        <tr class="bg-red">
                            <td style="text-align: center">{{ $i++ }}</td>
                            <td>{{ $item->getLokasiGangguan() }}</td>
                            <td>{{ $item->Jenis()->first()->nama_jenis }}</td>
                            <td>{{ $item->Kategori()->first()->nama_kategori }}</td>
                            <td><a href="{{ route('detail.laporan',$item->id) }}" class="btn btn-default btn-xs"><i class="fa fa-info"></i>nfo</a></td>
                        </tr>
                    @empty
                        <br>
                        <center>Tidak Ada Laporan Gangguan Terbaru.</center>
                    @endforelse
                </tbody>
            </table>
            <center>{{ $gangguan->links() }}</center>
        </div>
    </div>
@endsection