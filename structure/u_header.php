<?php 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman User</title>
	<style type="text/css">
		body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}

header{
	padding: 10px 25px;
	box-sizing: border-box;
	background: #1B273D;
}

header img{
  margin-left: 450px; 
	width: 30%;
	height: 20%;
}

header p{
  font-style: bold;
  font-family: sans-serif;
  text-align: center;
  margin-top: 10px;
  color: white;
  margin-left: 30px;
}

nav{
	width: 100%;
	height: 50px;
	background: #718FC8;
	border-top: 1px solid rgba(255,255,255,.1);
	border-bottom: 1px solid rgba(255,255,255,.1);
	position: sticky;
	top: 0;
  z-index: 1;
}

nav ul{
	display: flex;
	margin: 0;
	padding: 0 20px;
	float: right;
}

nav ul li{
	list-style: none;
}

nav ul.hello {
    display: flex;
  margin: 0;
  padding: 0 20px;
  float: left;
}
nav ul.hello li{
  list-style: none;
}
nav ul.hello li a{
    display: block;
  color: #fff;
  padding: 0 20px;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: bold;
  line-height: 50px;
}
nav ul.hello li a:hover {
  background: #718FC8;
}
nav ul li a{
	display: block;
	color: #fff;
	padding: 0 20px;
	text-decoration: none;
	text-transform: uppercase;
	font-weight: bold;
	line-height: 50px;
}
nav ul li p {
    display: block;
  color: #fff;
  padding: 0 20px;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: bold;
  line-height: 50px;
}

nav ul li a:hover{
	background: #718FC8;
  color: #FFD700;
}

.dropdown{
	position: relative;
	display: inline-block;
}

.dropdown-content{
	display: none;
	position: absolute;
	background-color: #718FC8;
	min-width: 160px;
	box-shadow: 0 8px 8px 0 rgba(0,0,0,.2);
	padding: 12px 16px;
	z-index: 1;
}

.dropdown-content a{
	color: #fff;
	min-width: 160px;
}

.dropdown:hover .dropdown-content{
	display: block;
}
	</style>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<header>
		<img src="img/parwisan.png" align="center">
    <p>&#9990; 085773612430 &emsp;&emsp; &#9993; admin@parwisan.com</p>
	</header>
	<nav>
    <ul class="hello">
      <li><a href="../guest/profil.php"><?php echo "<p> Hello, ".$_SESSION['nama']."</p> " ?></a></li>
    </ul>
		<ul>
			<li><a href="../guest/index.php" class="active">Home</a></li>
			<li><a href="../guest/booking.php">Booking</a></li>
			<li><a href="../guest/r-booking.php">Riwayat Booking</a></li>
				<li class="dropdown"><a href="../guest/daftarbus.php">Daftar Bus</a>
				</li>
				<li class="dropdown"><a href="#">Informasi</a>
					<ul class="dropdown-content">
						<li><a href="../guest/aboutus.php">Tentang Kami</a></li>
						<li><a href="../guest/carabooking.php">Cara Booking</a></li>
            <li><a href="../guest/kontakkami.php">Kontak Kami</a></li>
					</ul>
				</li>				
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</nav>
</body>
</html>