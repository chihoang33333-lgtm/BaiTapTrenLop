<?php
session_start(); // Bắt buộc phải có dòng này ở đầu file khi dùng Session

// Xử lý lưu ghi chú
if (isset($_POST['save_note'])) {
    $_SESSION['my_note'] = $_POST['note_content'];
    $msg = "Đã lưu ghi chú!";
}

// Xử lý xóa ghi chú
if (isset($_POST['delete_note'])) {
    unset($_SESSION['my_note']);
    $msg = "Đã xóa ghi chú!";
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Sổ tay ghi chú (Session)</h2>
    <?php if(isset($msg)) echo "<p style='color:red'>$msg</p>"; ?>
    
    <form method="post">
        Nội dung: <input type="text" name="note_content" size="30" required>
        <input type="submit" name="save_note" value="Lưu vào Session">
    </form>
    
    <hr>
    <h3>Nội dung đang được lưu:</h3>
    <?php
    if (isset($_SESSION['my_note'])) {
        echo "<p style='background:#f0f0f0; padding:10px;'>" . $_SESSION['my_note'] . "</p>";
        echo "<form method='post'><input type='submit' name='delete_note' value='Xóa ghi chú'></form>";
    } else {
        echo "<i>Chưa có ghi chú nào.</i>";
    }
    ?>
    <p><small>(Hãy thử F5 lại trang, nội dung vẫn sẽ còn đó)</small></p>
</body>
</html>