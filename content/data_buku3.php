
      <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Buku
            <small>All Data Buku</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Buku</a></li>
            <li class="active">Data Buku</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Buku</h3> 
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                     
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Stok Tersedia</th>
                        <th>Rak No.</th>
                       
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT tb_buku.*,tb_pengarang.*,tb_penerbit.*
              FROM tb_buku,tb_pengarang,tb_penerbit
              WHERE tb_buku.id_pengarang=tb_pengarang.id_pengarang
              AND tb_buku.id_penerbit=tb_penerbit.id_penerbit
              ORDER BY judul_buku ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result))
                            { ?>
                      <tr>
                        <td><?php echo $row['kode'];?></td>
                        <td><a href='?page=detil_buku&judul_buku=<?php echo $row['judul_buku'];?>'><?php echo $row['judul_buku'];?></td>
                        <td><?php echo $row['nama_pengarang'];?></td>
                        <td><?php echo $row['nama_penerbit'];?></td>
                        <td><?php echo $row['jum_sem'];?></td>
                        <td><?php echo $row['no_rak'];?></td>
                        
                       
                      </tr>
                      <?php } ?>                                            
                    </tbody>                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->