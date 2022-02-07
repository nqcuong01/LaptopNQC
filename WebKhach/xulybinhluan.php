<?php
    require("./dbconfig.php");

    if(isset($_REQUEST["act"])=="add")
    {
        $masp = $_REQUEST["masp"];
        $ten = $_REQUEST["ten"];
        $thoigian = $_REQUEST["thoigian"];
        $noidung = $_REQUEST["noidung"];
        $sql = "insert into binhluan values(NULL,'$masp','$ten','$thoigian','$noidung')";
        $thucthi = mysqli_query($links,$sql);
    }


    if(isset($_REQUEST["action"])=="load")
    {
        $masp = $_REQUEST["masp"];
        $sql2 = "select * from binhluan where masp='$masp'";
        $rows2 = mysqli_query($links,$sql2);
        foreach($rows2 as $row2)
        { 
?>
<div class="crow">
    <div class="chead">
        <div class="cname"><?=$row2["ten"]?></div>
        <div class="ctime"><?=$row2["thoigian"]?></div>
    </div>
    <div class="cmsg"><?=$row2["noidung"]?></div>
</div>

<?php 
        }
    }
?>