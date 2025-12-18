<!DOCTYPE html>
<html>
<body>
    <h2>Tìm Max - Min</h2>
    <form method="post">
        Nhập dãy số (cách nhau bởi dấu phẩy): <br>
        <input type="text" name="mang_so" value="5, 12, 8, 99, 1, 34" style="width: 300px;">
        <input type="submit" value="Tìm kiếm">
    </form>

    <?php
    if (isset($_POST['mang_so'])) {
        $chuoi = $_POST['mang_so'];
        // Chuyển chuỗi thành mảng
        $mang = explode(",", $chuoi);
        
        echo "<h3>Kết quả:</h3>";
        echo "Dãy số: $chuoi <br>";
        echo "Số lớn nhất (Max): <b>" . max($mang) . "</b><br>";
        echo "Số nhỏ nhất (Min): <b>" . min($mang) . "</b>";
    }
    ?>
</body>
</html>