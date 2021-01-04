<?php
include "../config/koneksi.php";
$id 	= stripslashes($_POST['id']);
$npm  = stripslashes($_POST['npm']);
$nama     = stripslashes($_POST['nama']);
$judul  	= stripslashes($_POST['judul']);
$diskripsi  	= stripslashes($_POST['diskripsi']);
$tahun  	= stripslashes($_POST['tahun']);
$judulbuku  	= stripslashes($_POST['judulbuku']);

$sql	= "UPDATE tb_eta SET npm='$npm',nama='$nama',judul='$judul',diskripsi='$diskripsi',tahun='$tahun',judulbuku='$judulbuku' WHERE id='$id'";
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_ta'>";
}
?>