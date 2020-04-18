<?php
include "c:/xampp/htdocs/Database_Cindri/Login/koneksi.php";
if (isset($_POST["update"])) {
$nama_jurusan = $_POST['nama_jurusan'];

$query = "UPDATE jurusan SET `nama_jurusan` = '$nama_jurusan' where `id_jurusan` = '$id_jurusan'";

$execute = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
header("location:index_jurusan.php?pesan=update");
}

?>