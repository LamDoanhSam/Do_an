<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "rapphim";
$check = false;

$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
$sql;
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/Menufilm.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://www.cgv.vn/skin/frontend/cgv/default/css/custom-cgv.css" media="all" />
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
            }
        }
    </style>
    <title>Quyền lợ<i></i></title>

    <button onclick="topFunction()" id="myBtn" title="Go to top">TOP</button>

    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 10px;
            right: 43px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>


    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            document.getElementById("wrapper-scroll").scrollTop=0;
        }
    </script>


</head>

<body style="background-color: rgba(43,43,49,0.98); color: white;" data-spy="scroll" data-target=".navbar-collapse">
    <nav style="font-weight: bolder;" class="navbar navbar-inverse">
        <div style="" class="container-fluid menuNav">
            <div class="logo"><img src="../images/1200px-Sky_Cinema_-_Logo_2020.svg.png" style="width:100px;" alt=""></div>
            <div style="">
                <ul class="nav navbar-nav">
                    <li><a href="UserIndex.php">Trang chủ</a></li>
                    <li><a href="../html/UserMenufilm.php">Phim</a></li>
                    <li><a href="../html/UserHoTro.php">Hỗ trợ</a></li>
                    <li><a href="../html/UserGioiThieu.php">Giới thiệu</a></li>
                    <li class="active"><a href="#">Quyền lợi</a></li>
                </ul>
            </div>

            <div class="find" style="">
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
                            <li><a href="#">Đổi mật khẩu</a></li>
                            <!--link toi logout.php-->
                            <li><a href="../php/logout.php">Đăng xuất</a></li>

                        </ul>
                    </li>
                    <li><a href="#">Hello <?php echo $tenKhach  ?></a></li>
                </ul>

            </div>
        </div>

    </nav>


    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">

            </div>
            <div style="width: 80.666667%;background-color: rgba(43,43,49,0.98);" class="col-sm-8 text-left">
                <div class="title-cgv-member-bg">
                    <h2 style="font-size: 40px;
      text-shadow: blue 2px 3px 4px;
      color: white;
      line-height: 1.2;
      margin-bottom: 0.7em;
      font-weight: bold;
      text-rendering: optimizeLegibility;">SKY CINEMA MEMBERSHIP</h2>
                </div>
                <div class="wrapper" id="wrapper-scroll">




                    <div id="menu">
                        <ul style="text-align:center;
           display:inline;  
           margin-left:150px;">
                            <li><a style="border: solid;
            border-radius: 20px;
            background-color: green;
            color: white;
            width: 150px;
            " href="#customer-points">CHƯƠNG TRÌNH ĐIỂM THƯỞNG</a></li>
                            <li><a style="border: solid;
            border-radius: 20px;
            background-color: green;
            color: white;
            width: 150px;
            ;" href="#birthday-gift">QUÀ TẶNG SINH NHẬT</a></li>
                            <li><a style="
            border: solid;
            border-radius: 20px;
            background-color: green;
            color: white;
            width: 150px;
            
            margin: 0 -3px 2px 0;
            
            
            " href="#cgv-vip">CẤP ĐỘ THÀNH VIÊN</a></li>
                            <li class="membership-manager-account"><a style="border: solid;
            border-radius: 20px;
            background-color: green;
            color: white;
            width: 150px;
            " href="#customer-manager">QUẢN LÝ TÀI KHOẢN</a></li>
                            <li><a style="border: solid;
            border-radius: 20px;
            background-color: green;
            color: white;
            width: 150px;
            " href="#cgv-support">BẠN CẦN THÊM HỖ TRỢ</a></li>
                        </ul>
                    </div>

                    <style>
                        #menu ul {
                            list-style: none;
                        }

                        #menu a {
                            float: left;
                            border: 1px solid #FF0000;

                            padding: 10px;
                            background-color: #99CCFF;
                            width: 100px;
                            text-align: center;
                            text-decoration: none;
                            margin-right: 1px;
                        }

                        #menu a:hover {
                            background-color: #CC3399;
                            color: #FFFFFF;
                            text-decoration: underline;
                        }

                        .title-cgv-member-bg {
                            background: url("../images/member-star.PNG") no-repeat scroll center bottom / 320px auto transparent !important;

                        }
                    </style>


                    <div class="cms-content-diem-thuong">

                        <div class="col-left-content-member" style="margin-left:245px;">
                            <div style="text-align:center;
        float:left;" class="cgv-membership">

                                <div class="lyt-history-content" id="customer-points">
                                    <div class="outer">
                                        <div class="inner">
                                            <div class="lyt-heading">CHƯƠNG TRÌNH ĐIỂM THƯỞNG</div>
                                            <div class="lyt-details-content">
                                                <p>Chương trình bao gồm 4 đối tượng thành viên <strong>U22 | SKY Member | SKY VIP và SKY VVIP</strong>, với những quyền lợi và mức ưu đãi khác nhau. Mỗi khi thực hiện giao dịch tại hệ thống rạp SKY, bạn sẽ nhận được một số điểm thưởng tương ứng với cấp độ thành viên:</p>
                                                <table border="0" style="width: 100%;">
                                                    <tbody border="1.5">
                                                        <tr style="color: #000">
                                                            <th style="width: 31%;text-align:center;">Điểm thưởng</th>
                                                            <th style="width: 23%;text-align:center;">U22 | Member</th>
                                                            <th style="width: 23%;text-align:center;">VIP</th>
                                                            <th style="width: 23%;text-align:center;">VVIP</th>
                                                        </tr>
                                                        <tr style="color:#C60">
                                                            <td><strong>Tại Quầy Vé</strong></td>
                                                            <td><strong>5%</strong></td>
                                                            <td><strong>7%</strong></td>
                                                            <td><strong>10%</strong></td>
                                                        </tr>
                                                        <tr style="color: #000">
                                                            <td>VD: 100.000 VND</td>
                                                            <td>5 Điểm</td>
                                                            <td>7 Điểm</td>
                                                            <td>10 Điểm</td>
                                                        </tr>
                                                        <tr style="color:#C60">
                                                            <td><strong>Quầy Bắp Nước</strong></td>
                                                            <td><strong>3%</strong></td>
                                                            <td><strong>3%</strong></td>
                                                            <td><strong>5%</strong></td>
                                                        </tr>
                                                        <tr style="color: #000">
                                                            <td>VD: 100.000 VND</td>
                                                            <td>3 Điểm</td>
                                                            <td>3 Điểm</td>
                                                            <td>5 Điểm</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p><strong>1 điểm = 1.000 VND</strong>,có giá trị như tiền mặt, được dùng để mua vé xem phim, thức uống hoặc combo tương ứng tại SKY. Ví dụ: Với giao dịch mua vé giá 100.000 VND bạn có thể:</p>
                                                <p>- Thanh toán 80.000 VND + 20 điểm thưởng</p>
                                                <p>- Thanh toán với 0 VND + 100 điểm thưởng</p>

                                                <p>VD: Tổng đơn hàng là 100.000 VND, số điểm tối đa có thể sử dụng để thanh toán là 90 điểm.</p>
                                                <p><strong>Cách làm tròn điểm thưởng:</strong></p>
                                                <p>- Từ 0.1 đến 0.4: làm tròn xuống (Ví dụ: 3.2 điểm sẽ được tích vào tài khoản khoản 3 điểm)</p>
                                                <p>- Từ 0.5 đến 0.9: làm tròn lên (Ví dụ: 3.6 điểm sẽ được tích vào tài khoản 4 điểm)</p>
                                                <p><strong>Lưu ý:</strong></p>
                                                <p>1. Điểm thưởng có thời hạn sử dụng là 01 năm. Ví dụ: Điểm của bạn được nhận vào 0h00 ngày 1/1/2020 sẽ hết hạn sử dụng vào lúc 0h00 ngày 1/1/2021.</p>
                                                <p>2. Điểm thưởng có giá trị sử dụng tại tất cả cả rạp SKY CINEMA.</p>
                                                <p>3. Sau khi suất chiếu diễn ra, điểm thưởng sẽ được ghi nhận vào tài khoản của bạn vào 8:00 sáng ngày tiếp theo. Ví dụ: suất chiếu của bạn diễn ra vào ngày 02/01/2020, điểm thưởng sẽ được ghi nhận vào tài khoản của bạn vào 8:00 sáng ngày 03/01/2020.</p>
                                                <p>4. Bạn có thể dễ dàng kiểm tra điểm thưởng của mình trên SKY Website.</p>
                                                <p>5. Điểm thưởng tối thiểu được sử dụng cho mỗi giao dịch là 20 điểm trở lên.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lyt-reg-content" id="birthday-gift">
                                    <div class="outer">
                                        <div class="inner">
                                            <div class="lyt-heading">QUÀ TẶNG SINH NHẬT</div>
                                            <div class="lyt-details-content">
                                                <p>Như một lời chúc ý nghĩa và chân thành, SKY CINEMA xin dành tặng bạn một phần quà đặc biệt nhân dịp sinh nhật của mình:</p>
                                                <p>- <strong>Thành viên U22</strong>: 01 SKY Combo (1 Bắp &amp; 2 Nước) miễn phí.</p>
                                                * Đặc biệt! Vào sinh nhật lần thứ 23, thành viên U22 sẽ nhận thêmm 01 vé xem phim 2D/3D miễn phí.
                                                <p>- <strong>Thành Viên Thân Thiết (Member)</strong>: 01 SKY Combo (1 Bắp &amp; 2 Nước) miễn phí.</p>
                                                <p>- <strong>Thành viên VIP</strong>: 01 SKY Combo (1 Bắp &amp; 2 Nước) + 01 vé xem phim 2D/3D miễn phí.</p>
                                                <p>- <strong>Thành viên VVIP</strong>: 01 SKY Combo (1 Bắp &amp; 2 Nước) + 02 vé xem phim 2D/3D miễn phí.</p>
                                                <p><strong>Ghi chú: </strong></p>
                                                <p>1. Bạn sẽ nhận được phần quà sinh nhật trong tháng sinh nhật của mình. Ví dụ, bạn sinh vvào tháng 3 thì thời gian bạn có thể nhận quà là từ 01/03/2020 đến 31/03/2020.</p>
                                                <p>2. Chỉ những thành viên có ít nhất 01 giao dịch trong vòng 12 tháng gần nhất (trước tháng sinh nhật) mới nhận được phần quà sinh nhật từ SKY. Nếu chưa thỏa điều kiện nhận quà khách hàng có thể thực hiện giao dịch bổ sung và nhận quà sinh nhật sau 2 ngày với điều kiện thời điểm đó vẫn còn trong tháng sinh nhật.</p>
                                                <p>3. Phần quà sinh nhật không có giá trị quy đổi thành tiền mặt.</p>
                                                <p>4. Vui lòng xuất trình thẻ thành viên SKY và CMND khi đến nhận quà. Ngày sinh trong CMND của bạn phải trùng khớp với ngày sinh và số CMND đã đăng ký tài khoản SKY. Nếu tài khoản được đăng ký với tháng sinh không chính xác hoặc tháng sinh đã qua, chương trình sẽ được áp dụng vào tháng sinh nhật của năm kế tiếp. Để thay đổi thông tin ngày sinh bạn có thể liên hệ với SKY qua email hotro@skycinema.com.vn</p>
                                                <p>5. Thành viên mới sẽ bắt đầu được nhận quà sinh nhật sau 72 giờ kể từ ngày đăng ký thành viên &amp; có phát sinh giao dịch trước thời điểm nhận quà 2 ngày với điều kiện thời gian nhận quà vẫn còn trong tháng sinh nhật.</p>
                                                <p>6. SKY Combo miễn phí bao gồm 01 Bắp (vị ngọt hoặc mặn) &amp; 02 Nước ngọt lớn, chỉ áp dụng trực tiếp tại quầy.</p>
                                                <p>7. Đối với khách hàng VVIP nhận được 02 vé 2D/3D, vui lòng thực hiện giao dịch mua 02 vé cùng một lúc .</p>
                                                <p>8. vé miễn phí là vé 2D/3D hàng ghế thường hoặc VIP tại phòng chiếu thường.</p>
                                                <p>9. vé miễn phí được áp dụng cho tất cả cả ngày trong tuần bao gồm Lễ/ Tết, không áp dụng cho các suất chiếu sớm Sneak Show &amp; Early Release.</p>
                                                <p>10. Việc quy đổi quà sinh nhật phụ thuộc vào số lượng hiện có tại rạp.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lyt-history-content" id="cgv-vip">
                                    <div class="outer">
                                        <div class="inner">
                                            <div class="lyt-heading">CẤP ĐỘ THÀNH VIÊN</div>
                                            <div class="lyt-details-content accordion">
                                                <h3 style="color: #633;font-weight: bold;font-size: medium;">THÀNH VIÊN U22</h3>
                                                <div class="member-u22">
                                                    <p>Thành viên U22 là thành viên trong độ tuổi từ 12 đến dưới 23 và nhận được các ưu đãi sau:</p>
                                                    <p>Giá vé ưu đãi 45.000 VND - 55.000VND/ vé 2D<sup>(*)</sup> cho tất cả các suất chiếu từ thứ 2 đến thứ 6 </p>
                                                    <p>- Giá ưu đãi cho combo bắp nước:</p>
                                                    <p>+ My combo (1 nước vừa + 1 bắp vừa): 59.000 VND/ combo.</p>
                                                    <p>+ SKY Combo (2 nước vừa + 1 bắp vừa): 89.000 VND/ combo.</p>
                                                    <p>- 01 SKY Combo (1 bắp &amp; 2 nước) miễn phí vào tháng sinh nhật&nbsp;(tính từ ngày 1 đến ngày cuối cùng của tháng sinh nhật)</p>
                                                    <p>- 01 vé 2D/3D miễn phí vào sinh nhật lần thứ 23.</p>
                                                    <p>- Tích lũy điểm 5% Giá trị giao dịch tại quầy vé và 3% Giá trị giao dịch tại quầy bắp nước.</p>
                                                    <p>- Giảm Giá 10% các sản phẩm thức ăn nóng tại CGV.</p>
                                                    <p><strong>Ghi chú:</strong></p>
                                                    <p>- Thức ăn nóng chỉ áp dụng tại rạp SKY .</p>
                                                    <p>- Ưu đãi giảm Giá thức ăn nóng chỉ được áp dụng tại quầy.</p>
                                                    <p>- Chỉ áp dụng giảm Giá tối đa 10 sản phẩm thức ăn nóng trong 1 giao dịch.</p>
                                                    <p>- Khi sử dụng từ 500 điểm trở lên, vui lòng xuất trình CMND hoặc giấy tờ tùy thân của bạn để xác nhận chính chủ sở hữu tài khoản.</p>
                                                    <p>- Khi sử dụng từ 1000 điểm trở lên hệ thống sẽ yêu cầu bạn nhập mật khẩu với có pháp là ngày tháng năm sinh của bạn: YYYYMMDD (Ví dụ: bạn sinh ngày 13/03/1995, thì mật khẩu bảo mật tài khoản thành viên của bạn sẽ là 19950313).</p>
                                                </div>
                                                <h3 style="color: #633;font-weight: bold;font-size: medium;">THÀNH VIÊN THÂN THIẾT (MEMBER)</h3>
                                                <div class="member">
                                                    <p>thành viên thân thiết là thành viên từ 23 tuổi trở lên và nhận được các ưu đãi sau:</p>
                                                    <p>- 01 SKY Combo (1 bắp &amp; 2 nước) miễn phí vào tháng sinh nhật.</p>
                                                    <p>- Tích lũy điểm 5% Giá trị giao dịch tại quầy vé và 3% Giá trị giao dịch tại quầy bắp nước.</p>
                                                    <p>- Giảm Giá 10% các sản phẩm thức ăn nóng tại SKY.</p>
                                                    <p>- Cơ hội tham gia những chương trình đặc biệt khác chỉ áp dụng cho thành viên SKY.</p>
                                                    <p><strong>Ghi chú:</strong></p>
                                                    <p>- Thức ăn nóng chỉ áp dụng tại rạp SKY.</p>
                                                    <p>- Ưu đãi giảm Giá thức ăn nóng chỉ được áp dụng tại quầy.</p>
                                                    <p>- Chỉ áp dụng giảm Giá tối đa 10 sản phẩm thức ăn nóng trong 1 giao dịch.</p>
                                                    <p>Để nâng cao bảo mật tài khoản thành viên:</p>
                                                    <p>- Khi sử dụng từ 500 điểm trở lên, vui lòng xuất trình CMND hoặc giấy tờ tùy thân của bạn để xác nhận chính chủ chủ sở hữu tài khoản.</p>
                                                    <p>- Khi sử dụng từ 1000 điểm trở lên hệ thống sẽ yêu cầu bạn nhập mật khẩu với cú pháp là ngày tháng năm sinh của bạn: YYYYMMDD (Ví dụ: bạn sinh ngày 13/03/1995, thì mật khẩu bảo mật tài khoản thành viên của bạn sẽ là 19950313).</p>
                                                </div>
                                                <h3 style="color: #633;font-weight: bold;font-size: medium;">THÀNH VIÊN VIP 2020</h3>
                                                <div class="member-vip-2018">
                                                    <p>thành viên VIP 2020 là thành viên thân thiết hoặc thành viên U22 có tổng chi trong năm 2019 từ 5.500.000 VND đến 9.999.999 VND và nhận được các ưu đãi đặc biệt sau:</p>
                                                    <p>- 08 vé 2D/3D miễn phí áp dụng tất cả các ngày trong tuần.</p>
                                                    <p>- 01 SKY Combo (1 bắp &amp; 2 nước) và 01 vé xem phim 2D/3D trong tháng sinh nhật</p>
                                                    <p>- Tích lũy điểm 7% Giá trị giao dịch tại quầy vé và 3% Giá trị giao dịch tại quầy bắp nước.</p>
                                                    <p>- Giảm Giá 15% các sản phẩm thức ăn nóng tại SKY.</p>
                                                    <p>- Cơ hội tham gia những chương trình đặc biệt khác chỉ áp dụng cho thành viên VIP.</p>
                                                    <p><strong>Ghi chú:</strong></p>
                                                    <p>- Cấp độ thành viên VIP và các ưu đãi kèm theo chỉ có Giá trị trong vòng 01 năm từ 01/01/2020 đến 31/12/2020.</p>
                                                    <p>- khách hàng có thể đổi thẻ VIP và tận hưởng ưu đãi từ 01/01/2020 tại rạp SKY .</p>
                                                    <p>- Để tận hưởng các ưu đãi, bạn chỉ cần xuất trình thẻ VIP và yêu cầu áp dụng ưu đãi tại quầy vé khi giao dịch.</p>
                                                    <p>*Ưu đãi giảm Giá thức ăn nóng:</p>
                                                    <p>- Thức ăn nóng chỉ áp dụng tại ố rạp SKY.</p>
                                                    <p>- Ưu đãi giảm Giá thức ăn nóng chỉ được áp dụng tại quầy.</p>
                                                    <p>- Chỉ áp dụng giảm Giá tối đa 10 sản phẩm thức ăn nóng trong 1 giao dịch.</p>
                                                    <p>Để nâng cao bảo mật tài khoản thành viên:</p>
                                                    <p>- Khi sử dụng vé 2D/3D miễn phí hoặc điểm thưởng (từ 500 điểm trở lên), vui lòng xuất trình CMND hoặc giấy tờ tùy thân của bạn để xác nhận chính chủ sở hữu tài khoản.</p>

                                                </div>
                                                <h3 style="color: #633;font-weight: bold;font-size: medium;">THÀNH VIÊN VVIP 2020</h3>
                                                <div class="member-vvip-2018">
                                                    <p>thành viên VVIP 2020 là thành viên th&acirc;n thiết hoặc thành viên U22 có tổng chi ti&ecirc;u trong năm 2019 từ 10.000.000 VND trở lên. V&igrave; là thành viên ở cấp độ cao nhất, bạn sẽ được tận hưởng những đặc quyền sau:</p>
                                                    <p>- 01 phần quà VVIP đặc biệt k&egrave;m 01 Movie Pass. Thời gian nhận quà VVIP 2020 và MOVIE PASS sẽ được th&ocirc;ng b&aacute;o sớm nhất trong tháng 01/2020.</p>
                                                    <p>- 10 vé 2D/3D miễn phí áp dụng tất cả các ngày trong tuần.</p>
                                                    <p>- 01 SKY Combo (1 bắp &amp; 2 nước) và 02 vé xem phim 2D/3D miễn phí trong tháng sinh nhật. T&iacute;ch lũy điểm 10% Giá trị giao dịch tại quầy vé và 5% Giá trị giao dịch tại quầy bắp nước.</p>
                                                    <p><strong>Ghi chú:</strong></p>
                                                    <p>- khách hàng có thể đổi thẻ VVIP và tận hưởng ưu đãi từ 01/01/2020.</p>
                                                    <p>- các ưu đãi vé xem phim 2D/3D kh&ocirc;ng được áp dụng cho các ngày lễ, Tết, ngoại trừ vé 2D/3D trong tháng sinh nhật</p>
                                                    <p>*Ưu đãi giảm Giá thức ăn nóng:</p>
                                                    <p>- Thức ăn nóng chỉ áp dụng tại rạp SKY.</p>
                                                    <p>- Ưu đãi giảm Giá thức ăn nóng chỉ được áp dụng tại quầy.</p>
                                                    <p>- Chỉ áp dụng giảm Giá tối đa 10 sản phẩm thức ăn nóng trong 1 giao dịch.</p>
                                                    <p>Để nâng cao bảo mật tài khoản thành viên:</p>
                                                    <p>- Khi sử dụng vé 2D/3D miễn phí hoặc điểm thưởng (từ 500 điểm trở lên), vui lòng xuất trình CMND hoặc giấy tờ tùy thân của bạn để xác nhận chính chủ sở hữu tài khoản.</p>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lyt-history-content" id="customer-manager">
                                    <div class="outer">
                                        <div class="inner">
                                            <div class="lyt-heading">QUẢN LÝ TÀI KHOẢN</div>
                                            <div class="lyt-details-content">
                                                <p>Đăng nhập vào Tài Khoản SKY, bạn có thể dễ dàng quản lý tài khoản thành viên của mình như:</p>
                                                <p>- Kiểm tra và chỉnh sửa thông tin tài khoản.</p>
                                                <p>- Tra cứu điểm thưởng, tổng chi tiếc và lịch sử giao dịch.</p>
                                                <p>- Kiểm tra thẻ quà tặng, voucher hoặc coupon hiện có trong tài khoản thành viên.</p>
                                                <p>Mỗi tuần, các thành viên sẽ nhận được Bản tin điện ảnh SKY qua email, cập nhật những tin tức mới nhất về phim ảnh, sự kiện và khuyến mãi. Cập nhật ngay email, điện thoại và địa chỉ của bạn để luônn nhận được những thông báo mới nhất từ SKY CINEMA!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lyt-history-content" id="cgv-support">
                                    <div class="outer">
                                        <div class="inner">
                                            <div class="lyt-heading">BẠN CẦN HỖ TRỢ</div>
                                            <div class="lyt-details-content">
                                                <p>Với những ưu đãi hấp dẫn từ chương trình thành viên, SKY hy vọng sẽ mang đến cho bạn những trải nghiệm vượt xa điện ảnh.</p>
                                                <p>Mọi thắc mắc về chương trình thành viên bạn có thể liên hệ ngay Bộ phận hỗ trợ khách hàng của chúng tôi qua email hotro@skycinema.com.vn hoặc hotline 0901 930 863 (8:00 &ndash; 22:00, từ thứ Hai đến Chủ Nhật - bao gồm các ngày Lễ, Tết).</p>
                                                <p>Cảm ơn bạn đã luôn đồng hành cùng SKY!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style><!--
cms-cgv-membership span {
    float: left;
    width: 100%;
}

.wrapper {
   width: 75vw;
   height: 100vh;
   overflow: auto;
   scroll-behavior: smooth;
   background: #333;
}
</style>
<style>
p {
    margin: 0 0 10px;
    color: #00688B;
}
</style>
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
          <ul style="display: grid;">
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
          <ul style="display: grid;">
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