<?php
include "c:/xampp/htdocs/Database_Cindri/Login/koneksi.php";
if (isset($_POST["update"])) {
$id_siswa = $_POST['id_siswa'];
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_panggilan = $_POST['nama_panggilan'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$agama = $_POST['agama'];
$no_hp = $_POST['no_hp'];
$no_hp_orangtua = $_POST['no_hp_orangtua'];
$email = $_POST['email'];
$id_kelas = $_POST['id_kelas'];
$id_jurusan = $_POST['id_jurusan'];
$gender = $_POST['gender'];
$ekstensi_diperbolehkan = array('png','jpg');
$nama = $_FILES['file']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];  
       
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
              if($ukuran < 1044070){      
                move_uploaded_file($file_tmp, 'file/'.$nama);
                $query = "UPDATE siswa SET nama_lengkap='$nama_lengkap', nama_panggilan='$nama_panggilan', gender='$gender', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', agama='$nama_ayah', no_hp='$no_hp', no_hp_orangtua='$no_hp_orangtua', email='$email', id_kelas='$id_kelas', id_jurusan='$id_jurusan', foto='$nama' WHERE nisn='$nisn'";
                $execute = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

                if($execute){
                  echo 'DTA BERHASL $ FILE BERHASIL DI UPLOAD';
                  header("location:index_siswa.php?pesan=update");
                }else{
                  echo 'GAGAL MENGUPLOAD GAMBAR';
                }
              } else {
                echo 'UKURAN FILE TERLALU BESAR';
              }
            } else {
              echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            }
          }