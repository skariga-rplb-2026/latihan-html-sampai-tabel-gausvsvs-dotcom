<?php
require_once 'koneksiakad.php';
function bacaMtKuliah($sql){
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);
    if(!$hasil){
        die("Query Error : " . mysqli_error($koneksi));
    }
    if(mysqli_num_rows($hasil) == 0){
        mysqli_close($koneksi);
        return null;
    }
    $i = 0;
    while($baris = mysqli_fetch_assoc($hasil)){
        $data[$i]['kode'] = $baris['kode'];
        $data[$i]['nama'] = $baris['nama'];
        $data[$i]['sks'] = $baris['sks'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function tambahMtKuliah($kode, $nama, $sks){
    $koneksi = koneksiAkademik();
    $sql = "INSERT INTO matakuliah(kode,nama,sks)
            VALUES('$kode','$nama','$sks')";
    $hasil = 0;
    if(mysqli_query($koneksi,$sql)){
        $hasil = 1;
    }
    mysqli_close($koneksi);
    return $hasil;
}

function hapusMtKuliah($kode){
    if($kode == "") return 0;

    $koneksi = koneksiAkademik();
    $sql = "DELETE FROM matakuliah WHERE kode='$kode'";
    $hasil = 0;

    if(mysqli_query($koneksi,$sql)){
        $hasil = 1;
    }

    mysqli_close($koneksi);
    return $hasil;
}
function cariMkDariKode($kode){
    $koneksi = koneksiAkademik();
    $sql = "SELECT * FROM matakuliah WHERE kode='$kode'";
    $data = bacaMtKuliah($sql);
    return $data;
}
function ubahMtKuliah($kode,$nama,$sks){
    $koneksi = koneksiAkademik();
    $sql = "UPDATE matakuliah 
            SET nama ='$nama',
                sks='$sks'
            WHERE kode='$kode'";

    if(mysqli_query($koneksi,$sql)){
        return true;
    }else{
        die(mysqli_error($koneksi));
    }
}
?>