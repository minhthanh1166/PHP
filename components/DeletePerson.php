<?php
// Kết nối với cơ sở dữ liệu
include "../database/connect.php";
// Câu lệnh SQL để xóa một bản ghi có id = 3
$sql = "DELETE FROM person_table WHERE id = {$_GET['id']}";
// Gửi câu lệnh SQL và kiểm tra kết quả
if (mysqli_query($connect, $sql)) {
    header("Location: ../index.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}
// Đóng kết nối
mysqli_close($connect);
?>