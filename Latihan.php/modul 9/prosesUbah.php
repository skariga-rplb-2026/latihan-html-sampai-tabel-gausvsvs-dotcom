<?php
include('crudmk.php');

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$sks = $_POST['sks'];

$hasil = ubahMtKuliah($kode,$nama,$sks);

if($hasil){
    header("Location: tampilmk.php?pesan=ubah");
        exit;
}else{
    echo "Gagal mengubah data";
}
?>