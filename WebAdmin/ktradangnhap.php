<?php
    if(isset($_SESSION["logined"])==false || $_SESSION["logined"]=="")
    {
        header("Location: login.php");
    }
?>