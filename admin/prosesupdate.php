<?php 
include "../koneksi.php";

$id_buslama = $_GET['id_bus'];
$id_bus = $_POST['id_bus'];
$nama_bus = $_POST['nama_bus'];
$jenis_bus = $_POST['jenis_bus'];
$harga = $_POST['harga'];

if (isset($_POST['ubah_galeri_bus'])) {
	//jika menceklis cek box
	$galeri_bus = $_FILES['galeri_bus']['name'];
	$tmp = $_FILES['galeri_bus']['tmp_name'];

	$path = '../imgbus/'.$galeri_bus;

	//proses upload
	if (move_uploaded_file($tmp, $path)) {
		$query = "SELECT * FROM t_daftarbus WHERE id_bus ='$id_buslama'";
		$sql = mysqli_query($koneksi,$query);
		$data = mysqli_fetch_array($sql);
		//cek file sebelumnya ada di folder image?
		if (is_file('../imgbus/'.$data['galeri_bus'])) {
			//jika ada
			unlink('../imgbus/'.$data['galeri_bus']);

		}
		$sql = mysqli_query($koneksi,"UPDATE t_daftarbus SET nama_bus='$nama_bus',jenis_bus='$jenis_bus',harga='$harga',galeri_bus='$galeri_bus' WHERE id_bus='$id_buslama' ") or die(mysqli_error($koneksi));
		if ($sql) {
			header("location: daftarbus.php");
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='b_update.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika gambar gagal diupload, Lakukan :
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='b_update.php'>Kembali Ke Form</a>";
	}
}else {
	//jika tidak menceklis checkbox
	$sql = mysqli_query($koneksi,"UPDATE t_daftarbus SET nama_bus='$nama_bus',jenis_bus='$jenis_bus',harga='$harga' WHERE id_bus = '$id_buslama'")or die(mysqli_error($koneksi));

	if ($sql) {
		header("location: daftarbus.php");
	}else {
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='b_update.php'>Kembali Ke Form</a>";
	}
}
?>