
<?php
// Đọc file
echo "<h3>Nội dung file data.txt:</h3>";
$filename = "data.txt";
if (file_exists($filename)) {
    $content = file_get_contents($filename);
    // Chuyển đổi ký tự xuống dòng thành thẻ <br> để hiển thị trên web
    echo nl2br($content); 
} else {
    echo "File không tồn tại.";
}
?>