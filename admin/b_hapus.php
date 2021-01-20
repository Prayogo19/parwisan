<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil data idbus yang dikirim oleh index.php melalui URL
$id_bus = $_GET['id_bus'];

// Query untuk menampilkan data bus berdasarkan idbus yang dikirim
$query = "SELECT * FROM t_daftarbus WHERE id_bus='".$id_bus."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("img/".$data['galeri_bus'])) // Jika foto ada
	unlink("img/".$data['galeri_bus']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data bus berdasarkan idbus yang dikirim
$query2 = "DELETE FROM t_daftarbus WHERE id_bus='".$id_bus."'";
$sql2 = mysqli_query($koneksi, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: daftarbus.php");
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='daftarbus.php'>Kembali</a>";
}
?>