<?php
namespace Model;

use DB;

require_once "models/db.php";
class Product extends DB{
    public function getProduct(){
        $sql = "SELECT * FROM products";
        return $this->getData($sql);
    }
    public function addProduct($name, $price){
        $sql = " INSERT INTO `products`( `name`, `price`) VALUES ('$name','$price') ";
        return $this->getData($sql, false);
    }
    public function editProduct($id){
        $sql = "SELECT * FROM `products` WHERE `id` = '$id' ";
        return $this->getData($sql, false);
    }
    public function updateProduct($id, $name, $price){
        $sql = "UPDATE `products` SET `name` = '$name', `price` = '$price' WHERE `id` = '$id'";
        return  $this->getData($sql, false);
    }
    public function deleteProduct($id){
        $sql = "DELETE FROM `products` WHERE `id` = '$id'";
        return $this->getData($sql, false); 
    }
}