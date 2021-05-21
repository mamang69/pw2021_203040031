<?php
session_start();

if (!isset($_SESSION['ladmin'])) {
  header("Location: admin.php");
  exit;
}

require 'functions.php';

//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location : aadmin.php");
  exit;
}

//mengambil dari url

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'admin.php';
    </script>";
} else {
  echo "data gagal dihapus";
}
