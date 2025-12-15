<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Giả sử tài khoản đúng là admin / 123456
    if ($username === 'admin' && $password === '123456') {
        $message = "Đăng nhập thành công! Chào mừng Admin.";
    } else {
        $message = "Sai tên đăng nhập hoặc mật khẩu.";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Form Đăng Nhập</h2>
    <form method="post" action="">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Đăng nhập">
    </form>
    <p><b><?php echo $message; ?></b></p>
</body>
</html>