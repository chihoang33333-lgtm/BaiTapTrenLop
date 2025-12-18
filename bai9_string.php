<!DOCTYPE html>
<html>
<head><title>Phân tích chuỗi</title></head>
<body>
    <h2>Công cụ phân tích văn bản</h2>
    <form method="post">
        <textarea name="noidung" rows="5" cols="40" placeholder="Nhập đoạn văn vào đây..."><?php echo isset($_POST['noidung']) ? $_POST['noidung'] : ''; ?></textarea><br>
        <input type="submit" value="Phân tích">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['noidung'])) {
        $text = $_POST['noidung'];
        echo "<h3>Kết quả:</h3>";
        echo "<ul>";
        echo "<li>Tổng số ký tự: " . strlen($text) . "</li>";
        echo "<li>Tổng số từ: " . str_word_count($text) . "</li>";
        echo "<li>Viết đảo ngược: " . strrev($text) . "</li>";
        echo "<li>Viết hoa toàn bộ: " . strtoupper($text) . "</li>";
        echo "</ul>";
    }
    ?>
</body>
</html>