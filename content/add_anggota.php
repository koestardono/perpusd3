<?php
include "config/koneksi.php";
$sql=mysqli_query($connect,"SELECT * FROM tb_anggota order by id_anggota DESC LIMIT 0,1");
 $data=mysqli_fetch_array($sql);
 $kodeawal=substr($data['id_anggota'],1,4)+1;
 if($kodeawal<10){
  $kode='A00'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='A0'.$kodeawal;
 }else{
  $kode='A'.$kodeawal;
 }
 ?>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pendaftaran Calon Anggota Perpustakaan
            <small>Diploma</small>
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
               
                <!-- form start -->
                <form class="form-horizontal" action="excecute/save_anggota.php" method="post" name="daftar" enctype="multipart/form-data">
                  <div class="box-body">                    
					<div class="form-group">
                      <label class="col-sm-3 control-label">ID Anggota</label>
                      <div class="col-sm-2">
                        <input type="text" required="" value="<?php echo $kode;?>" class="form-control" placeholder="ID Anggota" disabled="">
                        <input type="hidden" name="id_anggota" value="<?php echo $kode;?>" required="" class="form-control" placeholder="ID Anggota">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-3 control-label">Akses</label>
                      <div class="col-sm-2">
                        <input type="text" required="" value="anggota" class="form-control" placeholder="ID Anggota" disabled="">
                        <input type="hidden" name="level" value="anggota" required="" class="form-control" placeholder="ID Anggota">
                      </div>
            </div>
         
          <div class="form-group">
                      <label class="col-sm-3 control-label">Username Login</label>
                      <div class="col-sm-6">
                        <input type="text" name="username" required="" maxlength="12" class="form-control" placeholder=" Masukan Username">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="text" name="password" required="" maxlength="12" class="form-control" placeholder="Masukan password">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Lengkap</label>
                      <div class="col-sm-6">
                        <input type="text" name="nm_anggota" required="" class="form-control" placeholder="Nama Anggota">
                      </div>
                    </div>
           <div class="form-group">
                      <label class="col-sm-3 control-label">Pas Foto</label>
                      <div class="col-sm-6">
                        <input type="file" name="pasfoto" required="" class="form-control" >
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-3 control-label">Jenis Kelamin</label>
                      <div class="col-sm-3">
            <select class="form-control select1" name="jenis_kelamin">
              <option selected="selected">Laki-Laki</option>
              <option>Perempuan</option>
            </select>
            </div>
          </div>
           
          <div class="form-group">
                      <label class="col-sm-3 control-label">Tempat Tanggal Lahir</label>
                      <div class="col-sm-6">
                        <input type="text" name="tempat_tl" required="" class="form-control" placeholder="hh/bb/tttt">
                      </div>
                    </div>           
					
          

          <div class="form-group">
                      <label class="col-sm-3 control-label">Nomer Identitas</label>
                      <div class="col-sm-6">
                        <input type="text" name="no_identitas" onkeypress="return Angkasaja(event)" required="" class="form-control" placeholder="Masukan Nomer KTP" maxlength="16">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-3 control-label">Foto Identitas</label>
                      <div class="col-sm-6">
                        <input type="file" name="fotoktp" required="" class="form-control" >
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-3 control-label">NPM</label>
                      <div class="col-sm-6">
                        <script type="text/javascript">
                        function Angkasaja(evt) {
                        var charCode = (evt.which) ? evt.which : event.keyCode
                        if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                        return true;
                        }
                        </script>
                        <input type="text" name="no_npm" onkeypress="return Angkasaja(event)" required="" class="form-control" placeholder="Masukan NPM" maxlength="9">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-3 control-label">Jurusan</label>
                      <div class="col-sm-6">
                      <select name="jurusan" class="form-control">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Manajemen Pajak">Manajemen Pajak</option>
                        <option value="Perpajakan dan Keuangan">Perpajakan dan Keuangan</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Akuntansi">Akuntansi</option>
                      </select>
                        
                      </div>
                    </div>   
					
          <div class="form-group">
                      <label class="col-sm-3 control-label">Email Aktif</label>
                      <div class="col-sm-6">
                        <input type="email" name="email" required="" class="form-control" placeholder="Masukan Email">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-3 control-label">Alamat Anggota</label>
                      <div class="col-sm-7">
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Enter ..." required=""></textarea>
                      </div>
                    </div>                  
					<!-- /.form-group -->
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <input name="daftar" type="submit" class="btn btn-info pull-right" value="Daftar !">
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
