<?php

//koneksi database
require_once "../koneksi.php";

$kodebook = $_GET['kode_booking'];

$query = "DELETE FROM t_bookingbus WHERE kode_booking='$kodebook'";
$hapus = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query

if($hapus){ // Cek jika proses berhasil ?
	// Jika Sukses, Lakukan :
	header("location: l-booking.php");
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='l-booking.php'>Kembali</a>";
}

?>