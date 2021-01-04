<?php
                            include('config/koneksi.php');
                            
                            $q1 = mysqli_query($connect, "SELECT * FROM tb_buku");
                            $countq1=mysqli_num_rows($q1);
							$q2 = mysqli_query($connect, "SELECT * FROM tb_anggota");
                            $countq2=mysqli_num_rows($q2);
							$q3 = mysqli_query($connect, "SELECT * FROM tb_pengarang");
                            $countq3=mysqli_num_rows($q3);
							$q4 = mysqli_query($connect, "SELECT * FROM tb_penerbit");
                            $countq4=mysqli_num_rows($q4);
							$q5 = mysqli_query($connect, "SELECT * FROM tb_peminjaman");
                            $countq5=mysqli_num_rows($q5);
							$q6 = mysqli_query($connect, "SELECT * FROM tb_pengembalian");
                            $countq6=mysqli_num_rows($q6);
                            
              // $q7 = mysqli_query($connect, "SELECT  jml_buku from tb_buku");
              //               $row=mysqli_num_rows($q7);
             
            
                            ?>
	<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Welcome, 
            <small><?php echo $app['app_description'];?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Halaman Utama</a></li>
            <!-- <li class="active">Halaman Utama</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Small boxes (Stat box) -->
          <?php if ($level == 'admin'){?>
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->

              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $countq1;?></h3>
                  <p>Data Buku</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="?page=data_buku" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $countq2;?></h3>
                  <p>Data Anggota</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="?page=data_anggota" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $countq3;?></h3>
                  <p>Data Pengarang</p>
                </div>
                <div class="icon">
                  <i class="fa fa-send"></i>
                </div>
                <a href="?page=data_pengarang" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $countq4;?></h3>
                  <p>Data Penerbit</p>
                </div>
                <div class="icon">
                  <i class="fa fa-send-o"></i>
                </div>
                <a href="?page=data_penerbit" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php
                        include('config/koneksi.php');
                        $query="SELECT SUM(jml_buku) FROM tb_buku ";
                        $result=mysqli_query($connect,$query);
                        while($row=mysqli_fetch_array($result)) {

                        echo "" .$row['SUM(jml_buku)'];
                        }
                       ?> 
                  </h3>
                  <p>Total semua Buku</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="?page=data_buku" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php
                        include('config/koneksi.php');
                        $query="SELECT SUM(jum_sem) FROM tb_buku ";
                        $result=mysqli_query($connect,$query);
                        while($row=mysqli_fetch_array($result)) {

                        echo "" .$row['SUM(jum_sem)'];
                        }
                       ?> 
                  </h3>
                  <p>Jumlah sementara total buku</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="?page=data_buku" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            
          </div><!-- /.row -->
           
		  <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-purple"><i class="fa fa-mail-reply"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Peminjaman</span>
                  <span class="info-box-number"><?php echo $countq5;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-purple"><i class="fa fa-mail-forward"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Pengembalian</span>
                  <span class="info-box-number"><?php echo $countq6;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
		   </div> 
       <?php } ?>         
          <div class="row">
            <div class="col-md-12">
              <div class="callout callout-warning">
                  <h4>Selamat Menggunakan!</h4>
                 <!--  <p><?php echo $app['app_title'];?> Version <?php echo $app['app_version'];?></p> -->
              </div>
            </div>
          </div>           

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->