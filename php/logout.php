<?php
/// destroy cookie 
$check = false;
if (isset($_COOKIE['email']) && isset($_COOKIE['pass']) && isset($_COOKIE['checkRemember'])) {
    setcookie("email", "", time()-3600);

    setcookie("pass", "", time()-3600);

    setcookie("checkRemember", "", time()-3600);

    setcookie("idacc", "", time()-3600);

   $check = true;
   
}
/// detroy session
session_start();
 if(session_destroy()){
    $check = true;
 }
 if($check == true)
 {
    header( "Location: ../html/UserIndex.php ");

 }
 else
 {
     echo"<script>alert('Error')</script>";
 }

?>