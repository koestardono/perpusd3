<?php ob_start();
include "../config/koneksi.php";
if (isset($_POST['daftar'])) 
{
	

	}
$nama  = $_POST['nama'];
$link  = $_POST['link'];




$cek = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM tb_ejournal WHERE nama='$nama' "));
    if ($cek > 0){
    	
    echo "<script>window.alert('Judul Journal sudah terdaftar')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_journal'>";
    }else {    	
mysqli_query($connect,"INSERT INTO tb_ejournal(nama,link)
VALUE
('$nama','$link')")or die(mysqli_error());
  echo "<script>window.alert('Registrasi Berhasil')
 		window.location='../admin.php?page=data_ejournal'</script>";
}

?>