<?php
	include('connect.php');
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
			$sql2= "INSERT INTO `account` (user, password) VALUE('$User','$Password')";
			$result1 =mysqli_query($conn,$sql2) or die("Thêm TK MK thất bại");
			$sql3="SELECT * from `account` where User='$User'";
			$result=mysqli_query($conn,$sql3);
			$row=mysqli_fetch_object($result);
			$id_user=$row->id_user;
			$query  = "INSERT INTO `customer` (`id_user`, `phone`) VALUE('$id_user','$phone')";
			$result2 = mysqli_query($conn, $query) or die("Thêm số điện thoại thất bại");
			$queryIDUser = mysqli_query($conn, "SELECT * FROM customer WHERE id_user = '$id_user'");
			if($queryIDUser){
				$idCus = mysqli_fetch_array($queryIDUser);
				$queryCreateCart = "INSERT INTO `cart`(`id_customer`) VALUES ('".$idCus['id_customer']."')";
				$idCustumor = mysqli_query($conn,$queryCreateCart);
			}
        	header('location: Login.php');
		}
	}
	else{
		echo "<p> Bạn cần nhập đầy đủ thông tin </p>";
	}
?>