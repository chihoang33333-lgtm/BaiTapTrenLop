<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Lập trình hướng đối tượng với PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #555;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #25c465ff;
        }
    </style>
</head>
<body>
    <h5>Chào mừng bạn đến với khóa học lập trình cơ bản PHP</h5>

    <?php
    class Student
    {
        private $name;
        private $age;
        private $gender;

        public function __construct($name, $age, $gender) {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }

        public function getName() {
            return $this->name;
        }
        public function getAge() {
            return $this->age;
        }
        public function getGender() {
            return $this->gender;
        }

        public function printStudent() {
            echo "Name: " . $this->name . " -- ";
            echo "Age: " . $this->age . " -- ";
            echo "Gender: " . $this->gender . "<br>";
        }
    }

    // Tạo 3 đối tượng sinh viên
    $student1 = new Student("Nguyễn Văn A", 30, "Nam");
    $student2 = new Student("Nguyễn Thị B", 20, "Nữ");
    $student3 = new Student("Hoàng Thị C", 35, "Nữ");

    // In thông tin từng sinh viên
    $student1->printStudent();
    echo "<hr>";
    $student2->printStudent();
    echo "<hr>";
    $student3->printStudent();
    echo "<hr>";

    // 🔹 Gán các đối tượng vào mảng để dùng trong foreach
    $students = [$student1, $student2, $student3];
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
        <?php
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student->getName() . "</td>";
            echo "<td>" . $student->getAge() . "</td>";
            echo "<td>" . $student->getGender() . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>