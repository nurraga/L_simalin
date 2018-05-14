@extends('layouts.simalin')

@section('content')
    <div class="container">
        <div class="row col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: right">
                    List SKPD
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        @forelse($asals as $asal)
                            {{ $asal->nama_asal }}
                        @empty
                            Tidak Ada Data.
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
