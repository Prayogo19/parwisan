<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List Booking</title>
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
  			margin-left: 930px; 
 		}
 		 .laman input{
 			outline: 0;
  			background: #718FC8;
  			width: 100px;
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
	<?php require_once "../structure/a_header.php"; ?>
<div class="container">
	<div class="laman">
		<h2>LIST PELUNASAN</h2>
			<table border="1">
				<thead>
					<tr>
		 				<th>No</th>
						<th>Id Pelunasan</th>
						<th>Kode Booking</th>
						<th>Bukti</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					//koneksi database
					require_once "../koneksi.php";
					//query database
					$result = mysqli_query($koneksi,"SELECT * FROM pelunasan WHERE status=0 ORDER BY tanggal_pelunasan DESC") or die(mysqli_error($koneksi));
					$no = 1;
					$tablerow = mysqli_num_rows($result); //menghitung row yang tersedia
					if (!empty($tablerow)) {
						foreach ($result as $baris) {
							$lunasid = $baris['lunasid'];
							?>
							<tr>
								<td><?php echo $no++; ?></td>
								  <td><?php echo $baris['lunasid']; ?></td>
								  <td><?php echo $baris['kode_booking'] ?></td>
								  <td><?php echo "<img src=../img/".$baris['bukti']." width='100' height='100'>"; ?></td>
								  <td>
									<?php
										if ($baris['status'] == 0) {
											$status = 'Unconfirmed';
											echo $status;
										} else {
											$status = 'Confrimed';
											echo $status;
										}
									?>
								</td>
								<td>
								<a href="konfirm_lunas.php?lunasid=<?php echo $lunasid ?>&status=<?php echo $baris['status']?>"><input class="" type="submit" name="submit" value="Konfirm" class="tombol"></a>
								</td>
							</tr>
					<?php }
					} else {
						echo "<tr>
							<td colspan='6'>TIDAK ADA DATA</td>
						</tr?";
					}
			?>
			</tbody>
		</table>	
	<a href="index.php"><button class="tombol">Back to home</button></a>
	</div>
</div>
<?php require_once"../structure/footer.php"; ?>
</body>
</html>