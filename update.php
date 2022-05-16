<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$merek = $_POST['merek'];
$seri = $_POST['seri'];
$tahun_produksi = $_POST['tahun_produksi'];
$keterangan = $_POST['keterangan'];
 
// update data ke database
mysqli_query($koneksi,"update gudang set merek='$merek', seri='$seri', tahun_produksi='$tahun_produksi', keterangan='$keterangan' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tables.php");
 
?>