<?php
	$conn = new mysqli('localhost','root','','qlsach') or die ("Không kết nối được với máy chủ");
	$User=$_POST['user'];
    $Password=$_POST['pass'];
    $Phone=$_POST['sdt'];
	if(!empty($User)&&!empty($Password)&&!empty($Phone)){
		$sql1="SELECT * from `account` where User='$User'";
        $rs=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($rs)>0){
                // header("Location: dangki.php");
              echo "<p >Tài khoản $User đã tồn tại</p>";
		}
		else{
			$sql2= "INSERT INTO `account` (User, Password) VALUE('$User','$Password')";
			$result1 =mysqli_query($conn,$sql2) or die("Thêm TK MK thất bại");
			$sql3="SELECT * from `account` where User='$User'";
			$result=mysqli_query($conn,$sql3);
			$row=mysqli_fetch_object($result);
			$ID_TK=$row->ID_TK;
			$query  = "INSERT INTO `customer` (`ID_TK`, `Phone`) VALUE('$ID_TK','$Phone')";
			$result2 = mysqli_query($conn, $query) or die("Thêm số điện thoại thất bại");
        	header('location: Login.php');
		}
	}
	else{
		echo "<p> Bạn cần nhập đầy đủ thông tin </p>";
	}
?>