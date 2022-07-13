<?php
header("location: ../tables-sold-rdp.php");
?>

<?php
include '../koneksi.php';

$nomor = $_GET['nomor'];
$panel = $_GET['panel'];
$ip = $_GET['ip'];
$username = $_GET['username'];
$pass1 = $_GET['pass1'];
$pass2 = $_GET['pass2'];
$date = $_GET['date'];
$status = $_GET['status'];

$query = mysqli_query($koneksi, "UPDATE rdp SET panel='$panel', ip= '$ip', username= '$username', pass1= '$pass1', pass2= '$pass2', date= '$date', status= '$status' WHERE nomor='$nomor'");
if ($query) {
    echo "selesai";
} else {
    echo "Data gagal diubah";
}