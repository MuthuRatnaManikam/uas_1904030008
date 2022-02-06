<?php
require "koneksi.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id = $_GET['id'];
if (hapus($id) > 0) {
  echo
  "<script>
  alert('data berhasil dihapus');
  document.location.href = 'buku.php';
  </script>";
} else {
  echo
  "<script>
  alert('data gagal dihapus');
  </script>";
}

if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id = $_GET['id'];
if (hapusa($id) > 0) {
  echo
  "<script>
  alert('data berhasil dihapus');
  document.location.href = 'anggota.php';
  </script>";
} else {
  echo
  "<script>
  alert('data gagal dihapus');
  </script>";
}
