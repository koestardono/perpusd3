<?php

include('config/koneksi.php');
$level = $_SESSION['level'];
?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Tugas Akhir
            <small>All Data TA</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Data TA</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                 <?php if ($level == 'admin'){?>
                <div class="box-header">
                   <a href="?page=add_bebas" class="btn btn-primary">Data Tugas Akhir</a>
                </div><!-- /.box-header -->
                <?php } ?>

                 <?php if ($level == 'operator'){?>
                <div class="box-header">
                   <a href="?page=add_bebas" class="btn btn-primary">Data Tugas Akhir</a>
                </div><!-- /.box-header -->
                <?php } ?>

                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        
                        <th>NPM</th>
                        <th>Nama Lengkap</th>
                        <th>Judul TA</th>
                        <th>Abstrak</th>
                        <th>Tahun</th>
                        <?php if ($level == 'admin'){?>
                        <th>Buku Disumbangkan</th>
                        <?php } ?>
                        <?php if ($level == 'admin' OR 'operator'){?>
                        <th>Action</th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_eta
							ORDER BY id ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result))
                            { ?>
                      <tr>
                        
                        <td><?php echo $row['npm'];?></td>
                        <td><?php echo $row['nama'];?></td>
                        <td><?php echo $row['judul'];?></td>
                        <td><?php echo $row['diskripsi'];?></td>
                        <td><?php echo $row['tahun'];?></td>
                         <?php if ($level == 'admin'){?>
                         <td><?php echo $row['judulbuku'];?></td>
                         <?php } ?>
                         
                        <td>
                            <?php if ($level == 'admin'){?>
                            <a href="content/cetak_surat.php?id=<?php echo $row['id'];?>">
                            <span class="label label-success">Cetak</span>
                            </a>
                             <?php } ?>
                            <?php if ($level == 'operator'){?>
                            <a href="content/cetak_surat.php?id=<?php echo $row['id'];?>">
                            <span class="label label-success">Cetak</span>
                            </a>
                             <?php } ?>

                             <a href="fileta/<?php echo $row['fileta'];?>">
                            <span class="label label-success">Download</span>
                            </a>
                        
                            <?php if ($level == 'admin'){?>
                            <a href="admin.php?page=edit_ta&id=<?php echo $row['id'];?>">
                            <span class="label label-success">Edit</span>
                            </a>
                            <?php } ?>
                            <?php if ($level == 'admin'){?>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlta&id=<?php echo $row['id'];?>">
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