<?php ob_start();
include "../config/koneksi.php";
if (isset($_POST['daftar'])) 
{
	$dir_upload = "../filepl/";
	$nama_file = $_FILES['filepl']['name'];
if (is_uploaded_file($_FILES['filepl']['tmp_name'])){
	$cek = move_uploaded_file($_FILES['filepl']['tmp_name'], $dir_upload.$nama_file);
		}

	}

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$judul  = $_POST['judul'];
$diskripsi  = $_POST['diskripsi'];
$pembimbing1 = $_POST['pembimbing1'];
$pembimbing2  = $_POST['pembimbing2'];
$filepl =$nama_file;


$cek = mysqli_num_rows(mysqli_query($connect,"SELECT judul
 FROM tb_epl WHERE judul='$judul'  "));
$cek1 = mysqli_num_rows(mysqli_query($connect,"SELECT npm
 FROM tb_epl WHERE npm='$npm'"));
    if ($cek > 0){
    	
    echo "<script>window.alert('Judul Sudah Terdaftar')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_bebas'>";
    }
    elseif($cek1> 0){
     echo "<script>window.alert('NPM $npm Sudah Terdaftar')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_bebas'>";   
    }
        else {    
        mysqli_query($connect,"INSERT INTO tb_epl(npm,nama,prodi,judul,diskripsi,pembimbing1,pembimbing2,filepl)
VALUE
('$npm','$nama','$prodi','$judul','$diskripsi','$pembimbing1','$pembimbing2','$filepl')")or die(mysqli_error());
  echo "<script>window.alert('Registrasi Berhasil')
        window.location='../admin.php?page=data_pl'</script>";	
    }



?>