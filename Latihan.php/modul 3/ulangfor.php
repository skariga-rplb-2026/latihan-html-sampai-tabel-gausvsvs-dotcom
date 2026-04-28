<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulang For</title>
</head>
<body>
    <?php
    $awal = $_POST["awal"];
    $akhir = $_POST["akhir"];
    $lanjutkan = $_POST["lanjut"];
    for ($i=$awal ; $i<=$akhir; $i++){
        if($i==$lanjutkan){
            continue ;
        }
        echo"<br/> for ke $i . ";
    }
    ?>
</body>
</html>