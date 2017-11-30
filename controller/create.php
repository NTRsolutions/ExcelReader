<?php

session_start();
if(isset($_FILES['excell_file']))
{
	$target_dir = "../xlsxFiles/";
	$file_name  = $_FILES['excell_file']['name'];
	//$file_size  = $_FILES['excell_file']['size'];
	$file_tmp   = $_FILES['excell_file']['tmp_name'];
	//$file_type  = $_FILES['excell_file']['type'];
	move_uploaded_file($file_tmp,$target_dir.$file_name);
}

$conversionFile = $target_dir.$file_name;
include ('../Excel_Reader.php');

$_SESSION['Success'] = "File Created Successfully";
echo '<br>';
if (headers_sent()) {
	die("Redirect failed. Please click on this link: <a href='http://localhost/PhpExcel/index.php'>Back</a>");
}
else{
	exit(header("Location:http://localhost/PhpExcel/index.php"));
}
