 <?php 
 session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <meta charset="utf-8">
 <head>
 	<title>Kontak Kami</title>
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
  width: 150%;
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
  width: 150%;
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
.form textarea {
      outline: 0;
  background: #FFFFFF;
  width: 150%;
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
 			<h2>Kontak Kami</h2></br>
 			<p>Kontak Kami bila anda membutuhkan informasi lebih lengkap. Mengenai beberapa pertanyaan tentang seputar sewa menyewa. Baik itu sewa bus pariwisata ataupun Sewa Elf Karawang Pariwisata. <br>
      Silahkan hubungi kami atau silahkan kirim via email melalui formulir dibawah ini :</p> <br>
 		</div>
 		<div class="form">
 		<h1><b>KONTAK KAMI</b></h1>
 		<form class="form-kontak" action="do-kontak.php" method="post">
      <?php if (!empty($notify)) {?>
        <p class="notify <?php echo !empty($notifyClass)?$notifyClass: ''; ?>"><?php echo $notify; ?></p>
     <?php } ?>
 		<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
 			<tr height="46">
 				<td width="10%"></td>
 				<td width="25%"></td>
 				<td width="65%"></td>
 			</tr height="46">
 			<tr height="46">
 				<td></td>
 				<td>Nama</td>
 				<td><input type="text" name="nama" size="50" maxlength="30" placeholder="Nama Anda" required></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Email</td>
 				<td><input type="text" name="email" size="20" placeholder="Email Anda" required></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Subject</td>
 				<td><input type="text" name="subject" placeholder="(Opsional)" size="20" maxlength="12" required></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Pesan</td>
 				<td><textarea placeholder="Ketikan Pesan Anda" name="pesan" required=""></textarea></td>
 			</tr>
 			<tr>
 				<td></td>
 				<td></td>
 				<td><input type="submit" name="submit" data-submit="...Mengirim Pesan" value="Kirim" class="tombol"></td>
 			</tr>
 		</table>
 	</form>
 </div>
</div>
<?php require_once "../structure/footer.php"; ?>
 </body>
 </html>