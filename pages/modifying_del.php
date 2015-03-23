<?php
//	require_once('../includes/functions.php');
		
	$con = mysqli_connect("localhost", "root", "", "blogger");
	if(isset($_POST['id'])){
		$id_num = $_POST['id'];	
		$query = "DELETE FROM `blogger` WHERE id = $id_num";
		$result = mysqli_query($con, $query);
	}
?>