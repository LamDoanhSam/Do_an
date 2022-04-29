<?php 
session_start();
if(isset($_SESSION['totalPrice']))
{
    $ticket = $_SESSION['totalTicket'];
    $totalPrice = $_SESSION['totalPrice'];
	$price = $_SESSION['giaVe'];
    $time = date('H:i:s', strtotime($_SESSION['gioChieu']));
    $theater = $_SESSION['idPhong'];
    $date = $_SESSION['ngayChieu'];
	$name = $_SESSION['tenPhim'];
	$seat = $_SESSION['tenGhe'];
	$idPhim = $_SESSION['idPhim'] ;
	

}

    // update ghế và vé vào database

	require_once "config.php";
    $conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
    if($conn){
		if(isset($_SESSION['array'])){
			$isChecked = $_SESSION['array']; // mảng ghế 0 1
			mysqli_query($conn,"SET NAMES 'UTF8'");
            mysqli_set_charset($conn,'utf8');
            $sql1 = "SELECT * FROM phong_chieu WHERE idPhong = $theater";
            $phong = mysqli_query($conn,$sql1);
            $array = mysqli_fetch_assoc($phong); 
			updateSeat($array); // update table ghế


			// tìm id ghế -> lưu vào mảng id
			$arrId = [];
			$index = 0;
			$isSelected = $_SESSION['idGhe'];
			for($i = 1;$i<=$array['soLuongHang'];$i++){		
				for($j = 1; $j <= $array['soLuongCot'];$j++){
					if($isSelected[$index]=='1'){
						$sql = "SELECT `idGhe` FROM `ghe_ngoi` 
								WHERE idPhong = $theater and viTriHang = $i and viTriCot = $j ";
						$id = mysqli_query($GLOBALS['conn'],$sql);
						$id = mysqli_fetch_assoc($id); 
						// echo $id['idGhe']."<br>";	
						array_push($arrId, $id['idGhe']);	
					}			
					$index++;
				}
			}
			
			// tìm id suất chiếu
			$date_eng = date('Y-m-d', strtotime($_SESSION['ngayChieu']));
			$sql_sc ="SELECT `idSuatChieu` FROM `suat_chieu`
				WHERE idPhim = $idPhim and idPhongChieu=$theater and gioBatDau = '$time' and ngayChieu = '$date_eng'";
				// echo $sql_sc;
			$id = mysqli_query($conn,$sql_sc);
			$id = mysqli_fetch_assoc($id); 
			$id =  $id['idSuatChieu'];
			
			//update ve ban
			$date_current = date('Y-m-d');
			for($i=0;$i<count($arrId);$i++){
				$ve = "INSERT INTO `ve_ban` (`ngayBan`, `thanhTien`, `idSuatChieu`, `idGiaVe`, `idGhe`, `idNhanVien`, `idKhachHang`)
			 	VALUES ('$date_current', $price,'$id' , '1', $arrId[$i], 'NV01', 5)";
				//  echo"      " .$ve;
				 mysqli_query($conn,$ve); 
			}
			
		
		}	
		// mysqli_close($conn);
	} else{
		echo "Kết nối db thất bại";
	}
    
	function updateSeat($array) {
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

	// session_destroy();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa đơn</title>
    <link rel="stylesheet" type="text/css" href="..//css/style1.css"/>
	<link rel="stylesheet" href="..//bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="..//js/jquery-3.6.0.min.js"></script>

	<!-- in file -->
	<script type="text/javascript" src="..//bootstrap/pdfmake.min.js"></script>
    <script type="text/javascript" src="..//bootstrap/html2canvas.min.js"></script>
</head>

<body>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<div class="section group">
				<div class="about span_1_of_2">	
					<h2>THÔNG TIN VÉ ĐẶT PHIM</h2>
					<table id ="tblTicket" class="table table-bordered" border="1" style="background-color: #e39e9e;">
						<thead>
						<th>STT</th>
						<th>Tên phim</th>
						<th>Rạp</th>
						<th>Ngày chiếu</th>
						<th>Giờ chiếu</th>
						<th>Số ghế</th>
						<th>ID ghế</th>
						<th>Tổng tiền</th>
						</thead>
							<?php $index =0;?>
                        <tr>
								<td><?php echo ++$index;?></td>
								<td><?php echo $name?></td>
								<td><?php echo $theater?></td>
								<td><?php echo $date?></td>
								<td><?php echo $time?></td>
								<td><?php echo $ticket?></td>
								<td><?php echo $seat?></td>
								<td><?php echo $totalPrice." VND"?></td>
						</tr>
					
					</table>
					<input type="button" id="btnExport" value="In vé phim" style="float: right;"/>
	            </div>			
            </div>		
        </div>
    </div>
	

	<script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblTicket')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Ve.pdf");
                }
            });
        });
    </script>
</div>


</body>
</html>