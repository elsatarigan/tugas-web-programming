<?php
  //include koneksi
  include "DB.php";
  //buat sql
  $sql="INSERT INTO mahasiswa (nim, nama, alamat, jkl, agama, email, pwd, created_at, updated_at) VALUES ('22220092', 'Elsa Tarigan', 'Sei Silau Timur', 'WANITA', 'Kristen Protestan', 'elsatarigan1305@gmail.com', '1234567', '2024-04-22 10:17:52', '0000-00-00 00:00:00') ";
  //proses sql ke database
  $q=mysqli_query($koneksi,$sql)or die('SQL Error');
  if($q){
    echo "Data Berhasil Disimpan";
  }else{
    echo "Gagal Menyimpan Data!";
  }
?>