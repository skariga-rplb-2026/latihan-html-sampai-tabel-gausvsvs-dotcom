<?php
$nominal = isset($_POST["nominal"])? $_POST["nominal"] : 0;
$format = number_format($nominal, 2, ",", ".");
echo "format nominal : Rp. $format";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMANGKA</title>
</head>
<body>
    <form avtion="#" method="POST">
        nominal Rp. <input type="text" name="nominal"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>