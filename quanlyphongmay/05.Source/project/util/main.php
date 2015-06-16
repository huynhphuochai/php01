<?php
session_start();

// to ensure that all errors/warnings/notices are displayed
error_reporting(E_ALL|E_STRICT);

ini_set('display_errors', true);

// set up default time zone
date_default_timezone_set('Europe/London');

// Lấy đường dẫn thư mục gốc. D:/OneDrive/www
$doc_root = $_SERVER['DOCUMENT_ROOT'];

// Lấy url./php_traning/teacher/shop_online_2.0/admin/
$uri = $_SERVER['REQUEST_URI'];

//Tách thành mảng dirs
$dirs = explode('/', $uri);

//Khi thư mục ứng dụng là 1 cấp so với www
$app_path = '/' . $dirs[1] . '/' . $dirs[2] . '/' . $dirs[3] . '/' . $dirs[4] . '/';
// Biến app_path lấy đường dẫn hiện tại của ứng dụng.
set_include_path($doc_root . $app_path);

// Hàm hiển thị các lỗi
function display_db_error($error_message) {
    global $app_path;
    include 'error/db_error.php';
    exit;
}

function display_error($error_message) {
    global $app_path;
    include 'error/error.php';
    exit;
}

//Chuyển hướng
function redirect($url) {
    session_write_close();
    header("Location: " . $url);
    exit;
}

?>
