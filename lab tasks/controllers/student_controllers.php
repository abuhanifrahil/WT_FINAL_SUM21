<?php
include 'models/db_config.php';
$name="";
$err_name="";
$dob="";
$err_dob="";
$credit="";
$err_credit="";
$cgpa="";
$err_cgpa="";
$dept_id="";
$err_dept_id="";
$dept_name="";
$err_dept_name=""
//$err_db="";
$hasError=false;
if(isset($_POST["Addstudent"])){
	
	if(empty($_POST["name"])){
		$hasError= true;
		$err_name="name required";
	}
	else{
		$name=$_POST["name"];
	}
		if(empty($_POST["dob"])){
		$hasError= true;
		$err_dob="dob required";
	}
	else{
		$dob=$_POST["dob"];
	}
		if(empty($_POST["dob"])){
		$hasError= true;
		$err_dob="dob required";
	}
	else{
		$dob=$_POST["dob"];
	}
		if(empty($_POST["credit"])){
		$hasError= true;
		$err_credit="credit required";
	}
	else{
		$credit=$_POST["credit"];
	}
		if(empty($_POST["dept_id"])){
		$hasError= true;
		$err_dept_id="dept_id required";
	}
	else{
		$dept_id=$_POST["dept_id"];
	}
			if(empty($_POST["dept_name"])){
		$hasError= true;
		$err_dept_name="dept_name required";
	}
	else{
		$dept_name=$_POST["dept_name"];
	}
	if(!$hasError){
	$rs= insertstudent($_POST["name"]);
	if($rs=== true){
		header("Location: Allstudent.php");
	}
	//$err_db = $rs;
	
}
}
function insertstudent($name,$dob,$credit,$cgpa,$dept_id,$dept_name){
	$query = "insert into student values (NULL,'$name','$dob','$cgpa','$dept_id','$dept_name')";
	return execute($query);
}
function updatestudent($credit,$cgpa,$dept_id,$dept_name){
	$query = "update into student values (NULL,'$dob','$cgpa','$dept_id','$dept_name')";
	return execute($query);
?>

