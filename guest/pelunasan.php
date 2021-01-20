 <?php 
 session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <meta charset="utf-8">
 <head>
 	<title>Pelunasan</title>
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
 	text-align: center;
 	color: grey;
 }
 .form{
	position: relative;
  background: #f2f2f2;
  max-width: 100%;
  margin:  auto 90px;
  padding: 30px;
  margin-bottom: 62px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
 		}
.form input {
  outline: 0;
  width: 90%;
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
 	 <?php require_once "../structure/u_header.php";
    ?>
 	<div class="container">
 		<div class="tentang">
 		<div class="form">
 		<h1><b>UPLOAD BUKTI PELUNASAN</b></h1>
    <p>Upload bukti pelunasan berupa foto bukti transfer dengan nominal yang telah diberitahukan melalui SMS</p>
    <?php
      $kodebook = $_GET['kode_booking'];
    ?>
    <form class="form" action="do-lunas.php?kode_booking=<?php echo $kodebook ?>&status=0" method="post" enctype="multipart/form-data">
 		<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
 			<tr height="46">
 				<td width="10%"></td>
 				<td width="25%"></td>
 				<td width="65%"></td>
 			</tr height="46">
 			<tr height="46">
 				<td></td>
 				<td>Foto Bukti Pelunasan</td>
        <td><input type="file" name="bukti" size="50" maxlength="30"  required></td>
        <td><input type="hidden" name="MAX_FILE_SIZE" value="500000" /></td>
 			</tr>
 			<tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="submit" value="Submit" class="tombol"></td>  
      </tr>
 		</table>
 	</form>
 </div>
</div>
<?php require_once "../structure/footer.php"; ?>
 </body>
 </html>