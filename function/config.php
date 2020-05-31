<?php

$server = '127.0.0.1:3307';
$user = 'root';
$password = '';
$dbname = 'kinerja';

$con = mysqli_connect($server, $user, $password, $dbname) or die(mysqli_error($con));

if(!$con){
	die("Connection Failed").mysqli_connect();
}else{
	//echo "connection Success";
}
?>