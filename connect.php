<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->

<?php
$host="localhost";
$Username="root";
$Password= "";
$Database= "wad_modul3";

$conn = new mysqli($host, $Username, $Password, $Database); 

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if($conn->connect_error) {
   die('Koneksi gagal'. $conn->connect_error);
}
// 
?>