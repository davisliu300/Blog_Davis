<?php //add

	$con = mysqli_connect("localhost", "root", "", "blogger");
	$subject = $_POST['subject'];
	$currentDate = date('Y-m-d h:i:sa');
	$detail_contents = $_POST['detail_contents'];	
	$query = 'INSERT INTO blogger (`subject`, `detail_contents`, `timestamp`) VALUES (';
	// `timestamp`) VALUES (';
	
	$query .= '"'.$subject.'",';
	$query .= '"'.$detail_contents.'",';
	$query .= '"'.$currentDate.'")';    
	
	$result = mysqli_query($con, $query);
	
?>
