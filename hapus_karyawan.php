<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from karyawan where id_karyawan='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:karyawan.php");
 
?>