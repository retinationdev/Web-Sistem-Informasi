<?php
session_start();
ob_start();
include "function/config.php";



if(isset($_SESSION['admin_username'])) header("location: index.php");
if(isset($_SESSION['user_username'])) header("location: user.php");



if(isset($_POST['submit_login'])) {
$txtUser = @$_POST['username'];
$txtPassword = @$_POST['password'];
        $sql = mysqli_query($con, "select * from user where username = '$txtUser' and password = '$txtPassword'") or die(mysql_error());
        $data = mysqli_fetch_array($sql);
        $cek = mysqli_num_rows($sql);
        if ($cek >=1) {
        if($data['level'] == "admin"){
            @$_SESSION['admin_username'] = $data['username'];
            header("location: admin.php");
}else if($data['level'] == "user"){
            @$_SESSION['user_username'] = $data['username'];
            header("location: index.php");
}else{
    header("location: login.php?failed");
}
}
}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/sb-admin.css" rel="stylesheet" />
    <link href="css/custome.css" rel="stylesheet" />
    
</head>

<body>

<article>
    <div class="container">
    <div class="row">
    <div id="title">
        <div class="col-md-12">
        <img src="asset/uin.jpg" class="img-responsive" id="" style="width: 150px; margin: auto;">
        </div>
        </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                            <?php if(isset($_GET['failed'])){?>
                               <div class="alert alert-warning" role="alert">Username dan Password Salah silakan hubungi adminstrator untuk lebih lanjut</div>
                               <?php } ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus="autofocus" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" />
                                </div>
                                <input type="submit" name="submit_login" value="Login" class="btn btn-lg btn-success btn-block"/>
                                <div class="alert alert-primary text-center" role="alert"><a href="register.php">Register?</a></div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </article>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/sb-admin.js"></script>
</body>
</html>
<?php
mysqli_close($con);
ob_end_flush();
?>