<?php 
include("connect.php");
if(isset($_POST['id_danhmuc'])){
    $id = $_POST['id_danhmuc'];
    $ten = $_POST['ten_danhmuc'];

    $query = mysqli_query($conn, "UPDATE `danh_muc` SET `id_danhmuc`='$id',`ten_danhmuc`='$ten' WHERE id_danhmuc = '$id'");
    if($query){
        header("Location:quanlydanhmuc.php");
    }
}
else{
    echo "khong thay";
}