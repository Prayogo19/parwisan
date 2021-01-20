<?php 
require_once "../koneksi.php";

$id_pelunasan = $_GET['id_pelunasan'];
$sql = "SELECT bukti FROM pelunasan WHERE id_pelunasan='$id_pelunasan';";
$result = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_row($result);
$image = $row[0];
header("Content-type: image/jpeg");
echo $image;
 ?>