      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Anggota
            <small>All Data Anggota</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Anggota</a></li>
            <li class="active">Data Anggota</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Anggota</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Kode Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Kelamin</th>
                         <th>Program Studi</th>
                        <th>Alamat</th>
                        <?php if ($level == 'admin'){?>
                        <th>Action</th>
                        <?php } ?> 
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                            include('config/koneksi.php');

                            // jalankan query
                            $result = mysqli_query($connect, "SELECT * FROM tb_anggota ORDER BY nm_anggota ASC");
                            
                            $no=1; 
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
                        <td><?php echo $row['id_anggota'];?></td>
                        <td><?php echo $row['nm_anggota'];?></td>
                        <td><?php echo $row['jenis_kelamin'];?></td>
                        <td><?php echo $row['jurusan'];?></td>
                        <td><?php echo $row['alamat'];?></td>
                        <?php if ($level == 'admin'){?>
                        <td><a href="admin.php?page=edit_anggota&id=<?php echo $row['id_anggota'];?>">
                            <span class="label label-success">Edit</span>
                            </a>
                            <a href="admin.php?page=cetak&id=<?php echo $row['id_anggota'];?>">
                            <span class="label label-success">Cetak</span>
                            </a>
                            <a onclick="return confirm('Are You Sure  ?')" href="excecute/delete.php?dlt=dlanggota&id=<?php echo $row['id_anggota'];?>">
                            <span class="label label-danger">Hapus</span>
                            </a>
                        </td>
                        <?php } ?> 
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