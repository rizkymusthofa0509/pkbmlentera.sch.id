<?php
$folder = 'mail';
$root = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$url   = str_replace("service/".$folder."/","", $root) ; 
// echo $url;
$data = json_decode(file_get_contents($url.'api/setting_db'));
 
$konek = mysqli_connect($data->hostname,$data->username,$data->password,$data->database) or die ("Loss Connection");

$open_config_email = mysqli_fetch_array(mysqli_query($konek,"SELECT * FROM mail_settings LIMIT 1"));

 

$cek_data = mysqli_query($konek,"SELECT 
								u.nomor_member AS id_mitra,
								u.first_name AS nama_mitra,
								u.email AS email_mitra,
								u.join_date AS tanggal_bergabung,
								u.email as email,
								r.nomor_member AS id_ref,
								r.first_name AS nama_ref
								FROM tbl_users AS u
								LEFT JOIN tbl_users AS r ON r.id=u.sponsor_id
								WHERE u.nomor_member='$_GET[ID]' LIMIT 1");

if (mysqli_num_rows($cek_data) > 0){



$det = mysqli_fetch_array($cek_data);


 
// MAIL _SERVER
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// Konfigurasi SMTP
// $mail->isSMTP();
// $mail->Host 		= $open_config_email['hostname'];
// $mail->SMTPAuth 	= $open_config_email['smtp_auth'];
// $mail->Username 	= $open_config_email['username'];
// $mail->Password 	= $open_config_email['password'];
// $mail->SMTPSecure   = $open_config_email['smtp_secure'];
// $mail->Port 		= $open_config_email['port'];

// Statis
$mail->isSMTP();
$mail->Host 		= 'smtp.gmail.com';
$mail->SMTPAuth 	= true;
$mail->Username 	= 'rizkymusthofa05@gmail.com';
$mail->Password 	= 'Rizky321#@!';
$mail->SMTPSecure   = 'tls';
$mail->Port 		= 587;

$mail->setFrom($open_config_email['replay_email'], $open_config_email['replay_name']);
$mail->addReplyTo($open_config_email['replay_email'], $open_config_email['replay_name']);

// Menambahkan penerima
$mail->addAddress($det['email']); 
 

// Menambahkan cc atau bcc 
// $mail->addCC('admin@domain.co.id');
// $mail->addBCC('bcc@contoh.com');

// Subjek email
$mail->Subject = '[Poinku.id] Pendaftaran Berhasil. ';
 
$mail->isHTML(true);

// Konten/isi email
$mailContent =  
' 
<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Poinku.id Berhasil</title>
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td>
				<h1>
					<font color="green">
						<b>Register Completed</b>
					</font>
				</h1>
			</td>
		</tr>
		<tr>
			<td>
				Selamat '.$det['nama_mitra'].', 
				<br>Pendaftaran anda berhasil kami terima.
				<br>
				<br>
				Berikut ini informasi mengenai Account anda : 
			</td>
		</tr>
		<tr>
			<td>
				<hr>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">

					<tr>
						<td width="200px;"><b>Poin ID</b></td>
						<td width="10px;">:</td>
						<td>'.$det['id_mitra'].'</td>
					</tr>
					<tr>
						<td><b>Nama </b></td>
						<td>:</td>
						<td>'.$det['nama_mitra'].'</td>
					</tr>
					<tr>
						<td><b>E-mail</b></td>
						<td>:</td>
						<td>'.$det['email_mitra'].'</td>
					</tr>
					<tr>
						<td><b>Tanggal</b></td>
						<td>:</td>
						<td>'.$det['tanggal_bergabung'].'</td>
					</tr>
					<tr>
						<td colspan="3" >
							<br>
							<b><font size="1">Data Referral</font></b>
							<br> 
						</td>
					</tr>
					<tr>
						<td><b>ID</b></td>
						<td>:</td>
						<td>'.$det['id_ref'].'</td>
					</tr>
					<tr>
						<td><b>Nama</b></td>
						<td>:</td>
						<td>'.$det['nama_ref'].'</td>
					</tr>

				</table>
			</td>
			 
		</tr>
		<tr>
			<td>
				<hr>
			</td>
		</tr>
		<tr>
			<td>
				<font color="" size="2">
					<b>Terimakasih.</b><br>
					Salam,<br><br><br>
					<b>IT Department.</b>

				</font>
			</td>
		</tr>
	</table>
</body>
</html>
';
$mail->Body  =  $mailContent;
 
// Kirim email
if(!$mail->send()){
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Pesan telah terkirim'; 
}  

}else{
	echo "Tidak ada data untuk dikirim";
}
