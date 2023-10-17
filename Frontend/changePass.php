<?php
include("connect.php");

if (isset($_POST['pass_old']) && isset($_SESSION['id_user'])) {
	$id_user = $_SESSION['id_user'];
    $pass_old = $_POST['pass_old'];
    $new_pass = $_POST['new_pass'];
    $new_pass1 = $_POST['new_pass1'];
	$sql_select_pass = "SELECT * FROM `account` WHERE `id_user` = '$id_user'";
	$query1 = mysqli_query($conn, $sql_select_pass);
	$row = mysqli_fetch_array($query1);
	$pass_check = "";
	if($pass_old == $row['password']){
		if($new_pass != $new_pass1){
			$pass_check = "2";
			echo "Mật khẩu không khớp";
		}else{
			$pass_check = "3";
		}	
	}else{
		$pass_check = "1";
		echo "Mật khẩu cũ không đúng";
	}
	if($pass_check == "3"){
		$sql_UpdatePass = "UPDATE `account` SET `password`='$new_pass' WHERE `id_user` = '$id_user'";
		$query = mysqli_query($conn, $sql_UpdatePass);
		if($query){
			header("Location:profile.php?checkpass=a");
		}else{
			echo "Cant update!";
		}
	}else if($pass_check == "1"){
		header("Location:profile.php?checkpass=b");
	}
	else if($pass_check == "2"){
		header("Location:profile.php?checkpass=c");
	}
}
