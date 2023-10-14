<?php
	$ID_cart = $_REQUEST["ID_cart"];
	$conn = mysqli_connect("localhost", "root", "") or die("Không connect đc với máy chủ");
	//Chọn CSDL để làm việc
	mysqli_select_db($conn, "qlsach") or die("Không tìm thấy CSDL");
	$sql_del_cart = "DELETE FROM cart WHERE `cart`.`ID_cart`=$ID_cart";
	mysqli_query($conn, $sql_del_cart);
	header("Location: Cart.php");
