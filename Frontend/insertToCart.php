<?php
include("connect.php");
if (isset($_SESSION['id_customer']) && isset($_GET['id_book'])) {
    $id_cus = $_SESSION['id_customer'];
    $id_book = $_GET['id_book'];

    $sqlBook = "SELECT * FROM cart WHERE id_customer = '$id_cus'";
    $queryBook = mysqli_query($conn, $sqlBook);
    $bookCheck = "";
    $number = 0;
    if ($queryBook) {
        while ($arr = mysqli_fetch_array($queryBook)) {
            if ($id_book == $arr['id_book']) {
                $bookCheck = true;
                $number = $arr['number_cart'];
                break;
            }
            $bookCheck = false;
        }
    }

    if (!$bookCheck) {
        $sql = "INSERT INTO `cart`(`id_customer`, `id_book`, `number_cart`) 
    VALUES ('$id_cus','$id_book','1')";
        $check = mysqli_query($conn, $sql);
        if ($check) {
            header("Location: index.php?check=a");
        }
        else{
            echo "Cant insert!";
        }
    }
    else{
        $number = $number +1;
        $sql = "UPDATE `cart` SET `number_cart`='$number' WHERE id_book = '$id_book' AND id_customer = '$id_cus'";
        $check = mysqli_query($conn, $sql);
        if ($check) {
            header("Location: index.php?check=b");
        }
        else{
            echo "Cant update!";
        }
    }
}
