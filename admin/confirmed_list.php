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
		<h2>LIST BOOKING LUNAS</h2>
			<table border="1">
				<thead>
				<tr>
		 			<th>No</th>
					<th width="80">Tanggal</th>
					<th >Nama</th>
					<th>Telepon</th>
					<th>Bus</th>
					<th>Alamat Jemput</th>
					<th>Tujuan</th>
					<th>Status</th>

				</tr>
			</thead>
			<tbody>
				<?php 
				//koneksi database
				require_once "../koneksi.php";
				//query database
				$result = mysqli_query($koneksi,"SELECT kode_booking,tanggal,nama_user,no_telp,nama_bus,jenis_bus,jumlah_unit, alamat_jemput,tujuan, status FROM t_bookingbus WHERE status=1 ORDER BY tanggal DESC") or die(mysqli_error($koneksi));
				$no = 1;
				foreach ($result as $baris) { 
					$kodebook = $baris['kode_booking'];
					?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $baris['tanggal']; ?></td>
					<td><?php echo $baris['nama_user']; ?></td>
					<td><?php echo $baris['no_telp']; ?></td>
					<td><?php echo $baris['jumlah_unit']; echo " ". $baris['nama_bus']; echo " ".$baris['jenis_bus']; ?></td>
					<td><?php echo $baris['alamat_jemput']; ?></td>
					<td><?php echo $baris['tujuan']; ?></td>
                    <td>
                        <?php
                            if ($baris['status'] == 1) {
                                $status = 'Confirmed';
                                echo $status;
                            }
                        ?>
                    </td>
				</tr>
			<?php }
			?>
			</tbody>
		</table>	
	<a href="l-booking.php"><button class="tombol">Kembali</button></a>
	</div>
</div>
<?php require_once"../structure/footer.php"; ?>
</body>
</html>