<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Bus</title>
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
  			background: #FFFFFF;
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
 		.laman h2 {
 			text-align: center;
 		}
 		.laman button.tombol{
 			outline: 0;
  			background: #718FC8;
  			width: 200px;
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
  			font-size: 20px;
  			font-weight: bold;
  			margin-left: 670px; 
 		}
 		table {
 			width: 100%;
 			border-collapse: collapse;
 			margin: 50px auto;
 		}

 		/* Efek Strip */
 		tr:nth-of-type(odd){
 			background: #eee;
 		}
 		th{
 			background: #718FC8;
 			color: white;
 			font-weight: bold;
 		}
 		td, th {
 			padding: 10px;
 			border: 1px solid #ccc;
 			text-align: center;
 			font-size: 18px;
 		}
 		/*untuk responsive */
 		@media only screen and (max-width: 760px),(min-device-width: 768px) and (max-device-width:1024px) {
 			table {
 				width: 100%;
 			}
 			table, thead, tbody, th, td, tr {
 				display: block;
 			}
 		}
</style>
<body>
	<?php require_once "../structure/u_header.php"; ?>
<div class="container">
	<div class="laman">
		<h2>Daftar Bus Pariwisata</h2>
			<table border="1">
				<thead>
				<tr>
					<th >Nama Bus</th>
					<th>Jenis Bus</th>
					<th>Harga</th>
					<th>Gambar</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				//koneksi database
				require_once "../koneksi.php";
				//query database
				$result = mysqli_query($koneksi,"SELECT*FROM t_daftarbus") or die(mysqli_error($koneksi));
				foreach ($result as $baris) { ?>
				<tr>
					<td><?php echo $baris['nama_bus']; ?></td>
					<td><?php echo $baris['jenis_bus']; ?></td>
					<td><?php echo $baris['harga']; ?></td>
					<?php echo "<td><img src='../imgbus/".$baris['galeri_bus']."' width='100' height='100'></td>"; ?>
				</tr>
			<?php }
			?>
			</tbody>
		</table>	
	<a href="index.php"><button class="tombol">Back to home</button></a>
	</div>
</div>
<?php require_once"../structure/footer.php"; ?>
</body>
</html>