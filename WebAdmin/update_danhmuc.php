<?php
require("./dbconfig.php");
if(isset($_GET['edit_id']))
{
	$sql_query="select * from danhmuc where id=".$_GET['edit_id'];
	$result_set=mysqli_query($links, $sql_query);
	$fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$id = $_POST["tID"];
    $tendanhmuc = $_POST["tTendanhmuc"];
    $hinhanh = $_POST["fHinhanh"];
    $banner = $_POST["fBanner"];
    $trangthai = $_POST["tTrangthai"];
	// variables for input data
	
	// sql query for update data into database
	$sql = "update danhmuc set id='$id',tendanhmuc='$tendanhmuc',hinhanh='$hinhanh',banner='$banner',trangthai='$trangthai' where id=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysqli_query($links, $sql))
	{
		?>
		<script type="text/javascript">
		alert('Dữ liệu được cập nhật thành công');
		window.location.href='danhmuc.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('xảy ra lỗi khi cập nhật dữ liệu');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: danhmuc.php");
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
    <link rel="stylesheet" href="./css/danhmuc2.css">
    <style>
        .submit{text-align: left;padding-left: 120px;}
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
        <div class="row ">
            <div class="col-xl-2 nav">
                <ul>
                    <li><a href="./home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                    <li><a href="./danhmuc.php"><i class="fa fa-list-alt" aria-hidden="true"></i>Danh mục</a></li>
                    <li><a href="./sanpham.php"><i class="fa fa-database" aria-hidden="true"></i>Sản phẩm</a></li>
                    <li><a href=""><i class="fa fa-pencil" aria-hidden="true"></i>Bài viết</a></li>
                    <li><a href="./khachhang.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Quản lý khách hàng</a></li>
                    <li><a href="./lienhe.php"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</a></li>
                    <li><a href="./donhang.php"><i class="fa fa-book" aria-hidden="true"></i>Đơn hàng</a></li>
                    <li><a href="./admin.php"><i class="fa fa-users" aria-hidden="true"></i>Quản lý admin</a></li>
                </ul>
            </div>
            <div class="col-xl-10 content"> 
                <p>Update danh mục</p>
                <!-- <div class="row content-container"></div> -->
                <form method="post">
                    <p><span>ID danh mục:</span><input type="text" name="tID" value="<?php echo $fetched_row['id']; ?>"></p>
                    <p><span>Tên danh mục:</span><input type="text" name="tTendanhmuc" value="<?php echo $fetched_row['tendanhmuc']; ?>"></p>
                    <p><span>Hình ảnh:</span><input type="file" name="fHinhanh" value="<?php echo $fetched_row['hinhanh']; ?>"></p>
                    <img id="preview-image" src="./images/<?php echo $fetched_row['hinhanh']; ?>" alt="">
                    <p><span>Banner:</span><input type="file" name="fBanner"></p>
                    <div><img id="preview-banner" src="./images/<?php echo $fetched_row['banner']; ?>" alt=""></div>
                    <br>
                    <p>
                        <span>Trạng thái:</span>
                        <select name="tTrangthai">
                            <?php
                                if($fetched_row['trangthai']=="Hiện")
                                {
                                    echo "<option value=\"Hiện\">Hiện</option>";
                                    echo "<option value=\"Ẩn\">Ẩn</option>";
                                }
                                else
                                {
                                    echo "<option value=\"Ẩn\">Ẩn</option>";
                                    echo "<option value=\"Hiện\">Hiện</option>";
                                }
                            ?>
                            
                            
                        </select>
                    </p>
                    <div class="submit">
                        <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
                        <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>