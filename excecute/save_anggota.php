
<?php ob_start();
include "../config/koneksi.php";

if (isset($_POST['daftar'])) 
{
	$dir_upload = "../images/";
	$nama_file = $_FILES['fotoktp']['name'];
    $nm_file = $_FILES['pasfoto']['name'];
if (is_uploaded_file($_FILES['fotoktp']['tmp_name'])){
	$cek = move_uploaded_file($_FILES['fotoktp']['tmp_name'], $dir_upload.$nama_file);
		}
if (is_uploaded_file($_FILES['pasfoto']['tmp_name'])){
    $cek = move_uploaded_file($_FILES['pasfoto']['tmp_name'], $dir_upload.$nm_file);
        }
	}
$id_anggota   = $_POST['id_anggota'];
$level = $_POST['level'];
$nm_anggota  = $_POST['nm_anggota'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$tempat_tl = $_POST['tempat_tl'];
$username  = $_POST['username'];
$password  = $_POST['password'];
$no_npm  = $_POST['no_npm'];
$alamat  = $_POST['alamat'];
$email  = $_POST['email'];
$no_identitas = $_POST['no_identitas'];
$jurusan	= $_POST['jurusan'];
$fotoktp =$nama_file;
$pasfoto =$nm_file;

$cek = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM tb_anggota WHERE no_identitas='$no_identitas' and no_npm='$no_npm'"));
    if ($cek > 0){
    	
    echo "<script>window.alert('Nomer identitas sudah terdaftar')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../user.php?page=add_anggota'>";
    }else {    	
mysqli_query($connect,"INSERT INTO tb_anggota(id_anggota,pasfoto,level,nm_anggota,jenis_kelamin,tempat_tl,username,password,no_npm,alamat,email,no_identitas,jurusan,fotoktp)
VALUE
('$id_anggota','$pasfoto','$level','$nm_anggota','$jenis_kelamin','$tempat_tl','$username','$password','$no_npm','$alamat','$email','$no_identitas','$jurusan','$fotoktp')")or die(mysqli_error());
  echo "<script>window.alert('Registrasi Berhasil')
 		window.location='../content/kirimemail/index2.php?email=$email&username=$username&password=$password'</script>";
}



// header('location:cetak.php');
?>