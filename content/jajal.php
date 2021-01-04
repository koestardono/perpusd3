<?php
include'../config/koneksi.php';
     $query="SELECT SUM(jml_buku) FROM tb_buku ";
              $result=mysqli_query($connect,$query);
               while($row=mysqli_fetch_array($result)) {

               echo "Total" .$row['SUM(jml_buku)'];
               }

$sql=mysqli_query($connect,"SELECT tb_pengembalian.kd_pinjam from tb_pengembalian inner join tb_peminjaman tb_peminjaman on tb_pengembalian.kd_pinjam = tb_peminjaman.kd_pinjam where tb_pengembalian.kd_pinjam=tb_peminjaman.kd_pinjam ");

$sql=mysqli_query($connect,"SELECT tb_pengembalian.kd_pinjam,tb_peminjaman.kd_pinjam from tb_pengembalian
                            inner join tb_peminjaman on tb_pengembalian.kd_pinjam=tb_peminjaman.kd_pinjam
                            where max(kd_pinjam)");
              ?> 
                  

<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'emailmu@gmail.com';
$mail->Password = 'passwordmu';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('info@contoh.com', 'Codingan');
$mail->addReplyTo('info@contoh.com', 'Codingan');
// Menambahkan penerima
$mail->addAddress('penerima@contoh.com');
// Menambahkan cc atau bcc 
$mail->addCC('cc@contoh.com');
$mail->addBCC('bcc@contoh.com');
// Subjek email
$mail->Subject = 'Kirim Email via SMTP Server di PHP menggunakan PHPMailer';
// Mengatur format email ke HTML
$mail->isHTML(true);
// Konten/isi email
$mailContent = "<h1>Mengirim Email HTML menggunakan SMTP di PHP</h1>
    <p>Ini adalah email percobaan yang dikirim menggunakan email server SMTP dengan PHPMailer.</p>";
$mail->Body = $mailContent;
// Kirim email
if(!$mail->send()){
    echo 'Pesan tidak dapat dikirim.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Pesan telah terkirim';
}



<?php
include "../config/koneksi.php";
$get_id = $_GET['id_anggota'];
$id_anggota   = stripslashes($_SESSION['id_anggota']);
$nm_anggota     = stripslashes($_SESSION['nm_anggota']);
$alamat_anggota         = stripslashes($_POST['alamat_anggota']);
$jenis_kelamin        = stripslashes($_POST['jenis_kelamin']);

$sql  = "UPDATE tb_anggota SET nm_anggota='$nm_anggota',jenis_kelamin='$jenis_kelamin',alamat='$alamat_anggota' WHERE id_anggota='$id_anggota'";
$query  = mysqli_query($connect,$sql);

if ($query){
echo"<meta http-equiv='refresh' content='0; url=../admin.php?page=data_anggota'>";
}
?>


//login multiuser

<?php

                            include('config/koneksi.php');

                            // jalankan query
                            $appquery = mysqli_query($connect, "SELECT * FROM setup LIMIT 1"); 
                            // tampilkan query
                            $app=mysqli_fetch_array($appquery); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perpustakan | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">

        <b><img src="images/logo_diploma.png" width="100px" height="100px" class="pull-left">Perpustakaan Diploma III</b>
             </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Masukan Username dan Password anda</p>
        <form action="excecute/auth.php" method="post" name="login">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username" required="">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required="">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
        
          <div class="form-group has-feedback">      
            <select class="form-control select2" name="level">
              <option selected="selected" name="admin">admin</option>
              <option selected="selected" name="operator">operator</option>
              <option selected="selected" name="anggota">anggota</option>
            </select>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-8">
                <a href="pengunjung.php" class="btn btn-primary btn-block btn-flat">Pengunjung</a>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <input type="submit" name="login" class="btn btn-primary btn-block btn-flat" value="Sign In">

              </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
<?php  ?>



echo "<script>window.alert('Registrasi Berhasil')
        window.location='../content/kirimemail/index2.php'</script>";