<?php
$angkaAcak = rand(1,200);
echo "Angka Acak : $angkaAcak </br>";

$pi = pi();
echo "Nilai pi ; $pi </br>";

$luas_lingkaran = $pi * 10;
echo "Luas lingakran yaitu $luas_lingkaran";

$menjadiPositif = abs(-10);
echo "-10 akan menjadi : $menjadiPositif </br>";

$pangkat = pow(2,2);
echo "2 pangkat 2 : $pangkat </br>";

$akar = sqrt(100);
echo "Akar angka 100 : $akar </br>";

$decimal = 123.456;
echo "akar decimal : $decimal </br>";

$pembulatan = floor($decimal);
echo "Pembulatan angka decimal ke bulat : $pembulatan </br>";

$pembulatanNaik = ceil($decimal);
echo "Pembulatan decimal ke bulat : $pembulatanNaik </br>";

$pendekatan = round($decimal,3);
echo "Pendekatan nilai : $pendekatan </br>";

?>