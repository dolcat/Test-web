<?php
include("connect.php");

if (isset($_POST['name']) && isset($_SESSION['id_customer'])) {
    $id_cus = $_SESSION['id_customer'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql_UpdateProfile = "UPDATE `customer` SET `name`='$name',
    `phone`='$phone',`address`='$address' WHERE `id_customer` = '$id_cus'";
    $query = mysqli_query($conn, $sql_UpdateProfile);
    if($query){
        header("Location:completePay.php");
    }
}