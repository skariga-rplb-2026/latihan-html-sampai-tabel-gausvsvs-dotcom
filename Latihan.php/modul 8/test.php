<?php

require_once 'crudmMhs.php';

$data = bacaSemuaMhs("SELECT * FROM mahasiswa");

?>
<table border="1">
<tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Kelamin</th>
    <th>Jurusan</th>
</tr>

<?php

foreach($data as $mhs){

    echo "
    <tr>
        <td>{$mhs['nim']}</td>
        <td>{$mhs['nama']}</td>
        <td>{$mhs['kelamin']}</td>
        <td>{$mhs['jurusan']}</td>
    </tr>
    ";
}

?>

</table>
