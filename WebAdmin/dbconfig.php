<?php
    error_reporting(0);
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "laptopnqc";
    $links = mysqli_connect($host,$user,$password);
    mysqli_select_db($links, $database);
    mysqli_set_charset($links,"utf8");
?>




