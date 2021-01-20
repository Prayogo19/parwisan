<!DOCTYPE html>
<html>
<head>
	<title>Regitrasi User</title>
	<style type="text/css">
		
* {
	margin: 0px;
	padding: 0px;
}
/* Body */
body {

	background-image: url(css/bg1.png);
  font-family: arial, sans-serif;
  background-repeat: no-repeat;
 -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-top: 90px;
  height: 100%;
  -webkit-background-size : 100% 100%;
  -moz-background-size : 100% 100%;
  -o-background-size : 100% 100%;
  background-size: 100% 100%;
  width: 100% 100%;
}
/* Form */
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 300px;
  margin: 0 auto 100px;
  padding: 30px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  text-align: center;
}

.form .thumbnail {
  background: #FFFFFF;
  width: 150px;
  height: 150px;
  margin: 0 auto 30px;
  padding: 50px 30px;
  border-top-left-radius: 100%;
  border-top-right-radius: 100%;
  border-bottom-left-radius: 100%;
  border-bottom-right-radius: 100%;
  box-sizing: border-box;
}
.form .thumbnail img {
  display: block;
  width: 100%;
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
}
.form input.tombol {
  outline: 0;
  background: #718FC8;
  width: 100%;
  border: 0;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  color: #FFFFFF;
  font-size: 14px;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: black;
  font-size: 12px;
}
.form .message a {
  color: #718FC8;
  text-decoration: none;
}

/* END Form */
	</style>
</head>
<body>
	<div class="form">
	<h2>REGISTRASI</h2>
	<br>
  <form action="do-registrasi.php" class="register-form" method="post">
  	<input type="text" name="nama" placeholder="Masukkan Nama" id="nama" required/>
    <input type="text" name="username" placeholder="Masukkan Username" id="username" required/>
    <input type="email" name="email" placeholder="Masukkan Email" id="email" required/>
    <input type="password" name="password" placeholder="Masukkan Password" id="password" required/>
    <input type="password" name="repassword" placeholder="Masukkan Re-Password" id="repassword" required/>
    <div>
    <input type="submit" name="buat" value="Registrasi" class="tombol">
  </div>
    <p class="message">Sudah punya akun? <a href="index.php">Login</a></p>
  </form>
</div>
</body>
</html>

<!-- <?php 
include 'koneksi.php';

if (@$_POST['buat']) {
	$nama = @$_POST['nama'];
	$username = @$_POST['username'];
	$password = @$_POST['password'];
	$email = @$_POST['email'];


	$level = 'guest';

	mysqli_query($koneksi,"INSERT INTO user(username,password,nama,email,level) VALUES ('$username','$password','$nama','$email','$level')");
?>
<script type="text/javascript">
	alert("Resgistrasi Berhasil, Silahkan Login");
	window.location.href='index.php';
</script>

<?php }
?>
-->