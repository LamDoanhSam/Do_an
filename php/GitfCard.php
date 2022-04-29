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

    /*giftcard*/
    .img__gift-card {
      text-align: center;
    }

    .title-giftcard h1 {
      color: #CE2B2B;
      font-size: 24px;
      text-transform: uppercase;
      margin-bottom: 0px;
      font-weight: bold;
      font-family: Myriad Pro;
    }

    .row-1-content-giftcard p {
      color: white;

    }

    .row-2-content-giftcard {
      float: left;
      width: 100%;
      margin-top: 10px;
    }

    .row-2-content-giftcard ul {
      float: left;
      width: 85%;
      line-height: 175%;
    }

    .condition-giftcard h2 {
      color: #CE2B2B;
      font-size: 24px;
      text-transform: uppercase;
      margin-top: 0px;
      font-weight: bold;
      font-family: Myriad Pro;
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
          <li><a href="../html/Menufilm.php">Phim</a></li>
          <li><a href="../html/HoTro.php">Hỗ trợ</a></li>
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
        <div class="gift-card">
          <div class="img__gift-card">
            <h2>
              <img src="../images/giftcard.png" alt="">
            </h2>
          </div>
          <div class="about-giftcard">
            <div class="title-giftcard">
              <h1>Thẻ quà tặng</h1>
            </div>
            <div class="content-giftcard">
              <div class="row-1-content-giftcard">
                <p> Sky Cinema hân hạnh phát hành Thẻ Quà Tặng - Phương tiện thanh toán hiện đại và thuận tiện. Đây là một món quà điện ảnh tuyệt vời mà bạn có thể chia sẻ và gửi tặng bạn bè, gia đình, đồng nghiệp và đối tác. Chắc chắn đây sẽ là món quà ngập tràn sắc màu điện ảnh thật ý nghĩa và tuyệt vời dành cho những người bạn yêu quý.</p>
                <p><strong>Thẻ Quà Tặng Sky Cinema </strong> là loại thẻ trả trước. Với số tiền trong thẻ, bạn có thể sử dụng Thẻ để đổi vé xem phim hoặc bất kì sản phẩm nào tại quầy Bắp Nước của <strong>CGV Cinemas</strong>.Với vẻ ngoài sang trọng và sự tiện lợi, bạn có thể lựa chọn các mệnh giá cho Thẻ Quà Tặng như 300.000đ; 500.000đ; hoặc 1.000.000đ. Thẻ có thời hạn sử dụng trong 1 năm và đặc biệt bạn có thể nạp thêm tiền để gia hạn bất cứ lúc nào. Bạn có thể mua thẻ thật dễ dàng mà không cần đăng ký thông tin chủ thẻ.</p>
              </div>
              <div class="row-2-content-giftcard">
                <div class="col-sm-5">
                  <h2>
                    <img src="../images/gift-card-2.png" alt="">
                  </h2>
                </div>
                <div class="col-sm-7">
                  <ul>
                    <li><strong>Thẻ Quà Tặng Sky Cinema </strong> là loại thẻ trả trước. Với số tiền trong thẻ, bạn có thể sử dụng Thẻ để đổi vé xem phim hoặc bất kì sản phẩm nào tại quầy Bắp Nước của <strong>Sky Cinema</strong>.</li>
                    <li>Với vẻ ngoài sang trọng và sự tiện lợi, bạn có thể lựa chọn các mệnh giá cho Thẻ Quà Tặng như 300.000đ; 500.000đ; hoặc 1.000.000đ. Thẻ có thời hạn sử dụng trong 1 năm và đặc biệt bạn có thể nạp thêm tiền để gia hạn bất cứ lúc nào.&nbsp;Bạn có thể mua thẻ thật dễ dàng mà không cần đăng ký thông tin chủ thẻ.</li>
                    <li>Thẻ quà tặng đang được bán tại quầy vé các rạp <strong>Sky Cinema </strong>trên toàn quốc. Thẻ quà tặng có thể được tích hợp vào tài khoản thành viên, và thanh toán tiện lợi bằng thẻ thành viên khi không mang theo thẻ quà tặng.</li>
                    <li>Hiện có loại thẻ quà tặng cho công ty / tổ chức khi bạn mua vé với số lượng lớn. Đặc biệt bạn có thể đưa logo và thông điệp của công ty / tổ chức vào thẻ. Gọi bộ phận Bán Vé Nhóm (Group Sales) để biết thêm thông tin: <strong> +84-0-3222-0334 </strong></li>
                  </ul>
                </div>
              </div>
              <div class="condition-giftcard">
                <div class="condition-title">
                  <h2>Điều kiện áp dụng</h2>
                  <ul style="line-height:175%">
                    <li>Thẻ này dùng để đổi vé xem phim hoặc thức ăn, đồ uống tại tất cả các rạp CGV,&nbsp;áp dụng tại quầy &amp; trực tuyến.</li>
                    <li>Thẻ có thẻ được nạp thêm tiền và gia hạn tại quầy hoặc trực tuyến bất cứ lúc nào với số tiền tối thiểu 300,000đ.</li>
                    <li>Riêng với thẻ quà tặng được đăng ký trực tuyến, ngày hết hạn của tất cả thẻ trước đó sẽ được gia hạn theo ngày hết hạn của thẻ mới nhất.</li>
                    <li>Thẻ có giá trị tích lũy điểm và tổng chi tiêu cho người sử dụng, không có giá trị tích lũy điểm và tổng chi tiêu cho người mua.</li>
                    <li>Thẻ không được dùng để đổi sang tiền mặt hoặc mua thẻ khác.</li>
                    <li>Nếu thẻ bị mất hoặc hư hại, giá trị sử dụng sẽ không còn hiệu lực hay cấp lại nếu không có bằng chứng xác thực hợp lệ nào.</li>
                  </ul>
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