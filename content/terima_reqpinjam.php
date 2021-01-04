<?php
include ('config/koneksi.php');
$no=$_GET['no'];
mysqli_query($connect,"UPDATE tb_reqpinjam SET status='1' WHERE no='$no'");

$queryrow = mysqli_query($connect," SELECT * FROM tb_reqpinjam WHERE no='$no'");
$row = mysqli_fetch_array($queryrow);

$kd_buku = $row['kd_buku'];
$id_anggota = $row['id_anggota'];
$kd_pinjam = $row['kd_pinjam'];


$skrg 	= date('Y-m-d');
$oneweekfromnow =  date('Y-m-d', strtotime('+7 days') );

$sql  = 'INSERT INTO tb_peminjaman(kd_pinjam,id_anggota,kd_buku,tgl_pinjam,tgl_kembali) values ("'.$kd_pinjam.'","'.$id_anggota.'","'.$kd_buku.'","'.$skrg.'","'.$oneweekfromnow.'")';
	$query  = mysqli_query($connect,$sql);


$sql2     = mysqli_query($connect, "DELETE FROM tb_reqpinjam WHERE no='$no'");
?>
<script language="JavaScript">
 alert('Request Peminjaman Berhasil di verifikasi');
document.location='admin.php?page=data_requestpinjam';
</script>