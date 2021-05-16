<?php
/*
Eldi Anugrah Pratama
203040031
https://github.com/mamang69/pw2021_203040031
Pertemuan 12 - 07 mei 2021
registrasi
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

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);


  // cek dulu username 
  if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
    // cek pw
    if (password_verify($password, $user['password'])) {
      // set session
      $_SESSION['login'] = true;

      header("Location: index.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password Salah!'
  ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / password kosong
  if (empty($username) || empty($password2) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username sudah ada 
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
            alert('username sudah ada buat yang baru!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika pw < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
          alert('password terlalu pendek!');
          document.location.href = 'registrasi.php';
        </script>";
    return false;
  }

  // jika username & pw sudah sesuai
  // enkripsi pw
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user
            VALUES
          (null, '$username', '$password_baru')
        ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
