Sử dụng mã nguồn cần chú ý.
1.Mã nguồn đặt trong thư mục www. Nếu đặt trong thư mục cấp 2 của www thì bổ sung trong hàm main.php
2.Tất cả các tập tin php xử lý trong tầng controler chủ yếu là tập tin index.php cần phải có chèn tập tin tiện ích
    require_once '../util/init.php';
3.Các tập tin cần được xác thực quyền admin thì gọi tập tin     require_once '../util/valid_admin.php';
4.Các ứng dụng cần được xác thực https thì gọi tập tin   require_once '../util/secure_conn.php';
5.Cách chèn header, footer và sidebar trong thư mục view include 'view/header.php'
