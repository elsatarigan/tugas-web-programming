<?php
//mengambil program koneksidb, dengan menggunakan fungsi include3. include "KoneksiDB.php";
//Membuat SQL untuk menampilkan data
$sqltampil = "SELECT * FROM mahasiswa";
//Melakukan proses query ke basisdata
$query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");8. $nomor = 1;//untuk membuat nomor untuk di tabel hasil query9. ?>
<h2>Data Mahasiswa STMIK Royal</h2>
<!-- Disini kita buat link untuk menambahkan data, dimana link ini nantinya akan memanggil form tambah data. -->
<a href="FormTambah.php">Tambah Data</a>
<table width="100%" border="1">
<thead>
<tr>
<th>Nim</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
<th>Agama</th>
<th>Email</th>
<th>Password</th>
</tr>
</thead>
<tbody>
<?php
//Jika data lebih dari 1, maka kita bisa menampilkan denganmenggunakan perintah perulangan seperti (for,while, do-while,foreach)
//mysqli_fetch_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data array asosiatif.
while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
<!-- untuk menampilkan data, kita gunakan tag pandek php yaitusptdibawah -->
<td><?= $nomor ?></td>
<td><?= $data['nim'] ?></td>
<td><?= $data['nama'] ?></td>
<td><?= $data['alamat'] ?></td>
<td><?= $data['jkl'] ?></td>
<td><?= $data['email'] ?></td>
<td><?= $data['pwd'] ?></td>
<td>
<a href="FormEdit.php?nim=<?=$data['nim']?>"> Edit</a> | <ahref="Delete.php?nim=<?=$data['nim']?>">Delete</a>
</td>
</tr>
<?php $nomor++;
} //akhir dari perulangan ?>
</tbody>
</table>