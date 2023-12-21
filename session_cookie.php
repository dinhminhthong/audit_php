<?php
// Cookie
setcookie('user_name', 'minhthong', time() + (1231231231 * 30), "/");

// Đọc giá trị từ cookie (kiểm tra nếu tồn tại trước khi sử dụng)
$userName = isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : null;

// Hiển thị giá trị từ cookie
if ($userName !== null) {
    echo "User Name: $userName";
} else {
    echo "Không có thông tin về user name.";
}
?>
