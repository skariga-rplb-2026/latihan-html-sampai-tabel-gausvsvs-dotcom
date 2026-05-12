<?php
require_once 'crudmMhs.php'; //mengambil file 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cari Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylecari2.css"> /
</head>

<body>
    <div class="container mt-5"> <!--boostrap letak tengah-->
        <h2 class="mb-4">Cari Mahasiswa</h2>
        <form method="GET">
            <div class="mb-3">
                <label class="form-label">
                    NIM :
                </label>
                <input type="text"  name="nim" class="form-control" placeholder="Masukkan NIM">
            </div> <!--user memasukan nim-->
            <button type="submit" class="btn btn-indigo">
                Cari
            </button>
        </form>

        <?php
        if (isset($_GET['nim'])) { //megecek data nim ada 
            $nim = $_GET['nim']; //mengambil nilai nim
            $data = cariMhsDariNim($nim); //memanggil mahasiswa berdasarkan nim
            if ($data == null) {
                echo "<div class='alert alert-indigo mt-4'>NIM $nim tidak ada</div>";
            } else {
                foreach ($data as $mhs) {
                    echo " 
            <div class='card card-indigo mt-4' style='width:350px;'>
                <div class='card-header'>
                    Data Mahasiswa
                </div> 
                <div class='card-body'>
                    <b>NIM :</b> {$mhs['nim']} <br>
                    <b>Nama :</b> {$mhs['nama']} <br>
                    <b>Kelamin :</b> {$mhs['kelamin']} <br>
                    <b>Jurusan :</b> {$mhs['jurusan']}
                </div>
            </div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>