         <?php
            include("c:/xampp/htdocs/Database_Cindri/Login/koneksi.php");
            if(isset($_POST["simpan"])){
                $tingkatan                        = $_POST["tingkatan"];

                $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kelas WHERE tingkatan='$tingkatan'"));
                if ($cek > 0) {
                  echo "<script>window.alert('Tingkatan yang Anda Masukan Sudah Ada')
                  window.location='create_kelas.php'</script>";
                  }else {
                    mysqli_query($koneksi, "INSERT INTO kelas (id_kelas, tingkatan) VALUES ('', '$tingkatan')");
                    echo "<script>window.alert('Data Sudah Disimpan')
                    window.location='index_kelas.php'</script>";
                  }
                }
            ?>
  