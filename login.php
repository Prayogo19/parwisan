<?php 
session_start(); //memulai session
include('koneksi.php');
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];

if ($op=='in') {
	$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
	if (mysqli_num_rows($sql) == 1) { //jika berhasil akan bernilai 1
		$query = mysqli_fetch_array($sql);
		$_SESSION['id'] = $query['id'];    
		$_SESSION['username'] = $query['username'];
		$_SESSION['nama'] = $query['nama'];
		$_SESSION['level'] = $query['level'];
		$_SESSION['email'] = $query['email'];

		if ($query['level']=='admin') {
			header("location: admin/index.php");
		} elseif ($query['level']=='guest') {
			header("location: guest/index.php");
		}
	}else{
		?>
		<script type="text/javascript">
			alert("Username atau Password tidak sesuai. Silahkan ulang kembali");
			document.location='index.php';
		</script>
		<?php
	}
}else if ($op=='out') {
	unset($_SESSION['username']);
	unset($_SESSION['level']);
	header("location:index.php");
}
 ?>