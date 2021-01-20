<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		* {
 			padding: 0px;
 			margin: 0px;
 		}
 		body {
 			background-image: url(../css/bg1.png);
 			background-repeat: no-repeat;
 			font-family: arial, sans-serif;
  			background-size: 100%;
  			width: 100%;
 		}
 		 .laman {
 			position: relative;
  			background: #FFFFFF;
 		 	max-width: 100%;
  			margin:  auto 90px;
  			padding: 30px;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
  			text-align: center;
  			font-size: 17px;
 		}
 		.laman h2{
 			font-size: 40px;
 			text-align: center;
 			font-family: pristina, sans-serif;
 			margin-top: 30px;
 			color: #718FC8;
 		}
 		.laman img {
 			width: 300px;
 			height: 200px;
 		}
 		.laman strong {color:green; }
 		.laman button.tombol{
 			outline: 0;
  			background: #718FC8;
  			width: 350px;
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
 		.laman button.tombol1{
 			outline: 0;
  			background: #718FC8;
  			width: 350px;
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
	</style>
</head>
<body>
<?php require_once "../structure/u_header.php" ?>
<?php require_once "../koneksi.php" ?>
<div class="container">
	<div class="laman">
		<img src="img/logo.png">
		<h2>Terima Kasih</h2>
		<strong><?php echo $_SESSION['nama']; ?></strong>, Terima Kasih atas kepercayaan anda kepada kami karena telah menggunakan situs parwisankarawang.com sebagai media Booking Bus Pariwisata Online di Karawang. Pemberitahuan untuk Pelunasan akan diberitahukan melalui SMS saat H-1 Keberangkatan.
		Apabila tidak melakukan pelunasan di hari yg ditentukan booking akan hangus dan DP tidak bisa dikembalikan</br><br>
		<a href="r-booking.php"><button class="tombol">Lihat Riwayat Booking</button></a> &emsp;&emsp;<a href="index.php"><button class="tombol1">Back to Home</button></a>
	</div>
</div>
<?php require_once "../structure/footer.php"; ?>
</body>
</html>