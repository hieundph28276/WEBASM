<?php
require_once "env.php";
class DB{
    public $connect;
// tạo kết nối từ project php sang mysql
public function __construct()
{
    $this->connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        // return $connect;
}
// public function __construct()
// {
//   $this->connect = $this->getConnect();  
// }


// nếu như dùng để lấy danh sách thì sẽ truyền true còn truyền false thì
//sẽ chạy được các câi truy vấn như thêm sửa xóa
public function getData($query, $getAll = true){
    //    $conn = getConnect();

        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }

        return $stmt->fetch();
 }
}
