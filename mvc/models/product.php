<?php
require_once "db.php";

class productModel extends db
{
    public function getProductData()
    {
        $sql = "SELECT * FROM products where 1";
        return $this -> getData($sql);
    }
}
