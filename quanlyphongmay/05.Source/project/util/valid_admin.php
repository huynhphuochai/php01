<?php
    //Kiểm tra người dùng có phải là admin không
    if (!isset($_SESSION['admin'])) {
        header('Location: ' . $app_path. 'admin/account/');
    }
?>
