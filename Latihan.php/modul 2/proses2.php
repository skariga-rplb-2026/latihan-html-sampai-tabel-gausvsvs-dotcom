<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>

<h2>Hasil Input</h2>

<?php
// Tangkap data dari form
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

// Hitung total
$total = $harga * $jumlah;

// Hitung potongan 10%
$potongan = $total * 0.10;
$total_setelah_potongan = $total - $potongan;

// Tampilkan hasil
echo "Harga: " . $harga . "<br>";
echo "Jumlah: " . $jumlah . "<br>";
echo "Total: " . $total . "<br>";
echo "Total setelah potongan 10%: " . $total_setelah_potongan . "<br>";
?>

</body>
</html>