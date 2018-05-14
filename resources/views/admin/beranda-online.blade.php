@extends('layouts.admin')

@section('content')
    <div class="box box-info">
        <div class="box-body no-padding">
            <table class="table table-striped table-responsive">
                <tr>
                    <th>Proses</th>
                    <th>Lokasi Gangguan</th>
                    <th>Jenis Layanan</th>
                    <th>Kategori</th>
                    <th>Update</th>
                </tr>
                <tbody>
                @forelse($gangguan as $item)
                    <tr>
                        <td class="progress active">
                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span>online</span>
                            </div>
                        </td>
                        <td>{{ $item->getLokasiGangguan() }}</td>
                        <td>{{ $item->Jenis()->first()->nama_jenis }}</td>
                        <td>{{ $item->Kategori()->first()->nama_kategori }}</td>
                        <td>
                            <a href="{{ route('update.gangguan',$item->id) }}" class="btn btn-success btn-xs">
                                Perbaikan
                            </a>
                        </td>
                    </tr>
                @empty
                    <br>
                    <center>Tidak ada data gangguan.</center>
                @endforelse
                </tbody>
            </table>
            <center>{{ $gangguan->links() }}</center>
        </div>
    </div>
@endsection
