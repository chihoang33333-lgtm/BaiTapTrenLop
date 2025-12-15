<?php
class Nguoi {
    public $hoTen;
    public $ngaySinh;
    public $gioiTinh;

    public function __construct($hoTen, $ngaySinh, $gioiTinh) {
        $this->hoTen = $hoTen;
        $this->ngaySinh = $ngaySinh;
        $this->gioiTinh = $gioiTinh;
    }

    public function hienThi() {
        return "<td>{$this->hoTen}</td><td>{$this->ngaySinh}</td><td>{$this->gioiTinh}</td>";
    }
}

class SinhVien extends Nguoi {
    public $maSV;
    public $nganh;

    public function __construct($maSV, $hoTen, $ngaySinh, $gioiTinh, $nganh) {
        parent::__construct($hoTen, $ngaySinh, $gioiTinh);
        $this->maSV = $maSV;
        $this->nganh = $nganh;
    }

    public function hienThi() {
        return "
            <tr>
                <td>{$this->maSV}</td>
                <td>{$this->hoTen}</td>
                <td>{$this->ngaySinh}</td>
                <td>{$this->gioiTinh}</td>
                <td>{$this->nganh}</td>
            </tr>
        ";
    }
}

// Tạo mảng 10 sinh viên
$dsSinhVien = [
    new SinhVien("SV001", "Nguyễn Văn Phí", "2003-01-15", "Nam", "CNTT"),
    new SinhVien("SV002", "Trần Thị Minh", "2003-03-22", "Nữ", "Kinh tế"),
    new SinhVien("SV003", "Lê An Khuê", "2002-11-09", "Nam", "Kế toán"),
    new SinhVien("SV004", "Phạm Mỹ Diệu", "2003-07-05", "Nữ", "Luật"),
    new SinhVien("SV005", "Nguyễn Trung Minh", "2003-02-28", "Nam", "Du lịch"),
    new SinhVien("SV006", "Đỗ Ngọc Lan", "2002-09-11", "Nữ", "Ngoại ngữ"),
    new SinhVien("SV007", "Trần Văn Giang", "2003-10-19", "Nam", "CNTT"),
    new SinhVien("SV008", "Hoàng Thị Yến Chi", "2003-12-30", "Nữ", "Quản trị KD"),
    new SinhVien("SV009", "Đồng Hương Trà", "2003-04-03", "Nam", "Tài chính"),
    new SinhVien("SV010", "Bùi Linh Đan", "2003-06-27", "Nữ", "Marketing")
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Danh sách sinh viên</title>
<style>
    body {
        font-family: "Segoe UI", sans-serif;
        background: #f5f7fa;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 30px;
    }
    h2 {
        color: #333;
        margin-bottom: 20px;
    }
    table {
        border-collapse: collapse;
        width: 80%;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    th, td {
        padding: 12px 16px;
        text-align: center;
    }
    th {
        background-color: #007BFF;
        color: white;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    tr:nth-child(even) {
        background-color: #f2f6fc;
    }
    tr:hover {
        background-color: #e8f0fe;
        transition: 0.2s;
    }
</style>
</head>
<body>

<h2> Danh sách sinh viên</h2>

<table>
    <tr>
        <th>Mã SV</th>
        <th>Họ tên</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Ngành</th>
    </tr>
    <?php
        foreach ($dsSinhVien as $sv) {
            echo $sv->hienThi();
        }
    ?>
</table>

</body>
</html>
