<?php include 'views/header.php'; ?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Nav -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SHOP ONLINE</a>
        </div>

        <!-- Nav câp 1 -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#"><span class="glyphicon glyphicon-info-sign"></span> Giới Thiệu</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-calendar"></span>Tin Tức</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-envelope"></span>Liên Hệ</a>
                </li>
            </ul>

            <div class="navbar-right">
                <button class="btn btn-danger navbar-btn">Đăng ký</button>
                <button class="btn btn-info navbar-btn">Đăng nhập</button>
            </div>
        </div>
        <!-- /.navbar-collapse -->


    </div>
    <!-- /.container -->
</nav>
<!-- /Navigation -->


<div class="container">
    <!-- /Banner -->
    <!--
    <div class="jumbotron">
        <h1>Website Quản Lý Phòng Máy</h1>
    </div>
    -->
    <!-- /Slogan -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tổ quản lý phòng máy - Khoa Kỹ Thuật - Công Nghệ - Môi Trường</h1>
        </div>
    </div>
    <!-- Pagination -->
    <?php include 'left_sidebar.php'; ?>
    <?php include 'content.php'; ?>
    <?php include 'right_sidebar.php'; ?>
    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination">
                <li>
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->
</div>

<!-- jQuery -->
<script src="../libs/jquery/jquery-1.11.2.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../libs/bootstrap/js/bootstrap.min.js"></script>
<!-- /.container -->
<?php include 'views/footer.php'; ?>