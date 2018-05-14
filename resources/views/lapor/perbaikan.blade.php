@extends('layouts.admin')

@section('content')
    <div class="box" style="border-top-color: #2a3b48">
        <div>
            <center>
                <h4 class="box-title">
                    @if($lgangguan)
                        {{ $lgangguan->getAsal() }}
                    @endif
                </h4>
            </center>
        </div>
        <div class="box-body">
            <table class="table table-condensed">
                @if($lgangguan)
                    <tr>
                        <td width="40%" style="text-align: right">Kode Tracking</td>
                        <td width="1px">:</td>
                        <td>{{ $lgangguan->no_track }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Asal Laporan</td>
                        <td width="1px">:</td>
                        <td>{{ $lgangguan->getAsal() }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Jenis Gangguan</td>
                        <td width="1px">:</td>
                        <td>{{ $lgangguan->Jenis()->first()->nama_jenis }}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Lokasi</td>
                        <td width="1px">:</td>
                        <td>{{ $lgangguan->getLokasiGangguan() }}</td>
                    </tr>
                    <form role="form" method="post" action="{{ route('update.simpan') }}">
                        {{ csrf_field() }}
                        <tr>
                            <td style="text-align: right">Hasil Perbaikan</td>
                            <td width="1px">:</td>
                            <td>
                                <input type="hidden" name="id_gangguan" value="{{ $lgangguan->id }}">
                                <textarea name="hasil" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right"></td>
                            <td width="1px"></td>
                            <td>
                                <button type="submit" class="btn btn-success btn-xs">
                                    Simpan
                                </button>
                            </td>
                        </tr>
                    </form>
                @endif
            </table>
        </div>
    </div>
@endsection
