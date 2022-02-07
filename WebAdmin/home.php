<?php
    require_once("./dbconfig.php");
    session_start();
    require_once("./ktradangnhap.php");
    $donhang_query = mysqli_query($links,"select * from hoadon");
    $donhang = mysqli_num_rows($donhang_query);
    $danhmuc_query = mysqli_query($links,"select * from danhmuc");
    $danhmuc = mysqli_num_rows($danhmuc_query);
    $khachhang_query = mysqli_query($links,"select * from khachhang");
    $khachhang = mysqli_num_rows($khachhang_query);
    $sanpham_query = mysqli_query($links,"select * from sanpham");
    $sanpham = mysqli_num_rows($sanpham_query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <style>
        #logout{
            color: #000;
            position: absolute;
            right: 0;
            bottom: -30px;
            background: #fff;
            height: 30px;
            width: 140px;
            line-height: 30px;
            z-index: 2;
            text-align: center;
            display: none;
        }
        #hv:hover #logout{
            display: inline-block;
        }
    </style>    
    
</head>
<body>
    <!-- link1 https://previewcode.net/code/do-an-bai-tap-lon-xay-dung-website-ban-laptop-bang-php-mysql-pro -->
    <!-- link2 https://sharecode.vn/source-code/web-ban-may-tinh-full-code-php-bs4-adminweb-giao-dien-dep-19145.htm -->
    <div class="container-fluid">
        <div class="row header">
            <div class="col-xl-2 header-left">
                <p>Admin Laptop NQC</p>
            </div>
            <div class="col-xl-10 header-right">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <p id="hv" style="position: relative;">
                    <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 20px;padding-right: 10px;"></i>Nguyễn Quang Cường
                    <a href="./logout.php" id="logout">Đăng xuất</a>
                </p>
                
            </div>
        </div>
        
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-2 nav">
                <ul>
                    <li><a href="./home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                    <li><a href="./danhmuc.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Danh mục</a></li>
                    <li><a href="./sanpham.php"><i class="fa fa-database" aria-hidden="true"></i>Sản phẩm</a></li>
                    <li><a href="./binhluan.php"><i class="fa fa-pencil" aria-hidden="true"></i>Bình luận & đánh giá</a></li>
                    <li><a href="./khachhang.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Quản lý khách hàng</a></li>
                    <li><a href="./lienhe.php"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</a></li>
                    <li><a href="./donhang.php"><i class="fa fa-book" aria-hidden="true"></i>Đơn hàng</a></li>
                    <li><a href="./admin.php"><i class="fa fa-users" aria-hidden="true"></i>Quản lý admin</a></li>
                    <li><a href="./thongtin.php"><i class="fa fa-users" aria-hidden="true"></i>Thông tin sinh viên</a></li>
                </ul>
            </div>
            <div class="col-xl-10 content"> 
                <p>QUẢN TRỊ WEBSITE</p>
                <div class="row content-container">
                    <div class="col-xl-3 category xanh">
                        <div>
                            <h3><?php echo $donhang ?></h3>
                            <p>Đơn hàng</p>
                        </div>
                        <i class="fa fa-book" aria-hidden="true"></i> 
                        <a href="" class="more-info">More info<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-xl-3 category luc">
                        <div >
                            <h3><?php echo $danhmuc ?></h3>
                            <p>Danh mục sản phẩm</p>
                        </div>  
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <a href="sanpham.php" class="more-info">More info<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-xl-3 category vang">
                        <div>
                            <h3><?php echo $khachhang ?></h3>
                            <p>Khách hàng</p>
                        </div>
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        <a href="khachhang.php" class="more-info">More info<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-xl-3 category do">
                        <div>
                            <h3><?php echo $sanpham ?></h3>
                            <p>Sản phẩm</p>
                        </div>
                        <i class="fa fa-database" aria-hidden="true"></i>
                        <a href="sanpham.php" class="more-info">More info<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>