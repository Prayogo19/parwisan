 <?php 
 session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <meta charset="utf-8">
 <head>
 	<title>Update bus</title>
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
.form select {
    outline: 0;
  background: #FFFFFF;
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
 	 <?php require_once "../structure/a_header.php"; ?>
 	<div class="container">
 		<div class="tentang">
 		<div class="form">
 		<h1><b>UPDATE BUS</b></h1>
    <?php 
    require_once "../koneksi.php";
    $id_bus = $_GET['id_bus'];
    $data = mysqli_query($koneksi,"SELECT * FROM t_daftarbus WHERE id_bus='$id_bus' ")or die(mysqli_error($koneksi));
    $baris = mysqli_fetch_array($data);
    ?>
 		<form class="form" action="prosesupdate.php?id_bus=<?php echo $id_bus; ?>" method="post" enctype="multipart/form-data">
 		<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
 			<tr height="46">
 				<td width="10%"></td>
 				<td width="25%"></td>
 				<td width="65%"></td>
 			</tr height="46">
      <tr height="46">
        <td></td>
        <td>ID Bus</td>
        <td><input type="text" name="id_bus" size="50" value="<?php echo $baris['id_bus'] ?>"  required></td>
      </tr>
 			<tr height="46">
 				<td></td>
 				<td>Nama Bus</td>
        <?php $nama_bus=$baris['nama_bus']; ?>
        <td><select name="nama_bus">
          <option <?php echo ($nama_bus == 'Agra Mas')?"selected":""; ?>>Agra Mas</option>
          <option <?php echo ($nama_bus == 'Warga Baru')?"selected":""; ?>>Warga Baru</option>
          <option <?php echo ($nama_bus == 'Kramat Djati')?"selected":""; ?>>Kramat Djati</option>
        </select></td>
 			</tr>
 			<tr height="46">
 				<td></td>
        <td>Jenis bus</td>
        <?php $jenis_bus=$baris['jenis_bus']; ?>
        <td><select name="jenis_bus">
          <option value="bigbus59kursi">Big Bus 59 Seat</option>
          <option value="bigbus47kursi">Big Bus 47 Seat</option>
          <option value="mediumbus33kursi">Medium Bus 33 Seat</option>
          <option value="mediumbus25kursi">Medium Bus 25 Seat</option>
          <option value="microbus19kursi">Microbus 19 Seat</option>
          <option value="microbus15kursi">Microbus 15 Seat</option>
        </select></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Harga</td>
 				<td><input type="text" name="harga"  size="20" value="<?php echo $baris['harga']?>" required></td>
 			</tr>
 			<tr height="46">
 				<td></td>
 				<td>Gambar</td>
 				<td><input type="checkbox" name="ubah_galeri_bus"  size="20" value="true">
          <input type="file" name="galeri_bus">
        </td>

 			</tr>
 			<tr>
 				<td></td>
 				<td></td>
 				<td><input type="submit" name="submit" value="Update" class="tombol"></td>
 			</tr>
 		</table>
 	</form>
 </div>
</div>
<?php require_once "../structure/footer.php"; ?>
 </body>
 </html>