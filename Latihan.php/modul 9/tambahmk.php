<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Mata Kuliah</h2>
    <form method="post" action="prostambahmk.php">
        <div class="mb-3">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
    </form>
</div>
</body>
</html>