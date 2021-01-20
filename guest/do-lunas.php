<?php  
if (isset($_POST['submit'])) {

	require_once "../koneksi.php";

	//proses upload file

	$tempfile = $_FILES['bukti']['tmp_name'];
	$filename = $_FILES['bukti']['name'];
	$status = $_GET['status'];
	$kodebook = $_GET['kode_booking'];
	$targetDir = '../img/'.$filename;
	if (move_uploaded_file($tempfile, $targetDir)) {
		$query = "INSERT INTO pelunasan (kode_booking,bukti,status,tanggal_pelunasan) VALUES ('$kodebook','$filename','$status',NOW()) ";
		$sql = mysqli_query($koneksi,$query);
		if ($sql) {
			header("location: index.php");
		}else {
		echo "Maaf, Terjadi Kesalahan saat menyimpan data ke database";
		echo "<br><a href='pelunasan.php'>Kembali ke form</a>";
		}
	}else{
	//jika gambar gagal upload
	echo "Maaf gambar gagal untuk diupload";
	echo "<br><a href='pelunasan.php'>Kembali ke form</a>";
	}
}
?>