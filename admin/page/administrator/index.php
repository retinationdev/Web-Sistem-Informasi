<?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    mysqli_query($con, "INSERT INTO user (username, password, level) VALUES('$username', '$password', '$level')");
    header("location: login.php");
}

$query = mysqli_query($con, "SELECT * FROM user ORDER BY id DESC");

?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data &raquo; Administrator</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Input Data
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="username" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" />
                            </div>
                                <input type="hidden" name="level" value="admin">
                        
                            <button type="submit" name="submit" class="btn btn-success">Save</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                List Data
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(mysqli_num_rows($query)){?>
                            <?php while($row = mysqli_fetch_assoc($query)){?>
                            <tr>
                                <td><?= $row['username'];?></td>
                                <td><?= $row['password'];?></td>
                                <td><?= $row['level'];?></td>
                                <td class="center"><a href="admin.php?administrator-update=<?php echo $row['id'];?>" class="btn btn-primary btn-xs" type="button">Update</a></td>
                                <td class="center"><a href="admin.php?administrator-delete=<?php echo $row['id'];?>" class="btn btn-primary btn-xs" type="button">Delete</a></td>
                            </tr>
                            <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>