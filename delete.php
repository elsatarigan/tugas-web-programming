<?php
include_once "DB.php";
$id=$_GET['nim'];
$hapus=mysqli_query($koneksi , "DELETE FROM mahasiswa WHERE nim=$id");
if($hapus) {
header("location:Read.php");
}else{
echo "Hapus Gagal";
}
?>