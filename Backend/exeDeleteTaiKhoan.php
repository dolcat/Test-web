<?php 
include("connect.php");
if(isset($_GET['id_user'])){
    $id_user = $_GET['id_user'];
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