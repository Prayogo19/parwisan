<!DOCTYPE html>
<?php
include ("koneksi.php");
session_start(); //memulai session
if (isset($_SESSION['akses'])) { //mengecek session akses
   header('location:'.$_SESSION['akses']);
   exit();
 } 
 $error = "";
 if (isset($_SESSION['error'])) {  //menangani error
  $error = $_SESSION['error'];
  unset($_SESSION['error']);
 }
 ?>

<html>
<head>
	<title>Front Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="form">
	<h2>LOGIN</h2>
  <div class="thumbnail"><img src="img/logo.png"/></div>
  <form action="login.php?op=in" class="login-form" method="post">
    <input type="text" name="username" placeholder="username" id="username" required/>
    <input type="password" name="password" placeholder="password" id="password" required/>
    <div>
    <input type="submit" name="login" value="Login" class="tombol">
  </div>
    <p class="message">Belum punya akun? <a href="registrasi.php">Registrasi</a></p>
  </form>
	
</div>
</div>

</body>
</html>