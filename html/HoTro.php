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
  <title>Hỗ trợ</title>
</head>

<body style="background-color: rgba(43,43,49,0.98); color: white;" data-spy="scroll" data-target=".navbar-collapse">
  <nav style="font-weight: bolder; font-family: 'Exo 2', sans-serif; font-family: 'Saira Condensed', sans-serif; font-size: 20px;" class="navbar navbar-inverse">
    <div class="container-fluid menuNav" style="width: 1300px !important">
      <div class="logo"><img src="../images/1200px-Sky_Cinema_-_Logo_2020.svg.png" style="width:100px;" alt=""></div>
      <div>
        <ul class="nav navbar-nav">
          <li><a href="../html/index.php">Trang chủ</a></li>
          <li><a href="../html/Menufilm.php">Phim</a></li>
          <li class="active"><a href="#">Hỗ trợ</a></li>
          <li><a href="../html/GioiThieu.php">Giới thiệu</a></li>
          <li><a href="../html/Quyenloi.php">Quyền lợi</a></li>
        </ul>
      </div>

      <div class="find" style="">
        <div class="find-div">

          <input class="inputFind" type="text" name="find" id="find" placeholder="Tìm ...">
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
                <h2>Bạn có gì muốn nhắn nhủ Sky Cinema?</h2>
                <div class=" col-sm-8 form-contact">
                  <div>
                    <form action="../php/feedback.php" method="post">
                      <div class="col-sm-5" style="float: left;">
                        <label for="fname">Họ :</label>
                        <input type="text" id="ho" name="ho" placeholder="Họ....">

                        <label for="lname">Tên :</label>
                        <input type="text" id="ten" name="ten" placeholder="Tên....">

                        <label for="fphone">Số điện thoại :</label>
                        <input type="text" id="phone" name="phone" placeholder="Số điện thoại...">

                        <label for="fmail">Email :</label>
                        <input type="text" id="mail" name="mail" placeholder="Email..">
                      </div>
                      <div class="col-sm-7" style="float: right;">
                        <label for="fyKien">Ý kiến :</label>
                        <textarea name="yKien" id="yKien" cols="50" rows="12" placeholder=" Hãy viết ý kiến vào đây..."></textarea>
                        <input style=" background-color:#94ECFF ; font-size: 20px; width: 30%;margin-left: 33%;" type="submit" value="Submit">
                      </div>
                    </form>
                  </div>
                  <div class="question">
                    <h2>Câu hỏi thường gặp :</h2>
                    <div class="queryButton" id="show" class="showReply">
                      <div>Tôi có thể dùng tài khoản thành viên của mình để mua vé nhóm được không?</div>
                      <div class="repQuery" id="repQuery">
                        <p>- Bạn có thể cung cấp mã barcode trên mobile app / thẻ thành viên trong quá trình giao dịch mua vé nhóm để được tích điểm bạn nhé, tuy nhiên mỗi tài khoản chỉ áp dụng giá vé thành viên tối đa 8 vé / ngày bạn nhé!</p>
                      </div>
                    </div>

                    <div class="queryButton" id="show" class="showReply">
                      <p>Địa chỉ rạp?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- 4 Nguyễn Trãi,Phường 3,Quận 5,Tp.Hồ Chí Minh</p>
                      </div>
                    </div>

                    <div class="queryButton" id="show" class="showReply">
                      <p>Trước khi được trình chiếu tại Việt Nam, các bộ phim phải kiểm duyệt như thế nào?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Tất cả những phim được trình chiếu tại các rạp chiếu phim ở Việt Nam phải được kiểm duyệt, sau đó được cấp giấy phép phát hành và phạm vi phổ biến phim bởi Cục Điện Ảnh thuộc Bộ Văn Hóa, Thể Thao và Du Lịch Việt Nam.</p>
                      </div>
                    </div>

                    <div class="queryButton" id="show" class="showReply">
                      <p>Vé đã thanh toán có thể hủy hoặc thay đổi không?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Rất tiếc, hiện Sky Cinema chưa hỗ trợ dịch vụ hủy hoặc thay đổi thông tin vé đã thanh toán.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Làm sao để khiếu nại hoặc góp ý với Sky Cinema?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Khi có bất kỳ khiếu nại, hoặc vấn đề phát sinh với dịch vụ của Galaxy Cinema, quý khách vui lòng gọi hotline 19006969 hoặc gửi thông tin đến email: hotro@S.com.vn </p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Tôi có thể thay đổi thông tin của vé đã mua online được không</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Theo quy định của SkyCinema vé đã mua thành công rồi thì không thể thay đổi thông tin. Tuy nhiên, trong trường hợp bạn không thể sắp xếp xem đúng suất chiếu, bạn vui lòng mang mã đặt vé đến trực tiếp tại rạp trước suất chiếu và liên hệ Ban quản lý để được hỗ trợ bạn nhé.</p>
                      </div>
                    </div>

                    <div class="queryButton" id="show" class="showReply">
                      <p>Tôi có thể đặt vé qua hotline 19006969?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Rất tiếc, hiện nay SkyCinema không hỗ trợ đặt vé qua điện thoại.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Trong trường hợp bị mất thẻ, tôi nên làm gì</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Bạn vui lòng đến rạp SkyCinema gần nhất, thông báo mất thẻ để được hỗ trợ làm lại thẻ hoàn toàn miễn phí. Bạn vui lòng mang theo CMND để nhân viên xác nhận nhằm đảm bảo tuyệt mật thông tin.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Khởi chiếu sớm là gì?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Khởi Chiếu Sớm là bộ phim được chính thức ra rạp trước ngày khởi chiếu đã định.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Suất chiếu đặc biệt là gì</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Suất Chiếu Đặc Biệt là những suất chiếu được ra rạp trước ngày công chiếu chính thức.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Khi mua vé online tôi có được tích điểm hay không?</p>
                      <div class="repQuery" id="repQuery">
                        <p>- Khi bạn mua vé online trên Web Sky Cinema, bạn vui lòng đăng nhập tài khoản thành viên của Sky Cinema để hệ thông tích điểm vào tài khoản của bạn nhé.</p>
                      </div>
                    </div>
                    <div class="queryButton" id="show" class="showReply">
                      <p>Thông tin liên hệ?</p>
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
                    <div>- Mọi góp ý của bạn sẽ là sự hỗ trợ to bự cho chúng tôi hoàn thiện trang web này!!</div>
                    <div>- Các ý kiến đóng góp / hỗ trợ vui lòng liên hệ chúng tôi qua : </div>
                    <div class=" feedback-contact-item"><i class="fas fa-envelope-square"></i><a style="color: #a0a3a7;" href="#">hotro@skycinema.com.vn</a></div>
                    <div class=" feedback-contact-item"><i class="fas fa-phone"></i><a style="color: #a0a3a7;" href="#">0901930863 </a></div>
                    <div>Xin chân thành cảm ơn!!!!!!</div>
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