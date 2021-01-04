<?php
include "classes/class.phpmailer.php";
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPSecure = ‘tls’;
$mail->Host = "smtp.gmail.com"; //hostname masing-masing provider email
$mail->SMTPDebug = 2;
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "menameis66@gmail.com"; //user email
$mail->Password = "reothydrus19764325"; //password email
$mail->SetFrom("menameis66@gmail.com","Kustar"); //set email pengirim
$mail->Subject = "Pemberitahuan Email dari Website"; //subyek email
$mail->AddAddress("kustar251096@gmail.com","Kustar"); //tujuan email
$mail->MsgHTML("Testing…");
if($mail->Send()) echo "Message has been sent";
else echo "Failed to sending message";
?>

