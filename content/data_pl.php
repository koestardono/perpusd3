<?php
include('config/koneksi.php');
$level = $_SESSION['level'];
?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Praktek Lapang
            <small>All PL</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="user.php"><i class="fa fa-dashboard"></i> Home</a></li>
           <!--  <li><a href="#">Praktek Lapang</a></li>
            <li class="active">Cari Data PL</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                 
                   <!-- <form action="./search5.php" method="get" class="table-hover">
            
          
          <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Cari data PL...">
              <span class="input-group-btn">
                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
            </form> -->
                  <?php if ($level == 'admin'){?>
                  <div class="box-header">
                  <a href="?page=add_pl" class="btn btn-primary">Tambah Data Praktek Lapang</a>
                </div> 
                 <?php } ?>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                     
                       
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Prodi</th>
                        <th>Pembimbing 1</th>
                        <th>Pembimbing 2</th>
                        <th>Diskripsi</th>
                        <th>Action</th>
                        
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_epl");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result))
                            { ?>
                      <tr>
                        
                        <td><?php echo $row['npm'];?></td>
                        <td><?php echo $row['nama'];?></td>
                        <td><?php echo $row['judul'];?></td>
                         <td><?php echo $row['prodi'];?></td>
                        <td><?php echo $row['pembimbing1'];?></td>
                         <td><?php echo $row['pembimbing2'];?></td>
                       <td><?php echo $row['diskripsi'];?></td>
                       <td>
                        <a href="filepl/<?php echo $row['filepl'];?>">
                            <span class="label label-success">Download</span>
                            </a>
                            <?php if ($level == 'admin'){?>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlpl&id=<?php echo $row['id'];?>">
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