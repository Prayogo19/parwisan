<?php  
session_start();
if (isset($_POST['Booking'])) {

require_once "../koneksi.php";

$kode_booking = $_SESSION['kode_booking'];
$id = $_SESSION['id'];
$nama_user = $_POST['nama_user'];
$no_telp = $_POST['no_telp'];
$nama_bus = $_POST['nama_bus'];
$jenis_bus = $_POST['jenis_bus'];
$jumlah_unit  = $_POST['jumlah_unit'];
$berangkat = $_POST['berangkat'];
$alamat_jemput = $_POST['alamat_jemput'];
$tujuan = $_POST['tujuan'];
$pulang = $_POST['pulang'];
$status = 0;


#date_default_timezone_set("Asia/Jakarta");
#$tanggal = date("Y/m/d");

$sql = mysqli_query($koneksi,"INSERT INTO t_bookingbus (kode_booking,id,tanggal,nama_user,no_telp,nama_bus,jenis_bus,jumlah_unit,alamat_jemput,tujuan,berangkat,pulang,status) VALUES ('$kode_booking','$id',NOW(),'$nama_user','$no_telp','$nama_bus','$jenis_bus','$jumlah_unit','$alamat_jemput','$tujuan','$berangkat','$pulang','$status')") or die(mysqli_error($koneksi));
if ($sql) {
	$query = mysqli_fetch_array($sql);
		$_SESSION['kode_booking'] = $query['kode_booking'];
		$_SESSION['tanggal'] = $query['tanggal'];
		$_SESSION['nama_user'] = $query['nama_user'];
		$_SESSION['no_telp'] = $query['no_telp'];
		$_SESSION['nama_bus'] = $query['nama_bus'];
		$_SESSION['jenis_bus'] = $query['jenis_bus'];
		$_SESSION['jumlah_unit'] = $query['jumlah_unit'];
		$_SESSION['alamat_jemput'] = $query['alamat_jemput'];
		$_SESSION['tujuan'] = $query['tujuan'];
		$_SESSION['berangkat'] = $query['berangkat'];
		$_SESSION['pulang'] = $query['pulang'];
		$_SESSION['total'] = $query['total'];
		$_SESSION['status'] = $query['status'];

	header("Location: k-booking.php");
} else {
	echo "<script>alert('Booking Gagal, Silahkan Ulangi'); document.location='booking.php';</script>";
}
}

?>