<?php
$level = $_SESSION['level'];
?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Buku
            <small>All Data Buku</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Data E-Book</a></li>
            <!-- <li class="active">Data Buku</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                 <?php if ($level == 'admin'){?>
                <div class="box-header">
                   <a href="?page=add_ebook" class="btn btn-primary">Tambah Ebook</a>
                 
                </div><!-- /.box-header -->
                <?php } ?>
                <div class="box-header">
                  <h3 class="box-title">Data Buku</h3> 
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <?php if ($level == 'admin'){?>
                        <th>Kode</th>
                        <?php } ?>
                        <th>Judul Ebook</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Diskripsi</th>
                        
                        
                        <th>Action</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT *  FROM tb_ebook 
							");

                            
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result))
                            { ?>
                      <tr>
                        <?php if ($level == 'admin'){?>
                        <td><?php echo $row['id'];?></td>
                         <?php } ?>
                        
                        <td><?php echo $row['judul'];?></td>
                        <td><?php echo $row['pengarang'];?></td>
                        <td><?php echo $row['penerbit'];?></td>
                        <td><?php echo $row['diskripsi'];?></td>
                        
                        <td>
                            
                            <a href="<?php echo $row['link'];?>" target="_blank">
                            <span class="label label-success">Baca Selengkapnya..</span>
                            </a>
                            <?php if ($level == 'admin'){?>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlebook&id=<?php echo $row['id'];?>">
                            <span class="label label-danger">Hapus</span>
                            </a>
                             <?php } ?>
                        </td>
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