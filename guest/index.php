<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="guest"){
    die("Anda bukan Guest");//jika bukan guest jangan lanjut
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman User</title>
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
  			background: #718FC8;
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
 		#slidercontainer {
 			position: relative;
 			overflow: hidden;
 			background: #000;
 			width: 768px;
 			height: 431px;
 			margin: 0 auto;
 			margin-bottom: 10px;

 		}
 		.sliderbus {
 			position: absolute;
 			width: 3900px;
 			-webkit-animation-name:slider;
 			-webkit-animation-duration:15s;
 			-webkit-animation-timing-function:ease-in-out;
 			-webkit-animation-iteration-count:infinite;
			-moz-animation-name:slider;
 			-moz-animation-duration:15s;
 			-moz-animation-timing-function:ease-in-out;
 			-moz-animation-iteration-count:infinite;
 			-o-animation-name:slider;
 			-o-animation-duration:15s;
 			-o-animation-timing-function:ease-in-out;
 			-o-animation-iteration-count:infinite;
 			animation-name:slider;
 			animation-duration:15s;
 			animation-timing-function:ease-in-out;
 			animation-iteration-count:infinite;
 		}
 		.sliderbus img{
 			width: 768px;
 			height: 431px;
 			float: left;
 		}
 		@-webkit-keyframes slider {
 			0% {left: 0; opacity: 0;}
 			2% {opacity: 1;}
 			20%{left: 0; opacity: 1;}
 			21% {opacity: 0;}
 			24% {opacity: 0;}
 			25% {left: -768px; opacity: 1;}
 			45% {left: -768px; opacity: 1;}
 			46% {opacity: 0;}
 			48% {opacity: 0;}
 			50% {left: -1536px; opacity: 1;}
 			70% {left: -1536px; opacity: 1;}
 			72% {opacity: 0;}
 			74% {opacity: 0;}
 			75% {left: -2304px; opacity: 1;}
 			95% {left: -2304px; opacity: 1;}
 			97% {left: -2304px; opacity: 0;}
 			100% {left: 0; opacity: 0;}
 		}
 		@-moz-keyframes slider {
 			0% {left: 0; opacity: 0;}
 			2% {opacity: 1;}
 			20%{left: 0; opacity: 1;}
 			21% {opacity: 0;}
 			24% {opacity: 0;}
 			25% {left: -768px; opacity: 1;}
 			45% {left: -768px; opacity: 1;}
 			46% {opacity: 0;}
 			48% {opacity: 0;}
 			50% {left: -1536px; opacity: 1;}
 			70% {left: -1536px; opacity: 1;}
 			72% {opacity: 0;}
 			74% {opacity: 0;}
 			75% {left: -2304px; opacity: 1;}
 			95% {left: -2304px; opacity: 1;}
 			97% {left: -2304px; opacity: 0;}
 			100% {left: 0; opacity: 0;}
 		}
 		@keyframes slider {
 			0% {left: 0; opacity: 0;}
 			2% {opacity: 1;}
 			20%{left: 0; opacity: 1;}
 			21% {opacity: 0;}
 			24% {opacity: 0;}
 			25% {left: -768px; opacity: 1;}
 			45% {left: -768px; opacity: 1;}
 			46% {opacity: 0;}
 			48% {opacity: 0;}
 			50% {left: -1536px; opacity: 1;}
 			70% {left: -1536px; opacity: 1;}
 			72% {opacity: 0;}
 			74% {opacity: 0;}
 			75% {left: -2304px; opacity: 1;}
 			95% {left: -2304px; opacity: 1;}
 			97% {left: -2304px; opacity: 0;}
 			100% {left: 0; opacity: 0;}
 		}
 		.sec1 {
 			font-family: Tahoma, sans-serif;
 			position: relative;
  			background: #FFFFFF;
 		 	max-width: 100%;
  			margin:  auto -10px;
  			padding: 30px;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
 			text-align: justify;
 			font-size: 17px;
 		} 
 		.sec1 h2{
 			text-align: center;
 			font-size: 35px;
 		}
 		.sec2 {			
 			position: relative;
  			background: #FFFFFF;
 		 	max-width: 100%;
 		 	font-family: Tahoma, sans-serif;
  			margin:  10px -10px;
  			padding: 30px;
  			font-size: 19px;
  			border-top-left-radius: 3px;
  			border-top-right-radius: 3px;
  			border-bottom-left-radius: 3px;
  			border-bottom-right-radius: 3px;
  			text-align: center;
  		}
  		.sec2 h2{ text-align: center;
 			font-size: 35px;}
 		.sec2 li{font-size: 25px; font-style: bold; list-style: none; color: #718FC8;}
	</style>
</head>
<body>
	<?php require_once '../structure/u_header.php'; ?>
	<div class="container">
		<div class="laman">
			<div id="slidercontainer">
				<div class="sliderbus">
					<img src="../img/ag1.png">
					<img src="../img/ag2.png">
					<img src="../img/kd1.jpg">
					<img src="../img/wb1.png">
				</div>
			</div>

			<div class="laman2">
				<div class="isi">
					<h3>Melayani Permintaan transportasi pariwisata di Karawang berkualitas dan terpercaya. Charter bus Pariwisata ke berbagai tujuan lokasi wisata <h2><a href="booking.php">Booking Sekarang</a></h2></h3> </div>
			</div>
			<section class="sec1">
			<h2>Sewa Bus di Karawang - parwisankarawang.com</h2> <br>
			<p>ParwisanKarawang.com merupakan penyedia media tranportasi booking bus pariwisata di Karawang, yang dimana layanan ini berkonsentrasi hanya pada layanan tour di Karawang. Sehingga beragam kebutuhan transportasi pribadi atau rombongan, baik untuk keberbagai tujuan wisata baik dalam kota Karawang maupun luar kota Karawang bisa Anda dapatkan layanan terbaiknya disini.<br>
			<br>Untuk mempermudah reservasi atau booking online atas kebutuhan media transportasi Bus Pariwisata di Karawang. Silahkan melengkapi form yang berada pada menu Booking di atas. Layanan booking tiket Bus Pariwisata bersama ParwisanKarawang.com<br>
			<br>Kemudahan pemesanan kini telah kami hadirkan untuk Anda dengan lebih mudah dan praktis. Pilihan akses cepat kini ada di ujung jari Anda, agar senantiasa kami bisa menjadi lebih dekat dengan Anda.</p><br>
		</section>
		<section class="sec2">
			<h2>Mengapa Memilih Kami ?</h2>
			<ul>
				<li>Profesional</li>
					<p>Memberikan pengalaman reservasi unik kebutuhan armada untuk anda dengan rasa aman, nyaman dan profesional</p>
				<li>Jujur dan Amanah</li>
					<p>Kami memprioritaskan kepercayaan anda hingga kami terus berkembang sampai saat ini</p>
				<li>Full Supports</li>
					<p>Selalu siap melayani sepenuh hati dengan pelayanan terbaik, disesuaikan dengan kebutuhan dan membuat kegiatan anda penuh kesan</p>
				<li>Harga Hingga Termurah</li>
					<p>Dengan Armada Dikelasnya, kami akan memberikan harga yang bersaing dan akan mendapatkan komperasi dengan daftar harga yang relevan.</p>
			</ul>
		</section>
		</div>
	</div>
	<?php require_once "../structure/footer.php"; ?>
</body>
</html>
