 <?php 
 session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <meta charset="utf-8">
 <head>
 	<title>Form Booking</title>
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
 .tentang {
 	position: relative;
  background: #FFFFFF;
  max-width: 100%;
  margin:  auto 90px;
  padding: 30px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
 }
 .tentang p {
 	text-align: justify;
 	color: grey;
 }
 .form{
	position: relative;
  background: #f2f2f2;
  max-width: 100%;
  margin:  auto 90px;
  padding: 30px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
 		}
.form input {
  outline: 0;
  background: #FFFFFF;
  width: 120%;
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
.form select{
	  outline: 0;
  background: #FFFFFF;
  width: 120%;
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
  width: 30%;
  border: 0;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  color: #FFFFFF;
  font-size: 18px;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form h1 {
	text-align: center;
}
 	</style>
 </head>
 <body>
 	 <?php require_once "../structure/u_header.php"; ?>
 	<div class="container">
 		<div class="tentang">
 			<h2>Booking Online </h2></br>
 			<p>Untuk mempermudah reservasi atau booking online atau kebutuhan media transportasi Sewa Bus di Karawang. Silahkan melengkapi form berikut. Layanan Booking Online bersama parwisankarawang.com</p> <br>
 		</div>
 		<div class="form">
 		<h1><b>Booking Online</b></h1>
 		<form class="form-booking" action="do-booking.php" method="post">
 		<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
 			<tr height="46">
 				<td width="10%"></td>
 				<td width="25%"></td>
 				<td width="65%"></td>
 			</tr height="46">
 			<tr>
 				<td></td>
 				<td>ID User</td>
 				<td><input type="text" name="username" size="50" value="<?php echo $_SESSION['id'];?>" disabled></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Nama</td>
 				<td><input type="text" name="nama_user" size="50" maxlength="30" placeholder="Atas Nama"></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>No Telepon</td>
 				<td><input type="text" name="no_telp" size="20" maxlength="12"></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Nama bus</td>
 				<td><select name="nama_bus">
 					<option value="-">- Pilih Bus -</option>
 					<option value="Agra Mas">Agra Mas</option>
 					<option value="Warga Baru">Warga Baru</option>
 					<option value="Kramat Djati">Kramat Djati</option>
 				</select></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Jenis Bus</td>
 				<td><select name="jenis_bus">
 					<option value="-">- Jenis Bus -</option>
 					<option value="bigbus59kursi">Big Bus / 59 Seat</option>
 					<option value="bigbus47kursi">Big Bus / 47 Seat</option>
 					<option value="mediumbus33kursi">Medium Bus / 33 Seat</option>
 					<option value="mediumbus25kursi">Medium Bus / 25 Seat</option>
 					<option value="microbus19kursi">Microbus / 19 Seat</option>
 					<option value="microbus15kursi">Microbus / 15 Seat</option>
 				</select></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Jumlah Unit</td>
 				<td><select name="jumlah_unit">
 					<option value="1">1</option>
 					<option value="2">2</option>
 					<option value="3">3</option>
 					<option value="4">4</option>
 					<option value="5">5</option>
 					<option value="6">6</option>
 					<option value="7">7</option>
 					<option value="8">8</option>
 					<option value="9">9</option>
 				</select></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Tanggal Berangkat</td>
 				<td><input type="date" name="berangkat" id="berangkat" size="20" maxlength="12"></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Lokasi Jemput</td>
 				<td><input type="text" name="alamat_jemput"  id="alamat_jemput" size="50" maxlength="30"></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Tujuan</td>
 				<td><input type="text" name="tujuan" id="tujuan" size="50" maxlength="30" ></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Tanggal Pulang</td>
 				<td><input type="date" name="pulang" id="pulang" size="20" maxlength="12"></td>
 			</tr>
 			<tr>
 				<td></td>
 				<td></td>
 				<td><input type="submit" name="Booking" value="Booking" class="tombol"></td>
 			</tr>
 		</table>
 	</form>
 </div>
</div>
<?php require_once "../structure/footer.php"; ?>
 </body>
 </html>