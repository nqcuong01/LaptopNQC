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
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/xulydonhang.css">
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/admin1.css"> -->
    <!-- <style>
        .panel{
            margin-left: 20px;
        }
        .panel-title{font-size: 20px;margin:10px 5px;}
        .panel-body p{margin: 5px;}
    </style> -->
</head>
        <body onload="window.print();">
        <div id="page" class="page">
    <div class="header">
        <!-- <div class="logo"><img src="../images/logo.jpg"/></div> -->
        <div class="company">C.Ty TNHH Laptop NQC</div>
    </div>
  <br/>
  <div class="title">
        HÓA ĐƠN THANH TOÁN
        <br/>
        -------oOo-------
  </div>
  <br/>
  <br/>
  <div class="logo">
    <p>Tên khách hàng: <strong><?php echo $donhang['tenkh'] ?></strong></p>
    <p>Địa chỉ: <strong><?php echo $donhang['diachi'] ?></strong></p> 
    <p>Số điện thoại: <strong><?php echo $donhang['sdt'] ?></strong></p> 
     </div>
  <br/>
  <br/>
 
  <table class="TableData">
  <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
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
                                <td><?php echo $value[2]; ?> đ</td>
                                <td><?php echo $value[3]; ?></td>
                                <td><?php echo $value[2]*$value[3]; ?> đ</td>
                            </tr>
                            <?php endforeach ?>
                            <tr>
      <td colspan="4" class="tong">Tổng cộng</td>
      <td class="cotSo"><?php echo number_format(($tongtien),0,",",".")?> đ</td>
    </tr>
                        </tbody>
  </table>
  <div class="footer-left"> Hà Nôi, ngày 16 tháng 12 năm 2021<br/>
    Khách hàng </div>
  <div class="footer-right"> Hà Nôi, ngày 16 tháng 12 năm 2021<br/>
    GIÁM ĐỐC KINH DOANH <br/> <b>TRẦN ĐÌNH MINH VƯƠNG</b> </div>
</div>
  
</body>
</html>