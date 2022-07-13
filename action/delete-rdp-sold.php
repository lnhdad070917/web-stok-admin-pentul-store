<?php
session_start();
$username = $_SESSION['username'];
if (empty($_SESSION['username'])) {
    header("location:login.php?pesan=belum_login");
}
?>
<?php
include '../koneksi.php';
$nomor = $_GET['nomor'];
$query = mysqli_query($koneksi, "DELETE FROM rdp WHERE nomor ='$nomor'");
if ($query) {
    header("location: ../tables-sold-rdp.php");
} else {
    echo "Data gagal dihapus";
}