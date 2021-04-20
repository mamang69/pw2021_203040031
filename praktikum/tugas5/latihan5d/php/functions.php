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
    while ($row = mysqli_fetch_assoc($result)){
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
    $Stok = htmlspecialchars($data['stok']);

    $query = "INSERT INTO paint
                    VALUES
                    ('','$img','$judul','$harga','$deskripsi','$stok')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM paint WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $img = htmlspecialchars($data['img']);
    $judul = htmlspecialchars($data['judul']);
    $harga = htmlspecialchars($data['harga']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $stok = htmlspecialchars($data['stok']);
 
    $query = "UPDATE paint 
                    SET 
                    img='$img',
                    judul='$judul',
                    harga='$harga',
                    deskripsi='$deskripsi',
                    stok='$stok' 
                    WHERE id = $id
                    ";



    mysqli_query($conn, $query);
    die(mysqli_error($conn));
    return mysqli_affected_rows($conn);

}
?>






