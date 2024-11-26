<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telpon = $_POST['no_telp'];
// menginput data ke database
mysqli_query($conn,"insert into karyawan (username,password,nama,email,no_telp) values('$username','$password','$nama','$email','$no_telpon')");
 
// mengalihkan halaman kembali ke index.php
header("location:karyawan.php");
 
?>