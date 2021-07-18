<?php
include 'models/db_config.php';

$uname="";
$err_uname="";
$pass="";
$err_pass="";
$err_db="";
$hasError=false;

 if (isset($_POST["btn_login"])){
	if(empty($_POST["uname"])){
		$hasError= true;
		$err_uname="username required";
	}
	else{
		$uname=$_POST["uname"];
	}
	
	if(empty($_POST["pass"])){
		$hasError= true;
		$err_pass="password required";
	}
	else{
		$pass=$_POST["pass"];
	}
	
function insertUser($name,$uname,$pass){
	$query = "insert into users values (NULL,'$name','$uname','$pass',)";
	return execute($query);
}
?>