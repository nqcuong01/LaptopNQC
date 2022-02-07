<?php
    require("./dbconfig.php");
    $sql = "select * from sanpham where danhmucid = 1 ";
    // echo $sql;
    $values = array();
    if(isset($_REQUEST["tKhoanggia"]))
    {
        
        $values = $_REQUEST["tKhoanggia"];
        // var_dump($values);
        // $sql ="SELECT * FROM tbSanpham WHERE 1 " ;
        
            /*. " AND " . " (price <10) OR (price BETWEEN 10 AND 20) 
                OR (price BETWEEN 20 AND 30)OR (price >30) ";*/
        $gia = "";
        foreach($values as $value)
        {
            if($gia!="")//từ khoảng giá thứ 2 trở đi thì thêm OR ở đầu
                $gia .= " OR ";
            //xử lý ghép thêm khoảng giá	
            if($value=="0")
                $gia .= " (gia<10000000) ";
            else if($value=="1")
                $gia .= " (gia between 10000000 and 15000000) ";
            else if($value=="2")
                $gia .= " (gia between 15000000 and 20000000) ";
            else if($value=="3")
                $gia .= " (gia between 20000000 and 30000000) ";
            else if($value=="4")
                $gia .= " (gia between 30000000 and 40000000) ";
            else if($value=="5")
                $gia .= " (gia between 40000000 and 50000000) ";
            else if($value=="6")
                $gia .= " (gia>50000000) ";
            //echo "<p>$gia</p>";
        }
        if($gia!="")
            $sql = $sql . " AND (" . $gia . ")";
        // echo "<p> $sql </p>";
    }
    $result_set = mysqli_query($links,$sql);
    $count = mysqli_num_rows($result_set);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dell</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/laptopdell.css">
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <script src="./JQuery/jquery-3.6.0.min.js"></script>
    <script src="./js/laptopdell.js"></script>
    <script language="javascript">
        $(document).ready(function (e){
            $(".hv").hover( 
		        function (e) { $(".subnav").fadeIn(500)},
		        function (e) { $(".subnav").fadeOut(100)}
	        );
        });
    </script>
    <script language="javascript">
        // function tkgia()
        // {
        //     var n = document.getElementsByName("tKhoanggia");
        //     for(i=0;i<n.length;i++)
        //     {
        //         if(document.getElementsByName("tKhoanggia")[i].checked==true)
        //         {
        //             var x = document.getElementsByName("tKhoanggia")[i].value;
        //             window.location.href = 'laptopdell.php?tKhoanggia='+x;
        //         }
        //     }
        // }
        function click_gia()
        {
            document.getElementById("f1").submit();        
        }
        function show()
        {
            list1 = document.getElementById("Catalogue-list-1");
            item1 = document.getElementById("item-1");
            item2 = document.getElementById("item-2");
            item1.style.display = "none";
            item2.style.display = "block";
            list1.style.display = "block";
        }
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
                                        <li><a href="laptopdell.html">Dell</a></li>
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
                <div class="col-xl-1 center icon">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>
            </div>
        </div>    
    </div>

    <!-- banner -->
    <div id="banner">
        <div class="container">
            <div class="row">
                <ul class="breadcrumbs">
                    <li><a href="index.php">Laptop NQC</a></li>
                    <li><a href="">></a></li>
                    <li><a href="">Dell</a></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xl-6 thuonghieu">
                    <h2>Dell</h2>
                    <div>Dell là thương hiệu có quá trình phát triển lâu dài và bền bỉ trong ngành công nghiệp máy tính. Dell cung cấp nhiều dòng laptop chất lượng, cao cấp như XPS, Precision, Latitude và nổi bật với G-Series Gaming và Alienware hàng đầu dành cho game thủ.</div>
                </div>
                <div class="col-xl-6 banner-img">
                    <img src="./images/banner1.png" alt="">
                </div>
            </div>  
            
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row tab">
                <div class="col-xl-12">
                    <a href="">Laptop<span><?=$count?></span></a>
                    <a href="">PC<span>2</span></a>
                    <a href="">Phụ kiện<span>4</span></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-2dot4" style="font-size: 14px;">
                    <strong>1 - 24</strong> 
                    trên 79 sản phẩm
                </div>
                <div class="col-xl-9dot6">
                    <strong class="right-16">Sắp xếp theo:</strong>
                    <a href="" class="right-16">Giá tăng dần</a>
                    <a href="" class="right-16">Giá giảm dần</a>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-2dot4 content-left">
                    <div class="catalogue">
                        <div class="catalogue-content">
                            <span>Áp dụng bộ lọc</span>
                            <a href="" style="font-size: 14px;">Bỏ lọc</a>
                        </div>
                    </div>
                    <div class="catalogue">
                        <div class="catalogue-content">
                            <span>Thương hiệu nhánh</span>
                            <i class="fa fa-plus" aria-hidden="true" id="item-0" onclick="show_catalogue_0();"></i>
                            <i class="fa fa-minus" aria-hidden="true" id="item-00" onclick="hide_catalogue_0();"></i>
                        </div>
                        
                        <div id="Catalogue-list-0" class="catalogue-list">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Latitude</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>XPS</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Precision</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Inspiron</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Gaming G Series</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Alienware</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Vostro</span>
                            </label>
                        </div>
                    </div>
                    <div class="catalogue">
                        <div class="catalogue-content">
                            <span>Khoảng giá</span>
                            <i class="fa fa-plus" aria-hidden="true" id="item-1" onclick="show_catalogue_1();"></i>
                            <i class="fa fa-minus" aria-hidden="true" id="item-2" onclick="hide_catalogue_1();"></i>
                        </div>
                        
                        <div id="Catalogue-list-1" class="catalogue-list">
                            <form name="f1" id="f1" method="get">
                                <label for="">
                                    <input type="checkbox" name="tKhoanggia[]" id="" <?=in_array("6",$values)?"checked":""?> value="6" onclick="click_gia();">
                                    <span>Trên 50 triệu</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="tKhoanggia[]" id="" <?=in_array("5",$values)?"checked":""?> value="5" onclick="click_gia();">
                                    <span>40 - 50 triệu</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="tKhoanggia[]" id="" <?=in_array("4",$values)?"checked":""?> value="4" onclick="click_gia();">
                                    <span>30 - 40 triệu</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="tKhoanggia[]" id="" <?=in_array("3",$values)?"checked":""?> value="3" onclick="click_gia();">
                                    <span>20 - 30 triệu</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="tKhoanggia[]" id="" <?=in_array("2",$values)?"checked":""?> value="2" onclick="click_gia();">
                                    <span>15 - 20 triệu</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="tKhoanggia[]" id="" <?=in_array("1",$values)?"checked":""?> value="1" onclick="click_gia();">
                                    <span>10 - 15 triệu</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="tKhoanggia[]" id="" <?=in_array("0",$values)?"checked":""?> value="0" onclick="click_gia()">
                                    <span>Dưới 10 triệu</span>
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="catalogue">
                        <div class="catalogue-content">
                            <span>CPU</span>
                            <i class="fa fa-plus" aria-hidden="true" id="item-3" onclick="show_catalogue_2();"></i>
                            <i class="fa fa-minus" aria-hidden="true" id="item-4" onclick="hide_catalogue_2();"></i>
                        </div>
                        <div id="Catalogue-list-2" class="catalogue-list">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Intel Dual Core</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Intel Core i3</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Intel Core i5</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Intel Core i7</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Intel Core i9</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>AMD Ryzen 3</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>AMD Ryzen 5</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>AMD Ryzen 7</span>
                            </label>
                        </div>
                    </div>
                    <div class="catalogue">
                        <div class="catalogue-content">
                            <span>Ram</span>
                            <i class="fa fa-plus" aria-hidden="true" id="item-5" onclick="show_catalogue_3();"></i>
                            <i class="fa fa-minus" aria-hidden="true" id="item-6" onclick="hide_catalogue_3();"></i>
                        </div>
                        <div id="Catalogue-list-3" class="catalogue-list">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>4 Gb</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>8 Gb</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>12 Gb</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>16 Gb</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>20 Gb</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>32 Gb</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>64 Gb</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>128 Gb</span>
                            </label>
                        </div>
                    </div>
                    <div class="catalogue">
                        <div class="catalogue-content">
                            <span>Ổ cứng</span>
                            <i class="fa fa-plus" aria-hidden="true" id="item-7" onclick="show_catalogue_4();"></i>
                            <i class="fa fa-minus" aria-hidden="true" id="item-8" onclick="hide_catalogue_4();"></i>
                        </div>
                        <div id="Catalogue-list-4" class="catalogue-list">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>SSD</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>HHD</span>
                            </label>
                            
                        </div>
                    </div>
                    <div class="catalogue">
                        <div class="catalogue-content">
                            <span>Kích thước màn hình</span>
                            <i class="fa fa-plus" aria-hidden="true" id="item-9" onclick="show_catalogue_5();"></i>
                            <i class="fa fa-minus" aria-hidden="true" id="item-10" onclick="hide_catalogue_5();"></i>
                        </div>
                        <div id="Catalogue-list-5" class="catalogue-list">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>< 13''</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>13 - 13.9''</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>14 - 14.9''</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>15 - 15.9''</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>16 - 17''</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>> 17''</span>
                            </label>
                            
                        </div>
                    </div>
                    <div class="catalogue">
                        <div class="catalogue-content">
                            <span>Card đồ họa</span>
                            <i class="fa fa-plus" aria-hidden="true" id="item-11" onclick="show_catalogue_6();"></i>
                            <i class="fa fa-minus" aria-hidden="true" id="item-12" onclick="hide_catalogue_6();"></i>
                        </div>
                        <div id="Catalogue-list-6" class="catalogue-list">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Intel HD</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Intel Iris</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Nvidia Geforce</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Nvidia Quadro</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>AMD Radeon</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>AMD FirePro</span>
                            </label>
                        </div>
                    </div>
                    <div class="catalogue">
                        <div class="catalogue-content">
                            <span>Trọng lượng</span>
                            <i class="fa fa-plus" aria-hidden="true" id="item-13" onclick="show_catalogue_7();"></i>
                            <i class="fa fa-minus" aria-hidden="true" id="item-14" onclick="hide_catalogue_7();"></i>
                        </div>
                        <div id="Catalogue-list-7" class="catalogue-list">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Dưới 1kg</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>1 - 1.5kg</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>1.5 - 2kg</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>2 - 2.5kg</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>2.5 - 3.5kg</span>
                            </label>
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Trên 3.5kg</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-9dot6">
                    <div class="row">
                        <div class="col-xl-3 border product">
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
                        
                            <?php
                                

                                // $result_set = mysqli_query($links,$sql);
                                if(mysqli_num_rows($result_set))
                                {
                                    while($row = mysqli_fetch_row($result_set))
                                    {
                                        ?>
                                        <div class="col-xl-3 border product">
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
                            
                        

                        <!-- <div class="col-xl-3 border product">
                            <div class="col-xl-12 product-img">
                                <a href="./product-details.html"><img src="./images/a-1-1.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="./product-details.html" class="product-name">Dell XPS 13 9310</a>
                                <div class="product-id">SKU: XPS931007NU</div>
                                <div class="product-price">29.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-3 border product">
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
                        <div class="col-xl-3 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-1-3.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Dell Vostro 15 3500 Intel gen 11</a>   
                                <div class="product-id">SKU: MacbookAir13L202001NU</div>
                                <div class="product-price">23.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-3 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-3-6.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Dell Inspiron 15 3501</a>
                                <div class="product-id">SKU: Helios3152101CF</div>
                                <div class="product-price">33.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-3 border product">
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
                        <div class="col-xl-3 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-1.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Dell Inspiron 15 5515 AMD</a>
                                <div class="product-id">SKU: Swift51402CF</div>
                                <div class="product-price">26.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-3 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-2.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Dell Precision 5520</a>
                                <div class="product-id">SKU: LiberV14i01CF</div>
                                <div class="product-price">21.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div>
                        <div class="col-xl-3 border product">
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
                        <div class="col-xl-3 border product">
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
                        <div class="col-xl-3 border product">
                            <div class="col-xl-12 product-img">
                                <a href=""><img src="./images/a-2-5.jpg" alt="" class="items-img"></a>
                            </div>
                            <div class="col-xl-12 product-information">
                                <a href="" class="product-name">Dell Inspiron 15 5505</a>
                                <div class="product-id">SKU: Inspiron550502NS</div>
                                <div class="product-price">18.990.000 ₫</div>
                                <p class="product-km">Quà tặng kèm</p>    
                            </div>
                        </div> -->


                    </div>
                    
                    <ul class="pagination">
                        <li><a href=""><</a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                        <li><a href="">></a></li>
                    </ul>

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
</body>
<?php
    if(isset($_REQUEST["tKhoanggia"]))
        echo "<script>show();</script>";
?>
</html>