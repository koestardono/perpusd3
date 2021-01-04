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
      <div class="content-wrapper" >
        <!-- Content Header (Page header) -->

        <section class="content-header">
          <h1>
            <marquee>Selamat Datang di
            <?php echo $app['app_description'];?>
            Program Diploma III Universitas Pakuan
            </marquee>
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>Visi & Misi</h3>
                  <p>Program Diploma</p>
                </div>
                <div class="icon">
                  <i class="fa fa-home"></i>
                </div>
                <a href="?page=sejarah" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->

             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3>Struktur </h3>
                 
                  <p>Organisasi Program Diploma</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a href="?page=hierarki" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->

             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $countq1;?></h3>
                  <p>Judul buku yang terdaftar</p>
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
              <div class="small-box bg-brown">
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
                  <p>Jumlah total keseluruhan buku</p>
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
                  <p>Jumlah buku yang tersedia saat ini</p>
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
            <div class="col-md-12">
              <div class="callout callout-danger">
                  <h4>Selamat Menggunakan!</h4>
                 <!--  <p><?php echo $app['app_title'];?> Version <?php echo $app['app_version'];?></p> -->
              </div>
            </div>
          </div>           

        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

