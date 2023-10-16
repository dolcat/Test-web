<?php 
include("connect.php");
if(isset($_POST['user'])){
    $user = $_POST['user'];
	$password = $_POST['password'];
	$sql1="SELECT * from `account` where user='$user'";
    $rs=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($rs)>0){
         // header("Location: dangki.php");
         echo "Tài khoản $user đã tồn tại";
	}
    else{
		$sql = "INSERT INTO `account`(`user`, `password`) VALUES ('$user', '$password')";
		$query = mysqli_query($conn, $sql);
		if($query){
			header("Location: quanlytaikhoan.php");
		}
		else{
			echo "Can't insert!";
		}
	}
}
else{
    echo"khong co";
}