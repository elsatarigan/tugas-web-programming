<?php
require_once "DB.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jkl = $_POST['jkl'];
    $agama = $_POST['agama'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $sqlupdate = "UPDATE mahasiswa SET nama='$nama', 
    alamat='$alamat', jkl='$jkl', agama='$agama', email='$email', pwd='$pwd' WHERE nim='$nim'";
    if(mysqli_query($koneksi, $sqlupdate)) {
        echo "<script> alert ('Data Sudah Diupdate');
        window.location.assign('TampilData.php'); </script>";
    }
}