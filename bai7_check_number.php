<!DOCTYPE html>
<html>
<body>
    <h2>Kiểm tra số nguyên</h2>
    <form method="post">
        Nhập số n: <input type="number" name="n" min="0" required>
        <input type="submit" value="Kiểm tra">
    </form>

    <?php
    function kiemTraNguyenTo($n) {
        if ($n < 2) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n = $_POST['n'];
        
        // 1. Kiểm tra chẵn lẻ
        if ($n % 2 == 0) {
            echo "<p>Số $n là: <b>Số Chẵn</b></p>";
        } else {
            echo "<p>Số $n là: <b>Số Lẻ</b></p>";
        }

        // 2. Kiểm tra nguyên tố
        if (kiemTraNguyenTo($n)) {
            echo "<p>Số $n là: <b>Số Nguyên Tố</b></p>";
        } else {
            echo "<p>Số $n: <b>Không phải</b> là số nguyên tố</p>";
        }
    }
    ?>
</body>
</html>