<?php 
$server = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "db_dessert"; 
 
$koneksi = mysqli_connect($server,$username,$password,$database); 
 
if ($koneksi) { 
echo "berhasil"; 
} else { 
echo "gagal"; 
} 