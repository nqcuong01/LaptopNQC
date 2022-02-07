<?php
    require("./dbconfig.php");
    session_start();
    require_once("./ktradangnhap.php");
    if(isset($_GET['delete_id']))
    {
        $sql ="delete from khachhang where makh=".$_GET['delete_id'];
        mysqli_query($links, $sql);
        header("Location: $_SERVER[PHP_SELF]");
    }
    if(isset($_POST["btn-save"]))
    {
        $tenkh = $_POST["tTenkh"];
        $sdt = $_POST["tSdt"];
        $password = $_POST["tPassword"];
        $diachi = $_POST["tDiachi"];
        
        $sql = "insert into khachhang(tenkh,sdt,password,diachi) values('$tenkh','$sdt',md5 ('$password'),'$diachi')";
        if(mysqli_query($links, $sql))
        {
            ?>
            <script type="text/javascript">
            alert('Thêm dữ liệu thành công');
            window.location.href='khachhang.php';
            </script>
            <?php
        }
        else
        {
            ?>
            <script type="text/javascript">
            alert('Đã xảy ra lỗi khi thêm dữ liệu');
            </script>
            <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khách hàng</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/khachhang.css">
    <script>
        function delete_id(id)
        {
            if(confirm('Bạn chắc chắn muốn xóa ?'))
            {
                window.location.href='khachhang.php?delete_id='+id;
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
                    <li><a href=""><i class="fa fa-user-plus" aria-hidden="true"></i>Quản lý khách hàng</a></li>
                    <li><a href=""><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</a></li>
                    <li><a href=""><i class="fa fa-book" aria-hidden="true"></i>Đơn hàng</a></li>
                    <li><a href="admin.php"><i class="fa fa-users" aria-hidden="true"></i>Quản lý admin</a></li>
                </ul>
            </div>
            <div class="col-xl-10 content"> 
                <p>Danh sách khách hàng</p>
                <div class="row content-container">
                    <!-- <a href="" id="insert"><i class="fa fa-plus" aria-hidden="true"></i>Thêm mới</a> -->
                    <button id="btn"><i class="fa fa-plus" aria-hidden="true"></i>Thêm khách hàng</button>
                    <div id="myModal" class="modal1">
                        <div class="modal-content">
                            <p class="title">
                                <span >Thêm khách hàng</span>
                                <span class="close">&times;</span>  
                            </p>
                            <form method="post" action="khachhang.php">
                                <p><span>Tên khách hàng:</span><input type="text" name="tTenkh"></p>
                                <p><span>Số điện thoại:</span><input type="text" name="tSdt"></p>
                                <p><span>Password:</span><input type="text" name="tPassword"></p>
                                <p><span>Địa chỉ:</span><input type="text" name="tDiachi"></p>
                                <div class="submit">
                                    <button type="submit" name="btn-save">SAVE</button>
                                </div>  
                            </form>
                        </div>
                    </div>
                    <script src="./js/modal.js"></script>


                    <table class="table table-bordered table-hover table-responsive-md">
                        <thead>
                            <tr>
                                <th>Mã khách hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Password</th>
                                <th>Địa chỉ</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "select * from khachhang";
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
            </div>
        </div>
    </div>

</body>
</html>