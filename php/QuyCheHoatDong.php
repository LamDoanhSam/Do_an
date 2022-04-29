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
        <div>
          <h1 style="text-shadow: 2px 2px 4px pink; color: red; text-align: center; font: bold 75px solid;">Quy Chế Hoạt Động</h1>
          <p>Xin vui lòng đọc quy chế hoạt động và điều khoản sử dụng trước khi bạn chính thức sử dụng Sky Cinema. Khi bạn tiếp tục truy cập và sử dụng website này và các sản phẩm liên quan đến Sky Cinema có nghĩa là bạn đã đồng ý và chấp nhận quy chế hoạt động và điều khoản sử dụng. Nếu bạn không đồng ý, vui lòng không sử dụng website hay bất kỳ sản phẩm nào của Sky Cinema.</p>
          <p>1. Chấp nhận và đồng ý các điều khoản sử dụng:</p>
          <p>Chào mừng và cám ơn bạn đã chọn sử dụng dịch vụ của Sky Cinema. Khi đã sử dụng website và các sản phẩm liên quan đến Sky Cinema đồng nghĩa với việc bạn đã chấp nhận và đồng ý với những ràng buộc về mặt pháp lý, và tuân thủ theo quy chế hoạt động và điều khoản sử dụng của website.</p>
          <p>Sky Cinema có quyền thay đổi, bổ sung quy chế hoạt động và điều khoản sử dụng trên website và các sản phẩm liên quan vào bất cứ lúc nào. Người sử dụng có trách nhiệm cập nhật và theo dõi những thay đổi mới nhất trên website Sky Cinema. Nếu bạn không đồng ý với những thay đổi mới nhất, bạn có quyền yêu cầu ngưng sử dụng tài khoản tại website và các sản phẩm liên quan của Sky Cinema.</p>
          <p>Tài khoản của bạn trên Sky Cinema không dùng để trao đổi, mua bán với mục đích thương mại</p>
          <p>2. Tạo tài khoản và chế độ bảo mật :</p>
          <p>Khi đăng ký tham gia Sky Cinema, bạn vui lòng :</p>
          <ul>
            <li>Cung cấp những thông tin chính xác, đầy đủ theo bản đăng ký mẫu của Sky Cinema.</li>
            <li>Duy trì và cập nhật những thông tin, thay đổi mới nhất một cách chính xác và đầy đủ.</li>
          </ul>
          <p>Sự không chính xác của những thông tin bạn cung cấp có thể làm bạn không tận dụng được hết những sản phẩm và dịch vụ Sky Cinema cung cấp. Trong một số trường hợp đặc biệt, Sky Cinema có quyền từ chối cung cấp dịch vụ cho bạn và đình chỉ tài khoản của bạn vào thời điểm hiện tại và trong tương lai nếu những thông tin mà bạn cung cấp không chính xác hoặc Sky Cinema có lý do nghi ngờ tính trung thực của những thông tin mà bạn cung cấp.</p>
          <p>Chúng tôi sẽ không sử dụng những thông tin cá nhân của bạn nếu chưa được sự cho phép của bạn. Bạn có thể yên tâm rằng khi bạn cung cấp thông tin cho Sky Cinema, thông tin của bạn luôn được bảo mật tuyệt đối. Thông tin của bạn chỉ được sử dụng với mục đích gửi thông báo cho bạn về phim ảnh, các chương trình khuyến mãi,... Sky Cinema cam kết sẽ không tiết lộ thông tin của bạn cho một bên thứ ba mà không có sự đồng ý, ngoại trừ yêu cầu cung cấp bởi pháp luật.</p>
          <p>Quyền truy cập và sử dụng tài khoản chỉ dành riêng cho cá nhân có thẩm quyền. Mọi hành vi cố ý truy cập trái phép đều có thể bị truy tố.</p>
          <p>3. Sự cố phát sinh : </p>
          <p>Khi đã sử dụng dịch vụ của Sky Cinema, bạn đã chấp nhận một số sự cố có thể phát sinh trong quá trình truy cập và đồng ý rằng Sky Cinema và các đối tác liên quan sẽ không chịu trách nhiệm pháp lý về những thất thoát, thiệt hại xảy ra một cách trực tiếp hay gián tiếp trong khi truy câp website và các sản phẩm liên quan, khi tải dữ liệu, không loại trừ những tổn hại do virus, những tác động ảnh hưởng đến hệ thống máy tính, đường dây điện thoại, hủy hoại các chương trình phần cứng, phần mềm, các trở ngại của đường truyền máy vi tính hoặc kết nối mạng.</p>
          <p>4. Ý kiến, bình luận, tranh chấp của người sử dụng :</p>
          <p>Sky Cinema không chịu trách nhiệm sàng lọc, chỉnh sửa hoặc giám sát nội dung được người sử dụng đăng tải lên website và các sản phẩm liên quan, cũng như không thể đảm bảo tính chính xác của những ý kiến, bình luận này. Nếu nhận được thông tin về những vi phạm, gây tổn hại hoặc bất hợp pháp, Sky Cinema có quyền điều tra những cáo buộc trên để xác minh, và có quyền quyết định chấm dứt cung cấp dịch vụ đối với thành viên vi phạm những điều khoản sử dụng.</p>
          <p>Mặc dù đã có những quy định nêu trên, nhưng Sky Cinema cũng như những cá thể, tập thể liên quan không thể bảo đảm có thể chỉnh sửa hoặc xóa bỏ lập tức những nội dung vi phạm. Cũng như chúng tôi không phải chịu trách nhiệm pháp lý đối với những nội dung do người dùng đăng tải lên Sky Cinema. Đồng thời, bạn cũng có trách nhiệm cho mối liên hệ giữa bạn và những người dùng khác. Sky Cinema có quyền, nhưng không có nghĩa vụ theo dõi các tranh chấp giữa các người dùng với nhau.</p>
          <p>5. Ngưng cung cáp dịch vụ :</p>
          <p>Sky Cinema có quyền ngưng cung cấp dịch vụ cho người dùng nếu vi phạm những điều sau đây: </p>
          <ul>
            <li>Thông tin bạn cung cấp không chính xác, không đầy đủ, không trung thực, hoặc skycinema.vn có căn cứ để nghi ngờ độ chính xác của thông tin.</li>
            <li>Đăng tải lên website và các sản phẩm liên quan những nội dung không phù hợp như những nội dung có tính chất khiêu dâm, đồi trụy, phỉ báng, thô tục, gây hiểu lầm, hoặc phạm pháp.</li>
            <li>Quấy rối, đe dọa hoặc phân biệt một cá nhân hoặc một tập thể vì lý do giới tính, tôn giáo, khuynh hướng tình dục, chủng tộc, dân tộc, tuổi tác hoặc khuyết tật.</li>
            <li>"Spam", quảng cáo trái phép hoặc bất kỳ hình thức xổ số, bài bạc nào.</li>
            <li>Sử dụng tài khoản cá nhân với mục đích thương mại.</li>
            <li>Vi phạm những điều khoản khác của Sky Cinema</li>
          </ul>
          <p>Sky Cinema không chịu trách nhiệm với những nội dung do thành viên đăng tải và sẽ cung cấp những nội dung này cho các cơ quan có thẩm quyền trong trường hợp cần thiết.</p>
          <p>6. Nội dung : </p>
          <p>Những thông tin được đăng tải trên Sky Cinema được cung cấp cho bạn và không kèm theo bất kỳ cam kết nào, Sky Cinema không bảo đảm hoặc chịu trách nhiệm về độ chính xác, độ xác thực, độ tin cậy của việc sử dụng hoặc kết quả của việc sử dụng những dữ liệu này. Sky Cinema luôn cố gắng cập nhật toàn bộ thông tin một cách kịp thời nhưng chúng tôi không bảo đảm rằng những nội dung hiện tại là mới nhất hoặc chính xác nhất.</p>
          <p>Tất cả thông tin, bao gồm nội dung, phần mềm, dữ liệu,... được đăng tải lên website và các sản phẩm liên qua của Sky Cinema đều thuộc bản quyền của Sky Cinema, bạn có thể tải về và sử dụng. Tuy nhiên, những nội dung đó không thuộc quyền sở hữu của bạn nên chúng tôi nghiêm cấm mua bán, phân phối, bẻ khóa, sao chép, sửa đổi hay sử dụng bất kỳ nội dung nào mà không có sự đồng ý của Sky Cinema.</p>
          <p>Người dùng có thể sử dụng những thông tin thuộc về quyền sở hữu của Sky Cinema để chia sẻ trên mạng, với điều kiện phải trích rõ nguồn và chủ sở hữu thông tin.</p>
          <p>7. Bản quyền sở hữu : </p>
          <p>Sky Cinema là chủ bản quyền của website và các sản phẩm liên quan. Sky Cinema có quyền chỉnh sửa, thay đổi, sắp xếp lại nội dung website và các sản phẩm liên quan. Việc chỉnh sửa, thay đổi, sắp xếp lại hoặc tái sử dụng những nội dung này mà không có sự đồng ý của Sky Cinema đều là vi phạm quyền lợi hợp pháp của Sky Cinema.</p>
          <p>Sky Cinema luôn tôn trọng sở hữu trí tuệ của người khác, và chúng tôi yêu cầu người dùng của chúng tôi cũng làm như vậy. Chúng tôi luôn cố gắng đảm bảo những dữ liệu trên website và các sản phẩm liên quan đều là hợp pháp, nhưng chúng tôi không chắc chắn có thể kiểm soát tất cả thông tin trên website và các sản phẩm liên quan. Khi phát hiện được bất kỳ hành vi vi phạm bản quyền nào trên website và các sản phẩm liên quan, Ban quản trị sẽ xóa nội dung đó khỏi website một cách nhanh nhất có thể.</p>
          <p>8. Các website liên kết : </p>
          <p>Ngoại trừ nội dung trên website và các sản phẩm liên quan của Sky Cinema, chúng tôi không trực tiếp hay gián tiếp quản lý những website liên kết. Sky Cinema không hợp tác, tài trợ, xác thực hay sát nhập với những website đó, trừ khi sự hợp tác đó được công bố rõ ràng. Khi truy cập vào Sky Cinema, chúng tôi hy vọng bạn có thể hiểu rằng Sky Cinema không kiểm soát, quản lý những trang liên kết và không chịu trách nhiệm về nội dung của bất kỳ website liên kết nào.</p>
          <p>9. Dừng sử dụng dịch vụ :</p>
          <p>Bạn có thể dừng việc sử dụng tài khoản của bạn hoặc bất cứ khi nào bằng cách thông báo cho @support@skycinema.com.vn. Bạn sẽ nhận được e-mail xác nhận và tài khoản của bạn sẽ ngưng hoạt động trong vòng 2 ngày làm việc. Bạn sẽ chịu trách nhiệm cho tất cả các chi phí phát sinh (nếu có) cho đến khi tài khoản ngưng hoạt động.</p>
          <p>Sky Cinema có thể ngừng cung cấp dịch vụ cho tài khoản của bạn nếu bạn không tuân thủ theo bất kỳ điệu khoản sử dụng nào của Sky Cinema.</p>
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