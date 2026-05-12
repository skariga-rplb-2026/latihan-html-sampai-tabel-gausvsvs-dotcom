<?php

function koneksiAkademik(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "diana_akdemik";

    $koneksi = mysqli_connect($servername, $username, $password, $dbname);

    if(!$koneksi){
        die("Koneksi gagal : " . mysqli_connect_error());
    }

    return $koneksi;
}
?>