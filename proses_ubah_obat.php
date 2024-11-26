<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_obat   = $_POST['id_obat'];
$nama = $_POST['nama'];
$harga = $_POST['harga_jual'];
$tanggal = $_POST['tanggal_kadaluarsa'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE obat SET nama = '$nama', harga_jual = '$harga',tanggal_kadaluarsa = '$tanggal' WHERE id_obat = '$id_obat'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: obat.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>