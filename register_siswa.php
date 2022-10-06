<?php 

require "function.php";
//koneksi ke DBSM
$conn = mysqli_connect("localhost", "root", "", "db_login");


if( isset($_POST["submit"]) ) {
   
    if( tambah_siswa($_POST) > 0 ) {
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
<html>
<title>Registarsi Petugas</title>
<head><link rel="stylesheet" href="style.css"> </head>
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
<body>
<div class="countainer">
<h1>PENDAFTARAN SISWA</h1>

<form action="" method="POST">
    <table>
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td><input type="text" name="nisn"></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td>username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>id Kelas</td>
            <td>:</td>
            <td><input type="text" name="id_kelas"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td>:</td>
            <td><input type="text" name="no_telp"></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>:</td>
            <td>
            <select name="level">
                <option value="0">0</option>
                <option value="siswa">Siswa</option>  
            </select>
            </td>
        </tr>
        <tr>
            <td>ID SPP</td>
            <td>:</td>
            <td><input type="text" name="id_spp"></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>