<?php
require_once  'controllers/ProductController.php';
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

switch ($url) {
    case '/':

        //điều hướng về hàm listProduct trong productController
        $productController = new ProductController();
        $productController->listProduct();
        break;
    // case 'list-form':
    //     $productController = new ProductController();
    //     $productController->list_Form();
    //     break;
    case 'add-product':
        $productController = new ProductController();
        $productController->add_Product();
        break;
        // kiểm tra case = add-producrt điều hướng về hàm addProduct
    case 'edit-product':
        $productController = new ProductController();
        $productController->edit_Product();
    case 'update-product':
        $productController = new ProductController();
        $productController->update_Product();
        break;
    case 'delete-product':
        // echo 12121;
        // die();
        $productController = new ProductController();
        $productController->delete_Product();
        break;
}

// xây dựng 1 bảng trên CSDL  (customer) gồm id,ten,tuoi
//tạo model Customer xây dựng những hàm getCustomer,
//addCustomer - thêm
//editCustomer - Sửa
//deleteCustomer - xóa
// hoàn thiện các chức năng danh sách customer, thêm
//sửa,xóa customer
// lấy điểm lab 1 + 2