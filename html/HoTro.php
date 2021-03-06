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

    .queryButton {
      background-image: linear-gradient(-27deg, #FAC8CD, #C8ECFA, #D7F3E9);
      font: 20px normal solid;
      height: 29px;
      color: black;
    }



    #ho,
    #ten,
    #mail,
    #phone {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      color: black;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      color: black;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .form-contact {
      border-radius: 5px;
      padding: 20px;
    }

    textarea {
      border-radius: 5px;
      padding: 1%;
      color: black;
    }

    form {
      background-color: #0B4C5F;
      width: 100%;
      height: 361px;
      padding: 1% 1%;
      border-radius: 10px;
    }

    .queryButton .repQuery p {
      height: auto;
    }

    .queryButton {
      border-radius: 5px;
      padding-left: 1%;
      padding-top: 0.5%;
      margin-bottom: 1%;
      cursor: pointer;
    }

    .question .repQuery {
      display: none;
      font: 20px normal solid;
      height: 29px;
      color: black;
    }
  </style>
  <title>H??? tr???</title>
</head>

<body style="background-color: rgba(43,43,49,0.98); color: white;" data-spy="scroll" data-target=".navbar-collapse">
  <nav style="font-weight: bolder; font-family: 'Exo 2', sans-serif; font-family: 'Saira Condensed', sans-serif; font-size: 20px;" class="navbar navbar-inverse">
    <div class="container-fluid menuNav" style="width: 1300px !important">
      <div class="logo"><img src="../images/1200px-Sky_Cinema_-_Logo_2020.svg.png" style="width:100px;" alt=""></div>
      <div>
        <ul class="nav navbar-nav">
          <li><a href="../html/index.php">Trang ch???</a></li>
          <li><a href="../html/Menufilm.php">Phim</a></li>
          <li class="active"><a href="#">H??? tr???</a></li>
          <li><a href="../html/GioiThieu.php">Gi???i thi???u</a></li>
          <li><a href="../html/Quyenloi.php">Quy???n l???i</a></li>
        </ul>
      </div>

      <div class="find" style="">
        <div class="find-div">

          <input class="inputFind" type="text" name="find" id="find" placeholder="T??m ...">
          <a id="search" class="find-btn"><i class="fa fa-search"></i></a>
        </div>
      </div>
      <div class="login" style="box-sizing: border-box;">
        <a href="../php/LoginForm.php" class="login-btn"><i style="font-size: 30px; line-height: 50px; " class="fas fa-user-circle"></i></a>
      </div>
    </div>

  </nav>


  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav">

      </div>
      <div style="width: 80.666667%;background-color: rgba(43,43,49,0.98);" class="col-sm-8 text-left">
        <div>
          <div class="feedback">
            <div class=" contact__regist">
              <div class="feedback-header">
                <h2>B???n c?? g?? mu???n nh???n nh??? Sky Cinema?</h2>
                <div class=" col-sm-8 form-contact">
                  <div>
                    <form action="../php/feedback.php" method="post">
                      <div class="col-sm-5" style="float: left;">
                        <label for="fname">H??? :</label>
                        <input type="text" id="ho" name="ho" placeholder="H???....">

                        <label for="lname">T??n :</label>
                        <input type="text" id="ten" name="ten" placeholder="T??n....">

                        <label for="fphone">S??? ??i???n tho???i :</label>
                        <input type="text" id="phone" name="phone" placeholder="S??? ??i???n tho???i...">

                        <label for="fmail">Email :</label>
                        <input type="text" id="mail" name="mail" placeholder="Email..">
                      </div>
                      <div class="col-sm-7" style="float: right;">
                        <label for="fyKien">?? ki???n :</label>
                        <textarea name="yKien" id="yKien" cols="50" rows="12" placeholder=" H??y vi???t ?? ki???n v??o ????y..."></textarea>
                        <input style=" background-color:#94ECFF ; font-size: 20px; width: 30%;margin-left: 33%;" type="submit" value="Submit">
                      </div>
                    </form>
                  </div>
                  <div class="question">
                    <h2>C??u h???i th?????ng g???p :</h2>
                    <div class="queryButton" id="show" class="showReply">
                      <div>T??i c?? th??? d??ng t??i kho???n th??nh vi??n c???a m??nh ????? mua v?? nh??m ???????c kh??ng?</div>
                      <div class="repQuery" id="repQuery">
                        <p>- B???n c?? th??? cung c???p m?? barcode tr??n mobile app / th??? th??nh vi??n trong qu?? tr??nh giao d???ch mua v?? nh??m ????? ???????c t??ch ??i???m b???n nh??, tuy nhi??n m???i t??i kho???n ch??? ??p d???ng gi?? v?? th??nh vi??n t???i ??a 8 v?? / ng??y b???n nh??!</p>
                      </div>
                    </div>

                    <div class="queryButton" id="show" class="showReply">
                      <p>?????a ch??? r???p?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- 4 Nguy???n Tr??i,Ph?????ng 3,Qu???n 5,Tp.H??? Ch?? Minh</p>
                      </div>
                    </div>

                    <div class="queryButton" id="show" class="showReply">
                      <p>Tr?????c khi ???????c tr??nh chi???u t???i Vi???t Nam, c??c b??? phim ph???i ki???m duy???t nh?? th??? n??o?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- T???t c??? nh???ng phim ???????c tr??nh chi???u t???i c??c r???p chi???u phim ??? Vi???t Nam ph???i ???????c ki???m duy???t, sau ???? ???????c c???p gi???y ph??p ph??t h??nh v?? ph???m vi ph??? bi???n phim b???i C???c ??i???n ???nh thu???c B??? V??n H??a, Th??? Thao v?? Du L???ch Vi???t Nam.</p>
                      </div>
                    </div>

                    <div class="queryButton" id="show" class="showReply">
                      <p>V?? ???? thanh to??n c?? th??? h???y ho???c thay ?????i kh??ng?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- R???t ti???c, hi???n Sky Cinema ch??a h??? tr??? d???ch v??? h???y ho???c thay ?????i th??ng tin v?? ???? thanh to??n.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>L??m sao ????? khi???u n???i ho???c g??p ?? v???i Sky Cinema?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Khi c?? b???t k??? khi???u n???i, ho???c v???n ????? ph??t sinh v???i d???ch v??? c???a Galaxy Cinema, qu?? kh??ch vui l??ng g???i hotline 19006969 ho???c g???i th??ng tin ?????n email: hotro@S.com.vn </p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>T??i c?? th??? thay ?????i th??ng tin c???a v?? ???? mua online ???????c kh??ng</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Theo quy ?????nh c???a SkyCinema v?? ???? mua th??nh c??ng r???i th?? kh??ng th??? thay ?????i th??ng tin. Tuy nhi??n, trong tr?????ng h???p b???n kh??ng th??? s???p x???p xem ????ng su???t chi???u, b???n vui l??ng mang m?? ?????t v?? ?????n tr???c ti???p t???i r???p tr?????c su???t chi???u v?? li??n h??? Ban qu???n l?? ????? ???????c h??? tr??? b???n nh??.</p>
                      </div>
                    </div>

                    <div class="queryButton" id="show" class="showReply">
                      <p>T??i c?? th??? ?????t v?? qua hotline 19006969?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- R???t ti???c, hi???n nay SkyCinema kh??ng h??? tr??? ?????t v?? qua ??i???n tho???i.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Trong tr?????ng h???p b??? m???t th???, t??i n??n l??m g??</p>
                      <div class="repQuery" id="repQuery">
                        <p>- B???n vui l??ng ?????n r???p SkyCinema g???n nh???t, th??ng b??o m???t th??? ????? ???????c h??? tr??? l??m l???i th??? ho??n to??n mi???n ph??. B???n vui l??ng mang theo CMND ????? nh??n vi??n x??c nh???n nh???m ?????m b???o tuy???t m???t th??ng tin.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Kh???i chi???u s???m l?? g???</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Kh???i Chi???u S???m l?? b??? phim ???????c ch??nh th???c ra r???p tr?????c ng??y kh???i chi???u ???? ?????nh.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Su???t chi???u ?????c bi???t l?? g??</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Su???t Chi???u ?????c Bi???t l?? nh???ng su???t chi???u ???????c ra r???p tr?????c ng??y c??ng chi???u ch??nh th???c.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Khi mua v?? online t??i c?? ???????c t??ch ??i???m hay kh??ng?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Khi b???n mua v?? online tr??n Web Sky Cinema, b???n vui l??ng ????ng nh???p t??i kho???n th??nh vi??n c???a Sky Cinema ????? h??? th??ng t??ch ??i???m v??o t??i kho???n c???a b???n nh??.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Th??ng tin li??n h????</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Hotline: 0901 930 863</p>
                        <p> - Email: hotro@skycinema.com.vn
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4 lienhe" style="background: url('../images/note1.png');height: 464px;padding-top: 8%;color: black;">
                  <div style="font-size: 20px; line-height: 2;" class="feedback-lienhe">
                    <div>- M???i g??p ?? c???a b???n s??? l?? s??? h??? tr??? to b??? cho ch??ng t??i ho??n thi???n trang web n??y!!</div>
                    <div>- C??c ?? ki???n ????ng g??p / h??? tr??? vui l??ng li??n h??? ch??ng t??i qua : </div>
                    <div class=" feedback-contact-item"><i class="fas fa-envelope-square"></i><a style="color: #a0a3a7;" href="#">hotro@skycinema.com.vn</a></div>
                    <div class=" feedback-contact-item"><i class="fas fa-phone"></i><a style="color: #a0a3a7;" href="#">0901930863 </a></div>
                    <div>Xin ch??n th??nh c???m ??n!!!!!!</div>
                  </div>
                </div>
              </div>
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

  <script src="../js/find.js"></script>
  <script>
    const x = document.querySelectorAll(".queryButton");
    var count = 0;
    for (let i = 0; i < x.length; i++) {

      x[i].onclick = function() {
        count++;
        if (count % 2 == 0) {
          x[i].querySelector(".repQuery").style.display = "block";
          x[i].style.height = "110px";
        } else {
          x[i].querySelector(".repQuery").style.display = "none";
          x[i].style.height = "";
        }

      };
    }
  </script>
</body>

</html>