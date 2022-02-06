<?php

require 'koneksi.php';

$id = $_GET['id'];
$camaba = query("SELECT * FROM buku WHERE id = $id");

// var_dump($camaba['nama']);

if (isset($_POST['edit'])) {
  if (edita($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di edit');
    document.location.href = 'buku.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal diedit');
    </script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="#">
  <link rel="stylesheet" type="text/css" href="tema/fontawesome/css/all.min.css">

  <title>Perpustakaan Pelita Membaca</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">PERPUSTAKAAN PELITA MEMBACA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buku.php">Buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="anggota.php">Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="input.php">Input</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--akhir navbar-->

  <!-- konten -->
  <h3><i class="fas fa-users"></i> Edit Data Buku </h3>
  <hr>

  <form method="POST" action="">

    <input type="hidden" class="form-control" value="<?= $camaba['id'] ?>" name="id">

    <div class="form-group">
      <label for="judul">Judul Buku : </label>
      <input type="text" class="form-control" id="judul" value="<?= $camaba['judul_buku'] ?>" placeholder="judul buku" name="judul_buku" autofocus required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="tahun">Tahun Terbit : </label>
      <input type="text" class="form-control" id="tahun" value="<?= $camaba['tahun_terbit'] ?>" placeholder="tahun terbit" name="tahun_terbit" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah Buku : </label>
      <input type="text" class="form-control" id="jumlah" value="<?= $camaba['jumlah_buku'] ?>" placeholder="jumlah buku" name="jumlah_buku" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="jenis">Jenis Buku : </label>
      <input type="text" class="form-control" id="jenis" value="<?= $camaba['jenis_buku'] ?>" placeholder="jenis buku" name="jenis_buku" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="kode">Kode Rak : </label>
      <input type="text" class="form-control" id="kode" value="<?= $camaba['kode_rak'] ?>" placeholder="kode rak" name="kode_rak" required autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
  </form>


  </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>