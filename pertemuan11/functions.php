<?php
/*
Eldi Anugrah Pratama
203040031
https://github.com/mamang69/pw2021_203040031
Pertemuan 10 - 29 April 2021
Koneksi DB & Insert Data
*/
?>

<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_203040031');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
function tambah($data)
{
  $conn = koneksi();

  $judul = htmlspecialchars($data['judul']);
  $nama = htmlspecialchars($data['nama']);
  $skill = htmlspecialchars($data['skill']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO anime VALUES(null,'$judul','$nama','$skill','$gambar');";


  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM anime WHERE id=$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $judul = htmlspecialchars($data['judul']);
  $nama = htmlspecialchars($data['nama']);
  $skill = htmlspecialchars($data['skill']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE anime SET
  judul = '$judul',
  nama = '$nama',
  skill = '$skill',
  gambar = '$gambar'
  WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM anime
              WHERE 
            nama LIKE '%$keyword%' OR
            judul LIKE '%$keyword%'
          ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
