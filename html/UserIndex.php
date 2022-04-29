<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "rapphim";
$check = false;

$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
$sql = 0;
/// add condition 
if (isset($_SESSION['email'])) {
  $sql = "SELECT hoTen FROM `khach_hang` WHERE email='" . $_SESSION['email'] . "'";
}
if (isset($_COOKIE['email'])) {
  $sql = "SELECT hoTen FROM `khach_hang` WHERE email='" . $_COOKIE['email'] . "'";
}
$res = mysqli_query($conn, $sql);
$tenKhach = "rong";
if ($res->num_rows > 0) {
  while ($row = $res->fetch_assoc())
    $tenKhach = $row["hoTen"];
  $check = true;
}
if ($check == false) {

  header("Location:..\html\index.php");
}
?>
<?php
function OpenConnection()
{
  try {
    $username = "root";
    $password = "";
    $server   = "localhost";
    $dbname   = "rapphim";
    $conn = mysqli_connect($server, $username, $password, $dbname);
    if ($conn) {
      //echo "Connection established";
      return $conn;
    } else {
      die("Connection could not be established.</br>" . mysqli_connect_error());
      exit();
    }
  } catch (Exception $e) {
    echo "Error";
  }
  return null;
}
function ChangePass($password, $id)
{

  $conn = OpenConnection();
  $hashPass = md5($password);
  $stmt = "UPDATE khach_hang SET matKhau='$hashPass' WHERE idKhachHang =$id";
  $query = mysqli_query($conn, $stmt);
  if ($query) {
    return true;
  }
  return false;
}
function CheckPass($password, $id)
{

  $conn = OpenConnection();
  $stmt = "SELECT matKhau FROM khach_hang WHERE idKhachHang =$id";
  $query = mysqli_query($conn, $stmt);
  if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
      if ($row["matKhau"] == md5($password)) {
        return true;
      }
    }
  }
  return false;
}
if (isset($_GET["submitPass"])) {
  if (isset($_SESSION['idacc'])) {
    $id = $_SESSION['idacc'];
  } else if (isset($_COOKIE['idacc'])) {
    $id = $_COOKIE['idacc'];
  }

  $oldPass = $_GET["oldPass"];
  $newPass = $_GET["newPass"];
  $newPassRep = $_GET["newPassRep"];

  if ($newPass == $newPassRep) {
    if (CheckPass($oldPass, $id)) {
      if (ChangePass($newPassRep, $id)) {
        echo '<script language="javascript"> alert("Đổi mật khẩu thành công") </script>';
      } else {
        echo '<script language="javascript"> alert("Nhập lại mật khẩu đi!!") </script>';
      }
    } else {
      echo '<script language="javascript"> alert("Sai mật khẩu cũ") </script>';
    }
  } else {
    echo '<script language="javascript"> alert("Mật khẩu mới không khớp") </script>';
  }
}
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

  <nav style="font-weight: bolder;" class="navbar navbar-inverse">
    <div class="container-fluid menuNav">
      <div class="logo"><img src="../images/1200px-Sky_Cinema_-_Logo_2020.svg.png" style="width:100px;" alt=""></div>
      <div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Trang chủ</a></li>
          <li><a href="../html/UserMenufilm.php">Phim</a></li>
          <li><a href="../html/UserHoTro.php">Hỗ trợ</a></li>
          <li><a href="../html/UserGioiThieu.php">Giới thiệu</a></li>
          <li><a href="../html/UserQuyenLoi.php">Quyền lợi</a></li>
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
        <ul class="nav navbar-nav">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-user-circle"></i></a>
            <ul class="dropdown-menu">
              <!--link toi ho tro-->
              <li><a href="../html/UserHoTro.php">Hỗ trợ</a></li>
              <!--link toi doi mat khau -->

              <li><a href="#myModal" class="editpass" data-toggle="modal">Đổi mật khẩu</a></li>

              <!--link toi logout.php-->
              <li><a href="../php/logout.php">Đăng xuất</a></li>

            </ul>
          </li>
          <li><a href="#">Hello <?php echo $tenKhach  ?></a></li>
        </ul>

      </div>
    </div>

  </nav>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <div class="container col-sm-12">
            <div class="row">
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <form enctype="multipart/form-data" action="" method="get">
                  <div style="height:30px"></div>
                  <div class="row">
                    <div class="form-group col">
                      <input type="password" class="form-control" id="oldPass" name="oldPass" value placeholder="Nhập mật khẩu cũ" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col">
                      <input type="password" class="form-control" id="newPass" name="newPass" value placeholder="Nhập mật khẩu mới" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col">
                      <input type="password" class="form-control" id="newPassRep" name="newPassRep" value placeholder="Nhập lại mật khẩu mới" required>
                    </div>
                  </div>
                  <div>
                    <input type="checkbox" onclick="myFunction()">
                    <span style="color: black; font-size: 14px;">Show Password</span>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                      <button name="submitPass" value="submit" id="submitPass" type="submit" class="btn btn-primary btn-lg">Lưu</button>
                    </div>
                    <div class="col-sm-4">

                    </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-2"></div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <!-- start home -->
  <section class="slideShow">

  </section>
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
  <!-- end home -->
  <!-- start javascript -->
  <script src="../js/jquery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../js/jquery.simple-text-rotator.js"></script>
  <script src="../js/smoothscroll.js"></script>
  <script src="../js/wow.min.js"></script>
  <script>
    function myFunction() {
      var x = document.getElementById("oldPass");
      var y = document.getElementById("newPass");
      var z = document.getElementById("newPassRep");
      if (x.type === "password") {
        x.type = "text";
        y.type = "text";
        z.type = "text";
      } else {
        x.type = "password";
        y.type = "password";
        z.type = "password";
      }
    }
  </script>
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

</body>

</html>