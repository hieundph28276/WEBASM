<?php

use Model\Product;

require_once "models/Product.php";
class ProductController
{
    public function listProduct()
    {
        //tạo ra 1 biến hứng dữ liệu từ hàm của model
        $product = new Product();
        $products = $product->getProduct();
        //    echo "<pre>";
        //    var_dump($products);
        //    die;
        include_once "views/admin/index.php";
        // lấy dữ liệu từ model ra controller và tạo 1 view danh sách đổ xuống view
        //    echo "Đây là trang danh sách product";
    }
    public function list_Form()
    {
        include_once "views/admin/add.php";
    }
    public function add_Product()
    {
        $product = new Product();
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $products = $product->addProduct($name, $price);
        }
        $products = $product->getProduct();
        include_once "views/admin/index.php";
    }

    public function edit_Product()
    {
        $product = new Product();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $products = $product->editProduct($id);
            include_once "views/admin/edit.php";
        }
        // echo "Đây là trang sửa product";
    }
    public function update_Product()
    {
        $product = new Product();
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $products = $product->updateProduct($id, $name, $price);
        }
    }

    public function delete_Product()
    {
        // echo 21212;
        $product = new Product();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $products = $product->deleteProduct($id);
            $products = $product->getProduct();
            include_once "views/admin/index.php";
        }
    }
}
