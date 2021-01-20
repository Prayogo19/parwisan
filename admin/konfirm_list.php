 <?php 
 session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <meta charset="utf-8">
 <head>
 	<title>Konfirm List</title>
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
 	 <?php require_once "../structure/a_header.php"; ?>
 	<div class="container">
 		<div class="form">
 		<h1><b>Konfirm-List</b></h1>
    <?php 
    require_once "../koneksi.php";
    $status = $_GET['status'];
    $kodebook = $_GET['kode_booking'];
    $data = mysqli_query($koneksi,"SELECT * FROM t_bookingbus WHERE status='$status'") or die(mysqli_error($koneksi));
    $baris=mysqli_fetch_array($data)
    ?>
 		<form class="form-konfirm" action="konfirm_list.php?kode_booking=<?php echo $kodebook ?>&status=<?php echo $status ?>" method="post">
 		<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
 			<tr height="46">
 				<td width="10%"></td>
 				<td width="25%"></td>
 				<td width="65%"></td>
 			</tr height="46">
      <tr height="46">
        <td></td>
        <td>Status</td>
        <td>
          <select name="status">
            <option value="0">Belum Konfirmasi</option>
            <option value="1">Konfirmasi</option>
          </select>
        </td>
      </tr>
 			<tr height="46">
 				<td></td>
 				<td></td>
 				<td><input type="submit" name="submit" value="Pilih" class="tombol"></td>
 			</tr>
 		</table>
 	</form>
      <?php 
    if (isset($_POST['submit'])) {
      if (!empty($_POST['status'])) {
        $kbook = $_GET['kode_booking'];
        $status= $_POST['status'];
  
        $query = mysqli_query($koneksi,"UPDATE t_bookingbus SET status='$status' WHERE kode_booking = '$kbook'");
  
          if ($query) {
            echo "<script>document.location='l-booking.php';</script>";
          }else{
            echo "gagal";
        }
  
      }
    }
    ?>
 </div>
</div>
<?php require_once "../structure/footer.php"; ?>
 </body>
 </html>