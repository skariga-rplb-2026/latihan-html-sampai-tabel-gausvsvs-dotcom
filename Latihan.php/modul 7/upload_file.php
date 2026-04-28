<?php
if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
} else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " KB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    $target = "unggah/" . $_FILES["file"]["name"];

    if (file_exists($target)) {
        echo $_FILES["file"]["name"] . " sudah ada.";
    } else {
        move_uploaded_file($_FILES["file"]["tmp_name"], $target);
        echo "File berhasil disimpan di: " . $target;
    }
}
?>