@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: right">
                    SKPD
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="{{ route('simpan.asal') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('nama_asal') ? ' has-error' : '' }}">
                            <label for="nama_asal" class="col-md-4 control-label">Nama Asal</label>

                            <div class="col-md-6">
                                <input id="nama_asal" type="text" class="form-control" name="nama_asal" value="{{ old('nama_asal') }}" required autofocus>

                                @if ($errors->has('nama_asal'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('nama_asal') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-default" type="submit">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
