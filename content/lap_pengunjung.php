      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Detail Pengunjung
            
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


$bulan1= date("Y-m");
$query=mysqli_query($connect,"SELECT * FROM tb_pengunjung WHERE tgl_kunjung LIKE '%$bulan1%' ORDER BY id");
?>
<table class="table-data" border=1 width="100%" align="left">
<tr><td class="head-data" colspan="6"><center>Data Pengunjung bulan <?php echo date('F')." ".date('Y'); ?></center></td></tr>
<tr><td class="head-data">No</td><td class="head-data">Nama</td><td class="head-data">Gender</td><td class="head-data">Kelas</td><td class="head-data">Perlu</td><td class="head-data">Saran</td></tr>
<?php
$no=0;
while ($hasil=mysqli_fetch_array($query)) {
$no++;
echo "<tr><td class='td-data'>$no</td>
      <td class='td-data'>$hasil[1]</td>
	  <td class='td-data'>$hasil[2]</td>
	  <td class='td-data'>$hasil[3]</td>
	  <td class='td-data'>$hasil[4]-$hasil[5]-$hasil[6]-$hasil[7]</td>
	  <td class='td-data'>$hasil[9]</td>
	  </tr>";
}
echo "</table>";
//akhir
$hi		= date("Y-m-d");
$baris=mysqli_query($connect,"SELECT * FROM tb_pengunjung") or die (mysqli_error());
$jumlah=mysqli_num_rows($baris);

$hari_ini=mysqli_query($connect,"SELECT * FROM tb_pengunjung WHERE tgl_kunjung LIKE '%$hi%'") or die (mysqli_error());
$jh=mysqli_num_rows($hari_ini);

$bulan= date("Y-m");
$bulan_ini=mysqli_query($connect,"SELECT * FROM tb_pengunjung WHERE tgl_kunjung LIKE '%$bulan%'") or die (mysqli_error());
$jb=mysqli_num_rows($bulan_ini);

echo "<br><table class='table-data' border='1' width='50%'>
<tr><td class=head-data colspan='2'><center>Data Pengunjung</center></td></tr>
<tr><td class='pinggir-data'>Pengunjung hari ini</td><td align='center' class='pinggir-data'><b>$jh</b></td></tr><tr><td class='pinggir-data'>Pengunjung bulan ini</td><td align='center' class='pinggir-data'><b>$jb</b></td></tr></table>";
//akhir
//$ta=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VII a' AND tgl_kunjung LIKE '%$bulan%'"));
//$tb=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VII b' AND tgl_kunjung LIKE '%$bulan%'"));
//$tc=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VII c' AND tgl_kunjung LIKE '%$bulan%'"));
//$da=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VIII a' AND tgl_kunjung LIKE '%$bulan%'"));
//$db=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VIII b' AND tgl_kunjung LIKE '%$bulan%'"));
//$dc=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='VIII c' AND tgl_kunjung LIKE '%$bulan%'"));
//$sa=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='IX a' AND tgl_kunjung LIKE '%$bulan%'"));
//$sb=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='IX b' AND tgl_kunjung LIKE '%$bulan%'"));
//$sc=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='IX c' AND tgl_kunjung LIKE '%$bulan%'"));
//$g=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='Guru' AND tgl_kunjung LIKE '%$bulan%'"));
//$k=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='Karyawan' AND tgl_kunjung LIKE '%$bulan%'"));
//$l=mysql_num_rows(mysql_query("SELECT * FROM pengunjung WHERE kelas='Lain' AND tgl_kunjung LIKE '%$bulan%'"));
?>
</tbody>                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
