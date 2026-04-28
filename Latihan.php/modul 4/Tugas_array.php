<?php
$data = [
    ["nama" => "Siti", "Mapel" => "Matematika", "Nilai" => "90", "Grade" => "A"],
    ["nama" => "Ani", "Mapel" => "Bahasa Inggris", "Nilai" => "73", "Grade" => "C"],
    ["nama" => "Edo", "Mapel" => "Informatika", "Nilai" => "86", "Grade" => "B"],
    ["nama" => "Beni", "Mapel" => "Bahasa Inggris", "Nilai" => "93", "Grade" => "A"],
    ["nama" => "Udin", "Mapel" => "Informatika", "Nilai" => "75", "Grade" => "C"],
    ["nama" => "Agni", "Mapel" => "Matematika", "Nilai" => "88", "Grade" => "B"],
];
//echo json_encode($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array</title>
</head>

<body>
    Pilih kursus :
    <form action="" method="GET">
        <?php
        if (isset($_GET['Mapel'])) {
            $filter = $_GET['Mapel'];
        } else {
            $filter = "Semua";
        }
        ?>
        <select name="Mapel" id="" onchange="this.form.submit()">
            <option value="" <?php echo ($filter == "Semua" || $filter == "") ? "selected" : "" ?>>Semua</option>
            <option value="Bahasa Inggris" <?php echo ($filter == "Bahasa Inggris") ? "selected" : ""; ?>>Bahasa Inggris</option>
            <option value="Matematika" <?php echo ($filter == "Matematika") ? "selected" : ""; ?>>Matematika</option>
            <option value="Informatika" <?php echo ($filter == "Informatika") ? "selected" : ""; ?>>Informatika</option>
        </select>
    </form>
    <br>
    <table width="400" border="1">
        <tr>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        <?php
        $dataTampil = [];
        if (isset($_GET['Mapel'])) {
            $filter = $_GET['Mapel'];
            if ($filter == "") {
                $dataTampil = $data;
            } else {
                foreach ($data as $d) {
                    if ($d["Mapel"] == $filter) {
                        $dataTampil[] = $d;
                    }
                }
            }
        } else {
            $dataTampil = $data;
        }
        $gradeColor = [
            "A" => "#b3ffe2",
            "B" => "#f1fabe",
            "C" => "#fcaaaa"
        ];

        foreach ($dataTampil as $d) {
            $warna = $gradeColor[$d["Grade"]];
            echo "<tr style='background-color:$warna'>";
            echo "<td>" . $d["nama"] . "</td>";
            echo "<td>" . $d["Mapel"] . "</td>";
            echo "<td>" . $d["Nilai"] . "</td>";
            echo "<td>" . $d["Grade"] . "</td>";
            echo "</tr>";
        }
        $total = 0;
        $jumlah = count($dataTampil);

        foreach ($dataTampil as $d){
            $total += $d["Nilai"];
        }

        $rata = ($jumlah > 0) ? $total / $jumlah : 0;

        echo "<tr>";
        echo "<td colspan='4'><b>Rata-rata: " . number_format($rata,2) . "</b></td>";
        echo "</tr>";

        ?>
    </table>
</body>

</html>