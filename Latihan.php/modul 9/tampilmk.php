<?php
include('crudmk.php');

if (isset($_GET['kode']) && $_GET['kode'] != "") {
    // MODE CARI
    $data = cariMkDariKode($_GET['kode']);
} else {
    // MODE NORMAL (SEMUA DATA)
    $sql = "SELECT * FROM matakuliah";
    $data = bacaMtKuliah($sql);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Status Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f3ff;
        }

        h2 {
            color: #4f46e5;
            font-weight: bold;
        }

        .table {
            background: white;
        }

        .table thead {
            background-color: #6366f1;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5">

        <?php
        if (isset($_GET['pesan']) && $_GET['pesan'] != "") {

            if ($_GET['pesan'] == "tambah") {
                echo "<div class='alert alert-success'>Data berhasil ditambahkan!</div>";
            } elseif ($_GET['pesan'] == "ubah") {
                echo "<div class='alert alert-success'>Berhasil diubah!</div>";
            } elseif ($_GET['pesan'] == "hapus") {
                echo "<div class='alert alert-danger'>Data berhasil dihapus!</div>";
            } elseif ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-warning'>Gagal menghapus data!</div>";
            }
        }
        ?>

        <h2 class="mb-4">DATA MATA KULIAH TERBARU</h2>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Sks</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (!empty($data)) {
                    foreach ($data as $mk) {
                        $kode = $mk['kode'];
                        $nama = $mk['nama'];
                        $sks  = $mk['sks'];

                        echo "
                    <tr>
                        <td>$kode</td>
                        <td>$nama</td>
                        <td>$sks</td>
                    </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Data tidak ditemukan</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="ubahMk.php" class="btn btn-primary">
            Kembali
        </a>

    </div>
</body>

</html>