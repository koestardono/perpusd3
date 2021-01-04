<?php
                            include('config/koneksi.php');

                            $get_id = $_GET['id'];
                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_eta WHERE id='$get_id' limit 1");

                            // tampilkan query
                            $row=mysqli_fetch_object($result);
?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            
            Data TA
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Buku</a></li>
            <li class="active">Edit Buku</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Buku</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="excecute/edit_ta.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Id</label>
                      <div class="col-sm-10">
                        <input type="text" required="" value="<?php echo $row->id;?>" class="form-control" placeholder="Kode Buku" disabled="">
                        <input type="hidden" name="id" value="<?php echo $row->id;?>" required="" class="form-control" placeholder="Kode Buku">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">NPM</label>
                      <div class="col-sm-10">
                        <input type="text" name="npm" value="<?php echo $row->npm;?>" required="" class="form-control" placeholder="Judul Buku">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label class="col-sm-2 control-label">Nama Lengkap</label>
                      <div class="col-sm-10">
            <input type="text" name="nama"  value="<?php echo $row->nama;?>" class="form-control" placeholder="Kode Buku" >
            </div>
          </div><!-- /.form-group -->
					<div class="form-group">
                      <label class="col-sm-2 control-label">Judul TA</label>
                      <div class="col-sm-10">
                        <input type="text" name="judul"  value="<?php echo $row->judul;?>"class="form-control" placeholder="">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-2 control-label">Tahun</label>
                      <div class="col-sm-10">
                        <input type="text" name="tahun"  value="<?php echo $row->tahun;?>"class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea name="diskripsi" class="form-control" rows="3" placeholder="Enter ..." required=""><?php echo $row->diskripsi;?></textarea>
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Buku di sumbangkan</label>
                      <div class="col-sm-10">
                        <input type="text" name="judulbuku" required="" class="form-control" value="<?php echo $row->judulbuku;?>">
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->