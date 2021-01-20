<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cara Booking</title>
</head>
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
  			background: rgba(2,2,2,0.5);
 		 	max-width: 100%;
  			margin:  auto 90px;
  			padding: 30px;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
  			text-align: justify;
  			font-size: 17px;
  			margin-bottom: 0px;
 		}
 		.isi {
 			position: relative;
  			background: #FFFFFF;
 		 	max-width: 100%;
  			margin:  auto 20px;
  			padding: 10px;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
  			text-align: justify;
  			color: grey;
  			font-size: 30px;
  			margin-bottom: 10px;
 		}
 		.isi h2 {
 			text-align: center;
 			font-size: 35px;
 			color: black;
 		}
 		.sec {
 			position: relative;
  			background: #FFFFFF;
 		 	max-width: 100%;
  			margin:  auto 20px;
  			color: grey;
  			padding: 30px;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
  			text-align: justify;
  			font-size: 20px;
 		} .sec h2{text-align: center; font-size:35px; color: black;}
    .laman li{
      list-style: none;
    }
</style>
<body>
	<?php 
	require_once "../koneksi.php";
	require_once "../structure/u_header.php";
	 ?>
	<div class="container">
		<div class="laman">
			<div class="isi">
			<h2><u>CARA MEMESAN </u> <br>
	   <ul>
      <li><p>Booking dilakukan maksimal H-4 sebelum keberangkatan</p></li><br>
      <li><p>1. Pilih menu Booking pada menu utama</p></li>
      <li><p>2. Isi data form booking sesuai apa yang dibutuhkan</p></li>
      <li><p>3. Setelah selesai mengisi form, klik tombol booking</p></li>
      <li><p>4. Melakukan pembayaran DP dengan cara transfer sesuai ke No. Rekening yang telah tersedia</p></li>
      <li><p>5. Setelah melakukan transfer DP, klik Oke</p>
      </li>
      <li><p>6. Tunggu konfirmasi pelunasan yang akan di informasikan</p></li>
    </ul>
		</div>
	</div>
	<?php require_once "../structure/footer.php"; ?>
</body>
</html>