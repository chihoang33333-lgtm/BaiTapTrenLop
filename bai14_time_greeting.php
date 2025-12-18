<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lời chào thông minh</title>
    <style>
        body { margin: 0; height: 100vh; display: flex; justify-content: center; align-items: center; font-family: sans-serif; transition: 1s; }
        .box { text-align: center; padding: 50px; border-radius: 20px; background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px); box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37); }
        h1 { font-size: 50px; margin: 0; }
        p { font-size: 24px; }
        
        /* Style cho Buổi Sáng */
        .morning { background: linear-gradient(to right, #f2994a, #f2c94c); color: #fff; }
        
        /* Style cho Buổi Chiều/Tối */
        .night { background: linear-gradient(to right, #0f2027, #203a43, #2c5364); color: #fff; }
    </style>
</head>

<?php
    // Lấy giờ hiện tại (Hệ 24h)
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $hour = date('H');
    
    // Logic kiểm tra giờ
    if ($hour >= 5 && $hour < 18) {
        $class = "morning";
        $title = "Chào Buổi Sáng!";
        $mess = "Chúc bạn một ngày làm việc tràn đầy năng lượng.";
        $icon = "☀️";
    } else {
        $class = "night";
        $title = "Chào Buổi Tối!";
        $mess = "Đã muộn rồi, hãy thư giãn và nghỉ ngơi nhé.";
        $icon = "🌙";
    }
?>

<body class="<?php echo $class; ?>">
    <div class="box">
        <div style="font-size: 80px; margin-bottom: 20px;"><?php echo $icon; ?></div>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $mess; ?></p>
        <p>Bây giờ là: <b><?php echo date('H:i'); ?></b></p>
    </div>
</body>
</html>