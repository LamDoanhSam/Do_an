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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../css/Menufilm.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@1,300&family=Saira+Condensed:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    .nav {
      font-family: 'Exo', sans-serif;
    }

    .container-fluid .col-sm-3 {
      position: relative;
      animation-name: example;
      animation-duration: 3s;
      animation-fill-mode: forwards;
    }

    .container-fluid .col-sm-4 {
      position: relative;
      animation-name: example2;
      animation-duration: 3s;
      animation-fill-mode: forwards;
    }

    @keyframes example {
      from {
        left: -500px;
      }

      to {
        left: 0px;
      }
    }

    @keyframes example2 {
      from {
        right: -500px;
      }

      to {
        right: 0px;
      }
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 450px
    }

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      height: 100%;
      width: 9.666667%;
    }

    /* Set black background color, white text and some padding */
    footer {


      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 767px) {
        .sidenav {
          height: auto;
          padding: 15px;
        }

        .row.content {
          height: auto;
        }
      }
    }
  </style>
  <title>Menu</title>
</head>

<body style="background-color: rgba(43,43,49,0.98); color: white;" data-spy="scroll" data-target=".navbar-collapse">
  <nav style="font-weight: bolder;font-family: 'Exo 2', sans-serif; font-family: 'Saira Condensed', sans-serif; font-size: 20px;" class="navbar navbar-inverse">
    <div class="container-fluid menuNav" style="width: 1300px !important">
      <div class="logo"><img src="../images/1200px-Sky_Cinema_-_Logo_2020.svg.png" style="width:100px;" alt=""></div>
      <div style="">
        <ul class="nav navbar-nav">
          <li><a href="../html/index.php">Trang chủ</a></li>
          <li class="active"><a href="#">Phim</a></li>
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

  <div class="container-fluid text-center" style="padding-top: 2%;">
    <div class="row content">
      <div class="col-sm-2 sidenav">

      </div>
      <div style="width: 80.666667%;background-color: rgba(43,43,49,0.98); border-radius: 10px; box-shadow: 0 0 10px -1px; padding-top: 2%" class="col-sm-8 text-left">
        <div class="row">
          <?php $index = 0;
          $dong = 1;
          while ($array = mysqli_fetch_assoc($phim)) { ?>
            <?php
            if ($index == 4) { // đủ 4 phim-> tăng số dòng;
              $dong++;
              $index = 0;
            }
            $index++;

            // nếu dòng chãn -> col3, ngược lại col4
            if ($dong % 2 == 0) { ?>
              <div class="col-sm-3 ">
                <div class="img1" class="">
                  <img style="width:100%; height:345px; border-radius: 10px; box-shadow: 0 0 10px -1px pink;" src="../<?php echo $array['anhPhim']; ?>" id="001" width=100% style="padding-top: 6%;" alt="">
                </div>
                <div class="middle">
                  <a class="text btn-getstarted" href="../php/SQL.php?idPhim=<?php echo $array['idPhim'] ?>">Đặt vé</a>
                </div>
                <div class="tenphim" style="text-align: center;"><?php echo $array['tenPhim']; ?></div>
              </div>
            <?php  } else { ?>
              <div class="col-sm-3 col-sm-4">
                <div class="img1" class="">
                  <img style="width:100%; height:345px; border-radius: 10px; box-shadow: 0 0 10px -1px pink;" src="../<?php echo $array['anhPhim']; ?>" id="001" width=100% style="padding-top: 6%;" alt="">
                </div>
                <div class="middle">
                  <a class="text btn-getstarted" href="../php/SQL.php?idPhim=<?php echo $array['idPhim'] ?>">Đặt vé</a>
                </div>
                <div class="tenphim" style="text-align: center;"><?php echo $array['tenPhim']; ?></div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
      <div class="col-sm-2 sidenav">
      </div>
    </div>
  </div>
  </div>
  <div class="null"></div>
  <hr style="margin-top: 20px;margin-bottom: 20px;border: 0;border-top: 2px solid gray;">
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

  <script src="../js/find.js"></script>
</body>

</html>