<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_karyawan    = $_POST['id_karyawan'];
$username = $_POST['username'];
$password   = $_POST['password'];
$nama      = $_POST['nama'];
$email     = $_POST['email'];
$no_telp    = $_POST['no_telp'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE karyawan SET nama = '$nama', username = '$username', password = '$password', email = '$email',no_telp = '$no_telp' WHERE id_karyawan = '$id_karyawan'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: karyawan.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>