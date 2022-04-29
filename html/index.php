<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "rapphim";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM phim";
$phim = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sky Cinema</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@1,300&family=Saira+Condensed:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/Menufilm.css">
  <style>
    .title {
      text-shadow: 2px 2px 4px pink;
      color: while;
      padding-left: 2%;
      font-weight: bold;
    }

    .phimhot {
      box-shadow: 0 0 10px -1px;
      border-radius: 10px;
      border-radius: 10px;
      margin-right: 2%;
      margin-left: 2%;
      height: 900px;
      padding: 2%;
      align: center;
    }
  </style>
</head>

<body style="background-color: rgba(43,43,49,0.98); color: white;" data-spy="scroll" data-target=".navbar-collapse">

  <nav style="font-weight: bolder; font-family: 'Exo 2', sans-serif;font-family: 'Saira Condensed', sans-serif; font-size: 20px;" class="navbar navbar-inverse">
    <div class="container-fluid menuNav" style="width: 1300px !important">
      <div class="logo"><img src="../images/1200px-Sky_Cinema_-_Logo_2020.svg.png" style="width:100px;" alt=""></div>
      <div style="">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Trang chủ</a></li>
          <li><a href="../html/Menufilm.php">Phim</a></li>
          <li><a href="../html/HoTro.php">Hỗ trợ</a></li>
          <li><a href="../html/GioiThieu.php">Giới thiệu</a></li>
          <li><a href="../html/Quyenloi.php">Quyền lợi</a></li>
        </ul>
      </div>
      <?php
      $search = isset($_GET['find']) ? $_GET['find'] : "";
      if ($search) {
        $sql = "SELECT * FROM phim WHERE `tenPhim` LIKE '%" . $search . "%'";
        $phim = mysqli_query($conn, $sql);
        // echo $sql;
      } else {
        $sql = "SELECT * FROM phim";
        $phim = mysqli_query($conn, $sql);
      }
      ?>
      <div class="find" style="">
        <form action="" method="GET" id="movie-search">
          <div class="find-div">
            <input class="inputFind" type="text" name="find" id="find" placeholder="Tìm ...">
            <a id="search" class="find-btn" type="submit"><i class="fa fa-search"></i></a>
          </div>
        </form>
      </div>
      <div class="login" style="box-sizing: border-box;">
        <a href="../php/LoginForm.php" class="login-btn"><i style="font-size: 30px; line-height: 50px; " class="fas fa-user-circle"></i></a>
      </div>
    </div>

  </nav>

  <!-- start home -->
  <section class="slideShow">

  </section>
  <!-- end home -->

  <h3 class="title">Phim HOT</h3>
  <div class="phimhot">
    <?php while ($array = mysqli_fetch_assoc($phim)) {
      if (($array['idPhim'] == '002') || ($array['idPhim'] == '003') || ($array['idPhim'] == '004') || ($array['idPhim'] == '16') || ($array['idPhim'] == '001') || ($array['idPhim'] == '009') || ($array['idPhim'] == '19') || ($array['idPhim'] == '24')) {
    ?>
        <div class="col-sm-3 ">
          <div class="img1" class="">
            <img style="width:100%; height:345px; border-radius: 10px; box-shadow: 0 0 10px -1px pink;" src="../<?php echo $array['anhPhim']; ?>" id="002" width=100% style="padding-top: 6%;" alt="">
          </div>
          <div class="middle">
            <a class="text btn-getstarted" href="../php/SQL.php?idPhim=<?php echo $array['idPhim'] ?>">Đặt vé</a>
          </div>
          <div class="tenphim" style="text-align: center;"><?php echo $array['tenPhim']; ?></div>
        </div>
    <?php }
    } ?>
  </div>


  <!-- start javascript -->
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.simple-text-rotator.js"></script>
  <script src="../js/smoothscroll.js"></script>
  <script src="../js/wow.min.js"></script>
  <!-- end javascript -->
  <div class="null"></div>
  <hr>
  <footer class="footer-cinema">
    <div class="row">
      <div class="col1">
        <div class="col-sm-3">
          <h3>Sky Cinema</h3>
          <ul>
            <li>
              <a class="fab fa-cloudversify" href="../html/GioiThieu.php"> Giới thiệu</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/GitfCard.php"> Thẻ quà tặng</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/tuyendung.php"> Tuyển dụng</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/QuyCheHoatDong.php"> Quy chế hoạt động</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/ThoaThuanSuDung.php"> Thỏa thuận sử dụng</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col2">
        <div class="col-sm-3">
          <h3>Điều khoản sử dụng</h3>
          <ul>
            <li>
              <a class="fab fa-cloudversify" href="../php/DieuKhoanChung.php"> Điều khoản chung</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/DieuKhoanGiaoDich.php"> Điều khoản giao dịch</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/ChinhSachThanhToan.php"> Chính sách thanh toán</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../html/HoTro.php"> Câu hỏi thường gặp</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../html/HoTro.php"> Góp ý</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col3">
        <div class="col-sm-3">
          <h3>Kết nối với chúng tôi</h3>
          <div class="social-img">
            <a href="https://www.instagram.com/">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="https://twitter.com/?lang=vi">
              <i class="fab fa-twitter-square"></i>
            </a>
            <a href="https://www.viber.com/vi/">
              <i class="fab fa-viber"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <h3>Chăm sóc khách hàng</h3>
        <ul class="gioiThieu">
          <li>
            <i class="fab fa-cloudversify"> Hotline: 0901 930 863</i>

          </li>
          <li>
            <i class="fab fa-cloudversify"> Giờ làm việc: 24/7 (Tất cả các ngày bao gồm cả Lễ Tết)</i>
          </li>
          <li>
            <i class="fab fa-cloudversify"> Email hỗ trợ: hotro@skycinema.com.vn</i>
          </li>

        </ul>
      </div>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<script src="../js/find.js"></script>

</html>