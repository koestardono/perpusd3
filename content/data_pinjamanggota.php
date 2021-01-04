    

     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Peminjaman
            <small>Semua Data Peminjaman </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Peminjaman</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                

                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Kode Peminjaman</th>
                        <th>Nama Anggota</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
						<th>Tanggal Harus Kembali</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                            include('config/koneksi.php');
                            // $get_id = isset($_SESSION['id_anggota']) ? $_SESSION['id_anggota'] : "";
                            $get_id = $_GET['id_anggota'];
                            // jalankan query
               //              $result = mysqli_query($connect, "SELECT tb_peminjaman.*,tb_buku.*,tb_anggota.*
               //                FROM tb_peminjaman,tb_buku,tb_anggota
               //  WHERE tb_peminjaman.kd_buku=tb_buku.kd_buku
               //  AND tb_peminjaman.id_anggota=tb_anggota.id_anggota
               // ORDER BY kd_pinjam='$get_id'LIMIT 2");

                             $result = mysqli_query($connect, "SELECT tb_peminjaman.*,tb_buku.judul_buku,tb_anggota.nm_anggota
                              FROM tb_peminjaman
                              inner join tb_buku on tb_peminjaman.kd_buku = tb_buku.kd_buku
                              inner join tb_anggota on tb_peminjaman.id_anggota = tb_anggota.id_anggota 
                              WHERE tb_peminjaman.id_anggota= '$get_id'");
                             $no=1; 
                            // tampilkan query
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            {
                      ?>
                      <tr>
					              <td><?php echo $row['kd_pinjam'];?></td>
						            <td><?php echo $row['nm_anggota'];?></td>
                        <td><?php echo $row['judul_buku'];?></td>
                        <td><?php echo tgl_indo($row['tgl_pinjam']);?></td>
                        <td><?php echo tgl_indo($row['tgl_kembali']);?></td>
                        <td><a href="user.php?page=detail_pinjam&id=<?php echo $row['kd_pinjam'];?>">
                            <span class="label label-warning">View</span>
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