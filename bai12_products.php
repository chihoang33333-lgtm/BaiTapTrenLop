<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Shop Quần Áo</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; }
        .container { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; width: 900px; margin-top: 50px; }
        .card { background: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); overflow: hidden; transition: transform 0.3s; }
        .card:hover { transform: translateY(-10px); }
        .card img { width: 100%; height: 200px; object-fit: cover; }
        .info { padding: 15px; text-align: center; }
        .name { font-weight: bold; font-size: 18px; margin-bottom: 10px; }
        .price { color: #d32f2f; font-size: 20px; font-weight: bold; }
        .btn { display: inline-block; padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px; margin-top: 10px; }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Dữ liệu giả lập (thường lấy từ Database)
    $products = [
        ["name" => "Áo Thun Basic", "price" => 150000, "img" => "https://via.placeholder.com/300x200/FF5733/FFF?text=Ao+Thun"],
        ["name" => "Quần Jean Nam", "price" => 350000, "img" => "https://via.placeholder.com/300x200/33FF57/FFF?text=Quan+Jean"],
        ["name" => "Giày Sneaker", "price" => 850000, "img" => "https://via.placeholder.com/300x200/3357FF/FFF?text=Sneaker"],
        ["name" => "Đồng hồ Casio", "price" => 1200000, "img" => "https://via.placeholder.com/300x200/FF33A8/FFF?text=Dong+Ho"],
        ["name" => "Kính mát Rayban", "price" => 500000, "img" => "https://via.placeholder.com/300x200/FFFF33/000?text=Kinh+Mat"],
        ["name" => "Balo Du Lịch", "price" => 450000, "img" => "https://via.placeholder.com/300x200/33FFFF/000?text=Balo"],
    ];

    foreach ($products as $sp) {
        // Hàm number_format dùng để định dạng tiền tệ (thêm dấu chấm phân cách)
        $gia_dep = number_format($sp['price'], 0, ',', '.') . ' đ';
        echo "
        <div class='card'>
            <img src='{$sp['img']}' alt='Anh san pham'>
            <div class='info'>
                <div class='name'>{$sp['name']}</div>
                <div class='price'>$gia_dep</div>
                <a href='#' class='btn'>Mua Ngay</a>
            </div>
        </div>";
    }
    ?>
</div>

</body>
</html>