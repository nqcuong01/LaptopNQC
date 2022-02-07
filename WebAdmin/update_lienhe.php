<?php
require("./dbconfig.php");
if(isset($_GET['edit_id']))
    {
        $sql_query="select * from lienhe where id=".$_GET['edit_id'];
        $result_set=mysqli_query($links, $sql_query);
        $fetched_row=mysqli_fetch_array($result_set);
    }
    if(isset($_POST['btn-update']))
    {
        // variables for input data
        $hoten = $_POST["tHoten"];
        $email = $_POST["tEmail"];
        $noidung = $_POST["tNoidung"];
        $trangthai = $_POST["tTrangthai"];
        // variables for input data
        
        // sql query for update data into database
        $sql = "update lienhe set hoten='$hoten',email='$email',noidung='$noidung',trangthai='$trangthai' where id=".$_GET['edit_id'];
        // sql query for update data into database
        
        // sql query execution function
        if(mysqli_query($links, $sql))
        {
            ?>
            <script type="text/javascript">
            alert('Dữ liệu được cập nhật thành công');
            window.location.href='lienhe.php';
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
                <p>Update Liên hệ</p>
                <!-- <div class="row content-container"></div> -->
                <form method="post">
                    <p><span>Họ tên:</span><input type="text" name="tHoten" value="<?php echo $fetched_row['hoten']; ?>"></p>
                    <p><span>Email:</span><input type="text" name="tEmail" value="<?php echo $fetched_row['email']; ?>"></p>
                    <p><span>Nội dung:</span><textarea name="tNoidung" id="" cols="30" rows="5"><?php echo $fetched_row['noidung']; ?></textarea></p>
                    <p>
                        <span>Trạng thái:</span>
                        <select name="tTrangthai">
                            <?php
                                if($fetched_row['trangthai']==0)
                                {
                                    echo "<option value='0'>Chưa xử lý</option>";
                                    echo "<option value='1'>Đã xử lý</option>";
                                }
                                else
                                {
                                    echo "<option value='1'>Đã xử lý</option>";
                                    echo "<option value='0'>Chưa xử lý</option>";
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