<?php 
// koneksi database
include 'c:/xampp/htdocs/Database_Cindri/Login/koneksi.php';

// menangkap data id yang di kirim dari url
$nisn = $_GET['nisn'];


// menghapus data dari database
mysqli_query($koneksi,"DELETE from siswa where nisn='$nisn'");

// mengalihkan halaman kembali ke index.php
header("location:index_siswa.php");

?>