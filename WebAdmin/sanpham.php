<?php
    require("./dbconfig.php");
    session_start();
    require_once("./ktradangnhap.php");
    if(isset($_GET['delete_id']))
    {
        $sql ="delete from sanpham where masp='".$_GET['delete_id']."'";
        mysqli_query($links, $sql);
        header("Location: $_SERVER[PHP_SELF]");
    }
    if(isset($_POST["btn-save"]))
    {
        $masp = $_POST["tMasp"];
        $tensp = $_POST["tTensp"];
        $hinhanh = $_POST["fHinhanh"];
        $gia = $_POST["tGia"];
        $giakm = $_POST["tGiakm"];
        $soluong = $_POST["tSoluong"];
        $cpu = $_POST["tCPU"];
        $ram = $_POST["tRam"];
        $ocung = $_POST["tOcung"];
        $manhinh = $_POST["tManhinh"];
        $carddohoa = $_POST["tCarddohoa"];
        $trongluong = $_POST["tTrongluong"];
        $cauhinh = $_POST["t2"];
        $danhmuc = $_POST["tDanhmuc"];
        $trangthai = $_POST["tTrangthai"];
            
        $sql = "insert into sanpham values('$masp','$tensp','$hinhanh','$gia','$giakm','$soluong','$cpu','$ram','$ocung','$manhinh','$carddohoa','$trongluong','$cauhinh','$danhmuc','$trangthai')";
        if(mysqli_query($links, $sql))
        {
            ?>
            <script type="text/javascript">
            alert('Thêm dữ liệu thành công ');
            window.location.href='sanpham.php';
            </script>
            <?php
        }
        else
        {
            ?>
            <script type="text/javascript">
            alert('Thêm thất bại');
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
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/sanpham2.css">
    <script src="./CKEditor/ckeditor/ckeditor.js"></script>
    <script src="./CKEditor/ckfinder/ckfinder.js"></script>
    <script src="./CKEditor/jquery.js"></script>
    <script type="text/javascript">
        function edt_id(id)
        {
            if(confirm('Bạn chắc chắn muốn cập nhật ?'))
            {
                window.location.href='update_sanpham.php?edit_id='+id;
            }
        }
        function delete_id(id)
        {
            if(confirm('Bạn chắc chắn muốn xóa ?'))
            {
                window.location.href='sanpham.php?delete_id='+id;
            }
        }
    </script>
    <style>.modal-content{width: 50%;}</style>
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
                <p>Danh sách sản phẩm</p>
                <div class="content-container">
                    <?php
                        $tukhoa = NULL;
                        $dm = NULL;
                        $locgia=NULL;
                        if(isset($_GET["tTukhoa"]))
                            $tukhoa = $_GET["tTukhoa"];
                        if(isset($_GET["tTKdanhmuc"]))
                            $dm = $_GET["tTKdanhmuc"];
                        if(isset($_GET["tLoctheogia"]))
                            $locgia = $_GET["tLoctheogia"];
                    ?>
                    <form action="sanpham.php" method="get" class="search">
                        <p>Bộ lọc tìm kiếm</p>
                        <input type="text" name="tTukhoa" id="" placeholder="Nhập từ khóa tìm kiếm">
                        <select name="tTKdanhmuc" id="">
                            <option value="">--Lọc theo danh mục--</option>
                            <?php
                                // taoselect("danhmuc","id","tendanhmuc",$dm,$links);
                                // $link = $links;
                                $sql12 = "select * from danhmuc";
                                $result_set  = mysqli_query($links,$sql12);
                                if(mysqli_num_rows($result_set))
                                {
                                    while($row = mysqli_fetch_row($result_set))
                                    {
                                        $id = $row[0];
                                        $ten = $row[1];
                                        if($id==$dm)
                                            echo "<option value='$id' selected> $ten </option>";
                                        else
                                            echo "<option value='$id'> $ten </option>";
                                    }
                                }
                            ?>
                        </select>
                        <select name="tLoctheogia" id="tLoctheogia">
                            <option value="0" >--Lọc theo giá--</option>
                            <option value="1">Dưới 10 triệu</option>
                            <option value="2">10-15 triệu</option>
                            <option value="3">15-20 triệu</option>
                            <option value="4">Trên 20 triệu</option>
                        </select>
                        <br><br>
                        <div>
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                            <input type="reset" value="Làm mới">
                        </div>
                    </form>
                    
                </div>

                <div class="row content-container">
                    <!-- <a href="" id="insert"><i class="fa fa-plus" aria-hidden="true"></i>Thêm mới</a> -->
                    <button id="btn"><i class="fa fa-plus" aria-hidden="true"></i>Thêm sản phẩm</button>
                    <div id="myModal" class="modal1">
                        <div class="modal-content">
                            <p class="title">
                                <span>Thêm sản phẩm</span>
                                <span class="close">&times;</span>  
                            </p>
                            <form method="post" action="sanpham.php">
                            <p><span>Mã sản phẩm:</span><input type="text" name="tMasp"></p>
                                <p><span>Tên sản phẩm:</span><input type="text" name="tTensp"></p>
                                <p><span>Hình ảnh:</span><input type="file" name="fHinhanh"></p>
                                <p>
                                    <span>Danh mục:</span>
                                    <select name="tDanhmuc">
                                        <option value="">Chọn danh mục</option>
                                        <option value="1">Dell</option>
                                        <option value="2">Lenovo</option>
                                        <option value="3">Asus</option>
                                        <option value="4">Acer</option>
                                    </select>
                                </p>
                                <p><span>Giá:</span><input type="text" name="tGia"></p>
                                <p><span>Giá-KM:</span><input type="text" name="tGiakm"></p>
                                <p><span>Số lượng:</span><input type="number" name="tSoluong"></p>
                                <p><span>CPU:</span><input type="text" name="tCPU"></p>
                                <p><span>Ram:</span><input type="text" name="tRam"></p>
                                <p><span>Ổ cứng:</span><input type="text" name="tOcung"></p>
                                <p><span>Màn hình: </span><input type="text" name="tManhinh"></p>
                                <p><span>Card đồ họa:</span><input type="text" name="tCarddohoa"></p>
                                <p><span>Trọng lượng:</span><input type="text" name="tTrongluong"></p>
                                <p style="padding-left:50px">Cấu hình:</p>
                                <p style="padding-left:50px"><textarea name="t2" id="t2" cols="10" rows="5"></textarea></p>
                                <p>
                                    <span>Trạng thái:</span>
                                    <select name="tTrangthai">
                                        <option value="">Chọn trạng thái</option>
                                        <option value="1">Hiện</option>
                                        <option value="0">Ẩn</option>
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
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Thông tin sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "select masp,tensp,anhsp,tendanhmuc,soluong,gia,giakm,cpu,ram,ocung,manhinh,carddohoa,trongluong,sanpham.trangthai from sanpham,danhmuc where sanpham.danhmucid = danhmuc.id";
                                if($tukhoa!=NULL)
                                    $sql .=" and (masp='$tukhoa' or tensp like '%$tukhoa%')";
                                if($dm!=NULL)
                                    $sql .= " and danhmucid = $dm";
                                if($locgia!=NULL && $locgia==1)
                                    $sql .= " and gia<10000000 ";
                                else if($locgia==2)
                                    $sql .= " and gia between 10000000 and 15000000 ";
                                else if($locgia==3)
                                    $sql .= " and gia between 15000000 and 20000000 ";
                                else if($locgia==4)
                                    $sql .= " and gia>20000000";    
                                $result_set = mysqli_query($links,$sql);
                                if(mysqli_num_rows($result_set))
                                {
                                    while($row = mysqli_fetch_row($result_set))
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $row[0]; ?></td>
                                            <td><?php echo $row[1]; ?></td>
                                            <td><img src="./images/<?php echo $row[2]; ?>" alt="" id="hinhanh"></td>
                                            <td>
                                                <ul>
                                                    <li>Danh mục: <strong><?php echo $row[3]; ?></strong></li>
                                                    <li>Số lượng: <strong><?php echo $row[4]; ?></strong></li>
                                                    <li>Giá: <strong><?php echo number_format($row[5],0,',','.'); ?>Đ</strong></li>
                                                    <li>Giá-KM: <strong><?php echo number_format($row[6],0,',','.'); ?>Đ</strong></li>
                                                    <li>CPU: <strong><?php echo $row[7]; ?></strong></li>
                                                    <li>RAM: <strong><?php echo $row[8]; ?></strong></li>
                                                    <li>Ổ cứng: <strong><?php echo $row[9]; ?></strong></li>
                                                    <li>Màn hình: <strong><?php echo $row[10]; ?>''</strong></li>
                                                    <li>Card đồ họa: <strong><?php echo $row[11]; ?></strong></li>
                                                    <li>Trọng lượng: <strong><?php echo $row[12]; ?>Kg</strong></li>
                                                </ul>
                                            </td>
                                            <td>
                                                <?php 
                                                    if($row[13]==1)
                                                        echo "Hiện";
                                                    else
                                                        echo "Ẩn";
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
    <script>
        var ckEditor1 = CKEDITOR.replace("t2");
        ckEditor1.config.width = 600;
        CKFinder.setupCKEditor(ckEditor1, null, { type: 'Images'});
    </script>
</body>
</html>