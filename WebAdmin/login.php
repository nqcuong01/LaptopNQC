<?php
    require_once("./dbconfig.php");
    session_start();
    if(isset($_POST["tSubmit"]))
    {
        $sql = "select * from admin where username = '".$_POST["tUsername"]."' and password =md5 ('".$_POST["tPassword"]."') ";
        $db_select = mysqli_query($links,$sql);
        if(mysqli_num_rows($db_select)>0)
        {
            $_SESSION["logined"]="OK";
            header("Location: home.php");
        }
        else
            echo "<script>alert('Sai tài khoản hoặc mật khẩu!')</script>";

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{background:#696666;}
        h1{text-align: center;}
        div{margin: 10px 0px;}
        #tMatkhau{
            margin-left: 33px;
        }
        #content{
            margin: 10% auto;
            text-align: center;
            width: 30%;
            background: #FFF;
            padding: 10px 0px 20px 0px;
        }
    </style>
    <script>
        function kt()
        {
            var tk = document.getElementById("tTendangnhap");
            var mk = document.getElementById("tMatkhau");
            if(tk.value==""){
                alert("Chưa nhập tài khoản đăng nhập");
                return false;
            }           
            else if(mk.value==""){
                alert("Chưa nhập mật khẩu đăng nhập");
                return false;
            }
            else return true;    
        }
    </script>
</head>
<body>
    
    <div id="content">
        <h1>Đăng nhập hệ thống</h1>
        <form action="" method="POST" onsubmit="return kt();">
            <div>Tên đăng nhâp: <input type="text" name="tUsername" id="tTendangnhap"></div>
            <div>Mật khẩu: <input type="password" name="tPassword" id="tMatkhau"></div>
            <input type="submit" value="Đăng nhập" name="tSubmit">
        </form>
    </div>
</body> 
</html>