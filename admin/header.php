<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="..\admin\plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="..\admin\plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="..\admin\plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="..\admin\plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="..\admin\dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="..\admin\plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="..\admin\plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="..\admin\plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- ckeditor -->
    <script src="..\admin\plugins\ckeditor\ckeditor.js"></script>
     <!-- Jquerry -->
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- JquerryUI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Jquerry css -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <!-- My style-->
    <link rel="stylesheet" href="..\admin\css\mystyle.css">
    <link rel="stylesheet" href="..\admin\plugins\uploadimage\style.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="..\admin\plugins\datatables-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="..\admin\plugins\datatables-responsive\css\responsive.bootstrap4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Sky Cinema </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        <!--nho doi image-->
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->                     
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Thông tin
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="table.php?column_name=Tên,Số%20điện%20thoại,Giới%20tính,Email,Ngày%20đăng%20kí&column_name_data=hoTen,soDienThoai,gioiTinh,email,ngayDangKy&stmt=
                                        SELECT%20`hoTen`, `soDienThoai`, `gioiTinh`, `email`,DATE_FORMAT(ngayDangKy,'%d/%m/%Y')%20AS%20ngayDangKy%20FROM%20`khach_hang`&table=khach_hang"
                                        class="nav-link">
                                        <!--bad code -->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Khách hàng</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="table.php?column_name=ID,Ngày%20bán,Thành%20tiền,ID%20suất%20chiếu,ID%20ghế,ID%20nhân%20viên,ID%20khách%20hàng&column_name_data=idVe,ngayBan,thanhTien,idSuatChieu,idGhe,idNhanVien,idKhachHang&stmt=
                                        SELECT%20`idVe`,DATE_FORMAT(ngayBan,'%d/%m/%Y')%20AS%20ngayBan, `thanhTien`, `idSuatChieu`, `idGhe`, `idNhanVien`, `idKhachHang`%20FROM%20`ve_ban`&table=ve_ban"
                                        class="nav-link">
                                        <!--bad code -->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Vé đã bán</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="table.php?column_name=Họ,Tên,Email,Phone,feedback&column_name_data=ho,ten,mail,phone,yKien&stmt=
                                        SELECT%20`ho`,`ten`, `mail`, `phone`, `yKien`FROM%20`feedback`&table=feedback"
                                        class="nav-link">
                                        <!--bad code -->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ý kiến phản hồi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>                         
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>