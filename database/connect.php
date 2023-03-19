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
$connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
//Kiểm tra kqết nối
if ($connect->connect_error) {
    exit('Kết nối không thành công. chi tiết lỗi:' . $connect->connect_error);
}
?>