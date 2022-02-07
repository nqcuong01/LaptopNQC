<?php
    require("./dbconfig.php");
    if(isset($_GET['mahd'])){
        $mahd = $_GET['mahd'];
        $donhang_query = mysqli_query($links,"select * from hoadon where mahd=$mahd");
        $donhang = mysqli_fetch_assoc($donhang_query);
        // var_dump($donhang);
        $sql = "select tensp,anhsp,chitiethoadon.gia,chitiethoadon.soluong from sanpham,chitiethoadon where sanpham.masp=chitiethoadon.masp and mahd=$mahd";
        $product_query = mysqli_query($links,$sql);
        $product = mysqli_fetch_all($product_query);
        // var_dump($product);
    }
    if(isset($_POST['trangthai'])){
        $trangthai = $_POST['trangthai'];
        mysqli_query($links,"update hoadon set trangthai=$trangthai where mahd=$mahd");
        header('location: donhang.php');
    }


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý admin</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/admin1.css">
    <style>
        .panel{
            margin-left: 20px;
        }
        .panel-title{font-size: 20px;margin:10px 5px;}
        .panel-body p{margin: 5px;}
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
                <p><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 20px;padding-right: 10px;"></i>Nguyễn Quang Cường</p>
            </div>
        </div>
        
    </div>
    <div class="container-fluid">
        <div class="row bl">
            <div class="col-xl-2 nav">
                <ul>
                    <li><a href="./home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                    <li><a href="./danhmuc.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Danh mục</a></li>
                    <li><a href="./sanpham.php"><i class="fa fa-database" aria-hidden="true"></i>Sản phẩm</a></li>
                    <li><a href=""><i class="fa fa-pencil" aria-hidden="true"></i>Bài viết</a></li>
                    <li><a href="khachhang.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Quản lý khách hàng</a></li>
                    <li><a href="./lienhe.php"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</a></li>
                    <li><a href="./donhang.php"><i class="fa fa-book" aria-hidden="true"></i>Đơn hàng</a></li>
                    <li><a href="admin.php"><i class="fa fa-users" aria-hidden="true"></i>Quản lý admin</a></li>
                </ul>
            </div>
            <div class="col-xl-10 content"> 
                <p>Chi tiết đơn hàng</p>
                <div class="row content-container" style="color:black"> 
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Thông tin khách hàng</h3>
                        </div>
                        <div class="panel-body">
                            <p>Tên khách hàng: <strong><?php echo $donhang['tenkh'] ?></strong></p>
                            <p>Địa chỉ: <strong><?php echo $donhang['diachi'] ?></strong></p>
                            <p>Số điện thoại: <strong><?php echo $donhang['sdt'] ?></strong></p>
                            <p>Ngày đặt hàng: <strong><?php echo $donhang['ngaydat'] ?></strong></p>
                            <p>Ngày nhận hàng: <strong><?php echo $donhang['ngaynhan'] ?></strong></p>
                            <p>Trạng thái: 
                                <?php if($donhang['trangthai']==1){?>
                                Chưa xử lý        
                                <?php }else if($donhang['trangthai']==2){?>
                                Đã xử lý
                                <?php }else if($donhang['trangthai']==3){?>
                                Đang giao hàng
                                <?php }else if($donhang['trangthai']==4){?>
                                Đã hoàn thành
                                <?php }else {?>
                                Hủy đơn
                                <?php }?>
                            </p>
                        </div>
                    </div>
                </div>                
                <div class="row content-container" style="color:black;margin-top:30px;"> 
                    <div class="panel">
                        <h3 class="panel-title">Danh sách đơn hàng</h3>
                    </div>
                    <table class="table table-bordered table-hover table-responsive-md" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $tongtien = 0; 
                                foreach($product as $key=>$value):
                                $tongtien += $value[2]*$value[3];
                            ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $value[0]; ?></td>
                                <td><img src="./images/<?php echo $value[1]; ?>" alt="" width="100px"></td>
                                <td><?php echo $value[2]; ?></td>
                                <td><?php echo $value[3]; ?></td>
                                <td><?php echo $value[2]*$value[3]; ?></td>
                            </tr>
                            <?php endforeach ?>
                            <tr>
                                <td colspan="6">Tổng tiền: <strong><?php echo number_format($tongtien) ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="" method="post" class="form-inline" style="margin:0px 25px;">
                        <div class="form-group">
                            <select name="trangthai" id="" class="form-control" style="width:150px;font-size: 12px;">
                                <option value="1">Chưa xử lý</option>
                                <option value="2">Đã xử lý</option>
                                <option value="3">Đang giao hàng</option>
                                <option value="4">Đã hoàn thành</option>
                                <option value="99">Hủy đơn</option>
                            </select>
                            
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-size: 12px;">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>