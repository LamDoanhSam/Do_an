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
            renderProduct($array);
            mysqli_close($conn);
        } else{
            echo "Kết nối db thất bại";
        }

        function renderProduct($array) {
            $idPhong = $array['idPhong'];
            $html = '';
            $html.='<div class="screen"></div>';
            
            for($i = 1;$i<=$array['soLuongHang'];$i++){	
                
                // 1 --> 10
                if($i == 1){
                    $html.='<div class="row">';
                    for($j = 1; $j <= $array['soLuongCot'];$j++){  
                        if($j==3)
                            $html.='<span style="margin: 5px 25px 0 35px; font-size: 1.5rem;">';
                        else if($j==9)
                            $html.='<span style="margin: 5px 15px 0 35px; font-size: 1.5rem;">';
                        else
                            $html.='<span style="margin: 5px 25px 0 20px; font-size: 1.5rem;">';
                        $html.=$j;
                        $html.='</span>';     
                    }
                    $html.='</div>';
                }	

                $html.='<div class="row">';
                for($j = 1; $j <= $array['soLuongCot'];$j++){
                    $sql = "SELECT * FROM ghe_ngoi WHERE idPhong = $idPhong and viTriHang = $i and viTriCot = $j ";
                    $arrSeat = mysqli_query($GLOBALS['conn'],$sql); 
                    $seat = mysqli_fetch_array($arrSeat);
                    if(!$seat['daChon'])
                            $html.='<div class="seat"></div>';
                        else 
                            $html.='<div class="seat occupied"></div>';
                }

                // A B C....
                $row='';
                switch($i){
                    case 1: $row = "A";break;
                    case 2: $row = "B";break;
                    case 3: $row = "C";break;
                    case 4: $row = "D";break;
                    case 5: $row = "E";break;
                    case 6: $row = "F";break;
                }
                $html.='<span style="padding: 10px 0 10px 15px;font-size: 1.5rem;">';
                $html.=$row;
                $html.='</span>';
                $html.='</div>';
                
            }
            echo $html;
        }
?>