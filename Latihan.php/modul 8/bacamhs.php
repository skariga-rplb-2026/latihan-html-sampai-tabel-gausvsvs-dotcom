<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diana_akdemik"; 
//data membuka konksi db
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}else{
    echo "Koneksi Berhasil";
} 
?>
<!DOCTYPE html>
<html>
<head>
<title>Daftar Mahasiswa</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
<table border="1">
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Jurusan</th>
</tr> <!-- tabel -->
<?php

$sql = "select * from mahasiswa"; //mengambil data dari db
$hasil = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($hasil) > 0) {

while($baris = mysqli_fetch_assoc($hasil)) {
$nim = $baris['nim'];
$nama = $baris['nama'];
$kelamin = $baris['kelamin'];
$jurusan = $baris['jurusan'];
echo "
<tr>
<td>$nim</td>
<td>$nama</td>
<td>$kelamin</td>
<td>$jurusan</td>
</tr>
";
}
} else {
echo "Tidak ada record";
}
mysqli_close($koneksi);
?>
</table>
</body>
</html>