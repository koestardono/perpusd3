<?php ob_start();
include "../config/koneksi.php";
if (isset($_POST['daftar'])) 
{
	$dir_upload = "../images/";
	$nama_file = $_FILES['fotobuku']['name'];
if (is_uploaded_file($_FILES['fotobuku']['tmp_name'])){
	$cek = move_uploaded_file($_FILES['fotobuku']['tmp_name'], $dir_upload.$nama_file);
		}

	}
$kd_buku   = $_POST['kd_buku'];
$judul_buku = $_POST['judul_buku'];
$id_pengarang  = $_POST['id_pengarang'];
$id_penerbit  = $_POST['id_penerbit'];
$isbn = $_POST['isbn'];
$jenis_buku = $_POST['jenis_buku'];
$asal_peroleh  = $_POST['asal_peroleh'];
$jml_buku  = $_POST['jml_buku'];
$tahunterbit  = $_POST['tahunterbit'];
$tahunpembelian = $_POST['tahunpembelian'];
$harga = $_POST['harga'];
$programstudi = $_POST['programstudi'];
$kode = $_POST['kode'];
$no_rak  = $_POST['no_rak'];
$fotobuku =$nama_file;


$cek = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM tb_buku WHERE judul_buku='$judul_buku' "));
    if ($cek > 0){
    	
    echo "<script>window.alert('Judul Buku sudah terdaftar')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_buku'>";
    }else {    	
mysqli_query($connect,"INSERT INTO tb_buku(kd_buku,kode,programstudi,judul_buku,id_pengarang,id_penerbit,isbn,jenis_buku,asal_peroleh,jml_buku,tahunterbit,tahunpembelian,harga,no_rak,fotobuku,jum_sem)
VALUE
('$kd_buku','$kode','$programstudi','$judul_buku','$id_pengarang','$id_penerbit','$isbn','$jenis_buku','$asal_peroleh','$jml_buku','$tahunterbit','$tahunpembelian','$harga','$no_rak','$fotobuku','$jml_buku')")or die(mysqli_error());
  echo "<script>window.alert('Registrasi Berhasil')
 		window.location='../admin.php?page=data_buku'</script>";
}

?>