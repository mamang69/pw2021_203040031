<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_tubes_203040031');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);


  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function upload()
{
  $nama_file = $_FILES['img']['name'];
  $tipe_file = $_FILES['img']['type'];
  $ukuran_file = $_FILES['img']['size'];
  $eror = $_FILES['img']['error'];
  $tmp_file = $_FILES['img']['tmp_name'];


  if ($eror == 4) {
    return 'nopoto.png';
  }


  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }


  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan gambar');
           </script>";
    return false;
  }

  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('ukuran file terlalu besar');
           </script>";
    return false;
  }

  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../aset/img/' . $nama_file_baru);
  return $nama_file_baru;
}
function tambah($data)
{
  $conn = koneksi();


  $judul = htmlspecialchars($data['judul']);
  $harga = htmlspecialchars($data['harga']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $Stok = htmlspecialchars($data['stok']);
  $img = upload();
  if (!$img) {
    return false;
  }

  $query = "INSERT INTO paint
                  VALUES
                  ('','$img','$judul','$harga','$deskripsi','$Stok')";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();


  $paint = query("SELECT * FROM paint WHERE id = $id");
  if ($paint['img'] != 'nopoto.png') {
    unlink('../aset/img/' . $paint['img']);
  }

  mysqli_query($conn, "DELETE FROM paint WHERE id=$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);

  $img = upload();
  $judul = htmlspecialchars($data['judul']);
  $harga = htmlspecialchars($data['harga']);
  $deskripsi = htmlspecialchars($data['deskripsi']);
  $Stok = htmlspecialchars($data['stok']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);


  if (!$img) {
    return false;
  }

  if ($img == 'nopoto.png') {
    $img = $gambar_lama;
  }

  $query = "UPDATE paint 
                    SET 
                    img='$img',
                    judul='$judul',
                    harga='$harga',
                    deskripsi='$deskripsi',
                    stok='$Stok' 
                    WHERE id = $id
                    ";
  mysqli_query($conn, $query)  or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = ("SELECT * FROM paint WHERE
  judul LIKE '%$keyword%' OR
  harga LIKE '%$keyword%' OR
  deskripsi LIKE '%$keyword%' OR
  stok LIKE '%$keyword%' ");

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

      header("Location: ../index.php");
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

function ladmin($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);


  // cek dulu username 
  if ($username == 'mamangeldi' && $password == 'tampan') {
    // set session
    $_SESSION['ladmin'] = true;

    header("Location: admin.php");
    exit;
  } else {
    return [
      'error' => true,
      'pesan' => 'Username / Password Salah!'
    ];
  }
}
