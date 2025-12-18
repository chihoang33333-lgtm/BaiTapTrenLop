<?php
// Tạo màu ngẫu nhiên RGB
$r = rand(0, 255);
$g = rand(0, 255);
$b = rand(0, 255);
$mau_nen = "rgb($r, $g, $b)";
?>

<!DOCTYPE html>
<html>
<body style="background-color: <?php echo $mau_nen; ?>; transition: 0.5s; text-align: center; color: white;">
    
    <div style="margin-top: 20%; font-family: sans-serif;">
        <h1>Màu nền hôm nay là: <?php echo $mau_nen; ?></h1>
        <p>Bấm F5 (Refresh) để đổi màu khác nhé!</p>
    </div>

</body>
</html>