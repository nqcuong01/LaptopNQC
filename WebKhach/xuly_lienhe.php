<?php
    require("./dbconfig.php");
    if(isset($_POST["btn-save"]))
    {
        $hoten = $_POST["tHoten"];
        $email = $_POST["tEmail"];
        $noidung = $_POST["tNoidung"];
        $trangthai = $_POST["tTrangthai"];

        $sql = "insert into lienhe(hoten,email,noidung,trangthai) values('$hoten','$email','$noidung','$trangthai')";
        if(mysqli_query($links, $sql))
        {
            ?>
            <script type="text/javascript">
            alert('Phản hồi của bạn đã được gửi đi thành công');
            window.location.href='lienhe.php';
            </script>
            <?php
        }
        else
        {
            ?>
            <script type="text/javascript">
            alert('Lỗi không thể gửi phản hồi của bạn');
            </script>
            <?php
        }
    }
?>