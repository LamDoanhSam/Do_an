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
    
    
    if(empty($email = $_POST['email'])){
       echo ("<span style='float: left; color: red; font-size: 13px; font-weight: bold; display: block;'
        id='er-email'>Vui lòng nhập email !!</span>");
        
    }else{
        if(empty($pass = $_POST['pass'])){
            echo("<span style='float: left; color: red; font-size: 13px; font-weight: bold; display: block;'
            id='er-email'>Vui lòng nhập password !!</span>");
        }else{
            $query = "SELECT * FROM `khach_hang` WHERE `email` = '$email'";
            $conn = OpenConnection();
            $getUser = mysqli_query($conn, $query);
            if($row = mysqli_fetch_assoc($getUser)){
                $passmh = md5($pass);
                $email_data = $row['email'];
                $pass_data = $row['matKhau'];              
                $idacc = $row['idKhachHang'];
                if($email == $email_data && $passmh == $pass_data){
                    if($_POST['checkRemember'] == "true"){
                        $checkRemember = $_POST['checkRemember'];
                        setcookie('email',$email, time() + (86400 * 30));
                        session_start();
                        $_SESSION['email'] = $email_data;
                        $_SESSION['idacc'] = $idacc;
                        setcookie('pass',$pass, time() + (86400 * 30));
                        setcookie('idacc',$idacc, time() + (86400 * 30));
                        setcookie('checkRemember',$checkRemember, time() + (86400 * 30));
                        // nhap duong dan trang index
                        $msg = "
                        
                        <script>
                        window.location='../html/UserIndex.php';
                        </script>
                        ";
                    }else{
                        session_start();
                        $_SESSION['email'] = $email_data;
                        $_SESSION['idacc'] = $idacc;
                        $checkRemember = $_POST['checkRemember'];
                        setcookie('email',$email, time() - (86400 * 30));
                        setcookie('pass',$pass, time() - (86400 * 30));
                        setcookie('idacc',$idacc, time() - (86400 * 30));
                        setcookie('checkRemember',$checkRemember, time() - (86400 * 30));
                        // nhap duong dan trang index
                        $msg = "
                        <script>
                        window.location='../html/UserIndex.php';
                        </script>
                        ";
                    }
                   
                }else {
                    $msg = "<span id='er-mp' style='font-weight: bold; color: red; font-size: 14px;'>
                        Email or password incorrect !!
                    </span>";
                }
            }else{
                $msg = "<span id='er-mp' style='font-weight: bold; color: red; font-size: 14px;'>
                        Email or password incorrect !!
                    </span>";
            }
            
        }
    }
    if(isset($msg)){
        echo $msg;
    }
    
    
    
 ?>