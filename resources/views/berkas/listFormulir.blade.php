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
                @forelse($gangguan as $item)
                    @if($item->id_status==2 or $item->id_status==3)
                        <tr>
                            <td>{{ $item->getLokasiGangguan() }}</td>
                            <td>{{ $item->Jenis()->first()->nama_jenis }}</td>
                            <td>{{ $item->Kategori()->first()->nama_kategori }}</td>
                            <td><a href="{{ route('pdf.formulir.laporan',$item->no_track) }}" class="btn btn-default btn-xs"><i class="fa fa-print"></i> Cetak</a></td>
                        </tr>
                    @else
                        {{ $i==NULL }}
                    @endif
                @empty

                @endforelse
                @if($i==NULL)
                    <br>
                    <center>Tidak ada formulir tersedia.</center>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
