<?php


$conn = mysqli_connect("localhost", "root", "", "db_login");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah_siswa($data) {
    global $conn;
    $nisn = htmlspecialchars($data["nisn"]);
    $nis = htmlspecialchars($data["nis"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $id_kelas = htmlspecialchars($data["id_kelas"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $level = htmlspecialchars($data["level"]);
    $id_spp = htmlspecialchars($data["id_spp"]);

    $query = "INSERT INTO tabel_user
                VALUES('','$nisn' ,'$nis' , '$username', '$password', '$id_kelas', '$alamat', '$no_telp', '$level', '$id_spp')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_petugas($data) {
    global $conn;
    $id_petugas = htmlspecialchars($data["id_petugas"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $nama_petugas = htmlspecialchars($data["nama_petugas"]);
    $level = htmlspecialchars($data["level"]);
   
    $query = "INSERT INTO tabel_petugas
                VALUES('','$id_petugas' ,'$username', '$password', '$nama_petugas', '$level')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>