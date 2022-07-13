<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "pentulstore";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if ($koneksi->connect_error){
    die('maaf koneksi gagal : ' . $koneksi->connect_error);
}