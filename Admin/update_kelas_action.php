<?php
include "c:/xampp/htdocs/Database_Cindri/Login/koneksi.php";
if (isset($_POST["update"])) {
$tingkatan = $_POST['tingkatan'];

$query = "UPDATE kelas SET `tingkatan` = '$tingkatan` where `id_kelas` = '$id_kelas'";

$execute = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
header("location:index_kelas.php?pesan=update");
}

?>