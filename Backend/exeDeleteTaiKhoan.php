<?php 
include("connect.php");
if(isset($_GET['id_user'])){
    $id_user = $_GET['id_user'];
	$sql_select_customer = "SELECT * FROM `customer` WHERE `id_user` = '$id_user'";
	$cus = mysqli_query($conn, $sql_select_customer);
	$row = mysqli_fetch_array($cus);
	$id_customer = $row['id_customer'];
	$sqlDeleteArray = "DELETE FROM `array_book` WHERE id_customer = '$id_customer'";
	$check1 = mysqli_query($conn, $sqlDeleteArray);
	$sqlDeleteOrder = "DELETE FROM `don_hang` WHERE id_customer = '$id_customer'";
	$check2 = mysqli_query($conn, $sqlDeleteOrder);
	$sqlDeleteCart = "DELETE FROM `cart` WHERE id_customer = '$id_customer'";
	$check3 = mysqli_query($conn, $sqlDeleteCart);
	$sqlDeleteCus = "DELETE FROM `customer` WHERE id_customer = '$id_customer'";
	$check4 = mysqli_query($conn, $sqlDeleteCus);
    $sqlDeleteUser = "DELETE FROM `account` WHERE id_user = '$id_user'";
    $check = mysqli_query($conn, $sqlDeleteUser);
    if($check == true){
        mysqli_close($conn);
        header("location: quanlytaikhoan.php");
    }
}
else{
    echo "Khong co";
}
?>
