<?php ob_start();
include "../config/koneksi.php";
if (isset($_POST['daftar'])) 
{
	$dir_upload = "../fileta/";
	$nama_file = $_FILES['fileta']['name'];
if (is_uploaded_file($_FILES['fileta']['tmp_name'])){
	$cek = move_uploaded_file($_FILES['fileta']['tmp_name'], $dir_upload.$nama_file);
		}

	}
$id_anggota   = $_POST['id_anggota'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$judul  = $_POST['judul'];
$diskripsi  = $_POST['diskripsi'];
$pembimbing1 = $_POST['pembimbing1'];
$pembimbing2  = $_POST['pembimbing2'];
$judulbuku = $_POST['judulbuku'];
$tahun = $_POST['tahun'];
$fileta =$nama_file;


$cek = mysqli_num_rows(mysqli_query($connect,"SELECT id_anggota
 FROM tb_peminjaman WHERE id_anggota='$id_anggota'  "));
$cek1 = mysqli_num_rows(mysqli_query($connect,"SELECT npm
 FROM tb_eta WHERE npm='$npm'"));
    if ($cek > 0){
    	
    echo "<script>window.alert('Anggota dengan nomer $id_anggota belum menyelesaikan peminjaman')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_bebas'>";
    }
    elseif($cek1> 0){
     echo "<script>window.alert('NPM $npm Sudah Terdaftar')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_bebas'>";   
    }
        else {    
        mysqli_query($connect,"INSERT INTO tb_eta(npm,nama,prodi,judul,diskripsi,pembimbing1,pembimbing2,judulbuku,fileta,tahun)
VALUE
('$npm','$nama','$prodi','$judul','$diskripsi','$pembimbing1','$pembimbing2','$judulbuku','$fileta','$tahun')")or die(mysqli_error());
  echo "<script>window.alert('Registrasi Berhasil')
        window.location='../admin.php?page=data_ta'</script>";	
    }



?>