<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="admin"){
    die("Anda bukan admin");//jika bukan admin jangan lanjut
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<style type="text/css">
		* {
 			padding: 0px;
 			margin: 0px;
 		}
 		body {
 			background-image: url(../css/bg1.png);
 			background-repeat: no-repeat;
 			font-family: arial, sans-serif;
 			-webkit-font-smoothing: antialiased;
  			-moz-osx-font-smoothing: grayscale;
  			height: 100%;
  			-webkit-background-size : 100% 100%;
  			-moz-background-size : 100% 100%;
  			-o-background-size : 100% 100%;
  			background-size: 100% 100%;
  			width: 100% 100%;
 		}
 		 .laman {
 			position: relative;
  			background: rgba(2,2,2,0.5);
 		 	max-width: 100%;
  			margin:  auto 90px;
  			padding: 30px;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
 		}
 		.laman2 {
 			position: relative;
  			background: #FFFFFF;
 		 	max-width: 100%;
  			margin:  auto -30px;
  			padding: 30px;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
 		}
 		.laman2 .isi {
 			position: relative;
  			background: #718FC8;
 		 	max-width: 100%;
  			margin:  auto 50px;
  			padding: 30px;
  			color: lightgrey;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
  			margin-top: 15px;	
  			text-align: center;	
 		}
 		.laman2 .isi h2{text-align: center;}
 		.laman2 .isi h2 a{color:#FFD700;	text-decoration: none;}
 		.laman2 .isi2 {
 			position: relative;
  			background: #718FC8;
 		 	max-width: 100%;
  			margin:  auto 50px;
  			padding: 30px;
  			color: lightgrey;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
  			margin-top: 15px;	
  			text-align: center;	
 		}
 		.laman2 .isi2 h2{text-align: center;}
 		.laman2 .isi2 h2 a{color:#FFD700;	text-decoration: none;}
 		.laman2 .isi3 {
 			position: relative;
  			background: #718FC8;
 		 	max-width: 100%;
  			margin:  auto 50px;
  			padding: 30px;
  			color: lightgrey;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
  			margin-top: 15px;	
  			text-align: center;	
 		}
 		.laman2 .isi3 h2{text-align: center;}
 		.laman2 .isi3 h2 a{color:#FFD700;	text-decoration: none;}

	</style>
</head>
<body>
	<?php require_once '../structure/a_header.php'; ?>
	<div class="container">
		<div class="laman">
			<div class="laman2">
				<div class="isi">
					<h3>Lihat Daftar Booking Masuk <h2><a href="l-booking.php">Lihat</a></h2></h3>
				</div>
				<div class="isi2">
					<h3>Cek Pelunasan Masuk<h2><a href="k-lunas.php">Lihat</a></h2></h3>
				</div>
				<div class="isi3">
					<h3>Update Data Bus<h2><a href="daftarbus.php">Lihat</a></h2></h3>
				</div>
			</div>
		</div>
	</div>
	<?php require_once "../structure/footer.php"; ?>
</body>
</html>