<?php 
include("connect.php");

if(isset($_GET['id_danhmuc'])){
    $id_dm = $_GET['id_danhmuc'];

    $sqlDeleteDm = "DELETE FROM `danh_muc` WHERE id_danhmuc = '$id_dm'";
    $check = mysqli_query($conn, $sqlDeleteDm);
    if($check == true){
        mysqli_close($conn);
        header("location: quanlydanhmuc.php");
    }
}
else{
    echo "Ko co";
}