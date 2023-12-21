<?php
// try {
//     $result = 10 / 0; // Cố gắng chia cho 0
//     echo "Kết quả: " . $result; // Mã này sẽ không được thực hiện nếu có lỗi
// } catch (DivisionByZeroError $e) {
//     // Xử lý lỗi chia cho 0
//     echo "Lỗi: " . $e->getMessage();
// }finally{
//     echo"finali luôn chạy";
// }

$arr = [1, 2, 3];

try {
    // Cố gắng truy cập mảng với chỉ số không hợp lệ
    $value = $arr[10];
    echo "Giá trị: " . $value; // Mã này sẽ không được thực hiện nếu có lỗi
} catch (Error $e) {
    // Xử lý lỗi truy cập mảng với chỉ số không hợp lệ
    echo "Lỗi: " . $e->getMessage();
}finally{
    echo"lỗi truy cập ko có vị trí trong mảng";
}


?>
