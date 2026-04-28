<?php
$nama = $_GET['nama'];
$kursus = explode(",", $_GET['kursus']);

// harga tiap kursus
$harga = [
    "csharp" => 1000000,
    "javascript" => 500000,
    "perl" => 800000,
    "php" => 1100000
];

$total = 0;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Hasil Registrasi</title>
</head>

<body>

    <h3>Terimakasih data anda telah diterima.</h3>

    <p>Kursus yang anda pilih sebanyak <?php echo count($kursus); ?> buah yaitu:</p>

    <ul>
        <?php
        foreach ($kursus as $k) {
            echo "<li>" . ucfirst($k) . "</li>";
            $total += $harga[$k];
        }
        ?>
    </ul>

    <p>Biaya kursus sebesar Rp. <?php echo number_format($total, 0, ',', '.'); ?>,-</p>

</body>

</html>