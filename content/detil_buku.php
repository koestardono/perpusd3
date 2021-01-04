      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Detail Data Buku
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Buku</a></li>
            <li class="active">Data Buku</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                
                <div class="box-body">
                  <?php
include ('config/koneksi.php');
$judul_buku  = isset($_GET['judul_buku']) ? $_GET['judul_buku'] : "";


$result=mysqli_query($connect,"SELECT tb_buku.*,tb_pengarang.*,tb_penerbit.*
              FROM tb_buku,tb_pengarang,tb_penerbit WHERE  tb_buku.id_pengarang=tb_pengarang.id_pengarang
              AND tb_buku.id_penerbit=tb_penerbit.id_penerbit AND judul_buku='$judul_buku'");

$row=mysqli_fetch_array($result);

?>
<table id="example2" class="table table-bordered table-hover">
     
      <tr>
        <td colspan="2" class="head-data"><center>Data Detail Buku : "<?php echo $row['judul_buku'];?>"</center></td>
      </tr>
       <tr>
        <td class="pinggir-data">Kode</td><td class="pinggir-data"><?php echo $row['kode'];?></td>
      </tr>
       <tr>
        <td class="pinggir-data">Program Studi</td><td class="pinggir-data"><?php echo $row['programstudi'];?></td>
      </tr>
	    <tr>
        <td class="pinggir-data">Judul</td><td class="pinggir-data"><?php echo $row['judul_buku'];?></td></tr>
	    <tr>
        <td class="pinggir-data">Pengarang</td><td class="pinggir-data"><?php echo $row['nama_pengarang']; ?></td>
      </tr>
	    <tr>
        <td class="pinggir-data">Tahun Terbit</td><td class="pinggir-data"><?php echo $row['tahunterbit']; ?></td>
      </tr>
      <tr>
        <td class="pinggir-data">Tahun Pembelian</td><td class="pinggir-data"><?php echo $row['tahunpembelian']; ?></td>
      </tr>
	    <tr>
        <td class="pinggir-data">Penerbit</td><td class="pinggir-data"><?php echo $row['nama_penerbit']; ?></td>
      </tr>
	    <tr>
        <td class="pinggir-data">I S B N</td><td class="pinggir-data"><?php echo $row['isbn']; ?></td>
      </tr>
      
	    <tr>
        <td class="pinggir-data">Klasifikasi Buku</td><td class="pinggir-data"><?php echo $row['jenis_buku']; ?></td>
      </tr>
	    <tr>
        <td class="pinggir-data">Jumlah Total Buku</td><td class="pinggir-data"><?php echo $row['jml_buku']; ?></td>
      </tr>
       <tr>
        <td class="pinggir-data">Jumlah Sementara</td><td class="pinggir-data"><?php echo $row['jum_sem']; ?></td>
      </tr>
	    <tr>
        <td class="pinggir-data">Lokasi</td><td class="pinggir-data"><?php echo $row['no_rak']; ?></td>
      </tr>
	    <tr>
        <td class="pinggir-data">Asal Perolehan</td><td class="pinggir-data"><?php echo $row['asal_peroleh']; ?></td>
      </tr>
      <tr>
        <td class="pinggir-data">Harga</td><td class="pinggir-data"><?php echo $row['harga']; ?></td>
      </tr>
	   
       
	    
    <tr><td class="pinggir-data">Foto Cover Buku</td><td class="pinggir-data"><?php echo '<img width="280" height="320" src="images/'.( $row['fotobuku'] ).'"/>';?>                                     
                    </tbody>                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->