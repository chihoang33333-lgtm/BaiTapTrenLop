<?php
// Kiểm tra cookie 'luot_truy_cap' đã có chưa
if (!isset($_COOKIE['luot_truy_cap'])) {
    $count = 1;
    echo "Chào mừng bạn lần đầu truy cập!";
} else {
    $count = $_COOKIE['luot_truy_cap'] + 1;
    echo "Bạn đã quay lại lần thứ: " . $count;
}

// Lưu cookie trong 1 giờ (3600 giây)
setcookie('luot_truy_cap', $count, time() + 3600, "/");
?>
