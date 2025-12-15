<!DOCTYPE html>
<html>
<head><title>Máy tính cá nhân</title></head>
<body>
    <h2>Máy tính đơn giản</h2>
    <form method="post">
        <input type="number" name="so1" placeholder="Nhập số thứ nhất" required step="any">
        <select name="pheptinh">
            <option value="+">Cộng (+)</option>
            <option value="-">Trừ (-)</option>
            <option value="*">Nhân (*)</option>
            <option value="/">Chia (/)</option>
        </select>
        <input type="number" name="so2" placeholder="Nhập số thứ hai" required step="any">
        <input type="submit" name="tinh" value="Tính kết quả">
    </form>

    <?php
    if (isset($_POST['tinh'])) {
        $a = $_POST['so1'];
        $b = $_POST['so2'];
        $pheptinh = $_POST['pheptinh'];
        $ketqua = "";

        switch ($pheptinh) {
            case '+': $ketqua = $a + $b; break;
            case '-': $ketqua = $a - $b; break;
            case '*': $ketqua = $a * $b; break;
            case '/':
                if ($b == 0) {
                    $ketqua = "Không thể chia cho 0";
                } else {
                    $ketqua = $a / $b;
                }
                break;
        }
        echo "<h3>Kết quả: $a $pheptinh $b = $ketqua</h3>";
    }
    ?>
</body>
</html>