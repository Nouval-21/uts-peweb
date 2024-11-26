<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pembeli   = $_POST['id_pembeli'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telp'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pembeli SET nama_pembeli = '$nama', alamat = '$alamat',no_tlp = '$no_telpon' WHERE id_pembeli = '$id_pembeli'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: pembeli.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>