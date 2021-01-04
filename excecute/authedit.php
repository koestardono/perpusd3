<?php
    session_start();
	include "../config/koneksi.php";
		$qr=mysqli_query($connect,"SELECT * FROM tb_petugas WHERE username='$_POST[username]' AND password=('$_POST[password]')");
		if($qr){
			$r=mysqli_fetch_array($qr,MYSQLI_ASSOC);
			
			$_SESSION[username]=$r[username];
			$_SESSION[nm_petugas]=$r[fullname];
			$_SESSION[nickname]=$r[nickname];
			$_SESSION[level]=$r[level];
			$_SESSION[id]=$r[id];			
			header('location:../admin.php');		
		}
		else
		{					
			echo "<script>alert('username atau password salah!!!')</script>";
			echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
		}

?>


<?php
include "../config/koneksi.php";
$kd_buku 	= stripslashes($_POST['kd_buku']);
$judul_buku  = stripslashes($_POST['judul_buku']);
$id_pengarang     = stripslashes($_POST['id_pengarang']);
$id_penerbit  	= stripslashes($_POST['id_penerbit']);
$jumlah  	= stripslashes($_POST['jumlah']);
$tahun  	= stripslashes($_POST['tahun']);
$rak  	= stripslashes($_POST['rak']);

$sql	= 'INSERT INTO tb_buku values ("'.$kd_buku.'","'.$judul_buku.'","'.$id_pengarang.'","'.$id_penerbit.'","'.$jumlah.'","'.$tahun.'","'.$rak.'")';
$query	= mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_buku'>";
}
?>