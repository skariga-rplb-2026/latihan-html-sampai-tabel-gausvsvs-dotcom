<!DOCTYPE html>
<html>

<head>
    <title>Registrasi Peserta Kursus</title>
</head>

<body>

    <h2>Registrasi Peserta Kursus</h2>

    <?php
    if (isset($_POST['submit'])) {
        $nama = trim($_POST['nama']);
        $email = trim($_POST['email']);
        $kursus = isset($_POST['kursus']) ? $_POST['kursus'] : [];

        $error = false;

        if (empty($nama)) {
            echo "<span style='color:red'>Nama harus diisi</span><br>";
            $error = true;
        }

        if (empty($email)) {
            echo "<span style='color:red'>Email harus diisi</span><br>";
            $error = true;
        }

        if (empty($kursus)) {
            echo "<span style='color:red'>Pilih minimal 1 kursus</span><br>";
            $error = true;
        }

        if (!$error) {
            $kursus_str = implode(",", $kursus);
            header("Location: registrasi.php?nama=$nama&kursus=$kursus_str");
            exit();
        }
    }
    ?>

    <form method="post" action="">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"></td>
            </tr>

            <tr>
                <td>Nama Kursus:</td>
                <td>
                    <input type="checkbox" name="kursus[]" value="csharp"> C# (Rp1.000.000)<br>
                    <input type="checkbox" name="kursus[]" value="javascript"> JavaScript (Rp500.000)<br>
                    <input type="checkbox" name="kursus[]" value="perl"> Perl (Rp800.000)<br>
                    <input type="checkbox" name="kursus[]" value="php"> PHP (Rp1.100.000)<br>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

</body>

</html>