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
    $Stok = htmlspecialchars($data['Stok']);

    $query = "INSERT INTO paint
                    VALUES
                    ('','$img','$judul','$harga','$deskripsi','$Stok')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM paint WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>