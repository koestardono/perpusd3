
<?php
session_start();
include "../config/koneksi.php";
if(isset($_POST['login']))
{               
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $level      = $_POST['level'];
    
    
  if($level == "admin")
  {
    $qr = mysqli_query($connect, "SELECT * FROM tb_petugas WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($qr) == 1)
    {
       $r = mysqli_fetch_assoc($qr);
         $_SESSION['username']=$username;
 		 $_SESSION['nm_petugas']=$r['fullname'];
         $_SESSION['nickname']=$r['nickname'];
         $_SESSION['level']=$r['level'];
         $_SESSION['id']=$r['id'];	
        header("location:../admin.php"); // Mengarahkan ke halaman profil
    }
    else
    {
        ?><script language="JavaScript">
 alert('Username atau Password "ADMIN" anda salah !');
document.location='../login.php'</script><?php
        }
    }
    else if($level == "operator")
  {
   $qr=mysqli_query($connect,"SELECT * FROM tb_petugas WHERE username='$_POST[username]' AND password=md5('$_POST[password]')");
    if(mysqli_num_rows($qr) == 1)
    {
        $r = mysqli_fetch_assoc($qr);
         $_SESSION['username']=$username;
     $_SESSION['nm_petugas']=$r['fullname'];
         $_SESSION['nickname']=$r['nickname'];
         $_SESSION['level']=$r['level'];
         $_SESSION['id']=$r['id'];  
        header("location:../admin.php"); // Mengarahkan ke halaman profil
    }
    else
    {
        ?><script language="JavaScript">
 alert('Username atau Password "PIMPINAN" anda salah !');
document.location='../login.php'</script><?php
        }
    }
    else if($level == "anggota")
  {
    $qr = mysqli_query($connect, "SELECT * FROM tb_anggota WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($qr) == 1)
    {
        $r = mysqli_fetch_assoc($qr);
         $_SESSION['username']=$username;
        $_SESSION['nm_anggota']=$r['nm_anggota'];
        $_SESSION['id_anggota']=$r['id_anggota'];
        $_SESSION['pasfoto']=$r['pasfoto'];
        $_SESSION['level']=$r['level'];
        
        header("location:../user.php"); // Mengarahkan ke halaman profil
    }
    else
    {
      ?><script language="JavaScript">
 alert('Username atau Password "ANGGOTA" anda salah !');
document.location='../login.php'</script><?php  
        }
    }
    else
        {
            $error = "Failed Login";
        }
    
}
?>