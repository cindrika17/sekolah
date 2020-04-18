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
            <h2 class="text-center"> Ubah Data Kelas</h2>
            <?php
              include "c:/xampp/htdocs/Database_Cindri/Login/koneksi.php";
              $id_kelas = $_GET['id_kelas'];
              $execute = mysqli_query($koneksi, "SELECT * FROM kelas where id_kelas='$id_kelas'")or die(mysqli_error());
              $data = mysqli_fetch_array($execute);
            ?>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="row">
            <div class="col-sm-6">
            <form action="update_kelas_action.php" method="POST">
              <div class="form-group">
                <label>Tingkatan</label>
                <select name="tingkatan" class="form-control">
                  <option value="10-A">10 A</option>
                  <option value="10-B">10 B</option>
                  <option value="11-A">11 A</option>
                  <option value="11-B">11 B</option>
                  <option value="12-A">12 A</option>
                  <option value="12-B">12 B</option>
                </select> <br>
                <button class="btn btn-danger" type="submit" name="update" value="update">Update</button>
              </div>
            </form>
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