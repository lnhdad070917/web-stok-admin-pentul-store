<?php
header("location: ../tables-ready-panel.php");
?>
<?php
include '../koneksi.php';

$nomor = $_GET['nomor'];
$provider = $_GET['provider'];
$mail = $_GET['mail'];
$pass1 = $_GET['pass1'];
$pass2 = $_GET['pass2'];
$date = $_GET['date'];
$rs = $_GET['rs'];

$query = mysqli_query($koneksi, "UPDATE panel SET provider='$provider', email= '$mail', pass1= '$pass1', pass2= '$pass2', date= '$date', rs= '$rs' WHERE nomor='$nomor'");
if ($query) {
    echo "selesai";
} else {
    echo "Data gagal diubah";
}