@extends('layouts.admin')

@section('content')
    <div class="box box-widget">
        <div class="box-header">
            <h1 class="box-title">
                <i class="fa fa-info-circle"></i> Penanganan Online
            </h1>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table">
                <tr>
                    <td class="col-md-3" style="text-align: right"><b>Info:</b></td>
                    <td>Tindakan {{ strtolower($penanganan) }} akan dilakukan. Silakan pilih petugas untuk melakukan {{ strtolower($penanganan) }}.</td>
                </tr>
                <tr>
                    <td style="text-align: right"><b>Petugas:</b></td>
                    <td>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('penanganan.online.simpan') }}">
                            {{ csrf_field() }}
                                <div class="col-md-6">
                                    <select class="form-control" name="petugas[]">
                                        <option disabled selected value="0">
                                            - Pilihan Petugas -
                                        </option>
                                        @forelse($petugas as $admin)
                                            <option value="{{ $admin->id }}">
                                                {{ ucwords($admin->nama) }}
                                            </option>
                                        @empty
                                            Tidak Ada Petugas
                                        @endforelse
                                    </select>
                                    <a href="#" class="btn btn-flat btn-add-petugas"><i class="fa fa-plus"></i> Tambah Petugas</a>
                                </div>
                                @if ($errors->has('petugas[]'))
                                    <span class="help-block">
                                    <strong style="color: red">{{ $errors->first('petugas[]') }}</strong>
                                </span>
                                @endif
                            <div class="col-md-12">
                                <input type="hidden" name="id_status" value="2">
                                <input type="hidden" name="id_gangguan" value="{{ $id_gangguan }}">
                                <button type="submit" class="btn btn-default btn-sm col-md-offset-9">
                                    <i class="fa fa-check text-green"></i> Konfirmasi
                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <script src="{{ url('/assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script>
        $('.btn-add-petugas').on('click', function (f) {
            f.preventDefault();
            var template = '<br><select class="form-control" name="petugas[]">'+
                '<option>'+
                    '- Pilihan Petugas -'+
                '</option>'+
                '@forelse($petugas as $admin)'+
                    '<option value="{{ $admin->id }}">'+
                    '{{ ucwords($admin->nama) }}'+
                    '</option>'+
                '@empty'+
                    'Tidak Ada Petugas'+
                    '@endforelse'+
                    '</select>';
                    $(this).before(template);
        });
    </script>
@endsection
