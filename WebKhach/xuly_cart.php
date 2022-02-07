<?php
    require("./dbconfig.php");
    session_start();
    $sl = $_GET['sl'];
    if(isset($_GET['masp']))
    {
        $masp = $_GET['masp'];
    }
    
    $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';

    $query = mysqli_query($links,"select * from sanpham where masp='".$_GET['masp']."'");
    if($query){
        $product = mysqli_fetch_assoc($query);
    }

    // var_dump($item);
    $item = [
        'masp'=>$product['masp'],
        'tensp'=>$product['tensp'],
        'anhsp'=>$product['anhsp'],
        'gia'=>($product['giakm']>0) ? $product['giakm'] : $product['gia'],
        'soluong'=>1
    ];

    if($action=='add')
    {
        if(isset($_SESSION['cart'][$masp])){
            $_SESSION['cart'][$masp]['soluong'] +=1;
        }
        else
            $_SESSION['cart'][$masp] = $item;
    }

    if($action=='update')
    {
        for($i=1;$i<=$sl;$i++)
        {
            if($_GET['soluong_'.$i]<1)
                $_GET['soluong_'.$i]=1;
            $_SESSION['cart'][$_GET['masp_'.$i]]['soluong'] = $_GET['soluong_'.$i];
        }
    }

    if($action=='delete'){
        unset($_SESSION['cart'][$masp]);
    }

    

    // echo "<pre>";
    // print_r($_SESSION['cart']);
    header('location: cart.php');




?>