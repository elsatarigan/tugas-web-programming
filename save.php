<?php
//Ambil koneksi ke basisdata, karena data ini akan disimpan didalambasisdata.
require_once "KoneksiDB.php";
//cek form yang di kirim
if($_SERVER['REQUEST_METHOD']=="POST"){
//ambil data dari form, simpan dalam variabel
$nim=$_POST['nim']; //yg didalam tanda kutip harus sama dengan name diform
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jkl=$_POST['jkl'];
$agama=$_POST['agama'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
//buat SQL untuk simpan data
$sqlsave="INSERT INTO mahasiswa VALUES ('$nim','$nama','$alamat','$jkl','$agama','$email','$pwd')";
//Proses ke mysql server, menggunakan mysqli_query()
if(mysqli_query($koneksi,$sqlsave)){
//redirect ke halaman tampildata.php jika proses simpan berhasil
echo "<script> alert('Data sudah disimpan');
window.location.assign('TampilData.php'); </script>";
}
}