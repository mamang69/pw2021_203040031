<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];


    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);


    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}
?>


<form action="" method="POST">
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style:italic;">Username dan Password salah</p>
    <?php endif; ?>
    <table style="margin-left: 50px;">
        <tr>
            <h2>Masukan Username dan Passsword</h2>
        </tr>
        <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password"><span class="badge bg-success">Password</span></label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">>Remember me</span></label>
    </div>
    <button type="submit" name="submit">Login</button>
</form>