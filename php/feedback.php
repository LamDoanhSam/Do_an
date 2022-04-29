
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "rapphim";

$conn = new mysqli($servername, $username, $password, $dbname);
$mail = $_POST['mail'];
$ten = $_POST['ten'];
$phone = $_POST['phone'];
$yKien = $_POST['yKien'];
$ho = $_POST['ho'];

$sql="INSERT INTO `feedback` (`mail`, `ten`,`phone`, `yKien`, `ho`) VALUES ('$mail',' $ten','$phone', '$yKien', '$ho')";
mysqli_query($conn, $sql);
header('location:../html/HoTro.php');
?>