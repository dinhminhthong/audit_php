<?php
// Kiểm tra xem 'user_name' có tồn tại trong cookie không
if (isset($_COOKIE['user_name'])) {
    $user_name = $_COOKIE['user_name'];
    echo $user_name;
} else {
    echo "Không có thông tin về user name.";
}
?>
