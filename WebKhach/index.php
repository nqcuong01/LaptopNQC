<?php
    require("./dbconfig.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop NQC</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <script src="./JQuery/jquery-3.6.0.min.js"></script>
    <script src="./js/index.js"></script>
    <script language="javascript">
        $(document).ready(function (e){
            $(".hv").hover( 
		        function (e) { $(".subnav").fadeIn(200)},
		        function (e) { $(".subnav").fadeOut(100)}
	        );
            $(".hv2").hover( 
		        function (e) { $(".login").fadeIn(200)},
		        function (e) { $(".login").fadeOut(100)}
	        );
        });
    </script>
    <style>
        .product-price-km{
            text-decoration: line-through;
            font-size: 13px;
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
                    <a href="" class="a">Laptop</a>
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
                <script src="./js/modal.js"></script>
                <div class="col-xl-1 center">
                    <a href="" class="a">PC</a>
                </div>
                <div class="col-xl-1 center">
                    <a href="" class="a">Phụ kiện</a>
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
                <div class="col-xl-1 hv2 center icon">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <div class="login">
                        <div id="login" onclick="abc();">Đăng nhập</div>
                        <div id="register" onclick="abc2();">Đăng kí</div>
                    </div>
                    <div id="modal-login" class="modal1">
                        <div class="modal-content">
                            <p class="modal-title">
                                <span style="border-bottom: 3px solid #06c1d4;;" onclick="abc();">Đăng nhập</span>  
                                <span onclick="abc2();">Đăng kí</span>  
                            </p>
                            <form method="post" action="khachhang.php">
                                <div class="form-group">
                                    <label for="sdt">Số điện thoại</label>
                                    <input type="text" class="form-control" name="sdt" id="sdt" placeholder="Số điện thoại đăng nhập">
                                </div>
                                <div class="form-group">
                                    <label for="sdt">Mật khẩu</label>
                                    <input type="password" class="form-control" name="sdt" id="sdt" placeholder="Nhập mật khẩu">
                                </div>
                                <button name="btn-login" class="btn btn-primary btn-block">Đăng nhập</button>
                            </form>
                        </div>
                    </div>
                    <div id="modal-register" class="modal1">
                        <div class="modal-content">
                            <p class="modal-title">
                                <span onclick="abc();">Đăng nhập</span>  
                                <span style="border-bottom: 3px solid #06c1d4;" onclick="abc2();">Đăng kí</span>  
                            </p>
                            <form method="post" action="khachhang.php">
                                <div class="form-group">
                                    <label for="sdt">Họ tên</label>
                                    <input type="text" class="form-control" name="sdt" id="sdt" placeholder="Nhập họ tên">
                                </div>
                                <div class="form-group">
                                    <label for="sdt">Số điện thoại</label>
                                    <input type="text" class="form-control" name="sdt" id="sdt" placeholder="Số điện thoại đăng nhập">
                                </div>
                                <div class="form-group">
                                    <label for="sdt">Mật khẩu</label>
                                    <input type="password" class="form-control" name="sdt" id="sdt" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="sdt">Địa chỉ</label>
                                    <input type="text" class="form-control" name="sdt" id="sdt" placeholder="Nhập địa chỉ">
                                </div>
                                <button name="btn-register" class="btn btn-primary btn-block">Đăng kí</button>
                            </form>
                        </div>
                    </div>
                    <script src="./js/modal.js"></script>
                </div>
            </div>
        </div>    
    </div>
        <!-- Slider -->
    <div id="slider">
        <div class="container">
            <div class="row slider-content">
                <div class="col-xl-8 col-md-8">
                    <img src="./images/slider1.jpg" alt="" id="anh_slider">
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="row">
                        <div class="col-xl-12 title col-md-12">
                            <a href="">Back2School Dream Set: Bùng nổ Siêu khuyến mại mùa Back To School tại ThinkPro</a>
                            
                        </div>
                        <div class="col-xl-12 title col-md-12">
                            <a href="">Sắm Nitro 5 đỉnh, nhận code game khủng!</a>
                        </div>
                        <div class="col-xl-12 title col-md-12">
                            <a href="">Đánh giá chi tiết Acer Predator Helios 300 (2021): Dáng vẻ cũ, sức mạnh mới!</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div id="content">
        <div class="container">     
            <h2>Giảm giá sốc</h2>
            <div class="product-container">
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
            <div class="xemthem">
                <a href="" class="view-more">Xem tất cả</a>
            </div>
            <h2>Máy tính sách tay</h2>
            <div class="row fillter-home">
                <div class="col-xl-12 fillter-home-content">
                    <div class="title">Thương hiệu</div>
                    <img src="./images/lenovo.png" alt="">
                    <img src="./images/razer.png" alt="">
                    <img src="./images/dell.png" alt="">
                    <img src="./images/asus.png" alt="">
                    <img src="./images/hp.png" alt="">
                    <img src="./images/microsoft.png" alt="">
                    <img src="./images/apple.png" alt="">
                    <img src="./images/5f6c4ee7ed9fd_1600933607.png" alt="">
                </div>
            </div>
            <div class="row fillter-home">
                <div class="col-xl-12 fillter-home-content">
                    <div class="title">Khoảng giá</div>
                    <label for="">Trên 50 triệu</label>
                    <label for="">40 - 50 triệu</label>
                    <label for="">30 - 40 triệu</label>
                    <label for="">20 - 30 triệu</label>
                    <label for="">15 - 20 triệu</label>
                    <label for="">10 - 15 triệu</label>
                    <label for="">Dưới 10 triệu</label>
                </div>
            </div>
            <div class="product-container">
                <div class="row ">
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-1.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Acer Swift 5 14 (Chính hãng)</a>
                                <div class="product-id">SKU: Swift51402CF</div>
                                <div class="product-price">26.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>
                                <!-- <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a> -->
                                   
                            </div>
                        </div>

                        
                            <?php
                                $sql = "select * from sanpham";
                                $result_set = mysqli_query($links,$sql);
                                if(mysqli_num_rows($result_set))
                                {
                                    while($row = mysqli_fetch_row($result_set))
                                    {
                                        ?>
                                        <div class="col-xl-2dot4 border product">
                                            <div class="col-xl-12 product-img">
                                                <a href="./product-details.php?masp=<?php echo $row[0];?>"><img src="./images/<?php echo $row[2] ?>" alt="" class="items-img"></a>
                                            </div>
                                            <div class="col-xl-12 product-information">
                                                <a href="./product-details.php?masp=<?php echo $row[0];?>" class="product-name"><?php echo $row[1] ?></a>
                                                <div class="product-id">SKU: <?php echo $row[0] ?></div>
                                                <div class="product-price"><?php echo number_format($row[4],0,',','.'); ?> ₫</div>
                                                <div class="product-price-km"><?php echo number_format($row[3],0,',','.'); ?> ₫</div>                                     
                                                <p class="product-km">Quà tặng kèm</p>    
                                            </div>
                                        </div>

                            <?php
                                    }
                                }
                            ?>
                            
                    
                        
                        <!-- <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-2.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">AVITA Liber V14 Intel</a>
                                <div class="product-id">SKU: LiberV14i01CF</div>
                                <div class="product-price">21.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-3.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Dell Inspiron 15 5502</a>   
                                <div class="product-id">SKU: Inspiron550203NS</div>
                                <div class="product-price">18.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-4.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Asus ZenBook 14 Q407iq</a>
                                <div class="product-id">SKU: ZenbookQ407iq01NS</div>
                                <div class="product-price">18.490.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-5.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Dell Inspiron 15 5505</a>
                                <div class="product-id">SKU: Inspiron550502NS</div>
                                <div class="product-price">18.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-3-1.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Lenovo IdeaPad 5 14 (Chính hãng - Intel Gen 11)</a>
                                <div class="product-id">SKU: Ideapad51401CF</div>
                                <div class="product-price">17.990.000 ₫</div>
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
                                <div class="product-price">34.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-3-3.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Lenovo IdeaPad 3 14 (AMD Ryzen 5000)</a>   
                                <div class="product-id">SKU: IDP314R500001CF</div>
                                <div class="product-price">14.290.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-3-4s.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name"> Lenovo IdeaPad 3 14 Intel (Nhập khẩu)</a>
                                <div class="product-id">SKU: ideapad314Ni01NF</div>
                                <div class="product-price">14.490.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-2dot4 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-3-5.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">ASUS ZenBook Duo 14 UX482</a>
                                <div class="product-id">SKU: ZenbookUX48201CF</div>
                                <div class="product-price">33.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div> -->
                    
                </div>
                <!-- <div class="row">
                    
                </div> -->
                <div class="xemthem">
                <a href="" class="view-more">Xem tất cả</a>
                </div>
            </div>
        </div>

    </div>
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
                            <a href="./lienhe.php" class="block">Liên hệ</a>
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
        show_slider();
    </script>
</body>
</html>