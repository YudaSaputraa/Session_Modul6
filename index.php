<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <br>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Login Gagal! Username atau Password salah!";
        } else if ($_GET['pesan'] == "logout") {
            echo "Anda berhasil Logout!";
        } else if ($_GET['pesan'] == "belum_login") {
            echo "Anda Harus login terlebih dahulu!";
        }
    }
    ?>
    <br>
    <br>
    <form action="cek_login.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="login"></td>
            </tr>
        </table>
    </form>
</body>

</html>