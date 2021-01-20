<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>User Profile</title>
<style type="text/css">
	form{
		margin: 0;
		padding: 0;
		width: 100%;
		height: 100%;
		padding-bottom: 255px;
	}

	h1{
		margin-top: 10px;
	}
</style>
</head>
<body>
	<?php require_once '../structure/u_header.php';
	require_once '../koneksi.php'; ?>
	<form action="edit-profil.php" method="post">
	<h1>User Profil</h1>
	<br>
	<table class="table table-borderless table-sm">
		<thead>
		<tr>
			<th scope="col">DATA DIRI</th>
			<th scope="col">KETERANGAN</th>
		</tr>
		</thead>
		<tbody>
		<?php 
				//koneksi database
				require_once "../koneksi.php";
				//query database
				$iduser = $_SESSION['id'];
				$result = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$iduser'") or die(mysqli_error($koneksi));
				while ($baris = mysqli_fetch_array($result)) {?>
				<tr>
					<td>Nama</td>
					<td><?php echo $baris['nama'] ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo $baris['username'] ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $baris['email'] ?></td>
				</tr>
				<?php
			}
		 ?>
		</tbody>

	</table><br>
	<center>
	<a href="b_edit.php?nama=<?php echo $baris['nama'];?>"><button class="btn btn-success">Update</button></a>
	</center>
 	<?php require_once '../structure/footer.php'; ?>
</body>
</html>