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
        echo '<script language="javascript"> alert("?????i m???t kh???u th??nh c??ng") </script>';
      } else {
        echo '<script language="javascript"> alert("Nh???p l???i m???t kh???u ??i!!") </script>';
      }
    } else {
      echo '<script language="javascript"> alert("Sai m???t kh???u c??") </script>';
    }
  } else {
    echo '<script language="javascript"> alert("M???t kh???u m???i kh??ng kh???p") </script>';
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
  <title>Gi???i thi???u</title>
</head>

<body style="background-color: rgba(43,43,49,0.98); color: white; position: relative;" data-spy="scroll" data-target=".navbar-collapse">
  <nav style="font-weight: bolder;" class="navbar navbar-inverse">
    <div style="" class="container-fluid menuNav">
      <div class="logo"><img src="../images/1200px-Sky_Cinema_-_Logo_2020.svg.png" style="width:100px;" alt=""></div>
      <div style="">
        <ul class="nav navbar-nav">
          <li><a href="../html/UserIndex.php">Trang ch???</a></li>
          <li><a href="../html/UserMenufilm.php">Phim</a></li>
          <li><a href="../html/UserHoTro.php">H??? tr???</a></li>
          <li class="active"><a href="#">Gi???i thi???u</a></li>
          <li><a href="../html/UserQuyenLoi.php">Quy???n l???i</a></li>
        </ul>
      </div>

      <div class="find">
        <div class="find-div">

          <input class="inputFind" type="text" name="find" id="find" placeholder="T??m ...">
          <a id="search" class="find-btn"><i class="fa fa-search"></i></a>
        </div>
      </div>

      <div class="login" style="box-sizing: border-box;">
        <ul class="nav navbar-nav">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-user-circle"></i></a>
            <ul class="dropdown-menu">
              <!--link toi ho tro-->
              <li><a href="../html/UserHoTro.php">H??? tr???</a></li>
              <!--link toi doi mat khau -->

              <li><a href="#myModal" class="editpass" data-toggle="modal">?????i m???t kh???u</a></li>

              <!--link toi logout.php-->
              <li><a href="../php/logout.php">????ng xu???t</a></li>

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
                      <input type="password" class="form-control" id="oldPass" name="oldPass" value placeholder="Nh???p m???t kh???u c??" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col">
                      <input type="password" class="form-control" id="newPass" name="newPass" value placeholder="Nh???p m???t kh???u m???i" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col">
                      <input type="password" class="form-control" id="newPassRep" name="newPassRep" value placeholder="Nh???p l???i m???t kh???u m???i" required>
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
                      <button name="submitPass" value="submit" id="submitPass" type="submit" class="btn btn-primary btn-lg">L??u</button>
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
          <h1 style="text-shadow: 2px 2px 4px pink; color: red; text-align: center; font: bold 75px solid;">Gi???i thi???u</h1>
          <ul style="line-height: 190%; font-size: 15px;">
            <li>Sky Cinema l?? m???t trong top 5 c???m r???p chi???u phim l???n nh???t to??n c???u v?? l?? nh?? ph??t h??nh, c???m r???p chi???u phim l???n nh???t Vi???t Nam.M???c ti??u c???a ch??ng t??i l?? tr??? th??nh h??nh m???u c??ng ty ??i???n h??nh ????ng g??p cho s??? ph??t tri???n kh??ng ng???ng c???a ng??nh c??ng nghi???p ??i???n ???nh Vi???t Nam.</li>
            <li>Sky Cinema ???? t???o n??n kh??i ni???m ?????c ????o v??? vi???c chuy???n ?????i r???p chi???u phim truy???n th???ng th??nh t??? h???p v??n h??a ???Cultureplex???, n??i kh??n gi??? kh??ng ch??? ?????n th?????ng th???c ??i???n ???nh ??a d???ng th??ng qua c??c c??ng ngh??? ti??n ti???n nh?? SCREENX, IMAX, STARIUM, 4DX, Dolby Atmos, c??ng nh?? th?????ng th???c ???m th???c ho??n to??n m???i v?? kh??c bi???t trong khi tr???i nghi???m d???ch v??? ch???t l?????ng nh???t t???i Sky Cinema.</li>
            <li>Th??ng qua nh???ng n??? l???c trong vi???c x??y d???ng ch????ng tr??nh Nh?? bi??n k???ch t??i n??ng, D??? ??n phim ng???n, L???p h???c l??m phim TOTO, c??ng vi???c t??i tr??? cho c??c ho???t ?????ng li??n hoan phim l???n trong n?????c nh?? Li??n hoan Phim qu???c t??? H?? N???i, Li??n hoan Phim Vi???t Nam,Sky Cinema mong mu???n s??? kh??m ph?? v?? h??? tr??? ph??t tri???n cho c??c nh?? l??m phim tr??? t??i n??ng c???a Vi???t Nam.</li>
            <li>Sky Cinema Vi???t Nam c??ng t???p trung quan t??m ?????n ?????i t?????ng kh??n gi??? ??? c??c khu v???c kh??ng c?? ??i???u ki???n ti???p c???n nhi???u v???i ??i???n ???nh, b???ng c??ch t???o c?? h???i ????? h??? c?? th??? th?????ng th???c nh???ng b??? phim ch???t l?????ng cao th??ng qua c??c ch????ng tr??nh v?? c???ng ?????ng nh?? Tr??ng c?????i v?? ??i???n ???nh cho m???i ng?????i.</li>
            <li>Sky Cinema Vi???t Nam s??? ti???p t???c cu???c h??nh tr??nh b???n b??? trong vi???c g??p ph???n x??y d???ng m???t n???n c??ng nghi???p ??i???n ???nh Vi???t Nam ng??y c??ng v???ng m???nh h??n c??ng c??c kh??ch h??ng ti???m n??ng, c??c nh?? l??m phim, c??c ?????i t??c kinh doanh uy t??n, v?? c??ng to??n th??? x?? h???i.</li>
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
              <a class="fab fa-cloudversify" href="../html/GioiThieu.php"> Gi???i thi???u</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/GitfCard.php"> Th??? qu?? t???ng</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/tuyendung.php"> Tuy???n d???ng</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/QuyCheHoatDong.php"> Quy ch??? ho???t ?????ng</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/ThoaThuanSuDung.php"> Th???a thu???n s??? d???ng</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col2">
        <div class="col-sm-3">
          <h3>??i???u kho???n s??? d???ng</h3>
          <ul>
            <li>
              <a class="fab fa-cloudversify" href="../php/DieuKhoanChung.php"> ??i???u kho???n chung</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/DieuKhoanGiaoDich.php"> ??i???u kho???n giao d???ch</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../php/ChinhSachThanhToan.php"> Ch??nh s??ch thanh to??n</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../html/HoTro.php"> C??u h???i th?????ng g???p</a>
            </li>
            <li>
              <a class="fab fa-cloudversify" href="../html/HoTro.php"> G??p ??</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col3">
        <div class="col-sm-3">
          <h3>K???t n???i v???i ch??ng t??i</h3>
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
        <h3>Ch??m s??c kh??ch h??ng</h3>
        <ul class="gioiThieu">
          <li>
            <i class="fab fa-cloudversify"> Hotline: 0901 930 863</i>

          </li>
          <li>
            <i class="fab fa-cloudversify"> Gi??? l??m vi???c: 24/7 (T???t c??? c??c ng??y bao g???m c??? L??? T???t)</i>
          </li>
          <li>
            <i class="fab fa-cloudversify"> Email h??? tr???: hotro@skycinema.com.vn</i>
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