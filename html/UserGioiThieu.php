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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../css/Menufilm.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@1,300&family=Saira+Condensed:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
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

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.9);
      /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes zoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* The Close Button */
    .close {

      position: absolute;
      top: 15px;
      right: 35px;
      color: #f1f1f1;
      font-size: 100px;
      font-weight: bold;
      transition: 0.3s;
    }

    .close:hover,
    .close:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
      .modal-content {
        width: 100%;
      }
    }

    .hieuUng {
      position: absolute;
      padding-left: 50%;
    }
  </style>
  <title>Giới thiệu</title>
</head>

<body style="background-color: rgba(43,43,49,0.98); color: white; position: relative;" data-spy="scroll" data-target=".navbar-collapse">
  <nav style="font-weight: bolder;" class="navbar navbar-inverse">
    <div style="" class="container-fluid menuNav">
      <div class="logo"><img src="../images/1200px-Sky_Cinema_-_Logo_2020.svg.png" style="width:100px;" alt=""></div>
      <div style="">
        <ul class="nav navbar-nav">
          <li><a href="../html/UserIndex.php">Trang chủ</a></li>
          <li><a href="../html/UserMenufilm.php">Phim</a></li>
          <li><a href="../html/UserHoTro.php">Hỗ trợ</a></li>
          <li class="active"><a href="#">Giới thiệu</a></li>
          <li><a href="../html/UserQuyenLoi.php">Quyền lợi</a></li>
        </ul>
      </div>

      <div class="find">
        <div class="find-div">

          <input class="inputFind" type="text" name="find" id="find" placeholder="Tìm ...">
          <a id="search" class="find-btn"><i class="fa fa-search"></i></a>
        </div>
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
  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">

      </div>
      <div style="width: 80.666667%;background-color: rgba(43,43,49,0.98);" class="col-sm-8 text-left">
        <div class="gioithieu">
          <h1 style="text-shadow: 2px 2px 4px pink; color: red; text-align: center; font: bold 75px solid;">Giới thiệu</h1>
          <ul style="line-height: 190%; font-size: 15px;">
            <li>Sky Cinema là một trong top 5 cụm rạp chiếu phim lớn nhất toàn cầu và là nhà phát hành, cụm rạp chiếu phim lớn nhất Việt Nam.Mục tiêu của chúng tôi là trở thành hình mẫu công ty điển hình đóng góp cho sự phát triển không ngừng của ngành công nghiệp điện ảnh Việt Nam.</li>
            <li>Sky Cinema đã tạo nên khái niệm độc đáo về việc chuyển đổi rạp chiếu phim truyền thống thành tổ hợp văn hóa “Cultureplex”, nơi khán giả không chỉ đến thưởng thức điện ảnh đa dạng thông qua các công nghệ tiên tiến như SCREENX, IMAX, STARIUM, 4DX, Dolby Atmos, cũng như thưởng thức ẩm thực hoàn toàn mới và khác biệt trong khi trải nghiệm dịch vụ chất lượng nhất tại Sky Cinema.</li>
            <li>Thông qua những nỗ lực trong việc xây dựng chương trình Nhà biên kịch tài năng, Dự án phim ngắn, Lớp học làm phim TOTO, cùng việc tài trợ cho các hoạt động liên hoan phim lớn trong nước như Liên hoan Phim quốc tế Hà Nội, Liên hoan Phim Việt Nam,Sky Cinema mong muốn sẽ khám phá và hỗ trợ phát triển cho các nhà làm phim trẻ tài năng của Việt Nam.</li>
            <li>Sky Cinema Việt Nam cũng tập trung quan tâm đến đối tượng khán giả ở các khu vực không có điều kiện tiếp cận nhiều với điện ảnh, bằng cách tạo cơ hội để họ có thể thưởng thức những bộ phim chất lượng cao thông qua các chương trình vì cộng đồng như Trăng cười và Điện ảnh cho mọi người.</li>
            <li>Sky Cinema Việt Nam sẽ tiếp tục cuộc hành trình bền bỉ trong việc góp phần xây dựng một nền công nghiệp điện ảnh Việt Nam ngày càng vững mạnh hơn cùng các khách hàng tiềm năng, các nhà làm phim, các đối tác kinh doanh uy tín, và cùng toàn thể xã hội.</li>
          </ul>
          <div class="imgSlide">
            <ul class="slide">
              <li class=" col3x">
                <img class="slideimg" src="../images/allrap.png" alt="" srcset="">
                <div class="modal-img">
                  <button class="btnExit" style="color: white; background-color: none;"><i class="fas fa-window-close"></i>
                  </button>
                  <img class="modal-img-size" src="../images/allrap.png" alt="" srcset="">
                </div>
              </li>
              <li class="  col3x">

                <img class="slideimg" src="../images/rap.png" alt="" srcset="">
                <div class="modal-img">
                  <button class="btnExit" style="color: white; background-color: none;"><i class="fas fa-window-close"></i>
                  </button>
                  <img class="modal-img-size" src="../images/rap.png" alt="" srcset="">
                </div>
              </li>
              <li class=" col3x">
                <img class="slideimg" src="../images/rap1.png" alt="" srcset="">
                <div class="modal-img">
                  <button class="btnExit" style="color: white; background-color: none;"><i class="fas fa-window-close"></i>
                  </button>
                  <img class="modal-img-size" src="../images/rap1.png" alt="" srcset="">
                </div>

              </li>
              <li class=" col3x">
                <img class="slideimg" src="../images/rap2.png" alt="" srcset="">
                <div class="modal-img">
                  <button class="btnExit" style="color: white; background-color: none;"><i class="fas fa-window-close"></i>
                  </button>
                  <img class="modal-img-size" src="../images/rap2.png" alt="" srcset="">
                </div>

              </li>
              <li class=" col3x">
                <img class="slideimg" src="../images/rap5.png" alt="" srcset="">
                <div class="modal-img">
                  <button class="btnExit" style="color: white; background-color: none;"><i class="fas fa-window-close"></i>
                  </button>
                  <img class="modal-img-size" src="../images/rap5.png" alt="" srcset="">
                </div>

              </li>
              <li class=" col3x">
                <img class="slideimg" src="../images/rap6.jpg" alt="" srcset="">
                <div class="modal-img">
                  <button class="btnExit" style="color: white; background-color: none;"><i class="fas fa-window-close"></i>
                  </button>
                  <img class="modal-img-size" src="../images/rap6.jpg" alt="" srcset="">
                </div>

              </li>
            </ul>
          </div>

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
  <div class="bgModal fixed"></div>


  <script src="../js/find.js"></script>
  <script>
    var slide = document.querySelectorAll(".slideimg");
    var modal = document.querySelectorAll(".modal-img");
    var btnE = document.querySelectorAll(".btnExit")
    var bg = document.querySelector(".bgModal")
    for (let index = 0; index < slide.length; index++) {


      slide[index].onclick = function() {
        modal[index].classList.toggle("noactive");
        bg.classList.toggle("fixed")
      }
      btnE[index].onclick = function() {
        modal[index].classList.toggle("noactive");
        bg.classList.toggle("fixed")
      }


    }
    bg.onclick = function() {
      modal[index].classList.toggle("noactive");
      bg.classList.toggle("fixed")
    }
  </script>
</body>

</html>