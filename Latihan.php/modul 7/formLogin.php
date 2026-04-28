<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
</head>

<body>
    <p>Form Login</p>

    <form method="POST" action="">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            if (empty($username)) {
                echo "<span style='color:red'>Username belum diisi</span><br>";
            }
            if ($username == "admin" && $password == "12345") {
                header("Location: welcome.php?user=$username");
                exit();
            }

            if (empty($password)) {
                echo "<span style='color:red'>Password belum diisi</span><br>";
            }

            if (!empty($username) && !empty($password)) {
                if ($username == "admin" && $password == "12345") {
                    header("Location: welcome.php?user=$username");
                    exit();
                } else {
                    echo "<span style='color:red'>Username atau Password salah</span><br>";
                }
            }
        }
        ?>

        <table>
            <tr>
                <td>User name:</td>
                <td><input type="text" name="username" size="30"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" size="30"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="OK"></td>
            </tr>
        </table>
    </form>

</body>

</html>