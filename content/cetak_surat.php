<?php
include('../config/koneksi.php');
include('../config/tgl_indonesia.php');
include "docxtemplate.class.php";

 $get_id=$_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM tb_eta WHERE id='$get_id'");
$row=mysqli_fetch_array($result);

$docx= new docxtemplate('surat_bikin.docx');
$docx -> set('id',$row['id']);
$docx -> set('nama',$row['nama']);
$docx -> set('npm',$row['npm']);
$docx -> set('prodi',$row['prodi']);
$docx -> set('tgl',tgl_indo(date('Y-m-d')));
$docx -> SaveAs('bebasperpus.docx');
header("Content-Type:application/msword");
header("Content-Disposition: attachment;filename=bebasperpus.docx");
readfile('bebasperpus.docx');

?>