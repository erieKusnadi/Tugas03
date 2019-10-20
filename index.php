<?php
include "koneksi.php";
include "header.php";
?>

<br>
<center>
<h2>Data User</h2>
<br>
<!-- tambah produk -->
<a href="tambah.php" class="btn btn-primary">Tambah Data</a>
</center>

<style>
    tbody > tr:nth-child(3n+1) > td, tbody > tr:nth-child(3n+1) > th {
        
    }
    table{
        width: 80%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }
    thead tr {
        background-color: #36c2ff;
    }
</style>

<br>
<br>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>TTL</th>
			<th>Alamat</th>
			<th>Foto</th>
			</tr>
	</thead>
	<body>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM user");
		?>
		<?php while($pecah = $ambil->fetch()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['id']; ?></td>
			<td><?php echo $pecah['username']; ?></td>
			<td><?php echo $pecah['password']; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td><?php echo $pecah['ttl']; ?></td>
			<td><?php echo $pecah['alamat']; ?></td>
			<td>
				<img src="./foto/<?php echo $pecah['foto']; ?>" width="100">
			</td>
			
		</tr>
		<?php $nomor++; ?>
	<?php } ?>

	</body>
</table>

