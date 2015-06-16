<?php include 'view/header.php'; ?>
<div id="main">
    <h1 class="top">Lỗi cơ sở dữ liệu</h1>
    <p>Kết nối đến cơ sở dữ liệu này bị lỗi.</p>
    <p>Kiểm tra lại các cấu hình của máy chủ cơ sở dữ liệu</p>
    <p>Thông báo lỗi: <?php echo $error_message; ?></p>
    <p>&nbsp;</p>
</div><!-- end main -->
<?php include 'view/footer.php'; ?>
