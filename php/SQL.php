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
  header("Location:../php/LoginForm.php");
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
<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "rapphim";

$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_GET['idPhim'])) {
  $id = $_GET['idPhim'];
  $sql = "SELECT * FROM phim WHERE idPhim = $id";
  $phim = mysqli_query($conn, $sql);
  $array = mysqli_fetch_assoc($phim);
  $noidung = "";
  switch ($id) {
    case "001":
      $noidung = "Fast & Furious 9 nói về trận chiến mới giữa Dom và những người đồng đội của mình. Lần này ngoại trừ nữ phản diện quen thuộc Cipher thì phim có thêm sự xuất hiện của nhân vật Jacob - em trai của Dom.";
      break;
    case "002":
      $noidung = "Cuộc chiến được chờ đợi nhất giữa hai siêu quái thú Godzilla và King Kong cuối cùng đã đến giờ G." . "<br>" . "<br>" . "Con người đóng vai trò gì trong trận battle siêu kinh điển này? Kết cục của thế giới sẽ ra sao? Có kinh phí đầu tư lên đến 165 triệu USD, Godzilla vs. Kong có thể là xem “cơn địa chấn” quái vật đầu tiên trong năm 2021 đến từ Hollywood." . "<br>" . "<br>" . " Dân ghiền phim có thể đang rất mong chờ sự tái xuất của hai siêu quái vật nổi tiếng nhất màn ảnh, theo như những hình ảnh trong trailer có thể thấy rằng cả King Kong lẫn Godzilla sẽ có màn “giáp lá cà” tưng bừng trong phim. Đặc sản của thương hiệu “vũ trụ quái vật” chính là hiệu ứng hình ảnh kỹ xảo bậc nhất và âm thanh đỉnh cao.";
      break;
    case "003":
      $noidung = "Trong phần 5 này, đạo diễn Lý Hải đã “mạnh tay” mời đạo diễn Kim Jung Min từ Hàn Quốc sang Việt Nam làm cố vấn hành động cho đoàn phim. Được biết, Kim Jung Min cũng chính là đạo diễn hành động của phim hay ra mắt năm 2018 The Witch: Part 1. The Subversion. Theo nhận xét của giới chuyên môn, yếu tố hành động trong siêu phẩm này được đánh giá cao bởi sự độc đáo, mạnh mẽ và ác liệt. Và với sự thể hiện này, tại giải thưởng điện ảnh danh giá Rồng Xanh lần thứ 39, Kim Jung Min và Park Jung Ryul đã nhận được đề cử ở hạng mục Kỹ thuật cho phần chỉ đạo hành động xuất sắc nhất.";
      break;
    case "004":
      $noidung = "Thế vận hội thể thao lớn nhất thế giới được tổ chức tại Tokyo, Nhật Bản thu hút rất nhiều sự chú ý. Khi sự kiện ra mắt con tàu siêu tốc với tốc độ 1000km/h diễn ra cũng là lúc hàng loạt các vụ bắt cóc xảy ra! Gia tộc hiểm ác tụ tập tại đây sẽ gây ra một loạt sự kiện chấn động thế giới!";
      break;
    case "005":
      $noidung = "Quá háo hức chào đón mùa xuân, Maya và Willy đã thức dậy khỏi giấc ngủ đông sớm hơn thời gian dự định. Từ đây, đôi bạn vô tình phải nhận một nhiệm vụ đặc biệt – bảo vệ và đưa quả trứng vàng đến ngôi nhà mới. Tuy nhiên, mọi rắc rối bắt đầu ập đến khi quả trứng nứt và cô công chúa kiến bé nhỏ ra đời. Maya, Willy và những người bạn đồng hành phải phối hợp cùng nhau để chăm sóc và bảo vệ công chúa kiến khỏi vô vàn nguy hiểm xung quanh. Trong hành trình đầy bất ngờ và gian nan này, Willy dần dần khám phá được một khía cạnh khác của bản thân – dịu dàng và kiên nhẫn với cô công chúa nhỏ. Bộ đôi Maya và Willy cũng đã trưởng thành hơn và tình bạn giữa họ càng trở nên thêm khăng khít và gắn bó.";
      break;
    case "006":
      $noidung = "Mortal Kombat: Cuộc Chiến Sinh Tử xoay quanh võ sĩ võ thuật tổng hợp Cole Young (Lewis Tan), người mang trên mình một vết chàm rồng đen bí ẩn - biểu tượng của Mortal Kombat. Cole Young không hề biết về dòng máu bí ẩn đang chảy trong người anh, hay vì sao anh lại bị tên sát thủ Sub-Zero (Joe Taslim) săn lùng. Vì sự an nguy của gia đình, Cole cùng với một nhóm những chiến binh đã được tuyển chọn để tham gia vào một trận chiến đẫm máu nhằm chống lại những kẻ thù đến từ Outworld.";
      break;
    case "007":
      $noidung = "Một cô gái khiếm thính gặp được Đức Mẹ Maria. Sau đó, cô có thể nghe, nói và chữa bệnh. Khi mọi người đến chứng kiến phép màu này, những sự kiện kinh khủng dần xảy ra. Đó thực sự là Đức Mẹ hay thế lực tà ác nào đó?";
      break;
    case "008":
      $noidung = "Sinh viên chuyên ngành Tiếng Anh Do Hyun nhận lời giúp đỡ một sinh viên trao đổi đang phải trải qua điều trị tâm lý sau một tai nạn bí ẩn. Qua lời giới thiệu của người bạn này, Do Hyun đã được Giáo sư Choi thôi miên. Tuy nhiên, sau đó, những hình ảnh rùng rợn liên quan đến một vụ án trong quá khứ luôn đeo bám Do Hyun, dù đó là ký ức chưa từng tồn tại trong trí nhớ của anh. Cùng lúc, hội bạn chơi lâu năm của Do Hyun gặp phải các tai nạn bí ẩn hay bị tra tấn bởi những ảo giác kỳ lạ.";
      break;
    case "009":
      $noidung = "Ki Heon - một cựu nhân viên tình báo mắc chứng bệnh nan y được giao nhiệm vụ bảo vệ Seobok - người nhân bản đầu tiên trên thế giới. Bản thân Seobok mang bí mật về việc trường sinh bất tử ở con người nên đã bị truy đuổi. Liệu Ki Heon và Seobok sẽ làm cách nào để sống sót?";
      break;
    case "10":
      $noidung = "Được lấy cảm hứng từ tác phẩm Truyện Kiều của đại thi hào Nguyễn Du, phim điện ảnh cổ trang Kiều chắt lọc những tình huống bi thương và hạnh phúc nhất trong chặng đời đầy truân chuyên của Thúy Kiều - một thân phận tài hoa và bạc mệnh. Sau khi bán mình chuộc cha, bị Mã Giám Sinh và Tú Bà lừa vào lầu xanh, Kiều với tài “cầm kỳ thi họa” đã trở thành một kỹ nữ tài sắc vẹn toàn khiến cho bao kẻ si mê. Nhưng “chữ tài liền với chữ tai”, nàng luôn đứng trước nguy cơ bị chiếm đoạt, hãm hại… Liệu những sóng gió gì sẽ lại ấp đến đời Kiều?";
      break;
    case "11":
      $noidung = "Sau khi bản thân bỗng nhiên sở hữu “Bàn tay diệt quỷ”, võ sĩ MMA Yong Hoo (Park Seo Joon thủ vai) đã dấn thân vào hành trình trừ tà, trục quỷ đối đầu với Giám Mục Bóng Tối (Woo Do Hwan) – tên quỷ Satan đột lốt người. Từ đó sự thật về cái chết của cha Yong Hoo cũng dần được hé lộ cũng như nguyên nhân anh trở thành “người được chọn”.";
      break;
    case "12":
      $noidung = "Dựa trên câu chuyện có thật và đầy cảm hứng về gia đình Matthew Teague. Sau khi người vợ Nicole bị ung thư, Matthew đã vật lộn khi phải chăm sóc vợ và con cái trong thời gian dài. Dane - người bạn thân nhất của họ, quyết định tạm gác lại cuộc sống và giúp đỡ gia đình Matthew cùng trải qua giai đoạn khó khăn này. Dane đã mang lại một sức mạnh to lớn và sâu sắc hơn nhiều so với bất kỳ ai có thể tưởng tượng.";
      break;
    case "13":
      $noidung = "Raya và Rồng Thần Cuối Cùng kể về một vương quốc huyền bí có tên là Kumandra – vùng đất mà loài rồng và con người sống hòa thuận với nhau. Nhưng rồi một thế lực đen tối bỗng đe dọa bình yên nơi đây, loài rồng buộc phải hi sinh để cứu lấy loài người. 500 năm sau, thế lực ấy bỗng trỗi dậy và một lần nữa, Raya là chiến binh duy nhất mang trong mình trọng trách đi tìm Rồng Thần cuối cùng trong truyền thuyết nhằm hàn gắn lại khối ngọc đã vỡ để cứu lấy vương quốc. Thông qua cuộc hành trình, Raya nhận ra loài người cần nhiều hơn những gì họ nghĩ, đó chính là lòng tin và sự đoàn kết.";
      break;
    case "14":
      $noidung = "Hiệp sĩ lang thang Bedivere cuối cùng cũng đến được điểm cuối của hành trình lang thang của mình. Năm 1273 Trước Công Nguyên tại Jerusalem. Đất Thánh đã trở thành một hoang mạc vĩ đại, người dân bị buộc phải rời quê hương, và có ba thế lực đang giao đấu với nhau tại nơi vùng đất hoang vu này. Hội Hiệp Sĩ Bàn Tròn đã tụ tập lại để bảo vệ Đất Thánh và Vua Sư Tử của họ. Với cả Vương quốc mình bị triệu hồi tới vùng đất xa lạ, Ozymandia, Vua Mặt Trời, đã lặng lẽ chống lại sự bạo ngược của thành trì kì lạ đó. Những người dân vùng núi, những người bảo vệ cho những nạn nhân bị tước đoạt đất đai, đang đợi chờ cơ hội kháng chiến. Để hoàn tất sứ mạng của mình, Bedivere tới Đất Thánh nơi Vua Sư Tử trị vì, nơi anh gặp vị Master cuối cùng của loài người – Ritsuka Fujimaru, cùng với Demi-Servant của anh ta – Mash Kyrielight, đã tới Jerusalem, với mục đích khôi phục lịch sử nhân loại. Bedivere tham gia cùng với Fujimaru và đồng đội để thực hiện nhiệm vụ này.";
      break;
    case "15":
      $noidung = "Phim xoay quanh cuộc gặp gỡ định mệnh giữa Josee, một cô gái 24 tuổi khuyết tật, sống cùng bà và vô cùng khép kín với cuộc sống bên ngoài. Josee đã luôn sống trong thế giới nhỏ của bản thân, cho tới một buổi tối định mệnh khi cô được cậu sinh viên Tsuneo cứu trong một tai nạn. Mới đầu, Josee còn vô cùng cảnh giác với sự xuất hiện của Tsuneo, tuy nhiên sau đó, khi cậu sinh viên chứng minh được sự chân thành của mình, Josee đã dần mở lòng để Tsuneo khám phá về thế giới bí mật của riêng cô. Về phần Tsuneo, sự xuất hiện của Josee chính là bước ngoặt trong cuộc sống tưởng chừng đã được “mặc định” sẵn từng bước của cậu.";
      break;
    case "16":
      $noidung = "Trong phim, Trấn Thành vào vai ông Tư – một tài xế xe ôm quần quật làm việc qua ngày để chăm lo cho gia đình của mình. Mặc dù khá bảo thủ, nóng nảy, thường xuyên quát tháo nhưng thực chất ông Tư lại là một người rất giàu lòng yêu thương – không chỉ với người thân mà còn có hàng xóm, bạn bè xung quanh và thậm chí là cả những người xa lạ." . "br" . "br" . "Đánh giá về thành công của Bố Già, bên cạnh diễn xuất hiệu quả của dàn diễn viên, điểm cộng của phim còn được quyết định bởi nội dung gần gũi, vừa cảm động mà cũng không thiếu những tình huống hài hước. Tuy vậy, đến cuối cùng, cái kết của tác phẩm lại gây ra tranh cãi vì nhiều khán giả cho rằng nó chưa thực sự hợp lý và còn thiếu cao trào. Liệu Bố Già bản điện ảnh có khắc phục được điều này?";
      break;
    case "17":
      $noidung = "Cruella là bản live action về phần tiền truyện của một trong những nhân vật phản diện mang tính biểu tượng, huyền thoại Cruella de Vil. “Cruella” lấy bối cảnh ở London những năm 1970 theo chân cô lao công thông minh & sáng tạo Estella với quyết tâm làm nên tên tuổi từ những thiết kế của mình. Cô kết giao với 2 kẻ trộm luôn đánh giá cao tham vọng và sự nghịch ngợm của cô và họ cùng nhau gây dựng tên tuổi ở khu phố London. Một ngày nọ, sự nhạy bén về thời trang của Estella đã lọt vào mắt xanh của bà Nam tước von Hallman, một huyền thoại thời trang, người phụ nữ sang trọng nhưng không kém vẻ đáng sợ. Nhưng mối quan hệ của họ dẫn đến những sự kiện và khiến Estella bước vào con đường để trở thành một người đậm chất thời trang nhưng tàn ác và đầy lòng hận thù - Cruella.";
      break;
    case "18":
      $noidung = "Sau một thời gian dài không gặp, cuộc sống của mỗi thành viên trong hội ế đều có nhiều thay đổi. Camy là người duy nhất “thoát ế” với cuộc sống đáng mơ ước bên người chồng tài hoa Đăng Minh. Quỳnh Lam đã là một nhà thiết kế nổi tiếng, Linh Đan là một luật sư thành đạt, còn Ken trở thành ông chủ phòng gym. Cả nhóm quyết định hội ngộ nhân dịp kỷ niệm 3 năm ngày cưới của Camy. Từ đây, những góc khuất trong cuộc sống riêng của từng người dần được hé lộ. Hội ế sẽ làm gì khi phát hiện ra những bí mật của mỗi thành viên lại là nguyên nhân khiến tình bạn của họ đối mặt với sóng gió.";
      break;
    case "19":
      $noidung = "Phần hai tiếp nối các sự kiện xảy ra trong phần một, khi gia đình Abbot gồm người mẹ Evelyn (do Emily Blunt thủ vai) cùng ba con chạy trốn đến một thành phố tưởng như an toàn. Tuy nhiên, cả gia đình không ngờ rằng ở thế giới bên ngoài cũng đã bị những sinh vật ngoài hành tinh thâu tóm. Những sinh vật này khiếm khuyết về thị giác nhưng có thính giác siêu nhạy để săn mồi bằng cách lần theo âm thanh. “Vùng đất câm lặng” lúc này đã trở thành “thế giới câm lặng” khi những người sống sót tiếp tục phải lẩn trốn, không được tạo ra tiếng động mỗi khi di chuyển hay giao tiếp với nhau. Nhưng càng bước ra ngoài thế giới, gia đình Abbot sớm nhận ra rằng hiểm họa duy nhất không chỉ đến từ những sinh vật ngoài hành tinh. Những bí ẩn xung quanh cuộc đổ bộ của các giống loài này dần được hé lộ…";
      break;
    case "20":
      $noidung = "Phần phim riêng của Natasha Romanoff bất ngờ tung teaser chính thức với những cảnh hành động mãn nhãn, mang đậm chất điệp viên. Bên cạnh đó, phần phim này cũng sẽ hé lộ quá khứ đen tối và quá trình biến cô trở thành một Black Widow.";
      break;
    case "21":
      $noidung = "Tiếp tục là những nhiệm vụ tưởng chừng như bất khả thi nhằm giải cứu nhân loại của tổ chức mật vụ nổi tiếng bậc nhất màn ảnh rộng. Đặc biệt lần này, đối thủ của họ gồm một nhóm người được coi là những kẻ khủng bố và tàn bạo hàng đầu.";
      break;
    case "22":
      $noidung = "Phần 25 của bộ phim điệp viên huyền thoại 007 sẽ tiếp nối câu chuyện về James Bond cùng những pha hành động táo bạo và hoành tráng hơn bao giờ hết. Sau sự kiện đầy ám ảnh trong Spectre, Bond lui về ở ẩn tại đất nước Jamaica, sống một cuộc đời cô độc nhưng bình lặng. Bỗng một người bạn cũ từ CIA xuất hiện, cầu xin anh giúp đỡ. Bond bất đắc dĩ phải tái xuất, nhưng không hề biết mình sẽ đối đầu với thế lực nào. Chi tiết đáng chú ý nhất là chiếc mặt nạ trắng vỡ nửa, đánh dấu sự xuất hiện của tên ác nhân kì quái bậc nhất trong cả series 007. Màn chạm trán giữa Bond và kẻ thù nguy hiểm này sẽ vén màn những bí ẩn còn để ngỏ và tiếp theo đó, có thể là một cuộc đối đầu “sinh tử”.";
      break;
    case "23":
      $noidung = "Bộ phim tiếp theo của vũ trụ điện ảnh Marvel với nhân vật chính là Bậc Thầy Kung-Fu Shang-Chi." . "br" . "br" . "Shang-Chi là bậc thầy Kung Fu, tinh thông võ thuật. Sức mạnh của Shang-Chi đến từ hàng ngàn giờ luyện tập miệt mài và sự kỷ luật cao độ với bản thân. Siêu anh hùng võ thuật này được chính bố của mình tôi luyện, dạy dỗ để trở thành một sát thủ chuyên nghiệp và kế thừa tập đoàn tội ác của ông." . "br" . "br" . "Shang-Chi có lẽ không còn xa lạ với người hâm mộ truyện tranh Marvel, tuy nhiên, đây sẽ là lần đầu tiên nhân vật này được bước lên màn ảnh. Đặc biệt hơn, Shang-Chi cũng chính là nhân vật siêu anh hùng gốc Á đầu tiên của MCU được chuyển thể thành phim." . "br" . "br" . "Teaser trailer đầu tiên cũng hé lộ những hình ảnh thời niên thiếu của Shang-Chi, từ một cậu bé nhỏ tuổi được cha mình khổ luyện, đào tạo trong môi trường vô cùng khắc nghiệt cho tới khi trở thành một người đàn ông trưởng thành. Xuyên suốt trailer dài 2 phút là những pha phô diễn võ thuật, công phu choáng ngợp, đậm chất Á Đông, đúng như cội nguồn của nhân vật này.";
      break;
    case "24":
      $noidung = "Từ lúc nào không ai hay biết, các dự án nhà ở tại khu Cabrini-Green ở Chicago đã bị khủng bố bởi câu chuyện truyền miệng về một kẻ giết người siêu nhiên với chiếc tay móc câu. Hắn có thể dễ dàng được triệu tập nếu bạn dám nhắc lại tên hắn năm lần trước gương. Ngày nay, một thập kỷ sau khi tòa tháp Cabrini cuối cùng bị phá hủy, nghệ sĩ thị giác Anthony McCoy và người yêu của anh, giám đốc phòng trưng bày Brianna Cartwright di chuyển vào một căn hộ gác xép sang trọng ở Cabrini, giờ đây được cải tạo lại và định cư bởi thế hệ người trẻ năng động. Khi sự nghiệp vẽ tranh của Anthony đang trên bờ vực đình trệ, cuộc gặp gỡ tình cờ với một cư dân cũ của khu Cabrini-Green phơi bày cho Anthony sự thật kinh hoàng về câu chuyện Candyman. Lo lắng để duy trì vị thế của mình trong giới nghệ thuật Chicago, Anthony bắt đầu phát hiện những chi tiết rùng rợn trong xưởng vẽ của mình và anh cũng lấy chúng làm cảm hứng cho các tác phẩm mới. Anh không hề hay biết những điều này đang vô tình mở ra một cánh cửa dẫn tới quá khứ phức tạp, đưa anh tới định mệnh của chính mình. Từ đó anh dần trở nên mất tỉnh táo và rơi sâu hơn vào vòng xoáy bạo lực đáng sợ.";
      break;
    case "25":
      $noidung = "‘Đêm Trói Buộc’ kể về câu chuyện của một cặp vợ chồng người Iran (do Shahab Hosseini and Niousha Jafarian thủ vai) và đứa con gái một tuổi phát hiện họ bị nhốt bên trong khách sạn cũ và bị lực lượng ngoại bang cưỡng bức. Song tại đây, họ phải đối mặt với những bí mật mà cả hai đã âm thầm chôn giấu người bạn đời của mình.";
      break;
    case "26":
      $noidung = "Chuyến phiêu lưu hoang đường về một cô bé cứng đầu, rắn rỏi luôn mong mỏi một nơi chốn thực sự để thuộc về. Hành trình cuộc đời cô đã vô tình giao nhau với một chú ngựa hoang, khiến cô khám phá ra một linh hồn đẹp đẽ.";
      break;
    case "27":
      $noidung = "Do miếng cơm manh áo, cô sinh viên A Young đành chấp nhận công việc trông trẻ cho bà mẹ đơn thân Young Chae. Tuy nhiên khi phát hiện chị ta vì quá khó khăn mà định đưa đứa bé vào trại mồ côi, nàng ta đã quyết tâm ngăn cản vì A Young cũng là một đứa trẻ lớn lên trong cô nhi viện với nhiều đau thương và đơn độc.";
      break;
    case "28":
      $noidung = "Chìa Khoá Trăm Tỷ bắt đầu khi một sát thủ khét tiếng vô tình bị mất trí vì một tai nạn bất ngờ, rồi bắt đầu một cuộc sống mới bằng nghề diễn viên quần chúng. Chuyện gì sẽ xảy ra nếu chàng diễn viên quần chúng này quên hẳn cuộc đời sát thủ để trở thành một ngôi sao hành động? Liệu sự nghiệp diễn viên và cô quản lý bất đắc dĩ có giúp hắn thay đổi quá khứ mãi mãi và sống trọn vẹn một cuộc đời mới? Một bộ phim hài-hành động nhưng cũng đầy sự ấm áp về hành trình 'đổi đời' của một kẻ giết thuê để mưu sinh.";
      break;
  }
} else {
  // echo "123";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../css/Menufilm.css">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@1,300&family=Saira+Condensed:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

<body style="background-color: rgba(43,43,49,0.98);">
  <nav style="font-weight: bolder;" class="navbar navbar-inverse">
    <div class="container-fluid menuNav">
      <div class="logo"><img src="../images/1200px-Sky_Cinema_-_Logo_2020.svg.png" style="width:100px;" alt=""></div>
      <div>
        <ul class="nav navbar-nav">
          <li><a href="../html/UserIndex.php">Trang chủ</a></li>
          <li><a href="../html/UserMenufilm.php">Phim</a></li>
          <li><a href="../html/UserHoTro.php">Hỗ trợ</a></li>
          <li><a href="../html/UserGioiThieu.php">Giới thiệu</a></li>
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

  <div class="container-fluid text-center">
    <div style="color:white" class="row content">
      <div class="col-sm-2 sidenav">

      </div>
      <div style="width: 80.666667%;" class="col-sm-8 text-left">
        <div style="background-color: rgba(43,43,49,0.98);" class="row">
          <div class="col-sm-3">
            <div class="img1"><img src="../<?php echo $array['anhPhim'] ?>" width=100% style="padding-top: 14%;" alt=""></div>

          </div>
          <div class="col-sm-5" style="width: 75%">
            <table style=" font-size: 21px;margin-top: 4%;line-height:172%">
              <tr>
                <td style="font-size: 35px; text-align: center;" colspan="2">
                  <?php
                  echo $array["tenPhim"];
                  ?>
                </td>
              </tr>
              <tr>
                <td class="cotTen">
                  Thể loại :
                </td>
                <td class="cotThongTin">
                  <?php
                  echo $array["theLoai"];
                  ?>
                </td>
              </tr>
              <tr>
                <td>
                  Thời lượng :
                </td>
                <td>
                  <?php
                  echo $array["thoiLuong"];
                  ?> phút
                </td>
              </tr>
              <tr>
                <td>
                  Diễn viên :
                </td>
                <td>
                  <?php
                  echo $array["dienVien"];
                  ?>
                </td>
              </tr>
              <tr>
                <td>
                  Ngày công chiếu :
                </td>
                <td>
                  <?php
                  echo $array["ngayCongChieu"];
                  ?>
                </td>
              </tr>
              <tr>
                <td>
                  Nhà sản xuất :
                </td>
                <td>
                  <?php
                  echo $array["nhaSanXuat"];
                  ?>
                </td>
              </tr>
              <tr>
                <td>
                  Ngôn ngữ :
                </td>
                <td>
                  <?php
                  echo $array["ngonNgu"];
                  ?>
                </td>
              </tr>
              <tr>
                <td>
                  Quốc gia :
                </td>
                <td>
                  <?php
                  echo $array["quocGia"];
                  ?>
                </td>
              </tr>
              <tr>
                <td>
                  Trạng thái :
                </td>
                <td>
                  <?php
                  if ($array["trangThai"] == 1) {
                    echo "Còn chiếu";
                  } else
                    echo "Hết vé";
                  ?>
                </td>
              </tr>
            </table>
            <div>
              <?php
              if ($array["trangThai"] == 1) { ?>

                <button style=" width: 13%;height: 45px; margin-left: 30%;background: #D12F2F;font-size: 20px;color: white;" }>
                  <a style="color:white;font-weight:bold" href="BookingSeat.php?id=<?php echo $id ?>">
                    Mua vé
                  </a>
                </button>
              <?php } ?>
            </div>

          </div>

          <div style="font-family:'Roboto';" class="noiDung">
            <h3 style="text-align: center;font-size:25px">Nội dung phim: </h3>
            <div style="font-size:20px" class="noidungphim">
              <?php echo "<br>" . $noidung; ?>
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
</body>

</html>