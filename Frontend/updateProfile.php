<?php
include("connect.php");

if (isset($_POST['user']) && isset($_SESSION['id_customer'])) {
    $user = $_POST['fullName'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $sex = $_POST['gender'];
    $id_cus = $_SESSION['id_customer'];

    $sql_UpdateProfile = "UPDATE `customer` SET `name`='$name',`sex`='$sex',
    `phone`='$phone',`address`='$address',`email`='$email' WHERE `id_customer` = '$id_cus'";
    $query = mysqli_query($conn, $sql_UpdateProfile);
    if($query){
        header("Location:profile.php");
    }
}
