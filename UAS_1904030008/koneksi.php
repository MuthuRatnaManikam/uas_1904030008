<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030008');

// pemanggilan tabel
function query($query)
{
  global $conn;

  // mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM buku WHERE judul_buku LIKE '%$keyword%' ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
function carii($keyword)
{
  global $conn;

  $query = "SELECT * FROM anggota WHERE nama_anggota LIKE '%$keyword%' ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function edita($data)
{
  global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['judul_buku']);
  $tahun = htmlspecialchars($data['tahun_buku']);
  $jumlah = htmlspecialchars($data['jumlah_buku']);
  $jenis = htmlspecialchars($data['jenis_buku']);
  $kode = htmlspecialchars($data['kode_rak']);

  $query = "UPDATE buku SET
  judul_buku ='$nama'
  tahun_buku ='$tahun'
  jumlah_buku ='$jumlah'
  jenis_buku ='$jenis'
  kode_rak ='$kode'
  WHERE id =$id; ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function editb($data)
{
  global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['judul_buku']);
  $tahun = htmlspecialchars($data['tahun_buku']);
  $jumlah = htmlspecialchars($data['jumlah_buku']);
  $jenis = htmlspecialchars($data['jenis_buku']);
  $kode = htmlspecialchars($data['kode_rak']);

  $query = "UPDATE buku SET
  judul_buku ='$nama',
  tahun_buku ='$tahun',
  jumlah_buku ='$jumlah',
  jenis_buku ='$jenis',
  kode_rak ='$kode'
  WHERE id =$id; ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function tambah($data)
{
  global $conn;

  $email = htmlspecialchars($data['email']);
  $komen = htmlspecialchars($data['komentar']);

  $query = "INSERT INTO komentar
VALUES
(null,'$email','$komen');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function tambahb($data)
{
  global $conn;

  $nama = htmlspecialchars($data['judul_buku']);
  $tahun = htmlspecialchars($data['tahun_buku']);
  $jumlah = htmlspecialchars($data['jumlah_buku']);
  $jenis = htmlspecialchars($data['jenis_buku']);
  $kode = htmlspecialchars($data['kode_rak']);

  $query = "INSERT INTO buku
VALUES
(null,'$nama','$tahun','$jumlah','$jenis','$kode');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function tambaha($data)
{
  global $conn;

  $nama = htmlspecialchars($data['nama_anggota']);
  $alamat = htmlspecialchars($data['alamat_anggota']);
  $no = htmlspecialchars($data['no_tlp']);

  $query = "INSERT INTO anggota
VALUES
(null,'$nama','$alamat','$no');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
