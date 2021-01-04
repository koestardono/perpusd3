<?php
                      
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=pengunjung.xls");
 
// memanggil query dari database

                            include('../config/koneksi.php');
                            include('../config/tgl_indonesia.php');

                            // jalankan query
                            $bulan1= date("Y-m");
                            $no = 1;
                            $result = mysqli_query($connect,"SELECT * FROM tb_pengunjung WHERE tgl_kunjung LIKE '%$bulan1%' ORDER BY id");
        
            ?>
      
 
    <h3>Data Pengunjung</h3>   
    <h4>Bulan <?php echo date('F')." ".date('Y'); ?> </h4>  
        <table bordered="1">  
            <thead bgcolor="green" align="center">
            <tr>
                        <th>No</th>
                        <th>Nama Pengunjung</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
						<th>Keperluan1</th>
                        <th>Keperluan2</th>
                        <th>Keperluan3</th>
                        <th>Informasi yang dicari</th>
                        <th>Saran</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                      </tr>
            </thead>
            <tbody>
         
                    
        </tbody>

        </div>
    </div>
</div>
   <?php

                            
                           
                            // tampilkan query
                            while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                            { ?>
                      <tr>
					    <td><?php echo $no++;?></td>
						<td><?php echo $row['nama'];?></td>
                        <td><?php echo $row['jk'];?></td>
                        <td><?php echo $row['pekerjaan'];?></td>
                        <td><?php echo $row['perlu1'];?></td>
                        <td><?php echo $row['perlu2'];?></td>
                        <td><?php echo $row['perlu3'];?></td>
                        <td><?php echo $row['cari'];?></td>
                        <td><?php echo $row['saran'];?></td>
                        <td><?php echo $row['tgl_kunjung'];?></td>
                        <td><?php echo $row['jam_kunjung'];?></td>
                      </tr>
                      <?php } ?>                            
                        </table>       
