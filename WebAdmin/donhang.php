<!-- Xử lý đơn hàng -->
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
    <title>Quản lý đơn hàng</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/admin1.css">
    <style>
        .search{
            background: #fff;
            margin: 10px 20px;
            padding: 10px 30px;
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
                <p><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 20px;padding-right: 10px;"></i>Nguyễn Quang Cường</p>
            </div>
        </div>
        
    </div>
    <div class="container-fluid">
        <div class="row bl" style="background: #000">
            <div class="col-xl-2 nav">  
                <ul>
                    <li><a href="./home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                    <li><a href="./danhmuc.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Danh mục</a></li>
                    <li><a href="./sanpham.php"><i class="fa fa-database" aria-hidden="true"></i>Sản phẩm</a></li>
                    <li><a href=""><i class="fa fa-pencil" aria-hidden="true"></i>Bài viết</a></li>
                    <li><a href="khachhang.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Quản lý khách hàng</a></li>
                    <li><a href="./lienhe.php"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</a></li>
                    <li><a href="./donhang.php"><i class="fa fa-book" aria-hidden="true"></i>Đơn hàng</a></li>
                    <li><a href="./admin.php"><i class="fa fa-users" aria-hidden="true"></i>Quản lý admin</a></li>
                </ul>
            </div>
            <div class="col-xl-10 content"> 
                <p>Danh sách đơn hàng</p>
                <?php
                        $tukhoa = NULL;
                        $trangthai=NULL;
                        if(isset($_GET["tTukhoa"]))
                            $tukhoa = $_GET["tTukhoa"];
                        if(isset($_GET["tLoctheotrangthai"]))
                            $trangthai = $_GET["tLoctheotrangthai"];
                        $sql = "select * from hoadon where 1";
                        if($tukhoa!=NULL)
                            $sql .= " and (tenkh='$tukhoa' or ngaydat = '$tukhoa')";
                        if($trangthai!=NULL && $trangthai!=0)
                            $sql .= " and trangthai=$trangthai";
                        $sql .= " order by trangthai";
                    ?>
                <div class="search">
                    <form method="get" style="margin-top: 0px;">
                        <p style="font-size: 16px;">Bộ lọc tìm kiếm</p>
                        <input type="text" name="tTukhoa" id="" placeholder="Nhập từ khóa tìm kiếm">
                        <select name="tLoctheotrangthai" id="tLoctheotrangthai">
                            <option value="0" >--Lọc theo trạng thái--</option>
                            <option value="1">Chưa xử lý</option>
                            <option value="2">Đã xử lý</option>
                            <option value="3">Đang giao hàng</option>
                            <option value="4">Đã hoàn thành</option>
                            <option value="99">Hủy đơn</option>
                        </select>
                        <br><br>
                        <div>
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                            <input type="reset" value="Làm mới">
                        </div>
                    </form> 
                </div>
                
                <div class="row content-container">
                    <table class="table table-bordered table-hover table-responsive-md" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th>Mã HĐ</th>
                                <th>Tên khách hàng</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Ngày đặt</th>
                                <th>Ngày nhận</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                
                                
                                $result_set = mysqli_query($links,$sql);
                                if(mysqli_num_rows($result_set))
                                {
                                    while($row = mysqli_fetch_row($result_set))
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo $row[0]; ?></td>
                                                <td><?php echo $row[1]; ?></td>
                                                <td><?php echo $row[2]; ?></td>
                                                <td><?php echo $row[3]; ?></td>
                                                <td><?php echo $row[4]; ?></td>
                                                <td><?php echo $row[5]; ?></td>
                                                <?php
                                                    $sql2 = "select * from chitiethoadon where mahd=$row[0]";
                                                    $cthd_query = mysqli_query($links,$sql2);
                                                    $cthd = mysqli_fetch_all($cthd_query,MYSQLI_ASSOC);
                                                    $tong = 0;
                                                    foreach($cthd as $tt)
                                                    {
                                                        $tong += $tt["gia"]*$tt["soluong"];   
                                                    }
                                                ?>
                                                <td><?=number_format($tong)?></td>
                                                <td>
                                                    <?php
                                                        if($row[6]==1)
                                                            echo "<span style=\"color: #fff;background:red;padding:5px;\">Chưa xử lý</span>";
                                                        else if($row[6]==2) echo "<span style=\"color: #fff;background:green;padding:5px;\">Đã xử lý</span>";
                                                        else if($row[6]==3) echo "<span style=\"color: #fff;background:#ffc310;padding:5px;\">Đang giao hàng</span>";
                                                        else if($row[6]==4) echo "<span style=\"color: #fff;background:#20c2ee;padding:5px;\">Đã hoàn thành</span>";
                                                        else echo "<span style=\"color: #fff;background:#000;padding:5px;\">Hủy đơn</span>";
                                                    ?>
                                                </td>
                                                <td>
                                                <a href="./ctdonhang.php?mahd=<?php echo $row[0]; ?>" class="xx xanh update" style="color: #000;"><i class="fa fa-pencil" aria-hidden="true"></i>Chi tiết</a>
                                                <a href="./xulydonhang.php?mahd=<?php echo $row[0]; ?>" class="xx xanh update" style="color: #000;"><i class="fa fa-file-excel" aria-hidden="true"></i>Xuất file</a> 
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                    <td colspan="7">No Data Found !</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                        </tbody>
                    </table>
                    
                </div>

            </div>
        </div>
    </div>

</body>
</html>