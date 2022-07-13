<?php
header("location: ../forms-rdp.php");
?>

<?php
include "../koneksi.php";

$panel = $_GET['panel'];
$ip = $_GET['ip'];
$spec = $_GET['spec'];
$username = $_GET['username'];
$pass1 = $_GET['pass1'];
$pass2 = $_GET['pass2'];
$date = $_GET['date'];
$status = $_GET['status'];


$query = mysqli_query($koneksi, "INSERT INTO rdp VALUES('','$panel','$ip','$spec','$username','$pass1','$pass2','$date','$status')")
    or die(mysqli_error($koneksi));

if ($query) {
    echo "Selesai";
} else {
    echo "Proses input gagal, silahkan input kembali";
    echo "Silahkan klik <a href='formBarang.php'>disini</a>";
}