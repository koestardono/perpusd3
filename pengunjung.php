
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
        <a href="./"><b>Pengunjung</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Mengisi Form Pengunjung</p>
          <form method="post" action="pengunjung/aksi_pengunjung.php" name="pengunjung">
  
  <table border="0" width="100%" cellpadding="2" id="table1">
    <tr>
      <td width="35%">Nama (*)</td>
      <td><input type="text" name="nama" required size="20"></td>
    </tr>
    <tr>
      <td width="35%">Jenis Kelamin (*)</td>
      <td><input type="radio" value="L" required name="jk"> Laki-Laki &nbsp;&nbsp;
      <input type="radio" value="P" required name="jk"> Perempuan</td>
    </tr>
    <tr>
      <td width="35%">Pekerjaan (*)</td>
      <td><input type =text size="20" name="pekerjaan" required>
      </td>
    </tr>
    <tr>
      <td width="35%" valign="top">Keperluan (*)</td>
      <td>
      <input type="checkbox" name="perlu1" value="Lihat">Lihat<br>
      <input type="checkbox" name="perlu2" value="Baca Buku"> Baca Buku<br>
      <input type="checkbox" name="perlu3" value="Baca Koran"> Baca Koran<br>
      <input type="checkbox" name="perlu4" value="Lainnya"> Lainnya</td>
    </tr>
    <tr>
      <td width="35%">Informasi yang dicari (*)</td>
      <td><textarea rows="5" name="cari" required cols="25"></textarea></td>
    </tr>
    <tr>
      <td width="35%">Saran-saran</td>
      <td><textarea rows="4" name="saran" cols="25"></textarea></td>
    </tr>
    <tr>
      <td width="35%">&nbsp;</td>
      <td><input type="submit" value="Submit" name="B1">&nbsp;&nbsp;&nbsp;
      <input type="reset" value="Reset" name="B2"></td>
    </tr>
    <tr>
      <td colspan="2"><b>Keterangan : (*) Harus diisi</b></td>
    </tr>
  </table>
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
