<?php
    session_start();
    if(isset($_SESSION["cart"])==false || count($_SESSION["cart"])==0)
    {
?>
    <div class="pro">
        <p>Bạn chưa có sản phẩm nào trong giỏ</p>
        <a href="./index.php">Trang chủ</a>
    </div>
<?php
    die();
    }
    $cart = (isset($_SESSION['cart']))? $_SESSION['cart']: [];
    // echo "<pre>";
    // print_r($cart);
    if(isset($_GET['act']))
    {
        echo "<script>alert('Đặt hàng thành công!')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./css/index.css"> -->
    <link rel="stylesheet" href="./css/lienhe.css">
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
        .count{
            position: absolute;
            right: 23px;
            top: 12px;
            display: block;
            background: #06c1d4;
            border-radius: 10px;
            height: 20px;
            width: 20px;
            font-size: 14px;
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
                <div class="col-xl-1 center icon" >
                    <?php 
                        $x = count($cart);
                        if($x>0) 
                        echo "<span class=\"count\">$x</span>"; 
                    ?>
                    
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
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
            <!-- <h3>ok</h3> -->
            <h2 style="margin-top: 50px;">Giỏ Hàng Của Bạn</h2>
            <table class="table table-bordered table-hover table-responsive-md">
                <thead>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Chức năng</th>
                </thead>
                <form action="./xuly_cart.php" method="get">
                <tbody>
                    <?php 
                        $i=1;$tongtien=0;
                        foreach($cart as $key=>$value):
                           $tongtien += $value["gia"]*$value["soluong"];
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $value['tensp']; ?></td>
                        <td><img src="./images/<?php echo $value['anhsp']; ?>" alt="" width="100px"></td>
                        <td><?php echo number_format($value['gia']) ; ?></td>
                        <td>
                            <input type="hidden" name="masp_<?php echo $i; ?>" value="<?php echo $value['masp']; ?>">
                            <input type="number" name="soluong_<?php echo $i; ?>" id="" value="<?php echo $value['soluong']; ?>">
                            <input type="hidden" name="sl" value="<?php echo $i;$i++?>">
                        </td>
                        <td><?php echo number_format($value["gia"]*$value["soluong"])?></td>
                        <td><a href="./xuly_cart.php?masp=<?php echo $value['masp']; ?>&action=delete" class="btn btn-danger">Xóa</a></td>
                    </tr>
                    <?php endforeach?>
                    
                    <tr>
                        <td colspan="7" align="center">Tổng tiền cần thanh toán : <?php echo number_format($tongtien)?> VNĐ</td>
                    </tr><tr>
                        <td colspan="7" align="center">
                            <input type="hidden" name="action" value="update">
                            <button type="submit" class="btn btn-primary">Cập nhật giỏ hàng</button>
                        </td>
                    </tr>
                </tbody>
                </form>
            </table>


            <h2 style="margin-top: 100px;">Thông tin khách hàng</h2>
            <script>
				function kt()
				{
					hoten = document.getElementById("hoten");
					diachi = document.getElementById("diachi");
					dienthoai = document.getElementById("dienthoai");
					if(hoten.value=="" || diachi.value=="" ||dienthoai.value=="")
					{
						alert("Chưa nhập đủ thông tin");
						return false;
					}
				}
			</script>
            <form action="./checkout.php" method="post" class="aa" onSubmit="return kt();">
                <div class="form-group">
                    <label for="">Họ tên</label>
                    <input type="text" name="tHoten" id="hoten" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="tDiachi" id="diachi" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label><br>
                    <input type="text" name="tSdt" id="dienthoai" class="form-control">
                </div>
                <div class="form-group">
                    <input type="hidden" name="tNgaydat" id="" class="form-control" value="<?php echo date("Y-m-d") ?>">
                </div>
                <div class="form-group">
                    <label for="">Ngày nhận hàng</label><br>
                    <input type="text" name="tNgaynhan" id="" class="form-control">
                </div>

                
                <?php 
                    $j=1;
                    foreach($cart as $key=>$value):
                ?>
                    
                <input type="hidden" name="masp_<?php echo $j; ?>" value="<?php echo $value['masp']; ?>">
                <input type="hidden" name="soluong_<?php echo $j; ?>" value="<?php echo $value['soluong']; ?>">
                <input type="hidden" name="gia_<?php echo $j; ?>" value="<?php echo $value['gia']; ?>">
                <input type="hidden" name="sl" value="<?php echo $j;$j++?>">

                <?php endforeach ?>    
                



                <div class="form-group">
                    <input name="dathang" type="submit" value="Đặt hàng" class="btn btn-primary btn-block">
                </div>
            </form>
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

</body>
</html>