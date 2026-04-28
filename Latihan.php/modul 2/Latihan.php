<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latihan PHP</h1>
    <?php 
    echo "HELLO PHP!!!";
    ?>
    <?php
    $a = 20;
    $b = 5;
    $c = $a * $b;
    $d = $c / $b;
    $e = $d-$b;
    
    echo "$c \t $d \t $e";
    echo "<br />";
    //contoh penggunaan
    $a = "Malang ";
    $a = $a. "Kotaku"; 
    echo "$a <br />";
    //contoh penggunaan .=
    $b = "SKARIGA ";
    $b .= "Sekolahku"; 
    echo " $b";
    ?>
    <?php
    $beli1 = "5apel";
    $beli2 = "7jeruk";
    $hasil1 = (int) $beli1 + (int) $beli2;
    $hasil2 =  $beli . $beli2;
    echo "Hasil1 : $hasil1 <br/> Hasil2 : $hasil2 <br />"; 
    ?>
    <?php
    $a = "5";
    $b = "2.5";
    $komentar = "Selamat Datang";

    echo ("Nilai variabel a adalah = $a <br>");
    //variabel bertipe integer
    echo ("Nilai variabel b adalah = $b <br>");
    //variabel bertipe real
    echo ("Nilai variabel komentar adalah = $komentar<br>");
    //variabel bertipe string

    $hasil = $a + $b;
    echo ("Hasil jumlah a dan b adalah = $hasil <br>");
    //variabel bertipe double

    $nama = "SKARIGA";
    $garis = "=========================================";

    echo "<p>";
    echo $garis . "<br>";
    echo $komentar . " Di Lab " . $nama . ". <br>Belajar dengan giat ya. <br>";
    echo $garis . "<br>";
    ?>
    <?php
    $ia = 4; // decimal
    $ib = -20; // decimal negatif
    $ic = 0232; // octal
    $id = 0x5DF; // hexadecimal
    $jumlah = $ia + 3;

    // Single quoted
    echo 'single quoted <br />';
    echo 'Budi berkata, "I\'ll do the PHP code" <br />'; 
    echo 'PHP ini terletak di C:\\php\ <br />';
    echo 'Variabel seperti $jumlah tidak akan ditulis valuenya <br />';

    echo '====================================<br/>';

    // Double quoted
    echo "double quoted <br />";
    echo "Budi berkata, 'I\"ll do the PHP code' <br />"; 
    echo "PHP ini terletak di C:\php\<br />";
    echo "Variabel \$jumlah mempunyai value $jumlah <br/>";
    ?>
</body>
</html>