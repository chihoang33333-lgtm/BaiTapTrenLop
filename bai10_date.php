<!DOCTYPE html>
<html>
<body>
    <h2>Tính tuổi của bạn</h2>
    <form method="post">
        Chọn ngày sinh của bạn: 
        <input type="date" name="ngaysinh" required>
        <input type="submit" value="Tính tuổi">
    </form>

    <?php
    if (isset($_POST['ngaysinh'])) {
        $ngay_sinh = $_POST['ngaysinh'];
        $bday = new DateTime($ngay_sinh);
        $today = new DateTime(date('m.d.y'));
        
        // Tính khoảng cách giữa 2 ngày
        $diff = $today->diff($bday);
        
        echo "<h3>Kết quả:</h3>";
        echo "Bạn đã sống được: ";
        echo "<b>" . $diff->y . "</b> tuổi, ";
        echo "<b>" . $diff->m . "</b> tháng, ";
        echo "<b>" . $diff->d . "</b> ngày.";
    }
    ?>
</body>
</html>