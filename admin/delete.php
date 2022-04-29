<?php
$id = $_POST['id'];
$username = "root"; 
$password = "";    
$server   = "localhost";   
$dbname   = "rapphim";      
$conn = mysqli_connect($server, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM khach_hang  WHERE idKhachHang=$id";

mysqli_query($conn, $sql) ;

mysqli_close($conn);
?>