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
		padding-bottom: 267px;
	}

	h1{
		margin-top: 10px;
	}

</style>
</head>
<body>
	<?php require_once '../structure/u_header.php';
	require_once '../koneksi.php';
    $iduser = $_SESSION['id'];
    $data = mysqli_query($koneksi,"SELECT * FROM user WHERE nama='$iduser' ")or die(mysqli_error($koneksi));
    $baris = mysqli_fetch_array($data);
 ?>
	<form action="prosesprofil.php?nama=<?php echo $nama; ?>" method="post">
	<h1 align="center">User Profil</h1><br>
	<table class="table table-borderless">
		<tr>
			<th>DATA DIRI</th>
			<th>KETERANGAN</th>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input class="form-control" type="text" name="nama" value="<?php echo $_SESSION['nama'];?>"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input class="form-control" type="text" name="username" value="<?php echo $_SESSION ['username'];?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input class="form-control" type="email" name="email" value="<?php echo $_SESSION ['email'];?>"></td>
		</tr>
	</table><br>
 	<center><input class="btn btn-success" type="submit" name="simpan" value="SIMPAN">
	 <a href="../guest/profil.php" class="btn btn-danger">Batal</a>
	 </center>
	 </form>
 	<?php require_once '../structure/footer.php'; ?>
</body>
</html>