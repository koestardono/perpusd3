<?php
include "config/koneksi.php";
$sql=mysqli_query($connect,"SELECT * FROM tb_buku order by kd_buku DESC LIMIT 0,1");
 $data=mysqli_fetch_array($sql);
 $kodeawal=substr($data['kd_buku'],1,4)+1;
 if($kodeawal<10){
  $kode='B00'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='B0'.$kodeawal;
 }else{
  $kode='B'.$kodeawal;
 }
 ?>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Buku
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Buku</a></li>
            <li class="active">Add Buku</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Buku</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" name="daftar" action="excecute/save_buku.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Urutan Buku</label>
                      <div class="col-sm-2">
                        <input type="text" value="<?php echo $kode;?>" required="" class="form-control" placeholder="Kode Buku" disabled="">
                        <input type="hidden" name="kd_buku" value="<?php echo $kode;?>" required="" class="form-control" placeholder="Kode Buku">
                      </div>
                    </div>
         
          <div class="form-group">
                      <label class="col-sm-2 control-label">Program Studi</label>
                      <div class="col-sm-4">
                      <select name="programstudi" required="" class="form-control">
                        <option value="SISTEM INFORMASI">Sistem Informasi</option>
                        <option value="TEKNOLOGI KOMPUTER">Teknologi Komputer</option>
                        <option value="MANAJEMEN PAJAK">Manajemen Pajak</option>
                        <option value="PERBANKAN DAN PAJAK">Perbankan dan Pajak</option>
                        <option value="AKUNTANSI">Akuntansi</option>
                      </select>
                      </div>
                    </div>  
           <div class="form-group">
                      <label class="col-sm-2 control-label">Kode Buku</label>
                      <div class="col-sm-6">
                        <input type="text" name="kode" required="" class="form-control" placeholder="Kode">
                      </div>
                    </div>        
					<div class="form-group">
                      <label class="col-sm-2 control-label">Judul Buku</label>
                      <div class="col-sm-6">
                        <input type="text" name="judul_buku" required="" class="form-control" placeholder="">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Pengarang</label>
                      <div class="col-sm-6">
						<select class="form-control select2" name="id_pengarang">
							<option selected="selected">Pilih</option>
							<?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_pengarang ORDER BY nama_pengarang ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
							<option value="<?php echo $row['id_pengarang'];?>"><?php echo $row['nama_pengarang'];?></option>
							<?php } ?>
						</select>
						</div>
					</div><!-- /.form-group -->
					<div class="form-group">
                      <label class="col-sm-2 control-label">Penerbit</label>
                      <div class="col-sm-6">
						<select class="form-control select2" name="id_penerbit">
							<option selected="selected">Pilih</option>
							<?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_penerbit ORDER BY nama_penerbit ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
							<option value="<?php echo $row['id_penerbit'];?>"><?php echo $row['nama_penerbit'];?></option>
							<?php } ?>
						</select>
						</div>
					</div><!-- /.form-group -->
          <div class="form-group">
                      <label class="col-sm-2 control-label">ISBN</label>
                      <div class="col-sm-6">
                        <input type="text" name="isbn" required="" class="form-control" placeholder="(-) bila tidak ada">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-2 control-label">Klasifikasi Buku</label>
                      <div class="col-sm-4">
                        <select class="form-control select2" name="jenis_buku">
                           <option selected="selected">Teknologi</option>
                           <option>Ekonomi</option>
                           <option>Perpajakan</option>
                           <option>Sistem Informasi</option>
                           <option>Sejarah</option>
                           <option>Novel</option>
                           <option>Majalah</option>
                           <option>Biologi</option>
                           <option>Farmasi</option>
                        </select>
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-2 control-label">Asal Perolehan</label>
                      <div class="col-sm-6">
                        <input type="text" name="asal_peroleh" required="" class="form-control" placeholder="Asal buku">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">Jumlah</label>
                      <div class="col-sm-6">
                        <input type="text" name="jml_buku" required="" class="form-control" placeholder="Jumlah buku">
                      </div>
                    </div>
         
					<div class="form-group">
                      <label class="col-sm-2 control-label">Tahun Terbit</label>
                      <div class="col-sm-4">
                        <input type="text" name="tahunterbit" required="" class="form-control" placeholder="(-) bila tidak ada">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-2 control-label">Tahun Pembelian</label>
                      <div class="col-sm-4">
                        <input type="text" name="tahunpembelian" required="" class="form-control" placeholder="Tahun pembelian buku">
                      </div>
                    </div>
          <div class="form-group">
                      <label class="col-sm-2 control-label">Harga</label>
                      <div class="col-sm-4">
                        <input type="text" name="harga" required="" class="form-control" placeholder="(-) bila tidak ada">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="col-sm-2 control-label">No Rak</label>
                      <div class="col-sm-2">
                        <input type="text" name="no_rak" required="" class="form-control" placeholder="rak">
                      </div>
                    </div>
        
          <div class="form-group">
                      <label class="col-sm-2 control-label">Foto Cover Buku</label>
                      <div class="col-sm-6">
                        <input type="file" name="fotobuku" required="" class="form-control" >
                      </div>
                    </div>            
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <a href="javascript:history.back()" class="btn btn-default">Cancel</a>
                    <input name="daftar" type="submit" class="btn btn-info pull-right" value="Input">
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->