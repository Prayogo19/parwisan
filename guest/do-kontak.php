<?php  
$notify = "";
$notifyClass = "";

if (isset($_POST['submit'])) {
	//membuat variabel untuk menerima data dari form
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$subject = $_POST['subject'];
	$pesan = $_POST['pesan'];

	//cek apakah ada data yg belum diisi
	if (!empty($email) && !empty($nama)&&!empty($subject)&&!empty($pesan)) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
			$notify = 'Email Anda Salah. silahkan ketikan alamat email yang benar';
			$notifyClass = 'errordiv';
		}else {
			//pengaturan penerima dan subjek email
			$toEmail = header("location: ../admin/index.php");
			$emailSubject = 'Pesan Website dari'.$nama;
			$htmlContent = '<h2> Via Form Kontak Website</h2>
			<h4>Nama</h4><p>'.$nama.'</p>
			<h4>Email</h4><p>'.$email.'</p>
			<h4>Subject</h4><p>'.$subject.'</p>
			<h4><Message</h4><p>'.$pesan.'</p>';
			//mengatur tipe-konten header untuk mengirim email dalam bentuk html
			$headers = "MIME-Version: 1.0"."\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
			//header tambahan
			$headers.= 'From'.$nama.'<'.$email.'>'."\r\n";
			//kirim email
			if (mail($toEmail,$emailSubject,$htmlContent,$headers)) {
			 	$notify = 'Pesan Anda sudah terkirim dengan sukses';
			 	$notifyClass = 'succdiv';

			 } else {
			 	$notify = 'Maaf pesan anda gagal terkirim, silahkan ulangi lagi.';
			 	$notifyClass = 'errordiv';
			 }

		}
	} else {
		$notify = 'Harap mengisi semua field data';
		$notifyClass = 'errordiv';
	}
}
?>