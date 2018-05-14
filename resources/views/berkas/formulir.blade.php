<style>
    @page { margin: 40px; }
    body { margin: 40px; }

    table {
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
        font-size: 16px;
    }

</style>

<html>
<head>
    <title>SiMALIN Formulir</title>
</head>
<body onload="window.print();">
<center style="font-size: 18px">FORMULIR</center>
</br>
<center style="font-size: 18px">TINDAK LANJUT LAYANAN</center>
</br>
<center style="font-size: 18px">GANGGUAN
    @if($gangguann->first()->id_jenis==1)
        JARINGAN
    @else
        APLIKASI
    @endif
        PEMERINTAH KOTA PAYAKUMBUH</center>
<br>
<br>
<p style="font-size: 14px"><strong>Riwayat Laporan Gangguan</strong></p>
@foreach($gangguann as $gangguan)
    <table width="100%">
        <tr>
            <td width="120" style="padding-left: 6px; padding-top: 3px" height="28px">Nama Pelapor</td>
            <td width="12px" style="text-align: center">:</td>
            <td style="padding-left: 12px">{{ ucwords($gangguan->pelapor()->first()->nama) }}</td>
        </tr>

        <tr>
            @if($gangguan->pelapor()->first()->id_asal == 1)
                <td width="120" style="padding-left: 6px; padding-top: 3px" height="28px">Asal Laporan</td>
            @else
                <td width="120" style="padding-left: 6px; padding-top: 3px" height="28px">OPD</td>
            @endif
            <td width="12px" style="text-align: center">:</td>
            <td style="padding-left: 12px">{{ ucwords($gangguan->getAsal()) }}</td>
        </tr>

        <tr>
            <td width="120" style="padding-left: 6px; padding-top: 3px" height="28px">Waktu Pelaporan</td>
            <td width="12px" style="text-align: center">:</td>
            <td style="padding-left: 12px">{{ ucwords($gangguan->created_at->hour) }}:{{ ucwords($gangguan->created_at->minute) }} WIB | {{ $gangguan->getCreatedAt()->format('j F Y') }}</td>
        </tr>
        <tr>
            <td width="120" style="padding-left: 6px; vertical-align: top; padding-top: 3px">Media Pelaporan</td>
            <td width="12px" style="text-align: center; vertical-align: top">:</td>
            <td style="padding-left: 12px; padding-top: 6px; padding-bottom: 3px; padding-right: 12px">
                <div class="row">
                    <input type="checkbox" {{ $gangguan->hasMedia(1) ? 'checked' : '' }} style="vertical-align: bottom"> SiMALIN<br>
                    <input type="checkbox" {{ $gangguan->hasMedia(2) ? 'checked' : '' }} style="vertical-align: bottom"> Telpon<br>
                    <input type="checkbox" {{ $gangguan->hasMedia(3) ? 'checked' : '' }} style="vertical-align: bottom"> SMS<br>
                    <input type="checkbox" {{ $gangguan->hasMedia(4) ? 'checked' : '' }} style="vertical-align: bottom"> Laporan Langsung<br>
                    <input type="checkbox" {{ $gangguan->hasMedia(5) ? 'checked' : '' }} style="vertical-align: bottom"> Email<br>
                    <input type="checkbox" {{ $gangguan->hasMedia(6) ? 'checked' : '' }} style="vertical-align: bottom"> Media Sosial<br>
                    <input type="checkbox" {{ $gangguan->hasMedia(7) ? 'checked' : '' }} style="vertical-align: bottom"> Surat<br>
                    <input type="checkbox" {{ $gangguan->hasMedia(8) ? 'checked' : '' }} style="vertical-align: bottom"> Dll <div style="border-bottom: 2px dotted; margin-left: 45px"></div><br>
                </div>
            </td>
        </tr>
        @if($gangguan->id_jenis==1)
            <tr>
                <td width="120" style="padding-left: 6px; vertical-align: top; padding-top: 3px">Jaringan</td>
                <td width="12px" style="text-align: center; vertical-align: top">:</td>
                <td style="padding-left: 12px">{{ $gangguan->getSkpd() }}</td>
            </tr>
        @else
            <tr>
                <td width="120" style="padding-left: 6px; vertical-align: top; padding-top: 3px">Aplikasi</td>
                <td width="12px" style="text-align: center; vertical-align: top">:</td>
                <td style="padding-left: 12px">{{ $gangguan->getAplikasi() }}</td>
            </tr>
        @endif
        <tr>
            <td width="120" style="padding-left: 6px; vertical-align: top; padding-top: 3px">Kategori Laporan Gangguan</td>
            <td width="12px" style="text-align: center; vertical-align: top">:</td>
            <td style="padding-left: 12px; padding-top: 6px; padding-bottom: 3px; padding-right: 12px">
                <div class="row">
                    @if($gangguan->id_jenis==1)
                        <input type="checkbox" {{ $gangguan->hasKategori(1) ? 'checked' : '' }} style="vertical-align: bottom"> Kerusakan Perangkat<br>
                        <input type="checkbox" {{ $gangguan->hasKategori(2) ? 'checked' : '' }} style="vertical-align: bottom"> Tidak bisa akses internet<br>
                        <input type="checkbox" {{ $gangguan->hasKategori(3) ? 'checked' : '' }} style="vertical-align: bottom"> Tidak ada jaringan<br>
                        <input type="checkbox" {{ $gangguan->hasKategori(4) ? 'checked' : '' }} style="vertical-align: bottom"> Kehilangan Perangkat<br>
                        <input type="checkbox" {{ $gangguan->hasKategori(5) ? 'checked' : '' }} style="vertical-align: bottom"> Force Majure (Bencana Alam)<br>
                        <input type="checkbox" {{ $gangguan->hasKategori(9) ? 'checked' : '' }} style="vertical-align: bottom"> Dll <div style="border-bottom: 2px dotted; margin-left: 45px"></div><br>
                    @else
                        <input type="checkbox" {{ $gangguan->hasKategori(6) ? 'checked' : '' }} style="vertical-align: bottom"> Aplikasi crash<br>
                        <input type="checkbox" {{ $gangguan->hasKategori(7) ? 'checked' : '' }} style="vertical-align: bottom"> Data tidak tersimpan<br>
                        <input type="checkbox" {{ $gangguan->hasKategori(8) ? 'checked' : '' }} style="vertical-align: bottom"> Data Tidak tampil<br>
                        <input type="checkbox" {{ $gangguan->hasKategori(9) ? 'checked' : '' }} style="vertical-align: bottom"> Dll <div style="border-bottom: 2px dotted; margin-left: 45px"></div><br>
                    @endif
                </div>
            </td>
        </tr>
    </table>
    <br>
    <p style="font-size: 14px"><strong>Tindak Lanjut Laporan Gangguan</strong></p>
    <table width="100%">
        <tr>
            <td width="120" style="padding-left: 6px; padding-top: 3px" height="28px">Asal Laporan</td>
            <td width="12px" style="text-align: center">:</td>
            <td style="padding-left: 12px" colspan="3">{{ ucwords($gangguan->getAsal()) }}</td>
        </tr>
        <tr>
            <td width="120" style="padding-left: 6px; vertical-align: top; padding-top: 3px">Nama Petugas</td>
            <td width="12px" style="text-align: center; vertical-align: top">:</td>
            <td style="padding-left: 12px; padding-top: 10px; padding-bottom: 12px; padding-right: 12px" colspan="3">
                @foreach($gangguan->admin as $index => $admin)
                    {{ $index+1 }}. {{ ucwords($admin->nama) }}<br>
                @endforeach
            </td>
        </tr>
        <tr>
            <td width="120" style="padding-left: 6px; padding-top: 3px" height="28px">Waktu Tindak Lanjut</td>
            <td width="12px" style="text-align: center">:</td>
            <td style="padding-left: 12px" colspan="3">{{ $gangguan->getCurrentDate()->format('l/j F Y') }}</td>
        </tr>
        <tr>
            <td width="120" style="padding-left: 6px; vertical-align: top; padding-top: 3px">Hasil Perbaikan</td>
            <td width="12px" style="text-align: center; vertical-align: top">:</td>
            <td style="padding-left: 6px; padding-top: 40px; padding-bottom: 12px; padding-right: 30px" colspan="3">
                <div class="row">
                    <div style="border-bottom: 2px dotted; margin-left: 20px"></div><br><br>
                    <div style="border-bottom: 2px dotted; margin-left: 20px"></div><br><br>
                    <div style="border-bottom: 2px dotted; margin-left: 20px"></div><br><br>
                    <div style="border-bottom: 2px dotted; margin-left: 20px"></div><br><br>
                    <div style="border-bottom: 2px dotted; margin-left: 20px"></div><br>
                </div>
            </td>
        </tr>
        <tr>
            <td width="120" style="padding-left: 6px; vertical-align: top; padding-top: 3px">Saran/Masukan/Kritik OPD</td>
            <td width="12px" style="text-align: center; vertical-align: top">:</td>
            <td style="padding-left: 6px; padding-top: 40px; padding-bottom: 12px; padding-right: 30px" colspan="3">
                <div class="row">
                    <div style="border-bottom: 2px dotted; margin-left: 20px"></div><br><br>
                    <div style="border-bottom: 2px dotted; margin-left: 20px"></div><br><br>
                    <div style="border-bottom: 2px dotted; margin-left: 20px"></div><br>
                </div>
            </td>
        </tr>
        <tr>
            <td width="120" style="padding-left: 6px; vertical-align: top; padding-top: 3px">Penilaian Layanan dari OPD</td>
            <td width="12px" style="text-align: center; vertical-align: top">:</td>
            <td style="padding-left: 12px; padding-top: 6px; padding-bottom: 12px; padding-right: 12px" colspan="3">
                <div class="row">
                    <input type="checkbox" style="vertical-align: bottom"> Memuaskan<br>
                    <input type="checkbox" style="vertical-align: bottom"> Cukup Memuaskan<br>
                    <input type="checkbox" style="vertical-align: bottom"> Kurang Memuaskan<br>
                    <input type="checkbox" style="vertical-align: bottom"> Buruk<br>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div style="text-align: center">
                    <div>
                        Pelapor
                    </div><br><br><br><br>
                    <div>
                        ....................................
                    </div>
                </div>
            </td>
            <td colspan="2">
                <div style="text-align: right">
                    <br>
                    <div style="padding-right: 60px">
                        Payakumbuh, {{ $gangguan->getCurrentDate()->format('j F Y') }}
                    </div></br>
                    <div style="padding-right: 75px">
                        Koordinator Lapangan
                    </div><br><br><br>
                    <div style="padding-right: 75px">
                        ....................................
                    </div><br>
                </div>
            </td>
        </tr>
    </table>
@endforeach
</body>
</html>