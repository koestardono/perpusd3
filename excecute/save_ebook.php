<?php ob_start();
include "../config/koneksi.php";
if (isset($_POST['daftar'])) 
{
	

	}
$judul   = $_POST['judul'];
$pengarang   = $_POST['pengarang'];
$penerbit   = $_POST['penerbit'];
$diskripsi = $_POST['diskripsi'];
$link  = $_POST['link'];




$cek = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM tb_ebook WHERE judul='$judul' "));
    if ($cek > 0){
    	
    echo "<script>window.alert('Judul Buku sudah terdaftar')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_buku'>";
    }else {    	
mysqli_query($connect,"INSERT INTO tb_ebook(judul,pengarang,penerbit,diskripsi,link)
VALUE
('$judul','$pengarang','$penerbit','$diskripsi','$link')")or die(mysqli_error());
  echo "<script>window.alert('Registrasi Berhasil')
 		window.location='../admin.php?page=data_buku'</script>";
}

?>