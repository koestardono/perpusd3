<?php
include ('config/koneksi.php');
$no=$_GET['no'];
mysqli_query($connect,"UPDATE tb_reqpinjam SET status='2' WHERE no='$no'");

$queryrow = mysqli_query($connect," SELECT * FROM tb_reqpinjam WHERE no='$no'");
$row = mysqli_fetch_array($queryrow);

$kd_buku = $row['kd_buku'];
$id_anggota = $row['id_anggota'];
$kd_pinjam = $row['kd_pinjam'];


$skrg 	= date('Y-m-d');
$oneweekfromnow =  date('Y-m-d', strtotime('+7 days') );

$sql2     = "UPDATE tb_buku SET jum_sem=(jum_sem+1) WHERE kd_buku='$kd_buku' ";
    $query2	=mysqli_query($connect,$sql2);

$sql3     = mysqli_query($connect, "DELETE FROM tb_reqpinjam WHERE no='$no'");
    

?>
<script language="JavaScript">
 alert('Request Peminjaman Berhasil dibatalkan');
document.location='admin.php?page=data_requestpinjam';
</script>