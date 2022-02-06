<?php

require 'koneksi.php';

if (isset($_POST['tambah1'])) {
  if (tambahb($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil ditambah');
    document.location.href = 'buku.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal ditambah');
    </script>";
  }
}

if (isset($_POST['tambah'])) {
  if (tambaha($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil ditambah');
    document.location.href = 'anggota.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal ditambah');
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>

  <nav class="navbar fixed top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">PERPUSTAKAAN PELITA MEMBACA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
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

  <!-- konten -->
  <h3><i class="fas fa-users"></i> Input Data Buku </h3>
  <hr>

  <form method="POST" action="">
    <div class="form-group">
      <label for="judul_buku">Judul Buku : </label>
      <input type="text" class="form-control" id="judul_buku" placeholder="judul_buku" name="judul_buku" autofocus required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="tahun_terbit">Tahun Terbit : </label>
      <input type="text" class="form-control" id="tahun_terbit" placeholder="tahun_terbit" name="tahun_terbit" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="jumlah_buku">Jumlah buku : </label>
      <input type="text" class="form-control" id="jumlah_buku" placeholder="jumlah_buku" name="jumlah_buku" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="jenis_buku">Jenis Buku : </label>
      <input type="text" class="form-control" id="jenis_buku" placeholder="jenis_buku" name="jenis_buku" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="kode_rak">Kode Rak : </label>
      <input type="text" class="form-control" id="kode_rak" placeholder="kode_rak" name="kode_rak" required autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary" name="tambah1">Simpan</button>
  </form>


  </div>
  </div>

  <!-- konten -->
  <h3><i class="fas fa-users"></i> Input Data Anggota </h3>
  <hr>

  <form method="POST" action="">
    <div class="form-group">
      <label for="nama_anggota">Nama Anggota : </label>
      <input type="text" class="form-control" id="nama_anggota" placeholder="nama_anggota" name="nama_anggota" autofocus required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="alamat_anggota">Alamat Anggota : </label>
      <input type="text" class="form-control" id="alamat_anggota" placeholder="alamat_anggota" name="alamat_anggota" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="no_tlp">Nomor Telpon : </label>
      <input type="text" class="form-control" id="no_tlp" placeholder=" no_tlp" name="no_tlp" required autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
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