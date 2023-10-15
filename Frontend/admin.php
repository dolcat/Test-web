<?php
include("connect.php");
if (isset($_POST['user'])) {
	$user1 = $_POST["user"];
	$pass1 = $_POST["pass"];

	//Tạo câu truy vấn
	$sql = "SELECT * FROM `account` WHERE user ='$user1' AND password = '$pass1'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		$tk = mysqli_fetch_array($query);
		$_SESSION['user'] = $tk['user'];
		$_SESSION['pass'] = $tk['pass'];
		header("Location: index.php");

	} else {
		header("Location: Login.php");
	}
}
