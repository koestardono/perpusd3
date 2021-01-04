    
<?php
$level = $_SESSION['level'];
?>
     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            
            <div class="box-header">
                  <!-- <a href="?page=req_pinjam&id=<?php echo $_SESSION['id_anggota'];?>" class="btn btn-primary">Request Peminjaman Buku</a> -->
                </div>
            <small>Batas maksimal pengambilan buku yang sudah di setujui adalah 2 (dua) hari, lebih dari itu peminjaman akan dinyatakan batal ! 
            <br>
            <i>Catatan Action :</i>
            <br>
            <i><b>Pending</b> : Request Peminjaman Belum di Proses.</i>
            <br>
            <i><b>Disetujui</b> : Request Peminjaman Telah di Setujui.</i>
            <br>
            <i><b>Ditolak</b> : Request Peminjaman Ditolak.</i>
            <p class="navbar-right">
            Request Peminjaman akan di proses (1x24jam) pada jam kerja.
            </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Request</li>
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
                        <th>Kode Pinjam</th>
                        <th>Nama Anggota</th>
                       
                        <th>Judul Buku</th>
                        <th>Tanggal Request</th>
                        <th>Durasi Request</th>
                        <?php if ($level == 'admin'){?>
                        <th>Status</th>
                        <?php } ?>
                        <?php if ($level == 'admin'){?>
                        <th>Action</th>
                        <?php } ?>
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

                             $result = mysqli_query($connect, "SELECT tb_reqpinjam.*,tb_buku.judul_buku,tb_anggota.nm_anggota
                              FROM tb_reqpinjam
                              inner join tb_buku on tb_reqpinjam.kd_buku = tb_buku.kd_buku
                              inner join tb_anggota on tb_reqpinjam.id_anggota = tb_anggota.id_anggota 
                              WHERE tb_reqpinjam.id_anggota= '$get_id'");
                             $no=1; 
                            // tampilkan query
                            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            {
                      ?>
                      <tr>
                        <td><?php echo $row['kd_pinjam'];?></td>
                        <td><?php echo $row['nm_anggota'];?></td>
                        <td><?php echo $row['judul_buku'];?></td>
                        <td><?php echo tgl_indo($row['tgl_req']);?></td>
                        <td><?php $selisih = ((abs(strtotime ($row['tgl_req']) - strtotime (date('Y-m-d'))))/(60*60*24)); echo $selisih;?> Hari <br>
                          
                          <?php 

                          if ($selisih >= 2) {

                            $deletereq = "DELETE FROM tb_reqpinjam WHERE id_anggota='$get_id'";
                            $delreq  = mysqli_query($connect,$deletereq);
                            ?>


                          
                          <?php 
                          }else{
                            echo "*";
                          }
                          
                        ?>
                        </td>
                        <?php if ($level == 'admin'){?>
                        <td>
                       
                        <a href="admin.php?page=detail_pinjam&id=<?php echo $row['id_anggota'];?>">
                        <span class="label label-warning">Edit</span>
                        </a>
                        
                          <a href="user.php?page=detail_pinjam&id=<?php echo $row['kd_pinjam'];?>">
                            <?php
                              if ($row['status']==0) {
                                echo '<span class="label label-warning">Pending</span>';
                              } elseif ($row['status']==1) {
                                echo '<span class="label label-success">Disetujui</span>';
                              } else {
                                echo '<span class="label label-danger">Ditolak</span>';
                              }
                              
                            ?>
                            </a>
                          </td>
                          <?php } ?>
                           <?php if ($level == 'admin'){?>
                          <td>
                            <?php
                              if ($row['status']==0) {
                                echo '<center><a href="user.php?page=terima_reqpinjam&no='.$no.'" class="fa fa-check"></a>&nbsp;<a href="user.php?page=tolak_reqpinjam&no='.$no.'" class="fa fa-times-circle"></a></center>';

                              } elseif ($row['status']==1) {
                                echo '<center><a href="excecute/delete.php?dlt=dlreqpinjam&no='.$no.'" class="fa fa-trash"></a></center>';
                              } else {
                                echo '<center><a href="" class="fa fa-image"></a></center>';
                              }
                            ?>
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