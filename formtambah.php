<h2>Tambah Data Mahasiswa</h2>
<!-- tag form -->
<form action="save.php" method="POST">
<label>Nomor Induk Mahasiswa :</label>
<input type="text" name="nim" placeholder="Nomor Induk Mahasiswa" required>
<br>
<label>Nama Mahasiswa :</label>
<input type="text" name="nama" id="nama" placeholder="Nama Lengkap"required>
<br>
<label for="">Alamat :</label>
<input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required>
<br>
<label for="">Jenis Kelamin :</label>
<select name="jkl" id="jkl">
<option value="P" selected>PRIA</option>
<option value="W">WANITA</option>
</select>
<br>
<label for="">Agama :</label>
<select name="agama" id="agama">
<option value="IS" selected>ISLAM</option>
<option value="KP">KRISTEN PROTESTAN</option>
<option value="KK">KRISTEN KATHOLIK</option>
<option value="HND">HINDU</option>
<option value="BDH">BUDDHA</option>
<option value="KHC">KONG HU CU</option>
</select>
<br>
<label for="">Email :</label>
<input type="text" name="email" id="email" required>
<br>
<label for="">Password :</label>
<input type="number" name="pwd" id="pwd" required>
<br>
<button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form>