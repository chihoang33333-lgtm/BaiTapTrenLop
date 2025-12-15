<!DOCTYPE html>
<html>
<head><title>Danh sách nhân viên</title></head>
<style>table, th, td { border: 1px solid black; border-collapse: collapse; padding: 10px; }</style>
<body>
    <h2>Danh sách 10 Nhân Viên</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Họ Tên</th>
            <th>Tuổi</th>
            <th>Email</th>
        </tr>
        <?php
        // Tạo dữ liệu giả
        $users = [];
        for($i = 1; $i <= 10; $i++) {
            $users[] = [
                'id' => $i,
                'name' => "Người dùng $i",
                'age' => rand(20, 40),
                'email' => "user$i@example.com"
            ];
        }

        // In ra bảng
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['name'] . "</td>";
            echo "<td>" . $user['age'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>