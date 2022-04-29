<?php
function OpenConnection(){
    try{
        $username = "root"; 
        $password = "";    
        $server   = "localhost:3306";   
        $dbname   = "rapphim";      
        $conn = mysqli_connect($server, $username, $password, $dbname);
        if ($conn)
        {
            //echo "Connection established";
            return $conn;
        }
        else
        {        
            die("Connection could not be established.</br>" . mysqli_connect_error());
            exit();      
        }

    }catch(Exception $e)
    {
        echo "Error";
    }return null;
}

if(empty($name = $_POST['name'])){
    echo ("<span style='float: left; color: red; font-size: 13px; font-weight: bold; display: block;'
    id='er-name'>Vui lòng nhập tên !!</span>");
}else{
    //check email
    if(empty($email = $_POST['email'])){
        echo ("<span style='float: left; color: red; font-size: 13px; font-weight: bold; display: block;'
        id='er-email'>Vui lòng nhập email !!</span>");
    }else{
        //check pass
        if(empty($pass = $_POST['pass'])){
            echo("<span style='float: left; color: red; font-size: 13px; font-weight: bold; display: block;'
            id='er-pass'>Vui lòng nhập pasword !!</span>");
        }else{
            //check re-enter password
            if(empty($enterpass = $_POST['enterpass'])){
                echo ("<span style='float: left; color: red; font-size: 13px; font-weight: bold; display: block;'
                id='er-enterpass'>Nhập lại mật khẩu sai !!</span>");
            }else{
                //check phone number
                if(empty($phone = $_POST['phone'])){
                    echo ("<span style='float: left; color: red; font-size: 13px; font-weight: bold; display: block;'
                    id='er-phone'>Vui lòng nhập số điện thoại !!</span>");
                }else{
                    $gender = $_POST['gender'];
                    $query = "SELECT * FROM `khach_hang` WHERE `email` = '$email'";
                    $conn = OpenConnection();
                    $getUser = mysqli_query($conn, $query);
                    //check if email does not exist
                
                    if(mysqli_num_rows($getUser)==0){
                        //Check password coincides with re-enter password
                        if($enterpass == $pass){
                            $phoneData = "SELECT * FROM `khach_hang` WHERE `soDienThoai` = '$phone'";
                            $checkPhone = mysqli_query($conn, $phoneData);
                            //check if phone number does not exist
                            if(mysqli_num_rows($checkPhone)==0){
                                $pass = md5($pass);
                                $date = date("Y-m-d");
                                $insert = "INSERT INTO `khach_hang` (`hoTen`, `soDienThoai`, `gioiTinh`, `email`, `ngayDangKy`, `matKhau`)  VALUES('$name','$phone','$gender','$email','$date','$pass')";
                                //check if insert success
                                if($ex = mysqli_query($conn, $insert)){
                                    $msg = "<script>
                                        alert('Đăng kí thành công');
                                        $(document).ready(function(){
                                            $('#name').val('')
                                            $('#emailorusername').val('');
                                            $('#pass').val('');
                                            $('#enter-pass').val('');
                                            $('#phone').val('');
                                        });
                                    </script>
                                    ";
                                    
                                }else{
                                    $msg = "<script>
                                        alert('insert failed');
                                    </script>";
                                }
                            }else{
                                $msg = "<span
                                style='color: red; font-size: 13px; font-weight: bold; display: block; position:absolute; left:130px;'
                                id='result'>Số điện thoại đã tồn tại !!</span>";
                            }
                            
                        }else{
                            $msg = "<span
                        style='color: red; font-size: 13px; font-weight: bold; display: block; position:absolute; left:103px;'
                        id='result'>Vui lòng nhập lại password !!</span>";
                        }
                        
                    }else{
                        $msg = "<span
                        style='color: red; font-size: 13px; font-weight: bold; display: block; position:absolute; left:130px;'
                        id='result'>Email đã tồn tại !!</span>";
                    }
                }
            } 
        }
    }
    }
    if(isset($msg)){
        echo $msg;
    }
    
    
    
 ?>