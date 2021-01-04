      <?php
      $level = $_SESSION['level'];
      include('config/koneksi.php');
	  $kata = $_GET['q'];
	  ?>
	  <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Search
            <small>All Search</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Search</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Search "<?php echo $kata; ?>"</h3><br><br><br>
				  <h3 class="box-title">Pencarian di Data Praktek Lapang</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
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
                            // include'../config/koneksi.php';

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_epl WHERE judul like'%$kata%' OR nama like '%$kata%' ORDER BY id asc");
                            
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