<?php
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$nomor = $_POST['nomor'];
$merk = $_POST['merk'];
$negara = $_POST['negara'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$harga = $_POST['harga'];
$stok  = $_POST['stok'];
$kode_barang = [
    substr($nama, 0, 3),
    str_pad($nomor, 6, "0", STR_PAD_LEFT),
    substr($merk, 0, 3),
    substr($negara, 0, 3)
];
$kode = strtoupper(implode("/", $kode_barang));
$tanggal = date("l, d F Y", strtotime("$tahun-$bulan-$tanggal"));;
$jumlah = $harga * $stok;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Data Barang</h2>
    <table>
        </tr>
        <tr>
            <td>Kode</td>
            <td>:</td>
            <td><?php echo $kode ?></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><?php echo strtoupper($nama) ?></td>
        </tr>
        <tr>
            <td>Nomor Seri</td>
            <td>:</td>
            <td><?php echo $nomor ?></td>
        </tr>
                <tr>
            <td>Merk</td>
            <td>:</td>
            <td><?php echo $merk ?></td>
        </tr>
        <tr>
            <td>Buatan Dari</td>
            <td>:</td>
            <td><?php echo $negara ?></td>
        </tr>
            <tr>
            <td>Tanggal Buat</td>
            <td>:</td>
            <td><?php echo $tanggal ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><?php echo "Rp " . number_format($harga, 2, ',', '.') ?></td>
        </tr>
            <tr>
            <td>Jumlah Stok</td>
            <td>:</td>
            <td><?php echo $stok ?></td>
        </tr>
            <tr>
            <td>Total Harga</td>
            <td>:</td>
            <td><?php echo "Rp " . number_format($jumlah, 2, ',', '.') ?></td>
        </tr>
    </table>
</body>

</html>