<?php
    require("./dbconfig.php");
    session_start();
    require_once("./ktradangnhap.php");
    if(isset($_GET['id_binhluan']))
    {
        $id=$_GET['id_binhluan'];
        $bl = "delete from binhluan where id=$id";
        mysqli_query($links,$bl);
        header("Location: $_SERVER[PHP_SELF]");
    }
    if(isset($_GET['id_danhgia']))
    {
        $id=$_GET['id_danhgia'];
        $dg="delete from review_table where review_id=$id";
        mysqli_query($links,$dg);
        header("Location: $_SERVER[PHP_SELF]");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/khachhang.css">
    <script>
        function delete_id(id)
        {
            if(confirm('Bạn chắc chắn muốn xóa ?'))
            {
                window.location.href='binhluan.php?id_binhluan='+id;
            }
        }
        function delete_id2(id)
        {
            if(confirm('Bạn chắc chắn muốn xóa ?'))
            {
                window.location.href='binhluan.php?id_danhgia='+id;
            }
        }
    </script>
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
                    <li><a href="khachhang.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Quản lý khách hàng</a></li>
                    <li><a href="./lienhe.php"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</a></li>
                    <li><a href="./donhang.php"><i class="fa fa-book" aria-hidden="true"></i>Đơn hàng</a></li>
                    <li><a href="./admin.php"><i class="fa fa-users" aria-hidden="true"></i>Quản lý admin</a></li>
                </ul>
            </div>
            <div class="col-xl-10 content"> 
                <p>Danh sách bình luận</p>
                <div class="row content-container">
                    <!-- <a href="" id="insert"><i class="fa fa-plus" aria-hidden="true"></i>Thêm mới</a> -->
                    <!-- <button id="btn"><i class="fa fa-plus" aria-hidden="true"></i>Thêm khách hàng</button> -->
                    


                    <table class="table table-bordered table-hover table-responsive-md">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mã sản phẩm</th>
                                <th>Họ Tên</th>
                                <th>Thời gian</th>
                                <th>Nội dung</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "select * from binhluan";
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
                                                <td>
                                                    <a href="javascript:delete_id('<?php echo $row[0]; ?>')" class="xx do"><i class="fa fa-trash-o" aria-hidden="true"></i>Xóa</a>
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
                <p>Danh sách đánh giá</p>
                <div class="row content-container">
                    <!-- <a href="" id="insert"><i class="fa fa-plus" aria-hidden="true"></i>Thêm mới</a> -->
                    <!-- <button id="btn"><i class="fa fa-plus" aria-hidden="true"></i>Thêm khách hàng</button> -->
                    


                    <table class="table table-bordered table-hover table-responsive-md">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Mã sản phẩm</th>
                                <th>Họ Tên</th>
                                <th>Đánh giá</th>
                                <th>Nội dung</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql2 = "select * from review_table";
                                $result_set2 = mysqli_query($links,$sql2);
                                if(mysqli_num_rows($result_set2))
                                {
                                    while($row2 = mysqli_fetch_row($result_set2))
                                    {
                                        ?>
                                            <tr>
                                                <td><?php echo $row2[0]; ?></td>
                                                <td><?php echo $row2[1]; ?></td>
                                                <td><?php echo $row2[2]; ?></td>
                                                <td><?php echo $row2[3]; ?> sao</td>
                                                <td><?php echo $row2[4]; ?></td>
                                                <td>
                                                    <a href="javascript:delete_id2('<?php echo $row2[0]; ?>')" class="xx do"><i class="fa fa-trash-o" aria-hidden="true"></i>Xóa</a>
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