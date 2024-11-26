<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from pembeli where id_pembeli='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:pembeli.php");
 
?>