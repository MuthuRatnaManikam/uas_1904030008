<?php

require 'koneksi.php';
$danggota = query("SELECT * FROM anggota");

if (isset($_POST['cari'])) {
  $danggota = carii($_POST['keyword']);
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

  <title>Perpustakaan Pelita Membaca</title>
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
            <a class="nav-link" href="index.html">Home<span class="sr-only"></span></a>
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

  <!-- pencarian data -->
  <form action="" method="POST">
    <input type="text" id="keyword" size="50" name="keyword" placeholder="masukkan keyword" autocomplete="off">
    <button type="submit" class="btn btn-primary" name="cari"> Cari </button>
  </form>

  <br>
  <hr>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Anggota</th>
        <th scope="col">Alamat Anggota</th>
        <th scope="col">Nomor Telpon</th>
        <th scope="col">Opsi</th>
      </tr>
    </thead>
    <?php if (empty($danggota)) : ?>
      <tr>
        <td colspan="4" class="alert alert-danger text-center" role="alert">
          <p><b>Mahasiswa Tidak Ditemukan</b></p>
        </td>
      </tr>
    <?php endif; ?>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($danggota as $cmb) : ?>
        <tr>
          <th scope="row"><?php echo $no ?></th>
          <td><?php echo $cmb['nama_anggota']; ?></td>
          <td><?php echo $cmb['alamat_anggota']; ?></td>
          <td><?php echo $cmb['no_tlp']; ?></td>
          <td>
            <a href="edit anggota.php?id=<?= $camaba['id'];  ?>" class="btn btn-warning" role="button">Edit</a> |
            <a href="hapus.php?id=<?= $danggota['id'];  ?>" onclick="return confirm('apakah anda ingin menghapus data ini');" class="btn btn-danger" role="button">Hapus</a>
          </td>
        </tr>
        <?php $no++ ?>
      <?php endforeach ?>
    </tbody>
  </table>
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