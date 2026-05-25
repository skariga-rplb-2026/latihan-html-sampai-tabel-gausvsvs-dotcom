<?php
include('crudmk.php');

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$sks  = $_POST['sks'];

$hasil = hapusMtKuliah($kode);

if($hasil){
    header("Location: ubahMk.php?pesan=hapus");
}else{
    header("Location: ubahMk.php?pesan=gagal");
}
exit;
?>