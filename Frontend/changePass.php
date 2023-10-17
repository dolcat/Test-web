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
	if($pass_old == $row['password']){
		if($new_pass != $new_pass1){
		echo "Mật khẩu không khớp";
		}else{
			$sql_UpdatePass = "UPDATE `account` SET `password`='$new_pass' WHERE `id_user` = '$id_user'";
			$query = mysqli_query($conn, $sql_UpdatePass);
			if($query){
				header("Location:profile.php");
			}
		}
	}else{
		echo "Mật khẩu cũ không đúng";
	}
}