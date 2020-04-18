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
            <h2 class="text-center"> Ubah Data Siswa</h2>
            <?php
              include "c:/xampp/htdocs/Database_Cindri/Login/koneksi.php";
              $nisn = $_GET['nisn'];
              $execute = mysqli_query($koneksi, "SELECT * FROM siswa where nisn='$nisn'")or die(mysqli_error());
              $data = mysqli_fetch_array($execute);
            ?>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="row">
            <div class="col-sm-6">
            <form action="update_siswa_action.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="hidden" name="id_siswa" value="<?= $data["id_siswa"] ?>" />
                <input type="hidden" name="nisn" value="<?= $data["nisn"] ?>" />
                <label>Nama Lengkap</label><br>
                <input type="text" name="nama_lengkap" class="form-control" value="<?= $data["nama_lengkap"]?>"></input><br>
                <label>Nama Panggilan</label><br>
                <input type="text" name="nama_panggilan" class="form-control" value="<?= $data["nama_panggilan"]?>"></input><br>
                <label>Jenis Kelamin</label>
                <select name="gender" class="form-control">
                  <option value="Perempuan">Perempuan</option>
                  <option value="Laki-Laki">Laki-Laki</option>
                </select> <br>
                <label>Tempat Lahir</label><br>
                <input type="text" name="tempat_lahir" class="form-control" value="<?= $data["tempat_lahir"]?>"></input><br>
                <label>Tangal Lahir</label><br>
                <input type="date" name="tanggal_lahir" class="form-control" value="<?= $data["tanggal_lahir"]?>"></input><br>
                <label>Alamat</label><br>
                <textarea name="alamat" class="form-control"><?= $data["alamat"]?></textarea><br
                <label>Nama Ayah</label><br>
                <input type="text" name="nama_ayah" class="form-control" value="<?= $data["nama_ayah"]?>"></input><br>
                <label>Nama Ibu</label><br>
                <input type="text" name="nama_ibu" class="form-control" value="<?= $data["nama_ibu"]?>"></input><br>
                <label>Agama</label><br>
                <input type="text" name="agama" class="form-control" value="<?= $data["agama"]?>"></input><br>
                <label>No. HP</label><br>
                <input type="text" name="no_hp" class="form-control" value="<?= $data["no_hp"]?>"></input><br>
                <label>No. HP OrangTua</label><br>
                <input type="text" name="no_hp_orangtua" class="form-control" value="<?= $data["no_hp_orangtua"]?>"></input><br> 
                <label>E-mail</label><br>
                <input type="text" name="email" class="form-control" value="<?= $data["email"]?>"></input><br>
                <label>ID Kelas</label><br>
                    <select name="id_kelas" class="form-control">
                          <option>--- Masukan ID Kelas ---</option>
                          <?php
                          include '../koneksi.php';
                          $result = mysqli_query($koneksi, "SELECT * FROM kelas");
                          while ($data2 = mysqli_fetch_array($result)) {
                          ?>
                          <option value="<?= $data2['id_kelas']; ?>" <?= $data['id_kelas'] === $data2['id_kelas'] ? "selected" : "" ?>><?= $data2['tingkatan']; ?></option>
                          <?php } ?>
                     </select>
                     <br>   
                <label>ID Jurusan</label><br>
                    <select name="id_jurusan" class="form-control">
                          <option>--- Masukan ID Jurusan ---</option>
                          <?php
                          include '../koneksi.php';
                          $result = mysqli_query($koneksi, "SELECT * FROM jurusan");
                          while ($data2 = mysqli_fetch_array($result)) {
                          ?>
                          <option value="<?= $data2['id_jurusan']; ?>" <?= $data['id_jurusan'] === $data2['id_jurusan'] ? "selected" : "" ?>><?= $data2['nama_jurusan']; ?></option>
                          <?php } ?>
                     </select>
                     <br>   

                <label>Foto</label>
                <input type="file" name="file" ><br>
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