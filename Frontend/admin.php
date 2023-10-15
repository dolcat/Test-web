<?php
include("connect.php");
if (isset($_POST['user'])) {
	$user1 = $_POST["user"];
	$pass1 = $_POST["pass"];

	if($user1 == "admin" && $pass1 == "admin"){
		header("Location:../Backend/index.php");
	}
	else{
	//Tạo câu truy vấn
	$sql = "SELECT * FROM `account` WHERE user ='$user1' AND password = '$pass1'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		$tk = mysqli_fetch_array($query);
		$_SESSION['user'] = $tk['user'];
		$_SESSION['pass'] = $tk['pass'];
		$_SESSION['id_user'] = $tk['id_user'];
		
		$query2 = mysqli_query($conn,"SELECT * FROM customer WHERE id_user = '".$tk['id_user']."'");
		if($query2){
			$cus = mysqli_fetch_array($query2);
			$_SESSION['id_customer'] = $cus['id_customer'];
		}

		header("Location: index.php");

	} else {
		header("Location: Login.php");
	}}
}
