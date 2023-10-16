<?php 
include("connect.php");
if(isset($_GET['id_order'])){
    $id_order = $_GET['id_order'];
    $sqlUpdateorder = "UPDATE `don_hang` SET `status` = 'đã hoàn tất'  WHERE id_order = '$id_order'";
    $check = mysqli_query($conn, $sqlUpdateorder);
    if($check == true){
        mysqli_close($conn);
        header("location: quanlydonhang.php");
    }
}
else{
    echo "Ko co";
}
?>