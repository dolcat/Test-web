<?php 
include("connect.php");
if(isset($_GET['id_order'])){
    $id_order = $_GET['id_order'];
    $sqlDeleteorder = "DELETE FROM `don_hang` WHERE id_order = '$id_order'";
    $check = mysqli_query($conn, $sqlDeleteorder);
    if($check == true){
        mysqli_close($conn);
        header("location: quanlydonhang.php");
    }
}
else{
    echo "Ko co";
}
?>