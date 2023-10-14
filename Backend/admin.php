<?php
	$user1=$_REQUEST["user"];
	$pass1=$_REQUEST["pass"];
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
	//Chọn CSDL để làm việc
	mysqli_select_db($conn,"login") or die ("Không tìm thấy CSDL");
	//Tạo câu truy vấn
	$sql_login="Select * from `user`";
	$result_login=mysqli_query($conn,$sql_login);
//	$row=mysqli_fetch_object($result_login);
	$stt_hang=0;
while($row=mysqli_fetch_object($result_login))
{
	$stt_hang++;
	$user[$stt_hang]=$row->User;
	$pass[$stt_hang]=$row->Password;
	if($user1==$user[$stt_hang]&&$pass1==$pass[$stt_hang]){
		header("Location: fanpages.php");
		break;
	}
	else{
		header("Location: Login.php");
	}
}
