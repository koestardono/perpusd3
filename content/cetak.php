
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE</title>
</head>
<body>
 
	<center>
 
		<h2>DATA KARTU ANGGOTA PRINT</h2>
		<h4>DINAS ARSIP DAN PERPUSTAKAAN</h4>
 
	</center>
 
	<?php 
	include 'config/koneksi.php';
	include 'bar128.php';
	echo '<div style="border:3px double #ababab; padding:5px;margin:5px hight:150;width:320px; background-color:#A9A9A9">';
	?>
 	<form>
	<table border="0px double #ababab; padding:4px hight:190;width:340px;">
		<tr>
			<td align="center" style="background-color: #008B8B"><img style="width: 50px; height: 70px;" src="images/logobaru.png"></td>
			<td colspan="2" style="background-color: #008B8B;">
				<font size="2px"><p align="center">Kartu Anggota Perpustakaan<br>
				Kartu Arsip Perpustakaan Daerah<br>
				Kabupaten Bogor
				<font size="0,5"><p  align="justify">Jl.Bersih no.5 Komplek PEMDA Kel.Tengah Cibinong Telp. 021 8754761 email: kab.kantorarsip@gmail.com
				</font>
				</font>
			</p>
			</td>
		</tr>
		<?php 
		$get_id=$_GET['id'];
		$no = 1;
		$sql = mysqli_query($connect,"SELECT * FROM tb_anggota WHERE id_anggota='$get_id' limit 1");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr border="1px" colspan="2" style="background-color: #87CEFA;">
			<td align="center">
				<img src="images/<?php echo $data['pasfoto']; ?>" style="width: 60px; height: 80px; "><br>
			</td>
			<td align="right">
				<font size="5">
					<?php echo $data['nm_anggota']; ?><br>
				</font>
				<font size="4">
					<font size="2"> No.Anggota</font><?php echo bar128(stripslashes($data['id_anggota'])); ?> 
				</font>
			</td>
		</tr>
		
			
		<?php 
		}
		?>
	</table>
 	</form>
	<script>
		window.print();
	</script>
 
</body>
</html>













