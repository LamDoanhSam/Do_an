 <?php
session_start();
// if(!isset($_SESSION['user']))
// {
// 	header('location:login.php');
// }
// extract($_POST);
?> 
<!doctype html><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />


<link href="..//css/bank.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="..///bttn.css-master/dist/bttn.min.css">
<script type="text/javascript" src="..//js/jquery-3.6.0.min.js"></script>



</head>


<body>

<div id="mainContainer" class="row large-centered">

  <div class="text-center"><h2>BANK</h2></div>
  
  <hr class="divider">
    <dl class="mercDetails">
        <div class="group">
            <dt class="group-detail">Tên tài khoản:</dt>
            <dt class="group-detail"><?php echo $_POST['name']?></dt>
        </div>
        <div class="group">
            <dt class="group-detail">Số tài khoản:</dt>
            <dt class="group-detail"><?php echo $_POST['number']?></dt>
        </div>
        <div class="group" style="display:flex;">
            <dt class="group-detail">Số tiền thanh toán:</dt>
            <dt class="group-detail"><?php echo  $_SESSION['totalPrice']." VND";?> </dt>       
        </div>        
    </dl>
  <hr class="divider">
  
  
<form name="form1" id="form1" method="post" action="profile.php" onsubmit="return ValidateForm();">
    <fieldset class="page2">
        <div class="page-heading">
            <h6 class="form-heading">Hoàn tất thanh toán</h6>
            <p class="form-subheading">Mã xác thực của bạn là 
            <strong id="otp">
                <?php echo mt_rand(1000, 9999) ?>
            </strong></p>
        </div>
        <div class="row formInputSection">
            <div class="large-7 columns">
                <label>Nhập lại mã xác thực
                    <input type="text" name="re-otp" id="re-otp" class="form-control optPass" value="" maxlength="6" autocomplete="off"/>
                </label>
            </div>
            <div class="confirm">
                <div class="confirm-item ">
                    <div class="confirm-otp" onClick="changeOTP();" style="cursor: pointer;">Tạo mới mã xác thực</div>
                </div>
                <div class="confirm-item">
                    <button class="bttn-simple bttn-md bttn-success" type="submit">Thanh toán</button>
                </div> 
            </div>
                
        </div>    
        <p class="tryAgain">
            <a  href="payment.php" style="color:red;">Quay lại</a>
        </p>
    </fieldset>
</form>
</div>

<script>

function ValidateForm() {
    var otp =  document.getElementById('otp').innerHTML;
    var re_otp = document.getElementById('re-otp').value;
	if(re_otp=="") {	 
		alert("Vui lòng nhập mã xác thực");
        document.getElementById('re-otp').value ="";
        return false; 
	} else if(otp - re_otp !=0){
        alert("Mã xác thực không trùng khớp");
        document.getElementById('re-otp').value ="";
        changeOTP();
        return false;
    }   else {
             return true;
        }

}

function changeOTP(){
    var num = Math.floor(Math.random() * 9999) + 1000;
    document.getElementById('otp').innerHTML = num;
    
}
</script>

</body>
</html>