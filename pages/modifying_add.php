<?php //add
if(isset($_SESSION['userinfo'])){
	$user_info = $_SESSION['userinfo'];
//	echo "you've logged in as " . $_SESSION['userinfo']['adminName'];
}else{
//	echo "not logged in";
}

	$con = mysqli_connect("localhost", "root", "", "blogger");
	$subject = $_POST['subject'];
	$currentDate = date('Y-m-d h:i:sa');
	$detail_contents = $_POST['detail_contents'];	
	echo "hellow";
	if(isset($user_info)){
		echo "hellow2";
		$query = 'INSERT INTO blogger (`subject`, `detail_contents`, `timestamp`) VALUES (';
		// `timestamp`) VALUES (';		
		$query .= '"'.$subject.'",';
		$query .= '"'.$detail_contents.'",';
		$query .= '"'.$currentDate.'")';    
		
		$result = mysqli_query($con, $query);
	}
	
?>
