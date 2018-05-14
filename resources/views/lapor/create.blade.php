@extends('layouts.simalin')

@section('content')
    <section class="content-header hidden-sm hidden-xs">
        <h1>
            Lapor Gangguan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> SiMALIN</a></li>
            <li class="active"><a href="#">Lapor Gangguan</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="box box-widget">
                    <form class="form-horizontal" role="form" method="post" action="{{ route('konfirmasi-lapor-gangguan') }}">
                        {{ csrf_field() }}
                        <div class="box-header with-border">

                        </div>
                    <div class="box-header with-border">
                        <div class="form-group{{ $errors->has('id_jenis') ? ' has-error' : '' }}">
                            <label for="id_jenis" class="col-md-4 control-label">Permasalahan</label>
                            <div class="col-md-6">
                                <select name="id_jenis" id="id_jenis" class="form-control jgangguan" value="{{ old('id_jenis') }}" required>
                                    <option disabled="true" selected="true">- Jenis Gangguan -</option>
                                    @forelse($jgangguan as $jgangguan)
                                        <option value="{{ $jgangguan->id }}">{{ $jgangguan->nama_jenis }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                @if ($errors->has('id_jenis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_jenis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('id_app_jar') ? ' has-error' : '' }}">
                            <label for="id_app_jar" class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <select name="id_app_jar" id="id_app_jar" class="form-control jappjar" value="{{ old('id_app_jar') }}" required>
                                    <option value="0" disabled selected>- Pilihan -</option>
                                </select>

                                @if ($errors->has('id_app_jar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('id_app_jar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="box-header with-border">
                        <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                            <label for="kategori" class="col-md-4 control-label">Kategori</label>
                            <div class="col-md-6">
                                <select name="kategori" id="kategori" class="form-control jappkat" value="{{ old('kategori') }}" required>
                                    <option disabled="true" selected="true">- Pilihan -</option>
                                </select>

                                @if ($errors->has('kategori'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kategori') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="box-header with-border">
                        <div class="form-group{{ $errors->has('detil_info') ? ' has-error' : '' }}">
                            <label for="detil_info" class="col-md-4 control-label">Info Tambahan</label>
                            <div class="col-md-6">
                                    <textarea name="detil_info" id="detil_info" class="form-control" value="{{ old('detil_info') }}" required>
                                    </textarea>
                                @if ($errors->has('detil_info'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('detil_info') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4"></label>
                            <div class="col-md-6 pull-right">
                                <button type="submit" class="btn btn-default btn-sm">
                                    <i class="fa  fa-arrow-circle-right"> Selanjutnya</i>
                                </button>
                            </div>
                        </div>
                    </div>
                        <div class="box-footer with-border">
                            @if(Auth()->user()->id_asal == 1)

                            @else
                                <small style="color: red">*</small>
                                <small>
                                    Lokasi gangguan Jaringan SKPD, secara otomatis diatur sesuai asal SKPD pelapor.<br>
                                </small>
                                <small style="color: red">*</small>
                                <small>
                                    Lokasi gangguan Aplikasi Kota Payakumbuh, secara otomatis diatur sesuai asal SKPD pelapor.<br>
                                </small>
                                <small style="color: red">*</small>
                                <small>
                                    Semua form harus diisi.
                                </small>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{ url('/assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(document).on('change','.jgangguan', function () {
                    //console.log('its change');

                    var id_jenis=$(this).val();
                    //console.log(id_jenis);
                    var div=$(this).parents();
                    var op="";
                    var opKat="";

                    switch (id_jenis){
                        case '1' : $.ajax({
                            type:'get',
                            url:'{!! URL::to('data-jaringan') !!}',
                            data:{'id':id_jenis},
                            success:function (data) {
                                //console.log('success');
                                //console.log(data);
                                //console.log(data);
                                op+='' +
                                    '<option value="0" selected disabled>- Pilihan -</option>';
                                for(i=0;i<data.length;i++){
                                    op+='<option value="'+data[i].id+'">'+data[i].nama_jaringan+'</option>';
                                }
                                div.find('.jappjar').html("");
                                div.find('.jappjar').append(op);
                            },
                            error:function () {

                            }
                        });
                        $.ajax({
                            type:'get',
                            url:'{!! URL::to('data-kategori-jaringan') !!}',
                            data:{'id':id_jenis},
                            success:function (data) {
                                //console.log('success');
                                opKat+='<option value="0" selected disabled>- Pilihan -</option>';
                                for(i=0;i<data.length;i++){
                                    opKat+='<option value="'+data[i].id+'">'+data[i].nama_kategori+'</option>';
                                }
                                div.find('.jappkat').html("");
                                div.find('.jappkat').append(opKat)

                            }
                        });
                            break;
                        case '2' : $.ajax({
                            type:'get',
                            url:'{!! URL::to('data-aplikasi') !!}',
                            data:{'id':id_jenis},
                            success:function (data) {
                                //console.log('success');
                                //console.log(data);
                                //console.log(data);
                                op+='<option value="0" selected disabled>- Pilihan -</option>';
                                for(i=0;i<data.length;i++){
                                    op+='<option value="'+data[i].id+'">'+data[i].nama_aplikasi+'</option>';
                                }
                                div.find('.jappjar').html("");
                                div.find('.jappjar').append(op);

                            },
                            error:function () {

                            }
                        });
                            $.ajax({
                                type:'get',
                                url:'{!! URL::to('data-kategori-aplikasi') !!}',
                                data:{'id':id_jenis},
                                success:function (data) {
                                    //console.log('success');
                                    opKat+='<option value="0" selected disabled>- Pilihan -</option>';
                                    for(i=0;i<data.length;i++){
                                        opKat+='<option value="'+data[i].id+'">'+data[i].nama_kategori+'</option>';
                                    }
                                    div.find('.jappkat').html("");
                                    div.find('.jappkat').append(opKat)

                                }
                            });
                            break;
                    }

                });
            });
        </script>
    </section>
@endsection
