<?php 
require 'db.php';
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == 'GET'){
	$query=mysqli_query($con,"SELECT * FROM `tbl_user` ORDER BY `tbl_user`.`id` DESC ");
	while ($r=mysqli_fetch_array($query)) {
		$output[]=$r;
	}
	echo json_encode($output);
}else{
	$data=json_decode(file_get_contents("php://input"));
	if(count($data)>0){
		$fname=mysqli_real_escape_string($con, $data->fname);
		$lname=mysqli_real_escape_string($con, $data->lname);

		$query="INSERT INTO tbl_user(first_name,last_name)
				VALUES (\"$fname\",\"$lname\")";
		if(mysqli_query($con, $query)){
			echo "Data Inserted success ...";
		}else{
			echo "Error";
		}
	}
}


?>