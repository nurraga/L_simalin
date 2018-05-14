@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Input Data Detail Transaksi Toko</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Detail Transaksi Toko
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="kode_transaksi" id="kode_transaksi" placeholder="Kode Transaksi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" name="pelanggan_id">
                                    <option value="0" selected disabled>- Pelanggan -</option>
                                    @foreach($user as $pelanggan)
                                        <option value="{{$pelanggan->id}}">{{$pelanggan->nama}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <table class="table table-bordered table-responsive" id="tbdetail">
                            <thead>
                            <tr>
                                <th class="col-md-3">Barang dan Satuan</th>
                                <th class="col-md-3">Harga</th>
                                <th class="col-md-3">Jumlah Barang</th>
                                <th>Sub Total</th>
                                <th>
                                    <a href="#" class="btn btn-flat tambah"><i class="fa fa-plus"></i></a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="row1">
                                <td>
                                    <select class="form-control barang" name="barang[]">
                                        <option value="0" selected disabled>- Pilihan -</option>
                                        @forelse($gangguan as $itemHarga)
                                            <option value="{{ $itemHarga->id_jar_atau_app }}">{{ $itemHarga->no_track }}</option>
                                        @empty

                                        @endforelse
                                    </select>
                                </td>
                                <td id="harga">
                                    <input type="text" class="form-control" id="harga" name="harga[]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="jumlah[]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="subtotal[]">
                                </td>
                                <td>
                                    <a class="btn btn-danger hapus" href="#">X</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="{{ url('/assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click','.tambah',function () {
            var table = document.getElementById('tbdetail');
            var row1 = document.getElementById('row1');
            var row = table.insertRow(0);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            cell1.innerHTML = '<select class="form-control barang" name="barang[]">'+
                '<option value="0" selected disabled>- Pilihan -</option>'+
                '@forelse($gangguan as $itemHarga)'+
                '<option value="{{ $itemHarga->id_jar_atau_app }}">'+
                '{{ $itemHarga->no_track }} '+
                '</option>'+
                '@empty'+

                '@endforelse';
            cell2.innerHTML = '<input type="text" class="form-control harga" id="harga" name="harga[]">';
            cell3.innerHTML = '<input type="text" class="form-control" name="jumlah[]">';
            cell4.innerHTML = '<input type="text" class="form-control" name="subtotal[]">';
            cell5.innerHTML = '<a class="btn btn-danger" href="#">X</a>';
            row1.after(row);
        });
        $(document).on('change','.barang',function () {
            var idbarang = $(this).val();
            $.ajax({
                type:'get',
                url:'{!! URL::to('/data-jaringan') !!}',
                data:{'id':idbarang},
                success:function (data) {
                    for(i=0;i<data.length;i++)
                    {
                        if(data[i].id==idbarang)
                        {
                            //console.log(data[i]);
                            var hrg = document.getElementById('harga');
                            hrg.value = data[i].nama_jaringan;
                            console.log(hrg.value);
                        }
                    }
                }
            });
        });
    });
</script>