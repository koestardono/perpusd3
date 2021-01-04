
<?php
$email=$_GET['email'];
$username=$_GET['username'];
$password=$_GET['password'];

require 'PHPMailer/PHPMailerAutoload.php';


$mail = new PHPMailer;

// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'menameis66@gmail.com';
$mail->Password = 'reothydrus19764325';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('menameis66@gmail.com', 'Perpustakaan Diploma');
$mail->addReplyTo('menameis66@gmail.com', 'Perpustakaan Diploma');

// Menambahkan penerima
$mail->addAddress($email);

// Menambahkan beberapa penerima
//$mail->addAddress('penerima2@contoh.com');
//$mail->addAddress('penerima3@contoh.com');

// Menambahkan cc atau bcc 
$mail->addCC('menameis66@gmail.com');
$mail->addBCC('menameis66@gmail.com');

// Subjek email
$mail->Subject = 'Pendaftaran Anggota Berhasil';

// Mengatur format email ke HTML
$mail->isHTML(true);

// Konten/isi email
$mailContent = "<h1>Selamat anda telah terdaftar menjadi anggota perpustakaan</h1>
    <p>Username = $username</p>
    <p>Password = $password</p>
    </br>
    Harap Segera mengganti password anda di menu profil setelah login";
$mail->Body = $mailContent;

// Menambahakn lampiran
// $mail->addAttachment('lmp/file1.pdf');
// $mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png'); //atur nama baru

// Kirim email
if(!$mail->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo"<script>window.alert('Email berhasil dikirim ke $email')</script>";
    echo"<meta http-equiv='refresh' content='0; url=../../admin.php?page=data_anggota'>";
}