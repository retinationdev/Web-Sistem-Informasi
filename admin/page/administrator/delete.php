<?php
if(isset($_GET['administrator-delete'])){
	$id = $_GET['administrator-delete'];
	
	mysqli_query($con, "DELETE FROM user WHERE id = '$id'");
	header("location: admin.php?administrator");
}
?>