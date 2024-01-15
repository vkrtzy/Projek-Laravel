<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Cetak Data Rujukan</title>
</head>
<table align="center">
    <tr>
        <td>
            <img src="{{ public_path('assets/img/logokabupaten.png') }}" alt="logoKopSurat" style="width: 100px; margin-right: 20px">
        </td>
        <td align="center">
            <font size="4">WEBSITE PELAYANAN KESEHATAN</font><br>
            <font size="4">KECAMATAN BANDAR LAKSAMANA</font><br>
            <font size="3">Bandar Laksamanan, Kabupaten Bengkalis 28762</font><br>
            <font size="3">Telepon : +6281223439908</font><br>
            <font size="2">Laman : https://bengkalissehat.id</font><br>
        </td>
    </tr>
</table>
<table align="center">
    <tr>
        <td style="width: 1000px">
            <hr>
        </td>
    </tr>
</table>

<body>
    <div class="form-group">
        <p align="center" style="font-size: 16pt; margin-top: 10px"><b>Surat Rujukan</b></p>
        <table class="table table-striped" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>No. KTP</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Kode Pos</th>
            </tr>
            @foreach ($data as $rujukan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $rujukan->name }}</td>
                    <td>{{ $rujukan->noktp }}</td>
                    <td>{{ $rujukan->alamat }}</td>
                    <td>{{ $rujukan->kecamatan }}</td>
                    <td>{{ $rujukan->desa }}</td>
                    <td>{{ $rujukan->kodepos }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
