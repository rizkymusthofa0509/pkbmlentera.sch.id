<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host 		= 'smtp.gmail.com';
$mail->SMTPAuth 	= true;
$mail->Username 	= 'rizkymusthofa05@gmail.com';
$mail->Password 	= 'Rizky321#@!';
$mail->SMTPSecure   = 'tls';
$mail->Port 		= 587;

$mail->setFrom('rizkymusthofa0509@gmail.com', ' NAMA');
$mail->addReplyTo('balaske@gmail.com', 'Nama Lu');

// Menambahkan penerima
$mail->addAddress('rizkymusthofa0509@gmail.com'); 
 

// Menambahkan cc atau bcc 
// $mail->addCC('admin@domain.co.id');
// $mail->addBCC('bcc@contoh.com');

// Subjek email
$mail->Subject = 'SUBJECT';
 
$mail->isHTML(true);

// Konten/isi email
$mailContent =  "<h1>Tess Kirim Email</h1> <p>JAJAL.</p>";
$mail->Body  =  $mailContent;
 
// Kirim email
if(!$mail->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}