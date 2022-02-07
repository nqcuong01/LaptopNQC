<?php 
    require("./dbconfig.php");
    if(isset($_REQUEST['masp']))
    {
        $masp = $_REQUEST["masp"];
        $sql = "select * from sanpham where masp='".$_REQUEST['masp']."'";
        $rows = mysqli_query($links,$sql);
        // if(mysqli_num_rows($result_set))
            // $row = mysqli_fetch_row($result_set);
        foreach($rows as $row)
        {
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <link rel="stylesheet" href="./css/product-details.css">
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <script src="./JQuery/jquery-3.6.0.min.js"></script>
    <script src="./js/laptopdell.js"></script>
    <script language="javascript">
        $(document).ready(function (e){
            $(".hv").hover( 
		        function (e) { $(".subnav").fadeIn(300)},
		        function (e) { $(".subnav").fadeOut(100)}
	        );
        });
    </script>
    <style>
        .bl p{padding: 0;margin: 0;margin-left: 100px;}
        .bl .name{font-weight: bold;}
        .bl .noidung{font-size: 14px;}
        .bl .thoigian{font-size: 12px;}
        .gui{
            position: absolute;
            bottom: 15px;
            right: 17%;
            background: #06c1d4;
            color: #fff;
            border: none;
            padding: 5px 13px;
            border-radius: 18px;
        }
    </style>
</head>
<body>
    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="row navigation">
                <div class="col-xl-2 center">
                    <!-- <img src="./images/lenovo.png" alt=""> -->
                    <a href="index.php" class="logo">Laptop NQC</a>
                </div>
                <div class="col-xl-1 hv center">
                    <a href="" class="menu">Laptop</a>
                        <div class="subnav">
                            <div class="row">
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="laptopdell.php">Dell</a></li>
                                        <li><a href="">Inspiron</a></li>
                                        <li><a href="">Vostro</a></li>
                                        <li><a href="">XPS</a></li>
                                        <li><a href="">G-Gaming Series</a></li>
                                        <li><a href="">Alienware</a></li>
                                        <li><a href="">Latitude</a></li>
                                        <li><a href="">Precision</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Lenovo</a></li>
                                        <li><a href="">Inspiron</a></li>
                                        <li><a href="">IdeaPad</a></li>
                                        <li><a href="">Legion</a></li>
                                        <li><a href="">ThinkBook</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Razer</a></li>
                                        <li><a href="">Blade Stealth</a></li>
                                        <li><a href="">Blade 15"</a></li>
                                        <li><a href="">Blade Pro 17"</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">HP</a></li>
                                        <li><a href="">Elitebook</a></li>
                                        <li><a href="">ZBook</a></li>
                                        <li><a href="">Envy</a></li>
                                        <li><a href="">Omen</a></li>
                                        <li><a href="">Pavilion</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Apple</a></li>
                                        <li><a href="">Macbook Pro 13</a></li>
                                        <li><a href="">Macbook Pro 15</a></li>
                                        <li><a href="">Macbook Pro 16</a></li>
                                        <li><a href="">Macbook Air</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <p>Tư vấn miễn phí</p>
                                    <a href="">039 456 1950</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Microsoft</a></li>
                                        <li><a href="">Surface Laptop</a></li>
                                        <li><a href="">Surface Book</a></li>
                                        <li><a href="">Surface Pro</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Asus</a></li>
                                        <li><a href="">ExpertBook</a></li>
                                        <li><a href="">Zenbook</a></li>
                                        <li><a href="">Vivobook</a></li>
                                        <li><a href="">TUF/ROG Gaming</a></li>
                                        <li><a href="">ProArt Studio</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">MSI</a></li>
                                        <li><a href="">GF Series</a></li>
                                        <li><a href="">Prestige</a></li>
                                        <li><a href="">Modern Series</a></li>
                                        <li><a href="">Alpha Series</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Acer</a></li>
                                        <li><a href="">Nitro</a></li>
                                        <li><a href="">Predator</a></li>
                                        <li><a href="">Swift</a></li>
                                        <li><a href="">Aspire</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">LG</a></li>
                                        <li><a href="">Gram</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2 ">
                                    <ul>
                                        <li><a href="">Theo nhu cầu</a></li>
                                        <li><a href="">Văn phòng</a></li>
                                        <li><a href="">Gaming</a></li>
                                        <li><a href="">Thiết kế đồ hoạ</a></li>
                                        <li><a href="">Đồ hoạ media</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-xl-1 center">
                    <a href="" class="menu">PC</a>
                </div>
                <div class="col-xl-1 center">
                    <a href="" class="menu">Phụ kiện</a>
                </div>
                <div class="col-xl-4 search center">
                    <input type="text" name="" id="" placeholder="Tìm kiếm">
                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
                <div class="col-xl-1 center icon">
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                </div>
                <div class="col-xl-1 center icon">
                    <a href="./cart.php" style="color: black;"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                </div>
                <div class="col-xl-1 center icon">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>
            </div>
        </div>    
    </div>

    <!-- banner -->
    <div id="content">
        <div class="container">
            <div class="row">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Laptop NQC</a></li>
                    <li><a href="">></a></li>
                    <li><a href="">Dell</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <img src="./images/<?php echo $row["anhsp"];?>" alt="" id="img">
                    <div class="row">
                        <div class="col-xl-3">
                            <img src="./images/<?php echo $row["anhsp"];?>" alt="" class="img-item">
                        </div>
                        <!-- <div class="col-xl-3">
                            <img src="./images/p-2.jpg" alt="" class="img-item">
                        </div>
                        <div class="col-xl-3">
                            <img src="./images/p-3.jpg" alt="" class="img-item">
                        </div>
                        <div class="col-xl-3">
                            <img src="./images/p-4.jpg" alt="" class="img-item">
                        </div>       -->
                    </div>
                </div>
                <div class="col-xl-6">
                    <h1><?php echo $row["tensp"]; ?></h1>
                    <h4>Giá: <?php echo number_format($row["giakm"],0,',','.');?> VNĐ</h4>
                    <a href="./xuly_cart.php?masp=<?php echo $row["masp"];?>" class="btn">Thêm vào giỏ hàng</a>

                    <div>SKU: <?php echo $row["masp"]; ?></div>
                    <!-- MPN: X515EA-EJ058T |  -->
                    <?php
                            }
                        }
                        
                    ?>
                    <div class="list">
                        <ul>
                            <li><strong>Vi xử lý</strong>: Intel Core i5 1135G7, 4 nhân/ 8 luồng</li>
                            <li><strong>Màn hình</strong>: 15.6" FHD TN (1920 x 1080) chống chói</li>
                            <li><strong>Độ phủ màu</strong>: 45% NTSC</li>
                            <li><strong>RAM</strong>: 8GB DDR4 bus 3200MHz (4GB liền trên mainboard - Nâng cấp tối đa 12GB)</li>
                            <li><strong>Card đồ họa</strong>: Intel Iris Xe</li>
                            <li><strong>Lưu trữ</strong>: 512GB m.2 NVMe (Nâng cấp tối đa 2TB) + 1 khay 2.5" trống</li>
                            <li><strong>Pin</strong>: 37Wh</li>
                            <li><strong>Kết nối chính</strong>: 1 x USB-C 3.2 Gen 1, 1 x USB-A 3.2 Gen 1, 1 x USB-A 2.0, 1 x HDMI1.4, 1 x 3.5mm, 1 x microSD</li>
                            <li><strong>Cân nặng</strong>: 1.8kg</li>
                            <li><strong>Hệ điều hành</strong>: Windows 10 Home SL bản quyền</li>
                        </ul>
                    </div>
                    <a href="" class="view-more-list">Xem thêm cấu hình chi tiết</a>    
                </div>
            </div>
            <hr>
            <h2>Bình luận</h2>
            <div class="row">
                <div class="col-12">
                    <?php $today = date("Y-m-d"); ?>
                    <form action="xulybinhluan.php" style="margin-left: 30px;position: relative;" >
                        <p>Bình luận của bạn</p>
                        <input type="hidden" name="masp" value="<?=$masp?>">
                        <p><input type="text" name="ten" id="" placeholder="Họ tên (Bắt buộc)" required></p>
                        <textarea name="noidung" id="" cols="100%" rows="3" placeholder="Mời bạn để lại bình luận" required></textarea>
                        <input type="hidden" name="thoigian" value="<?=$today?>">
                        <input type="submit" name="binhluan" value="Gửi" class="gui">
                    </form>
                    <?php
                        $sql2 = "select * from binhluan where masp='".$_REQUEST['masp']."'";
                        $bl_query = mysqli_query($links,$sql2);
                        $bl = mysqli_fetch_all($bl_query,MYSQLI_ASSOC);
                        foreach ($bl as $value) {
                    ?>
                    <div class="bl">    
                        <p class="name"><?=$value["ten"]?></p>
                        <p class="noidung"><?=$value["noidung"]?></p>
                        <p class="thoigian"><strong>Trả lời </strong><?=$value["thoigian"]?></p>
                        <hr>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <h2>Các sản phẩm khác</h2>
            <div class="product-container" style="margin-bottom: 48px;">
                <div class="row">
                    <div class="col-xl-2dot4 border product">
                        <div class="col-xl-12 product-img">
                            <a href=""><img src="./images/a-1-1.jpg" alt="" class="items-img"></a>
                        </div>
                        <div class="col-xl-12 product-information">
                            <a href="" class="product-name">Dell XPS 13 9310</a>
                            <div class="product-id">SKU: XPS931007NU</div>
                            <div class="product-price">29.990.000 ₫</div>
                            <p class="product-km">Quà tặng kèm</p>    
                        </div>
                    </div>
                    <div class="col-xl-2dot4 border product">
                        <div class="col-xl-12 product-img">
                            <a href=""><img src="./images/a-1-2.jpg" alt="" class="items-img"></a>
                        </div>
                        <div class="col-xl-12 product-information">
                            <a href="" class="product-name">Dell XPS 13 9305</a>
                            <div class="product-id">SKU: XPS930504NS</div>
                            <div class="product-price-km">39.990.000 ₫</div>
                            <div class="product-price">34.990.000 ₫</div>
                            <p class="product-km">Quà tặng kèm</p>    
                        </div>
                    </div>
                    <div class="col-xl-2dot4 border product">
                        <div class="col-xl-12 product-img">
                            <a href=""><img src="./images/a-1-3.jpg" alt="" class="items-img"></a>
                        </div>
                        <div class="col-xl-12 product-information">
                            <a href="" class="product-name">Apple Macbook Air (M1, Late 2020 - Apple Silicon)</a>   
                            <div class="product-id">SKU: MacbookAir13L202001NU</div>
                            <div class="product-price">23.990.000 ₫</div>
                            <p class="product-km">Quà tặng kèm</p>    
                        </div>
                    </div>
                    <div class="col-xl-2dot4 border product">
                        <div class="col-xl-12 product-img">
                            <a href=""><img src="./images/a-1-4.jpg" alt="" class="items-img"></a>
                        </div>
                        <div class="col-xl-12 product-information">
                            <a href="" class="product-name">Acer Predator Helios 300 2021</a>
                            <div class="product-id">SKU: Helios3152101CF</div>
                            <div class="product-price">33.990.000 ₫</div>
                            <p class="product-km">Quà tặng kèm</p>    
                        </div>
                    </div>
                    <div class="col-xl-2dot4 border product">
                        <div class="col-xl-12 product-img">
                            <a href=""><img src="./images/a-1-5.jpg" alt="" class="items-img"></a>
                        </div>
                        <div class="col-xl-12 product-information">
                            <a href="" class="product-name">Dell XPS 13 9300</a>
                            <div class="product-id">SKU: XPS930008NU</div>
                            <div class="product-price">29.990.000 ₫</div>
                            <p class="product-km">Quà tặng kèm</p>    
                        </div>
                    </div>
                </div>
        </div>
    </div>




    <!-- footer -->
    <div id="footer">
        <div class="container">
            <div class="row footer-top">
                <div class="col-xl-8">
                    <h2>LAPTOP NQC</h2>
                </div>
                <div class="col-xl-4 footer-top-right">
                    <div>
                        <div>Hotline</div>
                        <a href="">039.456.1950</a>
                    </div>
                    <div class="item">
                        <a href="https://youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="https://facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="https://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="row footer-content">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-3 link_list-items">
                            <h3>Sản phẩm và dịch vụ</h3>
                            <a href="" class="block">Laptop Dell</a>
                            <a href="" class="block">Laptop HP</a>
                            <a href="" class="block">Laptop ThinkPad</a>
                            <a href="" class="block">Laptop Lenovo</a>
                        </div>
                        <div class="col-xl-3 link_list-itemss">
                            <a href="" class="block">Alienware</a>
                            <a href="" class="block">Macbook</a>
                            <a href="" class="block">Laptop Razer</a>
                            <a href="" class="block">Phụ kiện</a>
                        </div>
                        <div class="col-xl-3 link_list-items">
                            <h3>Chính sách</h3>
                            <a href="" class="block">Bảo hành</a>
                            <a href="" class="block">Vận chuyển</a>
                            <a href="" class="block">Thanh toán</a>
                            <a href="" class="block">Liên hệ</a>
                        </div>
                        <div class="col-xl-3 link_list-items">
                            <h3>Về Laptop NQC</h3>
                            <a href="" class="block">Lịch sử thành lập</a>
                            <a href="" class="block">Giá trị cốt lõi</a>
                            <a href="" class="block">Tầm nhìn, Sứ mệnh</a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4">
                    <h3>Hệ thống cửa hàng</h3>
                    <h3 class="city">Hà nội:</h3>
                    <div>Khoa CNTT Trường đại học Điện Lực</div>
                    <div>235 Hoàng Quốc Việt, Cổ Nhuế, Nam Từ Niêm, Hà Nội</div>
                    <a href="" class="block map">Chỉ đường</a>
                </div>
            </div>
            <hr>
            <p class="Copyright">Bản quyền thuộc về Nguyễn Quang Cường D14CNPM6</p>
        </div>
    </div>


    <script>
        var ProductImg = document.getElementById("img");
        var SmallImg = document.getElementsByClassName("img-item");

        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()    
        {
            ProductImg.src = SmallImg[1].src;
        }   
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }

    </script>
</body>
</html>