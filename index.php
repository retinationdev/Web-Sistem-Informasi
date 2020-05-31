<?php
session_start();
include 'function/config.php';
ob_start();
if(!isset($_SESSION['user_username'])) header("location: login.php");
?>
<!DOCTYPE html>
<html>
<?php include("include/head.php") ?>
<body>
    <div id="wrapper">
        <?php include("include/header.php") ?>
        <div id="page-wrapper">
            <?php
            if (isset($_GET["form"])) include("page/form/form.php");
            else if (isset($_GET["register"])) include("register.php");
            else include("page/home/index.php");
            ?>
        </div>
    </div>
    <?php include("include/footer.php") ?>
</body>
</html>
<?php
ob_end_flush();
mysqli_close($con);
?>