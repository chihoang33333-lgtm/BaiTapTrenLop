<!DOCTYPE html>
<html>
<head><title>Xổ Số Kiến Thiết</title></head>
<body>
    <h2>Thử Vận May</h2>
    <form method="post">
        Nhập con số may mắn (1-100): <input type="number" name="so" min="1" max="100" required>
        <input type="submit" value="Quay số">
    </form>

    <?php
    if (isset($_POST['so'])) {
        $so_cua_ban = $_POST['so'];
        $ket_qua = rand(1, 100); // Random từ 1 đến 100

        echo "<h3>Kết quả giải đặc biệt: <span style='color:red'>$ket_qua</span></h3>";
        
        if ($so_cua_ban == $ket_qua) {
            echo "<h1>🎉 CHÚC MỪNG BẠN ĐÃ TRÚNG GIẢI! 🎉</h1>";
        } else {
            echo "Rất tiếc! Chúc bạn may mắn lần sau.";
        }
    }
    ?>
</body>
</html>