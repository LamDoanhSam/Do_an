<?php
session_start();

////lưu dữ liệu đặt vé vào session
if(isset($_POST['totalPrice']))
{
	$_SESSION['totalTicket'] = $_POST['totalTicket'];
    $_SESSION['totalPrice'] = $_POST['totalPrice'];
    $_SESSION['gioChieu'] = $_POST['gioChieu'];
    $_SESSION['idPhong'] = $_POST['idPhong'];
    $_SESSION['ngayChieu'] = $_POST['ngayChieu'];

}
    
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" type="text/css"  href ="..//css/style1.css"/>
    <script type="text/javascript" src="..//js/jquery-3.6.0.min.js"></script>
    <script type ="text/javascript" src="..//bootstrap/bootstrapValidator.js"></script>
    <link rel="stylesheet" href="..//bootstrap/bootstrap.min.css"> 
    
    <style type="text/css">
        div{
            display: inline-grid;
            margin-top: 15px;
        }
        .help-block{
            color: red;
        }
    </style>
</head>
<body>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<h1>THÔNG TIN THANH TOÁN</h1>
			    <form action="bank.php" method="post" id="form1">
			            <div class="form-group">
                            <label class="control-label">Tên in trên thẻ</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="control-label1">Số tài khoản</label>
                            <input type="text" class="form-control" name="number" required title="Nhập số tài khoản 16 chữ số">
  
                        </div>      
                        <div class="form-group">
                            <label class="control-label" id="control-label2">Ngày hết hạn</label>
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">TIẾP THEO</button>
                        </div>
                </form>
        </div>
    </div>


<script>
        $(document).ready(function() {
            $('#form1').bootstrapValidator({ 
            fields: { 
            name: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'Tên không được để trống'
                    }} },
            number: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'Số tài khoản không được để trống'
                    },stringLength: {
                    min: 10,
                    max: 10,
                    message: 'Số tài khoản phải dài 10 kí tự'
                },regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Nhập số tài khoản bằng các chữ số từ 0-9'
                    } } },
            date: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'Ngày hết hạn của thẻ không được để trống'
                    } } },
                }
            });
            });

</script>		





</body>
</html>