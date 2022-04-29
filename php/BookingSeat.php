<?php
session_start();
// kiểm tra nếu chưa login thì chuyển qua trang loginForm
if(!isset($_SESSION['email']))
{
    // $_SESSION['datVe'] = 1;
	header('location:loginForm.php');
}
extract($_POST);


require_once "config.php";
$conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
if($conn){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
}
    $sql = "SELECT * FROM phim WHERE idPhim = $id";
    $phim = mysqli_query($conn,$sql);
    $phim = mysqli_fetch_array($phim);
    $_SESSION['tenPhim'] = $phim['tenPhim'];
    $_SESSION['idPhim'] = $phim['idPhim'];

    //giá vé
    $sql3 = "SELECT * FROM gia_ve WHERE idGiaVe = 1";
    $ve = mysqli_query($conn,$sql3);
    $ve = mysqli_fetch_assoc($ve);
    $_SESSION['giaVe'] = $ve['donGia'];
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie booking</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="..///bttn.css-master/dist/bttn.min.css">
    <script type="text/javascript" src="..//js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {       
                $.ajax({
                    type: 'POST',
                    data: 'idPhong=' + 1,
                    url: 'loadSeat.php',
                    success: function (data) {
                        $('#container').html(data);                     
                    },
                    error: function (e) {
                        console.log(e.message);
                    }
                });
        });
    </script>
    <style type="text/css">
        .form-control{
            display:none;
        }
    </style>
</head>

<body>
    <div class="movie-container">
        <div class="form-group">
            <div class="control-label" id="movie-name"><?php echo "Phim: ".$phim['tenPhim']?>
                <span style="display:none;" id="price"><?php echo $ve['donGia'];?></span>
                <span style="display:none;" id="idPhim"><?php echo $id;?></span>
            </div>

            <label for="" class="control-label">Chọn rạp</label>
            <select id="theater"class="group-select">       
            <?php 
                require_once "config.php";
                $conn = mysqli_connect($config['host'], $config['username'], $config['password'], $config['database']);
                if($conn){
                    $sql = "SELECT distinct idPhongChieu  FROM suat_chieu WHERE idPhim = $id order by idPhongChieu asc" ;
                    // echo $sql;
                    $phong = mysqli_query($conn,$sql);
                    while($array = mysqli_fetch_assoc($phong)){ ?>
                        <option value="<?php echo $array['idPhongChieu']?>"> <?php echo "Rạp ".$array['idPhongChieu'] ?> </option>  
            <?php } } ?>    
                         
            </select>       
        </div>
        
        <div class="form-group form-hide">
            <label for="" class="control-label">Chọn ngày</label>
            <select id="movie-date" class="group-select" >
                <?php 
                    if($conn){    
                        $sql = "SELECT distinct idPhongChieu  FROM suat_chieu WHERE idPhim = $id order by idPhongChieu asc" ;
                        $phong = mysqli_query($conn,$sql);  
                        $array = mysqli_fetch_assoc($phong);
                        $idPhong = $array['idPhongChieu'];
                        $qryDate = "SELECT distinct ngayChieu FROM suat_chieu WHERE idPhim = $id AND idPhongChieu = $idPhong ORDER BY ngayChieu ASC";
                        $qryPhim = "SELECT distinct ngayCongChieu FROM phim WHERE idPhim = $id";
                        $phim = mysqli_query($conn,$qryPhim);
                        $ngayCongChieu = mysqli_fetch_assoc($phim);
                        $suatchieu = mysqli_query($conn,$qryDate);
                        while($arr = mysqli_fetch_assoc($suatchieu)){ ?>
                        <?php if(date("Ymd",strtotime($arr['ngayChieu'])) >= date("Ymd",strtotime($ngayCongChieu['ngayCongChieu']))  && date("Ymd",strtotime($arr['ngayChieu'])) >= date("Ymd")){?>
                            <option value="<?php echo date('d-m-Y', strtotime($arr['ngayChieu']))?>"> <?php echo date('d-m-Y', strtotime($arr['ngayChieu']))?> </option>  
                <?php } }} ?>        
            </select>

            <label for="" class="control-label">Chọn giờ</label>
            <select id="movie-time" class="group-select">
                <script>
                    var date_current = $("#movie-date").find(":selected").val();
                    var idPhong = $("#theater").find(":selected").val();
                   
                    $.ajax({     
                        url: 'loadTime.php',
                        type: 'POST',
                        data: 'date=' + date_current + '&idPhong=' + idPhong +'&idPhim='+ <?php echo $id ?>,
                        success: function (data) {
                            $('#movie-time').html(data);                     
                        },
                        error: function (e) {
                            console.log(e.message);
                        }
                    });
                </script>

            </select>              
        </div>
        
        
    </div>
    <ul class="showcase">
        <li>
            <div class="seat feature"></div>
            <small>Trống</small>
        </li>
        <li>
            <div class="seat selected feature"></div>
            <small>Đã chọn</small>
        </li>
        <li>
            <div class="seat occupied feature"></div>
            <small>Hết</small>
        </li>
    </ul>
    <div class="container" id="container">
        
    </div>
    <div class="other">
        <p class="text">Đã chọn: <span id="count"> 0 </span> ghế <br></br>
            Tổng tiền: <span id="total">0</span>
            VND
        </p>

        <div>
            <form action="payment.php" method="post" onsubmit="return Reload();" style="display:contents;">
                <input type="text" class="form-control" name="totalPrice" id="totalPrice">
                <input type="text" class="form-control" name="totalTicket" id="totalTicket">
                <input type="text" class="form-control" name="idPhong" id="idPhong">
                <input type="text" class="form-control" name="ngayChieu" id="ngayChieu">
                <input type="text" class="form-control" name="gioChieu" id="gioChieu"> 
                <button type ="submit" class="btnSubmit bttn-fill bttn-md bttn-danger" id="checked">Thanh toán</button>
            </form>
            
            <a href="../html/index.php">
                <button class="bttn-fill bttn-md bttn-danger">Trang chủ</button>
            </a>
        </div>
    </div>
    
    
    <script src="..//js/main.js"></script>
</body>


</html>