<?php 
include("connect.php");
if(isset($_POST['id_danhmuc'])){
    $id = $_POST['id_danhmuc'];
    $ten = $_POST['ten_danhmuc'];

    $sql = "INSERT INTO `danh_muc`(`id_danhmuc`, `ten_danhmuc`) VALUES ('$id','$ten')";
    $query = mysqli_query($conn, $sql);
    if($query){
        header("Location:quanlydanhmuc.php");

    }
    else{
        echo "Cant insert!";
    }
}
else{
    echo"khong co";
}