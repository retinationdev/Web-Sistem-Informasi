<?php
if(isset($_GET['lap-delete'])){
	$id = $_GET['lap-delete'];
	mysqli_query($con, "DELETE FROM form WHERE id = '$id'");
	header("location: admin.php?laporan");

}

?>