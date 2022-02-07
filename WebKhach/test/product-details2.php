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
    <!-- Minh Vuong js for Review & Rating  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Minh Vương js for Comment &css -->
    <script src="./3b-comments.js"></script>
    <link href="./3c-comments.css" rel="stylesheet">
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

                    <div class="list">
                        <?=$row["cauhinh"]?>
                     
                    </div>
                    <?php
                            }
                        }
                        
                    ?>
                    <a href="" class="view-more-list">Xem thêm cấu hình chi tiết</a>    
                </div>
            </div>

<!-- Review Minh Vuong -->
<div class="container">
    	
    	<div class="card">
    		<div class="card-header">Đánh giá sản phẩm</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Đánh giá</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Viết đánh giá ở đây</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Đánh giá</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
<!-- End code review -->
  <!-- (B) -->
  <input type="hidden" id="pid" value="999"/>

<!-- (C) Load Bình luận -->
<div class="container">
<div class="card">
    <h1>Bình luận</h1>
    <div id="cwrap"></div>

    <!-- (D) Thêm bình luận -->
    <form id="cadd" onsubmit="return comments.add(this)">
    <h1>Để lại bình luận</h1>
    <input type="text" id="cname" placeholder="Tên" required/>
    <textarea id="cmsg" placeholder="Bình Luận" required></textarea>
    <input type="submit" value="Gửi"/>
    </form>
                    </div>
</div>
<!-- End code cmt -->
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
            <p class="Copyright">Bản quyền thuộc về Minh Vương & Quang Cương D14CNPM6</p>
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

<!-- Code cho phần đánh giá -->
<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Đánh giá sản phẩm</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>

	        	<div class="form-group">
                    <input type="hidden" name="masp" id="masp" value="<?=$masp?>">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Mời nhập tên của bạn" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Viết đánh giá về sản phẩm"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Xác nhận</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>

<style>
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<script>

$(document).ready(function(){

	var rating_data = 0;

    $('#add_review').click(function(){

        $('#review_modal').modal('show');

    });

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){
        var masp = $('#masp').val();

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();
        
        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{masp:masp,rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        var masp = $('#masp').val();
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data',masp:masp},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>