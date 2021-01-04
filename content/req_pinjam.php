<?php
                            include('config/koneksi.php');

$sql=mysqli_query($connect,"SELECT max(kd_pinjam) as kd_pinjam from tb_nomer");

 $data=mysqli_fetch_array($sql);
  $kodeawal= (int) substr($data['kd_pinjam'], 1, 4);
  $kodeawal++;
  $char ="P";
  $kode=$char.sprintf("%04s",$kodeawal);

                            $get_id = $_GET['id_anggota'];
                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_anggota WHERE id_anggota='$get_id' limit 1");

                            // tampilkan query
                            $row=mysqli_fetch_object($result);

                            $judul_buku  = isset($_GET['judul_buku']) ? $_GET['judul_buku'] : "";


$result2=mysqli_query($connect,"SELECT tb_buku.*,tb_pengarang.*,tb_penerbit.*
              FROM tb_buku,tb_pengarang,tb_penerbit WHERE  tb_buku.id_pengarang=tb_pengarang.id_pengarang
              AND tb_buku.id_penerbit=tb_penerbit.id_penerbit AND judul_buku='$judul_buku'");

$row2=mysqli_fetch_array($result2);
?>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Peminjaman
            <small>All Data Peminjaman</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Peminjaman</a></li>
            <li class="active">Add Peminjaman</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Request Peminjaman Buku</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/save_reqpinjam.php" method="post">
                  <div class="box-body">
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Peminjaman</label>
                      <div class="col-sm-10">
                        <input type="text" value="<?php echo $kode;?>" required="" class="form-control" placeholder="Kode Peminjaman" disabled="">
                        <input type="hidden" name="kd_pinjam" value="<?php echo $kode;?>" required="" class="form-control" placeholder="Kode Peminjaman">
                      </div>
                    </div>      
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Anggota</label>
                      <div class="col-sm-10">
                        <input type="text" value="(<?php echo $row->id_anggota;?>)<?php echo $row->nm_anggota;?>" required="" class="form-control" placeholder="Kode Peminjaman" disabled="">
                        <input type="hidden" name="id_anggota" value="<?php echo $row->id_anggota;?>" required="" class="form-control" placeholder="Kode Peminjaman">
                      </div>
                    </div>	

					<div class="form-group">
                      <label class="col-sm-2 control-label">Buku</label>
                      <div class="col-sm-10">
                        <input type="text" value="(<?php echo $row2['kd_buku'];?>)<?php echo $row2['judul_buku'];?>" required="" class="form-control" placeholder="Kode Peminjaman" disabled="">
                        <input type="hidden" name="kd_buku" value="<?php echo $row2['kd_buku'];?>" required="" class="form-control" placeholder="Kode Peminjaman">
                      </div>
                    </div>  
          <div class="form-group">
                      <label class="col-sm-2 control-label"></label>
                      <div class="col-sm-10">
                        
                        <input type="hidden" name="status" value="0" required="" class="form-control" placeholder="">
                      </div>
                    </div>        
          <!-- /.form-group -->
					<!-- /.form-group -->					
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Request</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->