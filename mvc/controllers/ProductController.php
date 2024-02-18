<?php
require_once "Models/Course.php";

class ProductController
{
    public function listProduct()
    {
        $productModel = new productModel();
        $data = $productModel -> getProductData();
//        print_r($data);
        return include "view/Course/layout.php";

    }
}
