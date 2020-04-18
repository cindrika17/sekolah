<?php 
// koneksi database
include 'c:/xampp/htdocs/Database_Cindri/Login/koneksi.php';

// menangkap data id yang di kirim dari url
$id_jurusan = $_GET['id_jurusan'];


// menghapus data dari database
mysqli_query($koneksi,"DELETE from jurusan where id_jurusan='$id_jurusan'");

// mengalihkan halaman kembali ke index.php
header("location:index_jurusan.php");

?>