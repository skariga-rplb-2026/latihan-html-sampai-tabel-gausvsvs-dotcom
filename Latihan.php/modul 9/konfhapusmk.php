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
    <title>Konfirmasi Hapus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color:#f5f3ff;
        }

        .box{
            width:400px;
            margin:auto;
            margin-top:120px;
            background:white;
            padding:25px;
            border-radius:10px;
            text-align:center;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

<div class="box">

    <h3 class="mb-4">Yakin ingin menghapus data?</h3>

    <!-- HAPUS -->
    <a href="proshapusmk.php?kode=<?php echo $kode; ?>" 
       class="btn btn-danger me-2">
        Hapus
    </a>

    <!-- BATAL -->
    <a href="tampilmk.php" 
       class="btn btn-primary">
        Batal
    </a>

</div>

</body>
</html>