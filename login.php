<?php 

require 'function.php';
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tabel_user WHERE username = '$username'");
    
    $result = mysqli_query($conn, "SELECT * FROM tabel_petugas WHERE username = '$username'");
    

    // cek username
    if( mysqli_num_rows($result) === 1 ){

        // cek password
        $row = mysqli_fetch_assoc($result);
        $level = $row["level"];
        if(($password === $row["password"] && $level == "admin")){
            // set session 
            $_SESSION["login"] = "admin";

            header("Location: admin.php"); exit;
        }

        else if(($password === $row["password"] && $level == "petugas")){
            // set session 
            $_SESSION["login"] = "petugas";

            header("Location: petugas.php"); exit;
        }
        else if(($password === $row["password"] && $level == "siswa")){
            // set session 
            $_SESSION["login"] = "siswa";

            header("Location: siswa.php"); exit;
        }

    }

    $error = true;

}


?>

<!DOCTYPE html>
<html>
<title>login</title>
<head>
    <title>halaman login</title>
    <style>
    .countainer {
        display: block;
        margin-top: 100px;
        margin-left: 550px;
        background-color: pink;
        width: 400px;
        height: 250px;
        border-radius: 3px;
        box-shadow: 10px 10px 10px;
        text-align: center;
    }
    table{
        margin-left: 76px;
    }
</style>
</head>
<body>

<div class="countainer">
<h1>Login</h1>
<?php if( isset($error)) : ?>
<p1 style="color:red; font-style:italic">username / password salah!</p1>
<?php endif; ?>
<form action="" method="POST">
    <table>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password"></td>
    </tr>
    <tr>
            <td>Level</td>
            <td>:</td>
            <td>
            <select name="level">
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>
                <option value="siswa">Siswa</option>
            </select>
            </td>
        </tr>
    <tr>
        <td colspan="3"><input type="submit" name="login"></td>
    </tr>
    </table>
</form>
<p class="text-daftar">Belum punya akun siswa? <a  href="register_siswa.php">Daftar sekarang!</a></p>
<p class="text-daftar">Belum punya akun petugas? <a  href="register_petugas.php">Daftar sekarang!</a></p>
</div>

</body>
</html>