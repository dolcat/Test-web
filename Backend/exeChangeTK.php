<?php 
include("connect.php");
if(isset($_POST['user'])){
    $user = $_POST['user'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "UPDATE `account` SET `user`='$user',`password`='$password' WHERE user = '$user'");
    if($query){
        header("Location:quanlytaikhoan.php");
    }
}
else{
    echo "khong thay";
}
?>