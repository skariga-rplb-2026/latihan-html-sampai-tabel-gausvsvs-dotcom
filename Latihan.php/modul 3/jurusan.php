<?php
$jurusan = $_POST["jurusan"];
switch ($jurusan){
    case "TI":
        echo "Jurusan Anda Teknik Informatika <br/>";
        break;
    case "SI":
        echo "Jurusan Anda Sitem Informasi";
        break;
    case "MI":
        echo "Jurusan Anda Manajemen Informatika <br/>";
        break;
    case "TK":
        echo "Jurusan Anda Teknik Komputer <br/>";
        break;
    case "KA":
        echo "Jurusan Anda Komputer Akuntansi <br/>";
        break;
    default : 
    echo "Jurusan tidak ada <br/>";
}
$nilai = $_POST["angka"];
echo "Nilai Anda = . $nilai . <br/>";

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