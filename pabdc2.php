<?php
$servername = "localhost"; // alamat dari server DBMS
$username = "root"; // Username dari DBMS
$password = ""; // Password
$database = "pentulstore";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $database);

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
  // "die", itu gabungan dari perintah print dan break 
}
//echo "Alhamdulillah Connected successfully";

$sql = "select * from rdp"; // perintah sql

// Execute perintah sql, hasil dari queri disimpan didalam variabel $hasil
$hasil = $koneksi->query($sql); 

if($hasil->num_rows > 0){ // Jika ada data
  // Menampilkan data ke layar browser
  while($baris = $hasil->fetch_assoc()){
    echo "Panel: ".$baris["panel"]." - IP: ".$baris["ip"]."<br>";
  }
} else { // jika tidak ada data
  echo "Tabel tidak memiliki data";
}

//Tutup koneksi
$koneksi->close();

?>