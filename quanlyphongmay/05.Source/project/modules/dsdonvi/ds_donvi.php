<?php include 'views/header.php'; ?>
<div class="container">
    <?php include 'views/banner.php'; ?>
    <?php include 'views/navigation.php'; ?>
    <?php include 'views/left_sidebar.php'; ?>    
    <div id="content">
        <div class="caption">
            <h2>Danh sách các đơn vị</h2>
        </div>
        <table class='table table-bordered table-responsive'>
            <tr>
                <th>#</th>
                <th>Mã đơn vị</th>
                <th>Tên đơn vị</th>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <div class="pagination-wrap">
                       
                    </div>
                </td>
            </tr>

        </table>



    </div>
</div>
<?php include 'views/footer.php'; ?>