<?php  

if (isset($_POST['submit'])) {
	require_once "../koneksi.php";

$id_bus = $_POST['id_bus'];
$nama_bus = $_POST['nama_bus'];
$jenis_bus = $_POST['jenis_bus'];
$harga = $_POST['harga'];
$galeri_bus = $_FILES['galeri_bus']['name'];
$tmp = $_FILES['galeri_bus']['tmp_name'];

//set path folder tempat menyimpan fotonya
$path = '../imgbus/'.$galeri_bus;

//proses upload

if (move_uploaded_file($tmp, $path)) {
	//cek berhasil upload
	$query ="INSERT INTO t_daftarbus(id_bus,nama_bus,jenis_bus,harga,galeri_bus) VALUES('$id_bus','$nama_bus','$jenis_bus','$harga','$galeri_bus')";
	$sql = mysqli_query($koneksi,$query);
	if ($sql) {
		//jika sukses
		header("location: daftarbus.php");
	}else{
		echo "Maaf, Terjadi Kesalahan saat menyimpan data ke database";
		echo "<br><a href='b_tambah.php'>Kembali ke form</a>";
	}
}else{
	//jika gambar gagal upload
	echo "Maaf gambar gagal untuk diupload";
	echo "<br><a href='b_tambah.php'>Kembali ke form</a>";
}
}

?>