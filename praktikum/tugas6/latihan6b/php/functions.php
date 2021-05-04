<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040031");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $img = htmlspecialchars($data['img']);
    $judul = htmlspecialchars($data['judul']);
    $harga = htmlspecialchars($data['harga']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $Stok = htmlspecialchars($data['Stok']);

    $query = "INSERT INTO paint
                    VALUES
                    ('','$img','$judul','$harga','$deskripsi','$Stok')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM paint WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $img = htmlspecialchars($data['img']);
    $judul = htmlspecialchars($data['judul']);
    $harga = htmlspecialchars($data['harga']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $Stok = htmlspecialchars($data['stok']);

    $query = "UPDATE paint 
                    SET 
                    img='img',
                    judul='$judul',
                    harga='$harga',
                    deskripsi='$deskripsi',
                    stok='$Stok' 
                    WHERE id = $id
                    ";
    mysqli_query($conn, $query);
    die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);


    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
              alert('username sudah digunakan');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
