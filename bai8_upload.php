<!DOCTYPE html>
<html>
<body>
    <h2>Upload file ảnh</h2>
    <form method="post" enctype="multipart/form-data">
        Chọn ảnh để tải lên:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Ảnh" name="submit">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $target_dir = "uploads/"; // Thư mục lưu ảnh
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Kiểm tra xem có phải là ảnh thật hay không
        if(isset($_FILES["fileToUpload"]["tmp_name"]) && !empty($_FILES["fileToUpload"]["tmp_name"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File là ảnh - " . $check["mime"] . ".<br>";
                $uploadOk = 1;
            } else {
                echo "File không phải là ảnh.<br>";
                $uploadOk = 0;
            }
        } else {
            echo "Bạn chưa chọn file.<br>";
            $uploadOk = 0;
        }

        // Kiểm tra lỗi và di chuyển file
        if ($uploadOk == 0) {
            echo "Xin lỗi, file của bạn không được upload.";
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "File ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " đã được upload thành công.";
                // Hiển thị ảnh vừa up
                echo "<br><img src='$target_file' width='200'>";
            } else {
                echo "Có lỗi xảy ra khi upload file.";
            }
        }
    }
    ?>
</body>
</html>