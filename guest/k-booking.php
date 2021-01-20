<?php 
session_start();
require_once "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Booking</title>
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
 			font-size: 30px;
 			text-align: center;
 		}
 		.laman p{
 			font-weight: bold;
 		}
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
 		table th img {
 			width: 80px;
 			height :40px;
 		}
 		table {
 			width: 350px;
 			border-collapse: collapse;
 			margin: 50px auto;
 		}

 		/* Efek Strip */
 		tr:nth-of-type(odd){
 			background: #eee;
 		}
 		th{
 			color: white;
 			font-weight: bold;
 		}
 		td, th {
 			padding: 10px;
 			border: 1px solid #ccc;
 			text-align: center;
 			font-size: 18px;
	</style>
</head>
<body>
	<?php require_once "../structure/u_header.php"; ?>
	<div class="container">
		<div class="laman">
		<h2>PERHATIAN</h2><br>
		<p>Harap Membayar DP minimal sebesar Rp. 50.000,00 terlebih dahulu ke rekening yang tersedia untuk proses booking berikutnya</p>
		<table border="1">
			<th><img src="img/bni.png"></th>
			<tr>
				<td>No Rekening : 312345424 a/n Parwisan</td>
			</tr>
		</table>
		    <a href="c-booking.php"><button class="tombol">Oke</button></a>
		</div>
	</div>
	<?php require_once "../structure/footer.php"; ?>
</body>
</html>