<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Rujukan Kesehatan</title>
    <style>
        /* Gunakan gaya langsung untuk kontrol lebih spesifik */
        .bawah-kanan {
            position: absolute;
            bottom: 0;
            right: 0;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <table align="center">
        <tr>
            <td>
                <img src="{{ public_path('assets/img/logokabupaten.png') }}" alt="logoKopSurat" style="width: 100px; margin-right: 20px">
            </td>
            <td align="center">
                <font size="4">WEBSITE PELAYANAN KESEHATAN</font><br>
                <font size="4">KECAMATAN BANDAR LAKSAMANA</font><br>
                <font size="4">Bandar Laksamana, Kabupaten Bengkalis 28762</font><br>
                <font size="3">Telepon : +6281266416060</font><br>
                <font size="3">Laman : https://bandlaksehat.site</font><br>
            </td>
        </tr>
    </table>
    <div class="container">    
        <p>______________________________________________________________________</p>
    </div>

    <div class="container">
        <div class="content">
            <h3 class="mb-4 text-center text-decoration-underline">Surat Rujukan</h3>
            @foreach ($data as $hasil)
            <p>Dengan ini mohon pemeriksaan dan pengobatan lebih lanjut pada penderita:</p>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Nama</th>
                        <td>: {{ $hasil->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">No KTP</th>
                        <td>: {{ $hasil->noktp }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Keluhan</th>
                        <td>: {{ $hasil->keluhan }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Alamat</th>
                        <td>: {{ $hasil->alamat }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Kecamatan</th>
                        <td>: {{ $hasil->kecamatan }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Desa</th>
                        <td>: {{ $hasil->desa }}</td>
                    </tr><br>
                    <p>Dengan ini dinyatakan:</p>
                    <tr>
                        <th scope="row">Nomor Antrean</th>
                        <td>: {{ $hasil->noantrian }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Dokter</th>
                        <td>: {{ $hasil->dokter }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Ruangan</th>
                        <td>: {{ $hasil->ruangan }}</td>
                    </tr>

                </tbody>
            </table>
            @endforeach
        </div><br>

        <div class="footer">
            <p>Terima kasih atas kerjasama dan penggunaan layanan kesehatan kami. 
            Harap membawa surat rujukan ini saat berkunjung ke Puskesmas. <br>          
                Melakukan rujukan pada: 
                <?php
                    echo date("d F Y");
                ?></p>

            <br><br><br><br><br><br><br><br>
        </div>
        <table class="table">
                <tbody>
                    <tr>

                        <th scope="row">
                            <div class="ms-4">         
                                <img class="ms-5" src="{{ public_path('assets/img/ttd.png') }}" alt="tanda tangan" style="width: 50px">
                            </div>
                        </th>
                        <th class="text-end" scope="row">
                            <div class="me-3">                            
                                <img class="me-3" src="{{ public_path('assets/img/ttdkplpuskesmas.png') }}" alt="tanda tangan" style="width: 150px">
                            </div>
                        </th>
                        <tr>
                            <th scope="row">Alfarezy Irawan</th>
                            <th class="text-end" scope="row">Ners. Serikun, S.Kep,</th>
                        </tr>
                    </tr>
                    <tr>
                        <th scope="row">_____________________________</th>
                        <th class="text-end" scope="row">_____________________________</th>
                    </tr>
                    <tr>
                        <td>Tanda Tangan Petugas</td>
                        <td class="text-end">Tanda Tangan Kepala Puskesmas</td>
                    </tr>
                </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>