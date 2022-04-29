<?php
session_start();

    require_once "config.php";
        $conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
        if($conn){
            mysqli_query($conn,"SET NAMES 'UTF8'");
            mysqli_set_charset($conn,'utf8');
            $idPhim = $_POST['idPhim'];
            $idPhong = $_POST['idPhong'];
            if(isset($_POST['date'])){
                $date = $_POST['date'];
                $tmp = date('Y-m-d',strtotime($date));
                $qryTime = "SELECT distinct * FROM suat_chieu WHERE idPhim = $idPhim AND idPhongChieu = $idPhong AND ngayChieu='$tmp'";
                // echo $qryTime;
                $suatchieu = mysqli_query($conn,$qryTime);
                while($arr = mysqli_fetch_assoc($suatchieu)){
                            echo "<option value='".date('h:i A', strtotime($arr['gioBatDau']))."'>".date('h:i A', strtotime($arr['gioBatDau']))."</option>";
                        }
            }
            mysqli_close($conn);
 
        }else{
        echo "Kết nối db thất bại";
    }
?>