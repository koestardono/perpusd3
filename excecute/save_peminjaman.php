<?php
include "../config/koneksi.php";
$id_anggota     = stripslashes($_POST['id_anggota']);
$querymax = mysqli_query($connect,"SELECT * FROM tb_peminjaman WHERE id_anggota='$id_anggota'");
$count =mysqli_num_rows($querymax);
if ($count>=2){
   echo "<script>alert('Peminjaman Melebihi Batas Maksimal 2...');</script>";
      echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_peminjaman'>";
}else{


$kd_pinjam 	= $_POST['kd_pinjam'];

$kd_buku     		= stripslashes($_POST['kd_buku']);
$skrg 	= date('Y-m-d');
$oneweekfromnow =  date('Y-m-d', strtotime('+7 days') );


$alur=mysqli_query($connect,"SELECT * FROM tb_buku WHERE kd_buku = '$kd_buku'");
  while ($hasil=mysqli_fetch_array($alur)) {
    $sisa=$hasil['jum_sem'];
  } 
  
  if ($sisa == 0) {
    echo "<script>alert('Stok Buku Habis ! Anda tidak bisa melakukan transaksi !');</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_peminjaman'>";
  } else {
    $sql  = 'INSERT INTO tb_peminjaman(kd_pinjam,id_anggota,kd_buku,tgl_pinjam,tgl_kembali) values ("'.$kd_pinjam.'","'.$id_anggota.'","'.$kd_buku.'","'.$skrg.'","'.$oneweekfromnow.'")';
	$query  = mysqli_query($connect,$sql);

    

    $sql2     = 'UPDATE tb_buku SET jum_sem=(jum_sem-1) WHERE kd_buku=("'.$kd_buku.'") ';
    $query2	=mysqli_query($connect,$sql2);

    $sql3     = 'INSERT INTO  tb_nomer(kd_pinjam) values ("'.$kd_pinjam.'") ';
    $query3 =mysqli_query($connect,$sql3);

    if ($sql&&$sql2) {
      echo "<script>alert('Transaksi BERHASIL...');</script>";
      echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=data_peminjaman'>";
    } else {
      echo "<script>alert('Transaksi GAGAL...');</script>";
      echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_peminjaman'>";
    }
  }
}
?>


