<?php
session_start();
include "../koneksi.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($koneksi, " SELECT * FROM login WHERE username='$user' && password= '$pass'") or die(mysqli_error($koneksi));

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    header("location:../index.php");
} else {
    header("location:../pages-login.php?pesan=gagal");
}