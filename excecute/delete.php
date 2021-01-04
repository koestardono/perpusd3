<?php
include "../config/koneksi.php";
$id = $_GET['id'];
$no = $_GET['no'];
$get_dl = $_GET['dlt'];


if($get_dl == 'dlbuku'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_buku WHERE kd_buku='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_buku'>";
}
}
elseif($get_dl == 'dlanggota'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_anggota WHERE id_anggota='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_anggota'>";
}
}
elseif($get_dl == 'dlpengarang'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_pengarang WHERE id_pengarang='$id'");
if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_pengarang'>";
}
}
elseif($get_dl == 'dlpenerbit'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_penerbit WHERE id_penerbit='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_penerbit'>";
}
}
elseif($get_dl == 'dlpeminjaman'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_peminjaman WHERE kd_pinjam='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_peminjaman'>";
}
}
elseif($get_dl == 'dlta'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_eta WHERE id='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_ta'>";
}
}
elseif($get_dl == 'dlpl'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_epl WHERE id='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_pl'>";
}
}
elseif($get_dl == 'dlebook'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_ebook WHERE id='$id'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_ebook'>";
}
}
elseif($get_dl == 'dlreqpinjam'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_reqpinjam WHERE no='$no'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_requestpinjam'>";
}
}
elseif($get_dl == 'dlreqpinjamm'){
// jalankan query
$query = mysqli_query($connect, "DELETE FROM tb_reqpinjam WHERE no='$no'");

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../user.php?page=data_reqpinjam'>";
}
}
?>