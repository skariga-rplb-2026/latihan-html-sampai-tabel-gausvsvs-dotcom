<html>
<head>
<title> Belajar PHP </title>
</head>
<body>
<?php
// tanda untuk memberikan komentar satu baris
echo "<h1>Selamat Datang..</h1>";
echo "Program PHPku yang pertama<br>";
/*
tanda untuk memberikan komentar
komentar ini lebih dari satu baris
*/
?>
</body>
</html>
<?php
$a = 20;
$b = 5;
$c = $a * $b;
$d = $c / $b;
$e = $d-$b;
echo "$c \t $d \t $e";
echo "<br />";
// Contoh penggunaan .
$a = "Yogyakarta ";
$a = $a."Kotaku";
echo "$a <br />";
// Contoh penggunaan .=
$b = "STMIK AKAKOM ";
$b .= "Kampusku";
echo "$b";
?>