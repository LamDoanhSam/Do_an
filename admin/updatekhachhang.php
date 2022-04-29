<?php
$id = $_POST['id'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$username = "root"; 
$password = "";    
$server   = "localhost";   
$dbname   = "rapphim";      
$conn = mysqli_connect($server, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE khach_hang SET hoTen='$name',email='$email',gioiTinh='$gender',soDienThoai='$phone' WHERE idKhachHang=$id";

mysqli_query($conn, $sql) ;

mysqli_close($conn);
?>