<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Database Sekolah</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div clas="container-fluid">
        <div class="navbar-header">
       <button stype="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
          <li><a href="index.php" class="navbar-brand">SMK LUGINA RANCAEKEK</a></li>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index_siswa.php">Data Siswa</a></li>
            <li><a href="index_kelas.php">Data Kelas</a></li>
            <li><a href="index_jurusan.php">Data Jurusan</a></li>
          </ul>
          </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- isi -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h2 class="text-center">Data Jurusan</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="row">
            <div class="col-sm-6" >
          <button class="btn-warning"><a href="create_jurusan.php"> +Tambah Data Jurusan</a></button>
          </br>
              <div class="table-responsive ">
                <table class="table table-bordered table-striped table-hover">
                  <thead>
                    <tr style="background-color: black; color: white">
                      <th>ID Jurusan</th>
                      <th>Nama Jurusan</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody style="background-color: white; color: black;">
                    <?php
                    include "c:/xampp/htdocs/Database_Cindri/Login/koneksi.php";
                    $execute = mysqli_query($koneksi, "SELECT * FROM jurusan")or die(mysqli_error($koneksi));
                    while ($data = mysqli_fetch_array($execute)) {
                    ?>
                    <tr>
                      <td><?php echo $data['id_jurusan']; ?></td>      
                      <td><?php echo $data['nama_jurusan']; ?></td>       
                      <td>
                        <button class="btn-danger"> <a href="update_jurusan.php?id_jurusan=<?php echo $data['id_jurusan']; ?>">UPDATE</button>
                        <button class="btn-success"> <a href="delete_jurusan.php?id_jurusan=<?php echo $data['id_jurusan']; ?>">DELETE</button>      
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir isi -->

 <!-- Footer -->
<footer>
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <p>&copy; copyright 2018 | built with <i class="glyphicon glyphicon-heart"></i> <a href="http://instagram.com/cindrika17">Cindri Candrika</a>.</p>
        
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="logout.php" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i>Log Out</a>
      </div>
      
    </div>
  </div>
</footer>
<!-- Akhir Footer -->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>