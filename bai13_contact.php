<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Liên hệ với chúng tôi</title>
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 100vh; display: flex; align-items: center; justify-content: center; font-family: 'Segoe UI', sans-serif; }
        .contact-form { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); width: 350px; }
        h2 { text-align: center; color: #333; margin-bottom: 30px; }
        input, textarea { width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; transition: 0.3s; }
        input:focus, textarea:focus { border-color: #764ba2; outline: none; box-shadow: 0 0 5px rgba(118, 75, 162, 0.4); }
        button { width: 100%; padding: 12px; background: #764ba2; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; font-weight: bold; }
        button:hover { background: #5b3a7d; }
        .result { margin-top: 15px; padding: 10px; background: #d4edda; color: #155724; border-radius: 5px; text-align: center; display: none; }
    </style>
</head>
<body>

<div class="contact-form">
    <h2>Gửi Góp Ý</h2>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        echo "<div class='result' style='display:block'>Cảm ơn <b>$name</b>! Chúng tôi đã nhận được tin nhắn.</div>";
    }
    ?>

    <form method="post">
        <input type="text" name="name" placeholder="Họ và tên của bạn" required>
        <input type="email" name="email" placeholder="Email liên hệ" required>
        <textarea name="mess" rows="4" placeholder="Nội dung tin nhắn..."></textarea>
        <button type="submit">GỬI NGAY</button>
    </form>
</div>

</body>
</html>