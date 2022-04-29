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

            $isSelected =  $_POST['arraySelected'];
            $isSelected = explode(",", $isSelected);// mảng string
            $_SESSION['idGhe'] = $isSelected;


            $isChecked =  $_POST['arraySeat'];
            $isChecked = explode(",", $isChecked);// mảng string
            $_SESSION['array'] = $isChecked;

            idFinding($array);
            mysqli_close($conn);
        } else{
            echo "Kết nối db thất bại";
        }

        function idFinding($array) {
            GLOBAL $isSelected;
            $result ="";
            $idPhong = $array['idPhong'];
            $index = 0;
            for($i = 1;$i<=$array['soLuongHang'];$i++){		
                for($j = 1; $j <= $array['soLuongCot'];$j++){
                    if($isSelected[$index]=='1'){
                        $row='';
                        switch($i){
                            case 1: $row = "A";break;
                            case 2: $row = "B";break;
                            case 3: $row = "C";break;
                            case 4: $row = "D";break;
                            case 5: $row = "E";break;
                            case 6: $row = "F";break;
                            }
                        $result.= $row."-".$j." "; 
                    }
                    $index++;
                }
            }
            echo $result;
            $_SESSION['tenGhe'] = $result;
        }
?>