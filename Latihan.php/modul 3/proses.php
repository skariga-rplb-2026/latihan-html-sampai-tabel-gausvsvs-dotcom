File Proses <hr/>
<?php
$nilai = $_POST["angka"];
echo "Nilai Anda = ". $nilai . "<br/";

if ($nilai > 100){
    echo "Nilai Kelebihan";
} elseif ($nilai > 70) {
    echo "Selamat Anda Lulus Ujian";
}elseif ($nilai >= 40){
    echo"Anda Harus Ujian Lagi";
}else{
    echo "Maaf,Gagal";
}
?>