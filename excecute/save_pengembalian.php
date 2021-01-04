<?php
include "../config/koneksi.php";
$kd_pinjam 	= $_POST['kd_pinjam'];
$lama_pinjam  		= stripslashes($_POST['lama_pinjam']);
// $denda     		= stripslashes($_POST['denda']);
$denda     		= stripslashes($_POST['denda']);
$skrg 	= date('Y-m-d');
$kd_buku = stripslashes($_POST['kd_buku']);

$cek = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM tb_pengembalian WHERE kd_pinjam='$kd_pinjam' and kd_buku='$kd_buku'"));
    if ($cek > 0){
    	
    echo "<script>window.alert('Buku Sudah Dikembalikan')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=data_pengembalian'>";
    }

$updatepinjam	= "UPDATE tb_peminjaman SET tgl_kembali='$skrg',lama_pinjam='$lama_pinjam',denda='$denda' WHERE kd_pinjam='$kd_pinjam'";
$excecute_update	= mysqli_query($connect,$updatepinjam);

$sql	= "INSERT INTO tb_pengembalian SELECT kd_pinjam,tgl_pinjam,tgl_kembali,lama_pinjam,denda,kd_buku,id_anggota FROM tb_peminjaman WHERE kd_pinjam='$kd_pinjam'";
	$query	= mysqli_query($connect,$sql);

$sql2     = 'UPDATE tb_buku SET jum_sem=(jum_sem+1) WHERE kd_buku=("'.$kd_buku.'") ';
    $query2	=mysqli_query($connect,$sql2);

$deletepinjam	= "DELETE FROM tb_peminjaman WHERE kd_pinjam='$kd_pinjam'";
$delpinjam	= mysqli_query($connect,$deletepinjam);

if ($excecute_update && $query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_pengembalian'>";
}else{
	die(mysqli_error($connect));
}
?>