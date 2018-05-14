@foreach($gangguan as $gangguan)
    <html>
    <style>
        @page { margin: 20px; margin-top: 35px }
        body { margin: 0px; }
    </style>
    <head>
        <title>SiMALIN Surat</title>
        <?php
        $image_kota_path = '/assets/img/lg-kota-pyk.jpg';
        $image_kominfo_path = '/assets/img/lg-kominfo.png';
        ?>
        <table width="90%">
            <tr>
                <td width="25%" align="center" style="vertical-align: top"></td>
                <td align="center" width="100%">
                    <center style="font-size: 22px"><strong>PEMERINTAH KOTA PAYAKUMBUH</strong></center>
                    <center style="font-size: 22px"><strong>DINAS KOMUNIKASI DAN INFORMATIKA</strong></center>
                    </br>
                    Jl. Veteran Kompleks Perkantoran Balai Kota Telepon : 0752 26237
                </td>
                <td align="center" width="10%" style="vertical-align: top"></td>
            </tr>
        </table>
        <hr style="margin-left: 50px; margin-right: 50px" align="right">
    </head>
    <body onload="window.print();">
    <br>
    <center><strong><u>Surat Tugas</u></strong></center>
    <br/>
    <center>No: {{ $gangguan->id }}/{{ $gangguan->no_track }}/NO{{ $gangguan->created_at->minute }}</center>
    <br><br>
    <p style="margin-left: 100px">Menugaskan kepada:</p>
    @foreach($gangguan->admin as $index => $admin)
        <table style="margin-left: 200px">
            <br>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ ucwords($admin->nama) }}</td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td>{{ $admin->nip }}</td>
            </tr>
        </table>
    @endforeach
    <p style="margin-left: 100px">Untuk melaksanakan perbaikan "{{ ucwords($gangguan->Jenis()->first()->nama_jenis) }}" dengan rincian sebagai berikut:</p>
    <br>
    <table width="100%" style="margin-right: 50px">
        <tr>
            <td width="200" style="text-align: right">No Gangguan</td>
            <td width="1" style="text-align: right">:</td>
            <td>{{ $gangguan->no_track }}</td>
        </tr>
        <tr>
            <td style="text-align: right; vertical-align: top">Lokasi Gangguan</td>
            <td width="1" style="vertical-align: top">:</td>
            <td>{{ $gangguan->getAsal() }}.</td>
        </tr>
        <tr>
            <td style="text-align: right;">Permasalahan</td>
            <td width="1" style="text-align: right">:</td>
            <td>
                {{ ucfirst($gangguan->Kategori()->first()->nama_kategori) }}.
                {{ ucfirst($gangguan->detail) }}.
            </td>
        </tr>
    </table>
    <table width="100%" style="margin-right: 50px">
        <tr>
            <td style="width: 100%;text-align: right;padding-right: 30px">
                <br><br><br>
                {{ $gangguan->getCurrentDate()->format('l, j F Y') }},
            </td>
        </tr>
        <tr>
            <td style="width: 100%;text-align: right;padding-right: 40px">
                Koordinator Lapangan<br><br><br><br><br>
                <div>
                    ....................................
                </div>
            </td>
        </tr>
    </table>
    </body>

    </html>

@endforeach