@extends('layouts.admin')

@section('content')
    <div class="box box-success">
        <div class="box-body no-padding">
            <table class="table table-striped table-responsive">
                <tr>
                    <th class="pull-right">Kode</th>
                    <th>Lokasi Gangguan</th>
                    <th>Jenis Layanan</th>
                    <th>Kategori</th>
                    <th></th>
                </tr>
                <tbody>
                @forelse($gangguan as $item)
                    <tr>
                        <td class="pull-right">{{ $item->no_track }}</td>
                        <td>{{ $item->getLokasiGangguan() }}</td>
                        <td>{{ $item->Jenis()->first()->nama_jenis }}</td>
                        <td>{{ $item->Kategori()->first()->nama_kategori }}</td>
                        <td><a href="{{ route('detail.hasil',$item->id) }}" class="btn btn-success btn-xs">Info Laporan</a></td>
                    </tr>
                @empty
                    <br>
                    <center>Tidak Ada Laporan yang telah diatasi.</center>
                @endforelse
                </tbody>
            </table>
            <center>{{ $gangguan->links() }}</center>
        </div>
    </div>
@endsection
