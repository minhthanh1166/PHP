<?php
//khai báo biến host
$hostName = 'localhost';
// khai báo biến username
$userName = 'root';
//khai báo biến password
$passWord = '';
// khai báo biến databaseName
$databaseName = 'person';
// khởi tạo kết nối
$connect = new mysqli($hostName, $userName, $passWord, $databaseName);
//Kiểm tra kết nối
if ($connect->connect_error) {
    exit('Kết nối không thành công. chi tiết lỗi:' . $connect->connect_error);
}
?>