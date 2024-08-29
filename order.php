<?php
date_default_timezone_set('asia/jakarta');
$namaPelanggan = $_POST['namaPelanggan'];
$jumlahPesanan = $_POST['jumlahPesanan'];
$kodePaket = $_POST['kodePaket'];
number_format($hargaPaket = $_POST['hargaPaket'],2);
$namaPaket = $_POST['namaPaket'];
number_format($totalHarga = $hargaPaket * $jumlahPesanan,2);
number_format($pajak = 10/100 * $totalHarga,2);
$total_pajak = $pajak + $totalHarga;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <img src="gambar/logo hisana.png" height="150" width="150" alt="...">
                <h1>CALL US AT</h1>
                <p>08111 537 537</p>
                <h3>Hisana Fried Chicken</h3>
                <p class="text-center">-------------------------------------------------------------</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <table>
                    <tr>
                        <td>Atas Nama</td>
                        <td>:</td>
                        <td><?= $namaPelanggan; ?></td>
                    </tr>
                    <tr>
                        <td>Waktu Transaksi </td>
                        <td>:</td>
                        <td><?= date('d M Y h:i:s') ?></td>
                    </tr>
                </table>
                <p class="text-center">-------------------------------------------------------------</p>
                <table>
                    <tr>
                        <td>Nama Paket</td>
                        <td>:</td>
                        <td><?= $namaPaket; ?></td>
                    </tr>
                    <tr>
                        <td>Harga Paket </td>
                        <td>:</td>
                        <td>Rp<?= $hargaPaket; ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pesanan </td>
                        <td>:</td>
                        <td><?= $jumlahPesanan; ?></td>
                    </tr>
                    <tr>
                        <td>Total Harga </td>
                        <td>:</td>
                        <td>Rp<?= $totalHarga ?></td>
                    </tr>
                    <tr>
                        <td>Pajak</td>
                        <td>:</td>
                        <td>Rp<?= $pajak ?></td>
                    </tr>
                    <tr>
                        <td>Total Harga Dengan Pajak</td>
                        <td>:</td>
                        <td>Rp<?= $total_pajak ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12 bg-light">
                <table>
                    
                </table>
            </div>
        </div>
    </div>
</body>

</html>