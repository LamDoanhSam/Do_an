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
          <h1 style="text-shadow: 2px 2px 4px pink; color: red; text-align: center; font: bold 75px solid;">Điều Khoản Giao Dịch</h1>
          <p>Chào mừng quý khách đến với Sky Cinema!!</p>
          <p>Chúng tôi là Công ty TNHH Sky Cinema Việt Nam, địa chỉ trụ sở chính tại Tòa nhà CJ, Tầng 10-11, 2Bis-4-6 đường Lê Thánh Tôn, Quận 1, Thành phố Hồ Chí Minh.</p>
          <p>Khi quý khách truy cập vào trang web của Sky Cinema có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Quy định và Điều kiện sử dụng, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Quy định và Điều kiện được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó. Quý khách vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của Sky Cinema.</p>
          <p>Xin vui lòng đọc kỹ trước khi quyết định Đặt Vé trực tuyến.</p>
          <p>1. Phạm Vi Áp Dụng :</p>
          <p>Điều kiện dưới đây áp dụng riêng cho chức năng mua vé trực tuyến tại Website. Khi sử dụng chức năng để đặt chỗ và mua vé, Quý khách mặc nhiên đã chấp thuận và tuân thủ tất cả các chỉ dẫn, điều khoản, điều kiện và lưu ý đăng tải trên Website, bao gồm nhưng không giới hạn bởi Điều kiện Sử dụng nêu ở đây. Nếu Quý khách không có ý định mua vé trực tuyến hay không đồng ý với bất kỳ điều khoản hay điều kiện nào nêu trong Điều kiện Sử dụng, xin hãy DỪNG VIỆC SỬ DỤNG chức năng này.</p>
          <p>2. Điều kiện sử dụng tính năng mua vé trực tuyến :</p>
          <p>Quý khách phải đăng ký tài khoản với thông tin xác thực về bản thân và phải cập nhật nếu có bất kỳ thay đổi nào. Mỗi người truy cập phải có trách nhiệm với mật khẩu, tài khoản và hoạt động của mình trên web. Hơn nữa, quý khách phải thông báo cho chúng tôi biết khi tài khoản bị truy cập trái phép. Chúng tôi không chịu bất kỳ trách nhiệm nào, dù trực tiếp hay gián tiếp, đối với những thiệt hại hoặc mất mát gây ra do quý khách không tuân thủ quy định.</p>
          <p>3. Quy định về đặt vé trực tuyến :</p>
          <p>- Tính năng đặt vé trực tuyến hiện chỉ áp dụng cho thành viên của Sky Cinema. Vui lòng tham khảo thông tin đăng ký thành viên trên website www.skycinema.vn.</p>
          <p>- Thông thường, Sky Cinema mở bán vé trực tuyến trước ngày chiếu phim, tuy nhiên điều này phụ thuộc vào mỗi phim, mỗi rạp. Nếu suất chiếu bạn muốn đặt chưa được hiển thị trên website vào thời điểm khách đặt vé, xin vui lòng quay lại sau, hoặc liên hệ tới số hot line của Sky Cinema 0901 930 863 để biết thêm thông tin chi tiết.</p>
          <p>- Thời gian đóng chức năng mua vé trực tuyến là 30 phút trước giờ chiếu phim hoặc khi suất chiếu đã được bán hết vé. Sau thời gian này quý khách có thể đến liên hệ trực tiếp tại rạp để mua vé.</p>
          <p>- Sky Cinema không cam kết giữ chỗ ngồi cho quý khách cho đến khi quý khách hoàn tất thanh toán cho đơn hàng của mình.</p>
          <p>- Khách hàng có thể đặt chỗ cho tối đa 8 khách (không bao gồm vé trẻ em) trong mỗi lần thực hiện.</p>
          <p>- Khi tiến hành các bước thanh toán, cần đọc kĩ các thông tin trên màn hình về rạp chiếu phim, tên phim, suất chiếu, và chỗ ngồi trước khi hoàn tất việc xác nhận tất cả các thông tin về vé.</p>
          <p>- Quý khách thanh toán giao dịch đặt vé theo quy định tại Chính Sách Thanh Toán đăng tải trên Sky Cinema trước khi nhận mã đặt vé của giao dịch đó. Khi quý khách nhấn (click) vào ô “Thanh toán” để tiến hành thanh toán Đặt chỗ có nghĩa là đã xác nhận rà soát thông tin Đặt chỗ; và đồng ý là Điều Khoản Và Điều Kiện sẽ được áp dụng cho giao dịch mua vé trong giao dịch đó.</p>
          <p>- Email và tin nhắn xác nhận đặt vé sau khi hoàn thành việc thanh toán vé trực tuyến, quý khách sẽ nhận được thư xác nhận thông tin chi tiết vé đã thanh toán thông qua địa chỉ thư điện tử (email) mà quý khách đã cung cấp. Email xác nhận thông tin đặt vé có thể đi vào hộp thư rác (spam mail) của bạn, vì vậy hãy kiểm tra chúng trước khi liên lạc với Sky Cinema.</p>
          <p>- Bằng việc thanh toán qua website này, quý khách chấp nhận vị trí ghế ngồi mà bạn đã đặt. Quý khách đồng ý rằng, trong những trường hợp có sự thay đổi về chương trình phim hoặc bất khả kháng, Sky Cinema có quyền hoàn trả lại bất kỳ vé nào từ việc mua bán qua trang web này hoặc thực hiện việc chuyển vé cho bạn qua suất chiếu khác theo yêu cầu của quý khách.</p>
          <p>- Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Sau đó, nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.</p>
          <p>4. Giá Vé :</p>
          <p>- Giá vé được niêm yết tại Sky Cinema là giá bán cuối cùng đã bao gồm thuế Giá trị gia tăng (VAT). Giá vé có thể thay đổi tùy thời điểm và chương trình khuyến mãi kèm theo và sẽ được hiển thị rõ tại trang Thanh toán khi quý khách tiến hành đặt hàng.</p>
          <p>- Giá vé khi đặt vé trực tuyến trên website Sky Cinema là giá vé người lớn. Các loại vé như học sinh-sinh viên, vé trẻ em và người cao tuổi vui lòng mua trực tiếp tại quầy vé tại các rạp Sky Cinema.</p>
          <p>- Căn cứ Thông tư số 12/2015/TT-BVHTTDL của Bộ trưởng Bộ Văn hóa, Thể thao và Du lịch có hiệu lực thi hành từ ngày 01/01/2017, Tiêu chí phân loại phim theo lứa tuổi được quy định như sau:</p>
          <ul>
            <li> P: Phim được phép phổ biến rộng rãi đến mọi đối tượng.</li>
            <li> C13: Phim cấm phổ biến đến khán giả dưới 13 tuổi.</li>
            <li> C16: Phim cấm phổ biến đến khán giả dưới 16 tuổi.</li>
            <li> C18: Phim cấm phổ biến đến khán giả dưới 18 tuổi.</li>
          </ul>
          <p>- Khán giả khi xem phim thuộc các phân loại trên vui lòng mang theo giấy tờ tùy thân hoặc hình ảnh của giấy tờ tùy thân có ảnh nhận diện và ngày tháng năm sinh để đảm bảo việc tuân thủ theo quy định.</p>
          <ul>
            <li> C13: Thẻ học sinh, thẻ bảo hiểm, thẻ thư viện, Hộ chiếu… còn hiệu lực.</li>
            <li> C16: CMND, Thẻ học sinh , Hộ chiếu, Thẻ thư viện,… còn hiệu lực.</li>
            <li> C18: CMND, Thẻ HSSV, Bằng lái xe, Hộ chiếu,… còn hiệu lực.</li>
          </ul>
          <p>- Khách hàng vui lòng chứng thực được độ tuổi phù hợp với phim được phân loại như trên. Sky Cinema có quyền từ chối việc bán vé hoặc vào phòng chiếu nếu khách hàng không tuân thủ đúng theo quy định.</p>
          <p>5. Giá trị giao dịch và hình thức thanh toán :</p>
          <p>- Sky Cinema cung cấp các hình thức thanh toán: thẻ Thanh toán Quốc tế hoặc thẻ Thanh toán Nội địa, thẻ quà Tặng Sky Cinema, Sky Voucher và bằng điểm thưởng thành viên.</p>
          <p>- Trừ một số trường hợp có ghi chú riêng, thông thường quý khách có thể lựa chọn một trong các hình thức thanh toán trên khi tiến hành đặt vé.</p>
          <p>- Sky Cinema có quyền từ chối chấp nhận cho Khách Hàng thanh toán bằng thẻ tín dụng trong một số trường hợp theo quyết định của Sky Cinema.</p>
          <p>- Để đảm bảo an toàn thanh toán, Khách Hàng lưu ý:</p>
          <ul>
            <li>Chỉ thực hiện thanh toán trực tuyến tại cửa sổ liên kết từ Sky Cinema chuyển đến.</li>
            <li>Sử dụng và bảo quản thẻ (thẻ tín dụng, thẻ ATM, thẻ mua hàng…) và thông tin tài khoản/thông tin thẻ cẩn thận.</li>
            <li>Không cho người khác mượn hoặc sử dụng thẻ thành viên để mua vé tại Sky Cinema. Ngay khi phát hiện giao dịch phát sinh bất thường nào tại Sky Cinema, Khách Hàng cần liên hệ ngay với bộ phận chăm sóc Khách Hàng của CGV để được xử lý kịp thời.</li>
            <li>Trong mọi trường hợp, với thẻ tín dụng/ghi nợ quốc tế, Khách Hàng vui lòng không để lộ số CVV/CVC/CSC (là mã số bảo mật, bộ ba kí tự số được in ở mặt sau của thẻ) để bảo mật thông tin thẻ.</li>
            <li>Kiểm tra tài khoản ngân hàng của mình thường xuyên để đảm bảo tất cả giao dịch qua thẻ đều nằm trong tầm kiểm soát.</li>
          </ul>
          <p>6. Điểm thưởng và đổi điểm :</p>
          <p>- Quy định về tích lũy và quy đổi điểm thưởng được thực hiện theo chính sách cụ thể của CGV tại từng thời điểm.</p>
          <p>- Sky Cinema khuyến khích Khách Hàng đăng ký tài khoản thành viên trên Sky Cinema để tiện theo dõi lịch sử giao dịch, nhận thông tin cập nhật về hàng hóa, các chương trình khuyến mãi, hưởng các ưu đãi đối với khách hàng thân thiết…</p>
          <p>7. Giao kết giao dịch tại Sky Cinema :</p>
          <p>Khách hàng khi mua vé trực tuyến tại website Sky Cinema phải đăng nhập tài khoản thành viên Sky Cinema và thực hiện các thao tác theo trình tự sau:</p>
          <ul>
            <li> Bước 1: Khách hàng lựa chọn suất chiếu theo phim hoặc suất chiếu theo rạp.</li>
            <li> Bước 2: Khách hàng lựa chọn chỗ ngồi.</li>
            <li> Bước 3: Thanh toán bằng các hình thức thanh toán online qua thẻ tín dụng (Visa, Master card..), thẻ ATM, điểm thưởng thành viên, Thẻ quà tặng Sky Cinema, Sky Voucher.</li>
            <li> Bước 4: Khách hàng nhận mã đặt chỗ qua tin nhắn SMS và email.</li>
            <li> Bước 5: Khách hàng cung cấp mã đặt vé và các thông tin tài khoản thành viên Sky Cinema dùng để đặt vé để nhận vé tại rạp. Khách hàng chỉ có thể nhận vé tại rạp đã đặt vé coi phim. Nếu khách hàng không cung cấp được thông tin tài khoản Sky Cinema và mã đặt vé, Sky Cinema có quyền từ chối xuất vé.</li>
          </ul>
          <p>8. Thay đổi, hủy bỏ giao dịch đặt vé tại CGV :</p>
          <p>- Hiện tại Sky Cinema chưa hỗ trợ dịch vụ hủy hoặc thay đổi thông tin vé đã thanh toán thành công.</p>
          <p>- Hệ thống Đặt vé Online của Sky Cinema có liên kết với rất nhiều đối tác khác, bao gồm Cổng thanh toán ONEPAY, các ngân hàng nội địa và các Tổ chức tín dụng quốc tế. Việc thanh toán thành công hay không phụ thuộc rất nhiều vào kết nối mạng của quý khách , việc truyền dẫn, nhận và trả tín hiệu của các tổ chức đối tác trên. Sky Cinema chỉ thực hiện hoàn tiền trong trường hợp khi giao dịch, tài khoản của quý khách đã bị trừ tiền nhưng hệ thống của chúng tôi không ghi nhận việc đặt vé đó, và quý khách không nhận được xác nhận đặt vé thành công. Khi đó, quý khách vui lòng liên hệ hotline 0901 930 863 (từ 8:00 đến 22:00 tất cả các ngày trong tuần) hoặc bạn có thể liên hệ với chúng tôi qua địa chỉ email hoidap@skycinema.vn để được hỗ trợ.</p>
          <p>- Sau khi đã xác nhận các thông tin của khách hàng cung cấp về giao dịch không thành công, tùy theo từng loại tài khoản khách hàng sử dụng mà việc hoàn tiền sẽ có thời gian khác nhau: (*Lưu ý: Thời gian hoàn tiền!! Không tính các ngày thứ 7, Chủ nhật và Lễ Tết.)</p>
          <ul>
            <li>Thẻ ATM ( Nội địa): hoàn tiền trong 11 ngày làm việc.</li>
            <li>Thẻ Visa/Mastercard,…( Quốc tế): hoàn tiền trong 13 ngày làm việc.</li>
            <li>Riêng các giao dịch thanh toán bằng tiền trong ví điện tử: sẽ được hoàn trực tiếp vào số dư ví trong vòng 6 ngày làm việc. Còn các trường hợp thanh toán bằng ví nhưng thông qua liên kết thẻ sẽ tương tự 2 trường hợp thẻ nội địa và quốc tế như trên.</li>
          </ul>
          <p>- Trước khi thanh toán vé trực tuyến, chúng tôi khuyên quý khách nên xác nhận lại Tên phim, Độ tuổi, Giờ chiếu và Rạp chiếu của bộ phim muốn xem.</p>
          <p>9. Thương hiệu và bản quyền :</p>
          <p>Mọi quyền sở hữu trí tuệ (đã đăng ký hoặc chưa đăng ký), nội dung thông tin và tất cả các thiết kế, văn bản, đồ họa, phần mềm, hình ảnh, video, âm nhạc, âm thanh, biên dịch phần mềm, mã nguồn và phần mềm cơ bản đều là tài sản của Sky Cinema. Toàn bộ nội dung của trang web được bảo vệ theo pháp luật sở hữu trí tuệ của Việt Nam và các công ước, điều ước quốc tế mà Việt Nam tham gia hoặc là thành viên.</p>
          <p>10. Luật áp dụng và giải quyết tranh chấp :</p>
          <p>Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh và giải thích theo luật pháp Việt Nam. Các tranh chấp phát sinh từ hoặc liên quan đến (các) giao dịch thực hiện tại trang web này sẽ được ưu tiên giải quyết thông qua thương lượng, hòa giải. Trường hợp các bên không tự giải quyết, tranh chấp sẽ được đưa ra xét xử tại Tòa án cấp có thẩm quyền của Việt Nam.</p>
          <p>11. Quy định về bảo mật :</p>
          <p>Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất bảo vệ thông tin và việc thanh toán của quý khách. Thông tin của quý khách trong quá trình thanh toán sẽ được mã hóa để đảm bảo an toàn. Sau khi quý khách hoàn thành quá trình đặt hàng, quý khách sẽ thoát khỏi chế độ an toàn.</p>
          <p>Quý khách không được sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Trang web cũng nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống. Cá nhân hay tổ chức vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết. Mọi thông tin giao dịch sẽ được bảo mật trừ trường hợp buộc phải cung cấp theo yêu cầu của tòa án, (các) cơ quan có thẩm quyền hoặc theo quy định của pháp luật.</p>
          <p>12. Giải quyết hậu quả do lỗi nhập sai thông tin thương mại tại Sky Cinema :</p>
          <p>Khách hàng có trách nhiệm cung cấp thông tin đầy đủ và chính xác khi tham gia giao dịch tại Sky Cinema. Trong trường hợp khách hàng nhập sai thông tin tại trang thông tin My Sky Cinema, Sky Cinema có quyền từ chối thực hiện giao dịch. Ngoài ra, trong mọi trường hợp, khách hàng đều có quyền đơn phương chấm dứt giao dịch nếu đã thực hiện bằng cách thông báo cho CGV qua đường dây nóng 0901 930 863.</p>
          <p>13. Quy định chấm dứt thỏa thuận :</p>
          <p>Trong trường hợp có bất kỳ thiệt hại nào phát sinh do việc vi phạm Quy Định sử dụng trang web, chúng tôi có quyền đình chỉ hoặc khóa tài khoản của quý khách vĩnh viễn. Nếu quý khách không hài lòng với trang web hoặc bất kỳ điều khoản, điều kiện, quy tắc, chính sách, hướng dẫn, hoặc cách thức vận hành của Sky Cinema thì biện pháp khắc phục duy nhất là ngưng sử dụng dịch vụ của chúng tôi.</p>
          <p>Xin quý khách lưu ý chỉ mua hàng khi chấp nhận và hiểu rõ những quy định trên. Nếu cần hỗ trợ thêm thông tin, quý khách vui lòng tham khảo tại www.skycinema.vn</p>
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