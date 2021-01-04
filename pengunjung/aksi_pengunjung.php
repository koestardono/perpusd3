<?php

include "../config/koneksi.php";

$nama	= isset($_POST['nama']) ? $_POST['nama'] : "";
$jk  	= isset($_POST['jk']) ? $_POST['jk'] : "";
$pekerjaan	= isset($_POST['pekerjaan']) ? $_POST['pekerjaan'] : "";
$perlu1	= isset($_POST['perlu1']) ? $_POST['perlu1'] : "";
$perlu2	= isset($_POST['perlu2']) ? $_POST['perlu2'] : "";
$perlu3	= isset($_POST['perlu3']) ? $_POST['perlu3'] : "";
$perlu4	= isset($_POST['perlu4']) ? $_POST['perlu4'] : "";
$cari	= isset($_POST['cari']) ? $_POST['cari'] : "";
$saran	= isset($_POST['saran']) ? $_POST['saran'] : "";
$submit	= isset($_POST['submit']) ? $_POST['submit'] : "";
$jam	= date('g:i:s');

if ($nama==""||$jk==""||$pekerjaan==""||$cari==""||($perlu1==""&&$perlu2==""&&$perlu3==""&&$perlu4=="")) {
echo "<script>alert('Isilah form isian dengan lengkap')</script>";
echo "<meta http-equiv='refresh' content='0; url=../pengunjung.php'>";
} else {
$query =	mysqli_query($connect,"INSERT INTO tb_pengunjung VALUES (null, '$nama', '$jk', '$pekerjaan', '$perlu1', '$perlu2', '$perlu3', '$perlu4', '$cari', '$saran', now(), '$jam')")or die ("Gagal karena ".mysqli_error());

if ($query) {
echo "<script>alert('Selamat datang : \" $nama \" di Perpustakaan')</script>";
echo "<meta http-equiv='refresh' content='0; url=../halamanutama.php'>";
} else {
echo "<script>alert('Data anda gagal dimasukkan')</script>";
echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
}
}

?>