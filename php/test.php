<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
session_start();

    require_once "config.php";
        $conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
        if($conn){
            mysqli_query($conn,"SET NAMES 'UTF8'");
            mysqli_set_charset($conn,'utf8');
            $sql = "SELECT * FROM phong_chieu ";
            $phong = mysqli_query($conn,$sql);
            if(mysqli_num_rows($phong)>0){ 
                while($array = mysqli_fetch_assoc($phong)){
                    echo "id Phòng: ". $array['idPhong']."<br>";
                    $idPhong = $array['idPhong'];
                    $row = $array['soLuongHang'];
                    $column = $array['soLuongCot'];        
                    for($i = 1 ;$i<=$column; $i++){
                        echo "<br>".$i."<br>";
                        for($j = 1; $j <= $row; $j++){
                            echo $j;
                            $insertSeat = "INSERT INTO `ghe_ngoi`(`idPhong`, `viTriHang`, `viTriCot`, `daChon`) VALUES
                            ($idPhong,$j,$i,true)";
                            mysqli_query($conn,$insertSeat);
                        }       
                    }
                    
                }              
            } 
            mysqli_close($conn);
        } else{
            echo "Kết nối db thất bại";
        }

?>
