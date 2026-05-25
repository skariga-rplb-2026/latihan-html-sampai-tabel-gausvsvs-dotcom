<?php
include('crudmk.php');

$keyword = "";

if (isset($_GET['kode'])) {
    $keyword = $_GET['kode'];
    $data = cariMkDariKode($keyword);
} else {
    $data = bacaMtKuliah("SELECT * FROM matakuliah");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>DATA MATAKULIAH</title>
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

        .btn-Ubah {
            background-color: #7744ef;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-Ubah {
            margin-right: 8px;
        }

        .btn-Ubah:hover {
            background-color: #4f46e5;
        }

        .btn-Hapus {
            background-color: #8c5ef7d0;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-Hapus:hover {
            background-color: #6366f1;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">DATA MATA KULIAH</h2>
        <a href="tambahmk.php" class="btn btn-primary mb-3">
            Tambah Mata Kuliah
        </a>
        <form method="GET">
            <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode">
            <button class="btn btn-primary mt-2">Cari</button>
        </form>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Sks</th>
                    <th>Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($data == null) {
                    echo "<tr><td colspan='4'>Data tidak ditemukan</td></tr>";
                } else {
                    foreach ($data as $mk) {
                        $kode = $mk['kode'];
                        $nama = $mk['nama'];
                        $sks  = $mk['sks'];

                        echo "
                        <tr>
                            <td>$kode</td>
                            <td>$nama</td>
                            <td>$sks</td>
                        <td>
                            <a href='konfUbah.php?kode=$kode' class='btn-Ubah'>Ubah</a>
                            <a href='konfhapusmk.php?kode=$kode' class='btn-Hapus'>Hapus</a>
                            </td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>