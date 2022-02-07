<?php
    require("./dbconfig.php");
    if(isset($_GET['edit_id']))
    {
        $sql_query="select * from sanpham where masp='".$_GET['edit_id']."'";
        $sql = "select masp,tensp,anhsp,tendanhmuc,soluong,gia,giakm,cpu,ram,ocung,manhinh,carddohoa,trongluong,danhmucid,sanpham.trangthai,cauhinh from sanpham,danhmuc where sanpham.danhmucid = danhmuc.id and masp='".$_GET['edit_id']."'";
        $result_set=mysqli_query($links, $sql);
        $fetched_row=mysqli_fetch_array($result_set);   
    }
    if(isset($_POST['btn-update']))
    {
        // variables for input data
        $masp = $_POST["tMasp"];
        $tensp = $_POST["tTensp"];
        $anhsp = $_POST["fHinhanh"];
        $gia = $_POST["tGia"];
        $giakm = $_POST["tGiakm"];
        $soluong = $_POST["tSoluong"];
        $cpu = $_POST["tCPU"];
        $ram = $_POST["tRam"];
        $ocung = $_POST["tOcung"];
        $manhinh = $_POST["tManhinh"];
        $carddohoa = $_POST["tCarddohoa"];
        $trongluong = $_POST["tTrongluong"];
        $danhmucid = $_POST["tDanhmuc"];
        $cauhinh = $_POST["t2"];
        $trangthai = $_POST["tTrangthai"];
        // variables for input data
        
        // sql query for update data into database
        $sql = "update sanpham set masp='$masp',tensp='$tensp',anhsp='$anhsp',gia='$gia',giakm='$giakm',soluong='$soluong',cpu='$cpu',ram='$ram',ocung='$ocung',manhinh='$manhinh',carddohoa='$carddohoa',trongluong='$trongluong',danhmucid='$danhmucid',cauhinh='$cauhinh',trangthai='$trangthai' where masp='".$_GET['edit_id']."'";

        // sql query execution function
        if(mysqli_query($links, $sql))
        {
            ?>
            <script type="text/javascript">
            alert('Dữ liệu được cập nhật thành công');
            window.location.href='sanpham.php';
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
        header("Location: sanpham.php");
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
                    <li><a href="./khachhang.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Quản lý khách hàng</a></li>
                    <li><a href="./lienhe.php"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</a></li>
                    <li><a href="./donhang.php"><i class="fa fa-book" aria-hidden="true"></i>Đơn hàng</a></li>
                    <li><a href="./admin.php"><i class="fa fa-users" aria-hidden="true"></i>Quản lý admin</a></li>
                </ul>
            </div>
            <div class="col-xl-10 content"> 
                <p>Update sản phẩm</p>
                <form method="post">
                    <p><span>Mã sản phẩm:</span><input type="text" name="tMasp" value="<?php echo $fetched_row['masp']; ?>"></p>
                    <p><span>Tên sản phẩm:</span><input type="text" name="tTensp" value="<?php echo $fetched_row['tensp']; ?>"></p>
                    <p><span>Hình ảnh:</span><input type="file" name="fHinhanh"></p>
                    <img id="preview-image" src="./images/<?php echo $fetched_row['anhsp']; ?>" alt="">
                    <p>
                        <span>Danh mục:</span>
                        <select name="tDanhmuc">
                            <option value="<?php echo $fetched_row['danhmucid']; ?>"><?php echo $fetched_row['tendanhmuc']; ?></option>
                            <option value="1">Dell</option>
                            <option value="2">Lenovo</option>
                            <option value="3">Asus</option>
                            <option value="4">Acer</option>
                        </select>
                    </p>
                    <p><span>Giá:</span><input type="text" name="tGia" value="<?php echo $fetched_row['gia']; ?>"></p>
                    <p><span>Giá-KM:</span><input type="text" name="tGiakm" value="<?php echo $fetched_row['giakm']; ?>"></p>
                    <p><span>Số lượng:</span><input type="number" name="tSoluong" value="<?php echo $fetched_row['soluong']; ?>"></p>
                    <p><span>CPU:</span><input type="text" name="tCPU" value="<?php echo $fetched_row['cpu']; ?>"></p>
                    <p><span>Ram:</span><input type="text" name="tRam" value="<?php echo $fetched_row['ram']; ?>"></p>
                    <p><span>Ổ cứng:</span><input type="text" name="tOcung" value="<?php echo $fetched_row['ocung']; ?>"></p>
                    <p><span>Màn hình: </span><input type="text" name="tManhinh" value="<?php echo $fetched_row['manhinh']; ?>"></p>
                    <p><span>Card đồ họa:</span><input type="text" name="tCarddohoa" value="<?php echo $fetched_row['carddohoa']; ?>"></p>
                    <p><span>Trọng lượng:</span><input type="text" name="tTrongluong" value="<?php echo $fetched_row['trongluong']; ?>"></p>
                    <p style="padding-left:50px">Cấu hình:</p>
                    <p style="padding-left:50px"><textarea name="t2" id="t2" cols="10" rows="5"><?=$fetched_row["cauhinh"]?></textarea></p>
                    <p>
                        <span>Trạng thái:</span>
                        <select name="tTrangthai">
                        <?php
                                if($fetched_row['trangthai']==1)
                                {
                                    echo "<option value=\"1\">Hiện</option>";
                                    echo "<option value=\"0\">Ẩn</option>";
                                }
                                else
                                {
                                    echo "<option value=\"0\">Ẩn</option>";
                                    echo "<option value=\"1\">Hiện</option>";
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
    <script>
        var ckEditor1 = CKEDITOR.replace("t2");
        ckEditor1.config.width = 600;
        CKFinder.setupCKEditor(ckEditor1, null, { type: 'Images'});
    </script>
</body>
</html>