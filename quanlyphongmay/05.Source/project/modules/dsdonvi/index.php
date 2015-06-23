<?php
require_once('../../util/main.php');
require_once('../../model/donvidb.php');

if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} 
else {
    $action = 'hienthi_ds_donvi';
}

switch ($action) {
    case 'hienthi_ds_donvi':
        include 'ds_donvi.php';
        break;
    default:
        $error = 'Lỗi hệ thống: Chưa chọn hành động ' . $action;
        include('errors/error.php');
        break;
}
?>