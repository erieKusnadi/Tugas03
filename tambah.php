<?php
include "koneksi.php";
include "header.php";
?>

<h2>Tambah Data</h2>

<!-- form tambah produk -->
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Username</label>
		<div class="col-sm-4">
		<input type="text" class="form-control" name="username" required>
	</div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label">Password</label>
		<div class="col-sm-4">
		<input type="password" class="form-control" placeholder="min. 6 karakter" name="password" required>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Email</label>
		<div class="col-sm-4">
		<input type="email" class="form-control" name="email" required>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">TTL</label>
		<div class="col-sm-4">
		<input type="text" class="form-control" name="ttl" required>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Alamat</label>
		<div class="col-sm-4">
		<textarea class="form-control" name="alamat" rows="5" required></textarea>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label">Foto</label>
		<div class="col-sm-4">
		<input type="file" class="form-control" name="foto" required>
	</div>

		<div class="form-group">
	        <label class="col-sm-3 control-label">&nbsp;</label>
	        <div class="col-sm-6">
	        <input type="submit" name="simpan" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Akun">
	        <a href="index.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
	        </div>
	    </div>

	</form>

	<!-- input produk -->
	<?php
	if (isset($_POST['simpan']))
	{
		$namafoto = $_FILES['foto']['name'];
		$lokasifoto = $_FILES['foto']['tmp_name'];
		move_uploaded_file($lokasifoto, "./foto/".$namafoto);
		
		$koneksi->query("INSERT INTO user
			(username,password,email,ttl,alamat,foto) VALUES ('$_POST[username]','$_POST[password]','$_POST[email]','$_POST[ttl]','$_POST[alamat]','$namafoto')");
		
		echo "<div class='alert alert-info'>Data Tersimpan</div>";

	}
	?>