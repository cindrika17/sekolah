         <?php
            include("c:/xampp/htdocs/Database_Cindri/Login/koneksi.php");
            if(isset($_POST["simpan"])){
                $nama_jurusan             = $_POST["nama_jurusan"];

                $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM jurusan WHERE nama_jurusan='$nama_jurusan'"));
                if ($cek > 0) {
                  echo "<script>window.alert('Jurusan yang Anda Masukan Sudah Ada')
                  window.location='create_jurusan.php'</script>";
                  }else {
                    mysqli_query($koneksi, "INSERT INTO jurusan(id_jurusan, nama_jurusan)VALUES ('', '$nama_jurusan')");
                    echo "<script>window.alert('Data Sudah Disimpan')
                    window.location='index_jurusan.php'</script>";
                  }
                }
            ?>