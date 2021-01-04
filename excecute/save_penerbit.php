<?php
include "../config/koneksi.php";
//proses
    if(isset($_POST['simpan_penerbit'])) {
    $nm_penerbit=$_POST['nm_penerbit'];
   
   
//script validasi data
 
    $cek = mysqli_num_rows(mysqli_query($connect,"SELECT * FROM tb_penerbit WHERE nama_penerbit='$nm_penerbit'"));
    if ($cek > 0){
    echo "<script>window.alert('Nama Penerbit Sudah Terdaftar')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=add_penerbit'>";
    }else {
    mysqli_query($connect,"INSERT INTO tb_penerbit values (null,'$nm_penerbit')");
 
    echo "<script>window.alert('Nama Penerbit Berhasil Ditambahkan')</script>";
    echo "<meta http-equiv='refresh' content='0; url=../admin.php?page=data_penerbit'>";
    }
    }
    
?>