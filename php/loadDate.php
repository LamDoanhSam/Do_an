<?php
session_start();

    require_once "config.php";
        $conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
        if($conn){
            mysqli_query($conn,"SET NAMES 'UTF8'");
            mysqli_set_charset($conn,'utf8');
            $idPhim = $_POST['idPhim'];
            $idPhong = $_POST['idPhong'];
            $qryDate = "SELECT distinct ngayChieu FROM suat_chieu WHERE idPhim = $idPhim AND idPhongChieu = $idPhong ORDER BY ngayChieu ASC";
            $qryPhim = "SELECT distinct ngayCongChieu FROM phim WHERE idPhim = $idPhim";
            $phim = mysqli_query($conn,$qryPhim);
            $ngayCongChieu = mysqli_fetch_assoc($phim);
            
            
            $suatchieu = mysqli_query($conn,$qryDate);
            while($arr = mysqli_fetch_assoc($suatchieu)){
                    if(date("Ymd",strtotime($arr['ngayChieu'])) >= date("Ymd",strtotime($ngayCongChieu['ngayCongChieu']))  && date("Ymd",strtotime($arr['ngayChieu'])) >= date("Ymd")){
                        echo "<option value='".date('d-m-Y', strtotime($arr['ngayChieu']))."'>".date('d-m-Y', strtotime($arr['ngayChieu']))."</option>";
                    }
            }
            
                
            mysqli_close($conn);
        } else{
            echo "Kết nối db thất bại";
        }
?>