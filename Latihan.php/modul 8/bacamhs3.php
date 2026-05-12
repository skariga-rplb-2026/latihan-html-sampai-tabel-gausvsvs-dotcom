<?php
include('crudmMhs.php'); //mengambil file crud
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Daftar Mahasiswa</h2>
        <?php
        echo "Pilih jurusan:";
        ?> 
        <br>

        <form method="GET"> <!--mengirim data pilihan ke url-->
            <div class="btn-group" role="group" aria-label="PILIH JURUSAN">
                <input type="radio" class="btn-check" name="jurusan" id="mi" value="MI" autocomplete="off">
                <label class="btn btn-indigo" for="mi">MI</label>
                <input type="radio" class="btn-check" name="jurusan" id="ti" value="TI" autocomplete="off">
                <label class="btn btn-indigo" for="ti">TI</label>
                <input type="radio" class="btn-check" name="jurusan" id="si" value="SI" autocomplete="off">
                <label class="btn btn-indigo" for="si">SI</label>
                <input type="radio" class="btn-check" name="jurusan" id="tk" value="TK" autocomplete="off">
                <label class="btn btn-indigo" for="tk">TK</label>
                <input type="radio" class="btn-check" name="jurusan" id="ka" value="KA" autocomplete="off">
                <label class="btn btn-indigo" for="ka">KA</label>
            </div> <!--user mimilih jurusan-->
            <br> 
            <button class="btn btn-indigo mt-3">
                OK
            </button>
        </form>

        <?php
        if (isset($_GET['jurusan'])) { //mengecek jurusan yang dipilih
            $jurusan = $_GET['jurusan'];
            $sql = "SELECT * FROM mahasiswa WHERE jurusan='$jurusan'";
        } else {
            $sql = "SELECT * FROM mahasiswa";
        }

        $data = bacaSemuaMhs($sql);

        if ($data == null) {
            echo "Tidak ada data mahasiswa";
        } else {
        ?>
            <table class="table table-bordered table-striped table-indigo mt-4">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($data as $mhs) {
                        $nim = $mhs['nim'];
                        $nama = $mhs['nama'];
                        $kelamin = $mhs['kelamin'];
                        $jurusan = $mhs['jurusan'];

                        echo "
                    <tr>
                        <td>$nim</td>
                        <td>$nama</td>
                        <td>$kelamin</td>
                        <td>$jurusan</td>
                    </tr>";
                    }
                    ?>
                </tbody>
            </table>

        <?php
        }
        ?>
    </div>
</body>
</html>