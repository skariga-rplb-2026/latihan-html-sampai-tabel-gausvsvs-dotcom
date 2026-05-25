<?php
include ('crudmk.php');

$kode = isset($_GET['kode']) ? $_GET['kode'] : "";

$data = cariMkDariKode($kode);

$nama = "";
$sks = "";

if($data != null){
    $nama = $data[0]['nama'];
    $sks = $data[0]['sks'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Ubah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color:#f5f3ff;
        }
        .box{
            background:white;
            padding:30px;
            border-radius:15px;
            width:400px;
            margin:auto;
            margin-top:100px;
            text-align:center;
            box-shadow:0 4px 10px rgba(0,0,0,0.1);
        }
        h3{
            color:#4f46e5;
        }
        .btn-ok{
            background:#ef4444;
            color:white;
        }
        .btn-ok:hover{
            background:#dc2626;
            color:white;
        }
        .btn-batal{
            background:#6366f1;
            color:white;
        }
        .btn-batal:hover{
            background:#4f46e5;
            color:white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Ubah Matakuliah</h2>
    <form method="post" action="prosesUbah.php">
        <div class="mb-3">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control"value="<?php echo $kode; ?>" readonly >
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control"value="<?php echo $nama; ?>">
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control"value="<?php echo $sks; ?>">
        </div>

<div class="">
    <h3>Pengubahan Data Matakuliah</h3>
    <p>
        Yakin ingin mengubah data dengan KODE
        <b><?php echo $kode; ?></b> ?
    </p>
        <input type="hidden" name="kode" value="<?php echo $kode; ?>">
        <button type="submit" name="ok" class="btn btn-ok">
            UBAH
        </button>
    <a href="ubahMk.php" class="btn btn-batal">
        Batal
    </a>
    </form>
</div>
</body>
</html>