<?php 

require "function.php";
//koneksi ke DBSM
$conn = mysqli_connect("localhost", "root", "", "db_login");


if( isset($_POST["submit"]) ) {
   
    if( tambah_petugas($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditmbahkan!');
                document.location.href = 'login.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditmbahkan!');
                document.location.href = 'register.php';
            </script>
        ";
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Petugas</title>
</head>
<body>
    <div class="container">
        <h1>Login Petugas</h1>

        <form action="" method="post">
            <table>
                <tr>
                    <td>Id Petugas</td>
                    <td>:</td>
                    <td><input type="text" name="id_petugas"></td>
                </tr>
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
                    <td>Nama Petugas</td>
                    <td>:</td>
                    <td><input type="text" name="nama_petugas"></td>
                </tr>
                <tr>
            <td>Level</td>
            <td>:</td>
            <td>
            <select name="level">
                <option value="admin">Admin</option>
                <option value="petugas">Petugas</option>  
            </select>
            </td>
        </tr>
            </table>\
            <tr>
            <td colspan="3"><input type="submit" name="submit"></td>
        </tr>
        </form>
    </div>
</body>
</html>