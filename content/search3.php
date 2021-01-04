      <?php
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
				  <h3 class="box-title">Pencarian di Data Buku</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Kode</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Jumlah</th>
                        <th>Rak No.</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');
							include('config/tgl_indonesia.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT tb_buku.*,tb_pengarang.*,tb_penerbit.*
							FROM tb_buku,tb_pengarang,tb_penerbit
							WHERE tb_buku.id_pengarang=tb_pengarang.id_pengarang
							AND tb_buku.id_penerbit=tb_penerbit.id_penerbit
							AND judul_buku like '%$kata%'
							ORDER BY kd_buku ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
                        <td><?php echo $row['kode'];?></td>
                        <td><a href='user.php?page=detil_buku&judul_buku=<?php echo $row['judul_buku'];?>'><?php echo $row['judul_buku'];?></td>
                        <td><?php echo $row['nama_pengarang'];?></td>
                        <td><?php echo $row['nama_penerbit'];?></td>
                        <td><?php echo $row['jml_buku'];?></td>
                        <td><?php echo $row['no_rak'];?></td>
                        <td><a href="admin.php?page=edit_Buku&id=<?php echo $row['kd_buku'];?>">
                            <span class="label label-success">Edit</span>
                            </a>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlbuku&id=<?php echo $row['kd_buku'];?>">
                            <span class="label label-danger">Hapus</span>
                            </a>
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