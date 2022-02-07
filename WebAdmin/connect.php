<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "laptopnqc";

    // Create connection
    $connection = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$connection) {
        error_log("loi ket noi MySQL:");
        die('Internal sever error');
    }


    $db_select = mysqli_select_db($connection,$dbname);

    if (!$db_select) {
        error_log("loi ket noi database: " . mysqli_error($connection));
        die('Internal sever error');
    }

?>