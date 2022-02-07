<?php
    require("./dbconfig.php");
    if(isset($_REQUEST["binhluan"]))
    {
        $masp = $_REQUEST["masp"]; 
        $ten =$_REQUEST["ten"];
        $noidung = $_REQUEST["noidung"];
        $thoigian = $_REQUEST["thoigian"];
        $sql = "insert into binhluan values(NULL,'$masp','$ten','$noidung','$thoigian')";
        $bl = mysqli_query($links,$sql);
        header("Location:product-details.php?masp=$masp");
    }
?>