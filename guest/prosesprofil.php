<?php 
include "../koneksi.php";

$nama_lama = $_GET['nama'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];

if (isset($_POST['simpan'])) {
		$sql = mysqli_query($koneksi,"UPDATE user SET nama_='$nama',username='$username',email='$email' WHERE nama='$nama_lama' ") or die(mysqli_error($koneksi));
		if ($sql) {
			header("location: profil.php");
		}else{
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='edit-profil.php'>Kembali Ke Form</a>";
		}

}
else {

		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
	}
?>