<?php
session_start();
include 'function/config.php';
ob_start();
if(!isset($_SESSION['admin_username'])) header("location: login.php");
?>
<!DOCTYPE html>
<html>
<?php include("admin/include/head.php") ?>
<body>
    <div id="wrapper">
        <?php include("admin/include/header.php") ?>
        <div id="page-wrapper">
            <?php
            if (isset($_GET["form"])) include("admin/page/data/form.php");
            else if (isset($_GET["laporan"]) || isset($_GET['page'])) include("admin/page/data/laporan.php");
            else if (isset($_GET["lap-delete"])) include("admin/page/data/delete.php");
            else if (isset($_GET["lap-update"])) include("admin/page/data/edit.php");
            else if (isset($_GET["search_form"])) include("admin/page/data/search.php");
            else if (isset($_GET["chart"])) include("admin/page/data/chart.php");
            else if (isset($_GET["administrator"])) include("admin/page/administrator/index.php");
            else if (isset($_GET["administrator-delete"])) include("admin/page/administrator/delete.php");
            else if (isset($_GET["administrator-update"])) include("admin/page/administrator/update.php");
            else include("admin/page/home/home.php");
            ?>
        </div>
    </div>
    <?php include("admin/include/footer.php") ?>
</body>
</html>
<?php
mysqli_close($con);
ob_end_flush();
?>