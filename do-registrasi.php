<?php 
session_start();
if (isset($_POST['nama']) && $_POST['nama']) {
	require_once 'koneksi.php'; //koneksi ke database

	//menympan variabel yang dikirim form
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$email = $_POST['email'];

	//cek nilai variabel
	if (empty($nama)) {
		header('location: registrasi.php?error='.base64_encode('Nama tidak boleh kosong'));
	}

	if (empty($username)) {
		header('location: registrasi.php?error='.base64_encode('Username tidak boleh kosong'));
	}

	if (empty($password)) {
		header('location: registrasi.php?error='.base64_encode('Password tidak boleh kosong'));
	}

	if (empty($email)) {
		header('location: registrasi.php?error='.base64_encode('Email tidak boleh kosong'));
	}

	//validasi apakah password dan repassword sama?
	if ($password != $repassword) { //jika tidak sama
		header('location: registrasi.php?error='.base64_encode('Password tidak sama'));
	}

	$level = 'guest'; //set level default

	// SQL Insert

	$sql = mysqli_query($koneksi,"INSERT INTO user(username,password,nama,email,level) VALUES ('$username','$password','$nama','$email','$level')") or die(mysqli_error($koneksi));
	if ($sql) {
		$query = mysqli_fetch_array($sql);
		$_SESSION['email'] = $query['email'];
	}
	// jika gagal

	if (!$sql) {
		echo "<script>alert('".$koneksi->error."'); window.location.href='register.php';</script>";
	}else{
		echo "<script>alert('Regitrasi Berhasil, Silahkan Login'); window.location.href='index.php';</script>";
	}
}
 ?>
