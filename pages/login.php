<?php 
	session_start();
	
//	require_once(serverConnect.php);
	
	$CONN = mysqli_connect("localhost","root","","blogger");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
//	$password = sha1($_POST['password']);
	
//	echo sha1(pass);
	$query = "SELECT * FROM `admins` WHERE adminName = '$username' AND adminPassword ='$password'";
	$result = mysqli_query($CONN, $query);
	
	if(mysqli_num_rows($result) > 0){
		$user_info = mysqli_fetch_assoc($result);
		$_SESSION['userinfo'] = $user_info;
//		echo "success in authentication";
		header('Location: ../index.php');
//		header('Location: header2.php');
	}else {
		echo "wrong authentication is entered";
	}


?>