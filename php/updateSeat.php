<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
session_start();

    require_once "config.php";
    
        $conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
        if($conn){
            mysqli_query($conn,"SET NAMES 'UTF8'");
            mysqli_set_charset($conn,'utf8');
            $id = $_POST['idPhong'];
            $sql1 = "SELECT * FROM phong_chieu WHERE idPhong = $id";
            $phong = mysqli_query($conn,$sql1);
            $array = mysqli_fetch_assoc($phong);  

            $isChecked =  $_POST['arraySeat'];
            $isChecked = explode(",", $isChecked);// mảng string

            // updateProduct($array);
            mysqli_close($conn);
        } else{
            echo "Kết nối db thất bại";
        }

        function updateProduct($array) {
            GLOBAL $isChecked;
            $idPhong = $array['idPhong'];
            $index = 0;
            for($i = 1;$i<=$array['soLuongHang'];$i++){		
                for($j = 1; $j <= $array['soLuongCot'];$j++){
                    if($isChecked[$index]=='1'){
                        $sql = "UPDATE `ghe_ngoi` SET `daChon`=true
                                WHERE idPhong = $idPhong and viTriHang = $i and viTriCot = $j ";
                        mysqli_query($GLOBALS['conn'],$sql); 
                    }
                    $index++;
                }
            }
        }
?>