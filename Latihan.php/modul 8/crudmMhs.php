<?php
require_once 'koneksiakad.php'; //menghubungkan ke koneksi 
function bacaSemuaMhs($sql){ // membaca db yang ada
    $data=array(); //digunakan untuk menampung hasil data
    $koneksi=koneksiAkademik(); //membuka koneksi db
    $hasil=mysqli_query($koneksi,$sql); //menjalankan perintah sql ke db

      if(!$hasil){
        die("Query error : " . mysqli_error($koneksi));
    } //mengecek apakah query error

    if(mysqli_num_rows($hasil)==0){ 
        mysqli_close($koneksi);
        return null;
    } //mengecek apakah data kosong, mebghitung baris query, if 0 koneksi database ditutp 
    $i=0;
while($baris=mysqli_fetch_assoc($hasil)){ //mengambil data 1/1
$data[$i]['nim']= $baris['nim'];
$data[$i]['nama'] = $baris['nama'];
$data[$i]['kelamin'] = $baris['kelamin'];
$data[$i]['jurusan'] = $baris['jurusan'];
$i++; //menyimpan db ke array 
}
mysqli_close($koneksi); //menutup koneksi
return $data; //mengembalikan data
}
function bacaMhsPerjurusan($jurusan){ 
$sql = "SELECT * FROM mahasiswa WHERE jurusan='$jurusan'"; //mengambil data mahasiswa sesuai jurusan

    $data = bacaSemuaMhs($sql);

    return $data;
}
function cariMhsDariNim($nim){
    $sql = "SELECT * FROM mahasiswa WHERE nim='$nim'"; //mengambil data mahasiswa sesuai nim

    $data = bacaSemuaMhs($sql); //mengambil data mahasiswa di simpan ke array di kembalikan ke data

    return $data;
}
?>