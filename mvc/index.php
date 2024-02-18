<?php
    require_once "controllers/ProductController.php";
    $currentUrl = $_SERVER['REQUEST_URI'];

    $index = strpos($currentUrl, 'index.php');

    $url = "";
    if ($index !== false) {
        $url = substr($currentUrl, $index + strlen('index.php'));
        if($url === ""){
            $url = "/";
        }
//        echo $url;
    } else {
//        echo "Không tìm thấy trong URL";
    }

    switch ($url){
        case "/":
            $productController = new ProductController();
            $productController-> listProduct();
//            echo "Trang chủ";
            break;
        case "/add":
            echo "thêm sản phẩm";
            break;
        default:
            echo 404;
            break;
    }
?>