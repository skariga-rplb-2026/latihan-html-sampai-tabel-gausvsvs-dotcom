<?php 
require_once 'crudmk.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Matakuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
</head>

<body>
<div class="container mt-5"> 

    <h2 class="mb-4">Cari Mata Kuliah</h2>

    <form method="GET">
        <div class="mb-3">
            <label class="form-label">KODE :</label>
            <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode">
        </div>

        <button type="submit" class="btn btn-primary">
            Cari
        </button>
    </form>

<?php 
if(isset($_GET['kode']) && $_GET['kode'] != ""){
    
    $kode = $_GET['kode'];
    $data = cariMkDariKode($kode);

    if ($data == null) {
        echo "<div class='alert alert-warning mt-4'>Kode $kode tidak ada</div>";
    } else {
        foreach ($data as $mk) {
            echo " 
            <div class='card mt-4' style='width:350px;'>
                <div class='card-header'>
                    Data Mata Kuliah
                </div> 
                <div class='card-body'>
                    <b>Kode :</b> {$mk['kode']} <br>
                    <b>Nama :</b> {$mk['nama']} <br>
                    <b>Sks :</b> {$mk['sks']} <br>
                </div>
            </div>";
        }
    }
}
?>

</div>
</body>
</html>