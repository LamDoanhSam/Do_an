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
  </style>
  <title>Menu</title>
</head>

<body style="background-color: rgba(43,43,49,0.98); color: white;" data-spy="scroll" data-target=".navbar-collapse">
<nav style="font-weight: bolder;font-family: 'Exo 2', sans-serif; font-family: 'Saira Condensed', sans-serif; font-size: 20px;" class="navbar navbar-inverse">
    <div class="container-fluid menuNav">
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

      <div class="find">
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
          <h1 style="text-shadow: 2px 2px 4px pink; color: red; text-align: center; font: bold 75px solid;">Chính Sách Thanh Toán</h1>
          <p>1. Quy định về thanh toán :</p>
          <p>Khách hàng có thể lựa chọn các hình thức thanh toán sau để thanh toán cho giao dịch đặt vé trên website Sky Cinema :</p>
          <p>- Điểm thưởng thành viên.</p>
          <p>- Thẻ quà tặng Sky Cinema (Sky Giftcard).</p>
          <p>- Ticket Voucher.</p>
          <p>- Thanh toán bằng Ví điện tử MoMo.</p>
          <p>- Thẻ ATM (Thẻ ghi nợ/thanh toán/trả trước nội địa).</p>
          <p>- Thẻ tín dụng thẻ, thẻ ghi nợ, thẻ trả trước quốc tế.</p>
          <p>2. Chi tiết các hình thức thanh toán : </p>
          <p>- Điểm Thưởng Thành Viên (Membership Point): Mỗi 01 điểm thưởng tương đương với 1.000 VND. Điểm thưởng này, bạn có thể sử dụng để thanh toán vé xem phim và các sản phẩm đồ ăn thức uống tại hệ thống Sky Cinema toàn quốc. Khi sử dụng điểm thưởng, bạn vui lòng xuất trình thẻ thành viên để được nhân viên hỗ trợ thanh toán. Điểm thưởng được sử dụng phải từ 20 điểm trở lên.</p>
          <p>- Để kiểm tra điểm thưởng, bạn vui lòng truy cập vào mục Tài Khoản Sky Cinema trên website.</p>
          <p>- Thẻ quà tặng Sky Cinema (Sky GiftCard): Thẻ Quà Tặng có thể được dùng để mua vé xem phim, bắp nước tại các rạp Sky Cinema trên toàn quốc và có thể dùng để thanh toán khi mua vé trực tuyến. Bạn có thể mua thẻ quà tặng tại tất cả các cụm rạp Sky Cinema trên toàn quốc với mệnh giá thấp nhất là 300,000 VNĐ và có giá trị sử dụng trong vòng 1 năm kể từ ngày kích hoạt.Thẻ có các mệnh giá 300,000 VNĐ, 500,000 VNĐ hoặc 1,000,000 VNĐ. Thẻ có thể nạp thêm tiền để tiếp tục sử dụng. Khách hàng vui lòng xem thêm thông tin chi tiết về thẻ quà tặng tại https://www.skycinema.vn/default/gift-card/.</p>
          <p>- Chọn Ví MoMo làm phương thức thanh toán trên website/ ứng dụng Sky Cinema. Hoặc nhanh chóng hơn bằng cách mở Ví MoMo và chọn mục "Mua Vé Xem Phim", xem thông tin chi tiết: Tại đây</p>
          <p>- Thẻ ATM (Thẻ ghi nợ/thanh toán /trả trước nội địa): Để thanh toán bằng thẻ ngân hàng nội địa, thẻ của khách hàng phải được đăng ký sử dụng tính năng thanh toán trực tuyến, hoặc ngân hàng điện tử của Ngân hàng. Giao dịch phải được ghi nhận thành công từ thông báo cấp phép thành công do hệ thống cổng thanh toán trả về (đảm bảo số dư/hạn mức và xác thực khách hàng theo quy định sử dụng của thẻ).</p>
          <p>- Thẻ tín dụng, thẻ thanh toán quốc tế, thẻ trả trước quốc tế: Thẻ tín dụng/ghi nợ/trả trước VISA, MasterCard, JCB, Union Pay, Amex của các Ngân hàng trong nước và nước ngoài phát hành. Giao dịch phải được ghi nhận cấp phép thành công do đúng hệ thống cổng thanh toán trả về (đảm bảo số dư/hạn mức và xác thực khách hàng theo quy định sử dụng của thẻ).</p>
          <p>- Ticket Voucher: Sky Cinema áp dụng thanh toán trực tuyến đối với Ticket Voucher. Mỗi loại Voucher sẽ có giá trị quy đổi và thời hạn sử dụng khác nhau. Bạn vui lòng đọc kỹ các điều khoản sử dụng ở mặt sau Voucher để biết thêm chi tiết. Khi thanh toán trực tuyến, bạn vui lòng đăng ký mã voucher và mã PIN để thực hiện thanh toán. Xin lưu ý Ticket Voucher giấy sau khi mất lớp tráng bạc sẽ không thể đổi vé tại quầy.</p>
          <p>3. Danh sách thẻ được chấp nhận thanh toán trực tuyến :</p>
          <p>Thẻ quốc tế :</p>
          <p>- Visa- MasterCard- JCB- American Express- Union Pay</p>
          <p>Thẻ nội địa :</p>
          <p>- Ngân hàng Nông nghiệp và phát triển nông thôn - Agribank.</p>
          <p>- Ngân hàng TMCP Ngoại thương Việt Nam - Vietcombank.</p>
          <p>- Ngân hàng TMCP Đông Á – Dong A bank.</p>
          <p>- Ngân hàng TMCP Công thương Việt Nam - Vietinbank.</p>
          <p>- Ngân hàng TMCP Kỹ thương Việt Nam – Techcombank.</p>
          <p>- Ngân hàng TMCP Quốc tế Việt Nam – VIB.- Ngân hàng TMCP Tiên phong – TienphongBank.</p>
          <p>- Ngân hàng TMCP Phát triển Nhà Tp.HCM – HDBank.</p>
          <p>- Ngân hàng TMCP Sài gòn – Hà Nội – SHB.- Ngân hàng Xuất nhập khẩu Việt Nam – Eximbank.</p>
          <p>- Ngân hàng TMCP Hàng Hải Việt Nam – MSB.- Ngân hàng Việt Á - VietA Bank.</p>
          <p>- Ngân hàng Quân đội – MB.- Ngân hàng TMCP Nam Á - Nam A Bank.</p>
          <p>- Ngân hàng TMCP Sài Gòn Thương Tín – Sacombank.</p>
          <p>- Ngân Hàng TMCP Đông Nam Á – SeABank.- Ngân Hàng TMCP Đại Dương – OceanBank.</p>
          <p>- Ngân Hàng Đầu Tư và Phát triển Việt Nam – BIDV.</p>
          <p>- Ngân hàng Việt Nam Thịnh Vượng – VPBank.- Ngân Hàng TMCP Bắc Á - BAC A BANK.</p>
          <p>- Ngân hàng TMCP AN BÌNH – ABBANK.</p>
          <p>4. Trường hợp giao dịch thanh toán không thành công :</p>
          <p>Giao dịch thanh toán không thành công có thể do nhiều nguyên nhân. Bạn tham khảo các nguyên nhân sau:</p>
          <p>- Chưa đăng ký chức năng thanh toán trên Internet với Ngân hàng.</p>
          <p>- Đối với thẻ Visa, MasterCard: Trong quá trình thanh toán, có thể bạn được yêu cầu nhập Mật khẩu của chương trình Verified by Visa hoặc MasterCard SecureCode... nhưng bạn đã không hoàn thành bước xác thực này.</p>
          <p>- Thẻ không đủ hạn mức/ số dư để thanh toán. Một số Ngân hàng có quy định cả hạn mức chi tiêu theo ngày cho thẻ.</p>
          <p>- Nhập sai thông tin thẻ.</p>
          <p>Vui lòng liên hệ hotline 0901 930 863 hoặc Ngân hàng phát hành thẻ để tìm hiểu nguyên nhân chính xác.</p>
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