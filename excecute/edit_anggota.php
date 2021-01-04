<?php
include "../config/koneksi.php";
$id_anggota 	= stripslashes($_POST['id_anggota']);
$nm_anggota  		= stripslashes($_POST['nm_anggota']);
$password  		= stripslashes($_POST['password']);
$alamat_anggota     		= stripslashes($_POST['alamat_anggota']);
$jenis_kelamin     		= stripslashes($_POST['jenis_kelamin']);
$result=mysqli_query($connect,"SELECT pasfoto FROM tb_anggota where id_anggota='$id_anggota'");
$row = mysqli_fetch_array($result);



if (empty(stripcslashes($_POST['pasfoto']))) {
	 $pas_foto=$row['pasfoto'];
}else{
	$pas_foto	=	stripcslashes($_POST['pasfoto']);
}
$sql	= "UPDATE tb_anggota SET nm_anggota='$nm_anggota',password='$password',jenis_kelamin='$jenis_kelamin',alamat='$alamat_anggota',pasfoto='$pas_foto' WHERE id_anggota='$id_anggota'";
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../user.php?page=edit_anggota&id=$id_anggota'>";
}
?>