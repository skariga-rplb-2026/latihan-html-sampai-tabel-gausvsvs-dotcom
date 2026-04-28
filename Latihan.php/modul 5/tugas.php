<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <h2>Data Barang</h2>
    <hr style="height: 1px; margin-left: 0; width:60%;">
    <form action="desain.php" method="post">
    Nama Barang<br>
    <input type="text" name="nama" size="20"> <br>
    Jenis<br>
            <select name="jenis" id="" class="dropdown">
            <option value="">****PILIH****</option>
            <option value="PC" >PC Komputer</option>
            <option value="LP">Laptop</option>
            <option value="PR">Peripheral</option>
            <option value="SP">Smart Phone</option>
            <option value="IP">I-Pad</option>
        </select>
        <br>
    Nomor Seri<br>
    <input type="number" name="nomor" size="20"> <br>
    Merk<br>
    <input type="text" name="merk"><br>
    Negara Pembuat<br>
    <input type="text" name="negara"><br>

    <fieldset style="width:55%;">
    <legend>Tanggal Pembuatan</legend>
        Tgl
        <select name="tanggal">
            <?php
            for ($hari=1;$hari<=31;$hari++) {
                $htgl = str_pad($hari,2,"0",STR_PAD_LEFT);
                echo "<option value='$htgl'>$htgl</option>";
            }
            ?>
        </select>
        bulan
        <select name="bulan">
            <?php
            for ($bulan=1;$bulan<=12;$bulan++) {
                $bln = str_pad($bulan,2,"0",STR_PAD_LEFT);
                echo "<option value='$bln'>$bln</option>";
            }
            ?>
        </select>
        tahun
        <select name="tahun">
            <?php
            $tahun_sekarang = date("Y");
            $tahun_awal = $tahun_sekarang-20;
            $tahun_akhir = $tahun_sekarang;
            for($tahun=$tahun_akhir;$tahun>=$tahun_awal;$tahun--){
                echo "<option value='$tahun'>$tahun</option>";
            }
            ?>
        </select>
    </fieldset>
    Harga Barang<br>
    Rp. <input type="number" name="harga"><br>

    Jumlah Stok<br>
    <input type="number" name="stok"><br>
    <hr style="height: 1px; margin-left: 0; width:60%;">
    <input type="reset" value="RESET">
    <input type="submit" value="KIRIM">
    </form>
</body>
</html>