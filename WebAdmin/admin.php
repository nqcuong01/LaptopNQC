<?php
    require("./dbconfig.php");
    session_start();
    require_once("./ktradangnhap.php");
    if(isset($_GET['delete_id']))
    {
        $sql ="delete from admin where id=".$_GET['delete_id'];
        mysqli_query($links, $sql);
        header("Location: $_SERVER[PHP_SELF]");
    }
    if(isset($_GET['edit_id']))
    {
        $sql_query="select * from admin where id=".$_GET['edit_id'];
        $result_set=mysqli_query($links, $sql_query);
        $fetched_row=mysqli_fetch_array($result_set);
    }
    if(isset($_POST["btn-save"]))
    {
        $hoten = $_POST["tHoten"];
        if($hoten=="")
            die();
        $username = $_POST["tUsername"];
        $password = $_POST["tPassword"];
        $sodienthoai = $_POST["tSodienthoai"];
        $capdo = $_POST["tCapdo"];
        $trangthai = $_POST["tTrangthai"];
            
        $sql = "insert into admin(hoten,username,password,sodienthoai,capdo,trangthai) values('$hoten','$username',md5('$password'),'$sodienthoai','$capdo','$trangthai')";
        if(mysqli_query($links, $sql))
        {
            ?>
            <script type="text/javascript">
            alert('Data Are Inserted Successfully ');
            // window.location.href='admin.php';
            </script>
            <?php
        }
        else
        {
            ?>
            <script type="text/javascript">
            alert('error occured while inserting your data');
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
    <title>Quản lý admin</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/admin1.css">
    <script type="text/javascript">
        function edt_id(id)
        {
            if(confirm('Bạn chắc chắn muốn cập nhật ?'))
            {
                window.location.href='update_admin.php?edit_id='+id;
            }
        }
        function delete_id(id)
        {
            if(confirm('Bạn chắc chắn muốn xóa ?'))
            {
                window.location.href='admin.php?delete_id='+id;
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
        <div class="row bl">
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
                <p>Danh sách quản lý admin</p>
                <div class="row content-container">
                    <button id="btn"><i class="fa fa-plus" aria-hidden="true"></i>Thêm admin</button>
                    <div id="myModal" class="modal1">
                        <div class="modal-content">
                            <p class="title">
                                <span >Thêm admin</span>
                                <span class="close">&times;</span>  
                            </p>
                            <form method="post" action="admin.php">
                                <p><span>Họ tên:</span><input type="text" name="tHoten"></p>
                                <p><span>Username:</span><input type="text" name="tUsername"></p>
                                <p><span>Password:</span><input type="text" name="tPassword"></p>
                                <p><span>Số điện thoại: </span><input type="text" name="tSodienthoai"></p>
                                <p>
                                    <span>Cấp độ:</span>
                                    <select name="tCapdo">
                                        <option value="">Chọn cấp độ</option>
                                        <option value="Quản trị viên">Quản trị viên</option>
                                        <option value="Cộng tác viên">Cộng tác viên</option>
                                    </select>
                                </p>
                                <p>
                                    <span>Trạng thái:</span>
                                    <select name="tTrangthai">
                                        <option value="">Chọn trạng thái</option>
                                        <option value="online">online</option>
                                        <option value="ofline">ofline</option>
                                    </select>
                                </p>
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
                                <th>ID</th>
                                <th>Họ tên</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Số điện thoại</th>
                                <th>Cấp độ</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "select * from admin";
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
                                                    <?php
                                                    
                                                        if($row[5]=="Quản trị viên")
                                                            echo "<span class=\"do\">$row[5]</span>";
                                                        else
                                                        echo "<span class=\"xanh\">$row[5]</span>";
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if($row[6]=="online")
                                                            echo "<span class=\"xanh\">$row[6]</span>";
                                                        else
                                                        echo "<span class=\"xam\">$row[6]</span>";
                                                    ?>
                                                </td>
                                                <td>
                                                    <a href="javascript:edt_id('<?php echo $row[0]; ?>')" class="xx xanh update"><i class="fa fa-pencil" aria-hidden="true"></i>Sửa</a>
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