<?php ob_start();
include "../config/koneksi.php";
$nm_penerbit 	= stripslashes($_POST['nm_penerbit']);
$cek =  mysqli_num_rows(mysqli_query('select * from tb_penerbit where nama_penerbit = '.$nm_penerbit.''));
    
if ($cek > 0){
   echo "<script>window.alert('Nomer identitas sudah terdaftar')</script>";
      echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_penerbit'>";
     
    }
else {
mysqli_query($connect, 'INSERT INTO tb_penerbit values (null,"'.$nm_penerbit.'")');
echo "<script>window.alert('berhasil jing')</script>";
  echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_penerbit'>";

};
?>




<?php
include "../config/koneksi.php";
$nm_penerbit 	= stripslashes($_POST['nm_penerbit']);
$sql	= 'INSERT INTO tb_penerbit values (null,"'.$nm_penerbit.'")';
$query	= mysqli_query($connect,$sql);

if ($query > 0){
    	
    echo "<script>window.alert('Nomer identitas sudah terdaftar')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_penerbit'>";
    }
else {
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_penerbit'>";
}
?>

<!-- <?php
include "../config/koneksi.php";
$nm_penerbit 	= stripslashes($_POST['nm_penerbit']);
$sql	= 'SELECT * FROM tb_penerbit WHERE (nm_penerbit='nm_penerbit')';
$query	= mysqli_query($connect,$sql);

if ($query > 0){
    	
    echo "<script>window.alert('Nomer identitas sudah terdaftar')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_penerbit'>";
    }
else {
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_penerbit'>";
}
?> -->



<?php
include "../config/koneksi.php";
$nm_penerbit = $_POST['nm_penerbit'];
var_dump($nm_penerbit);
  $cekdata="select nama_penerbit from tb_penerbit where nama_penerbit='.$nm_penerbit.'";
  $ada=mysqli_query($connect, $cekdata) or die(mysqli_error());
  if(mysqli_num_rows($ada)!=0)
  { 
     die ('echo "udah ada"');
  }
  else
  {
     echo "ga ngecek";
  }
?>


$kode = $_GET['kode'];
$s =mysql_query("select * from buku where kode_buku= '$kode' ");
$data =mysql_fetch_array($s);
$jumlah = $data['jumlah'] - 1;
$result =mysql_query("UPDATE buku SET jumlah ='".$jumlah."' where kode_buku ='$kode'");


<?php
include "../config/koneksi.php";
$id_anggota   = stripslashes($_POST['id_anggota']);
$nm_anggota     = stripslashes($_POST['nm_anggota']);
$alamat_anggota         = stripslashes($_POST['alamat_anggota']);
$jenis_kelamin        = stripslashes($_POST['jenis_kelamin']);

$sql  = 'INSERT INTO tb_anggota values ("'.$id_anggota.'","'.$nm_anggota.'","'.$jenis_kelamin.'","'.$alamat_anggota.'")';
$query  = mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_anggota'>";
}
?>




<?php
session_start();
$error=''; 

include "../config/koneksi.php";
if(isset($_POST['login']))
{               
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $level      = $_POST['level'];
    
  if($level == "admin")
  {
    $query = mysqli_query($connection, "SELECT * FROM tb_petugas WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        header("location: admin.php"); // Mengarahkan ke halaman profil
        }
    }
    else if($level == "operator")
  {
    $query = mysqli_query($connection, "SELECT * FROM tbl_guru WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        header("location: guru.php"); // Mengarahkan ke halaman profil
        }
    }
    else if($level == "anggota")
  {
    $query = mysqli_query($connection, "SELECT * FROM tbl_siswa WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0)
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        header("location: siswa.php"); // Mengarahkan ke halaman profil
        }
    }
    else
        {
            $error = "Failed Login";
        }
    
}
?>



<?php
session_start();
#**************** koneksi ke mysql *****************#
include "../config/koneksi.php";
#***************** akhir koneksi ******************#
#jika ditekan tombol login
if(isset($_POST['login'])) { 
 $username = $_POST['username'];
 $password = $_POST['password'];
 // cek username yang diketik oleh user sama tidak dengan username yang ada didatabase
 $qr = mysqli_query($connect,"SELECT * FROM tb_petugas WHERE username='$username' 
 && password='$password'");
 
 $num = mysqli_num_rows($qr);
 $r = mysqli_fetch_array($qr,MYSQLI_ASSOC);
 if($num==1) {
 // login benar //
 $_SESSION['username']=$username;
 $_SESSION['nm_petugas']=$r['fullname'];
 $_SESSION['nickname']=$r['nickname'];
 $_SESSION['level']=$r['level'];
 $_SESSION['id']=$r['id'];      
 ?><script language="JavaScript">
 alert('Anda berhasil login');
document.location='../admin.php'</script><?php
 } else {
 // jika login salah //
 ?><script language="JavaScript">
  alert('Username atau password Anda salah. Silahkan Login Kembali'); 
  document.location='../index.php'</script><?php
 }}
?> 


else {
  include "../include/koneksi_db.php";
  $query=mysql_query("SELECT * FROM data_buku WHERE judul = '$buku'", $konek);
  while ($hasil=mysql_fetch_array($query)) {
    $sisa=$hasil['jum_temp'];
  } 
  
  if ($sisa == 0) {
    echo "<script>alert('SORY BOS, Bukunya telah habis...!. Anda tidak bisa melakukan transaksi !');</script>";
    echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
  } else {
    $qt     = mysql_query("INSERT INTO trans_pinjam VALUES (null, '$buku', '$id', '$siswa', '$tgl_pinjam', '$tgl_kembali', 'pinjam', '$ket')", $konek) or die ("Gagal Masuk".mysql_error());

    $qu     = mysql_query("UPDATE data_buku SET jum_temp=(jum_temp-1) WHERE id=$id ", $konek);

    if ($qt&&$qu) {
      echo "<script>alert('Transaksi BERHASIL...');</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
    } else {
      echo "<script>alert('Transaksi GAGAL...');</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=input_transaksi'>";
    }
  }
}


<?php
include "../config/koneksi.php";
$kd_pinjam  = $_POST['kd_pinjam'];
$id_anggota     = stripslashes($_POST['id_anggota']);
$kd_buku        = stripslashes($_POST['kd_buku']);
$skrg   = date('Y-m-d');
$oneweekfromnow =  date('Y-m-d', strtotime('+7 days') );

$sql  = 'INSERT INTO tb_peminjaman(kd_pinjam,id_anggota,kd_buku,tgl_pinjam,tgl_kembali) values ("'.$kd_pinjam.'","'.$id_anggota.'","'.$kd_buku.'","'.$skrg.'","'.$oneweekfromnow.'")';
$query  = mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_peminjaman'>";
}
?>




$query=mysqli_query($connect,"SELECT * FROM tb_buku WHERE kd_buku = '$kd_buku'");
  while ($hasil=mysqli_fetch_array($query)) {
    $sisa=$hasil['jum_sem'];
  } 
  
  if ($sisa == 0) {
    echo "<script>alert('SORY BOS, Bukunya telah habis...!. Anda tidak bisa melakukan transaksi !');</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_peminjaman'>";
  } else {
    $qt     = mysqli_query($connect,"INSERT INTO tb_peminjaman(kd_pinjam,id_anggota,kd_buku,tgl_pinjam,tgl_kembali) VALUE ('$kd_pinjam','$id_anggota', '$kd_buku','$skrg', '$oneweekfromnow')") or die ("Gagal Masuk".mysqli_error()); 

    

    $qu     = mysqli_query($connect,"UPDATE tb_buku SET jum_sem=(jum_sem-1) WHERE kd_buku=$kd_buku ");

    if ($qt&&$qu) {
      echo "<script>alert('Transaksi BERHASIL...');</script>";
      echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=data_peminjaman'>";
    } else {
      echo "<script>alert('Transaksi GAGAL...');</script>";
      echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_peminjaman'>";
    }
  }