<?php

include("connect.php");
if (isset($_POST['delivery_method']) && isset($_SESSION['id_customer'])) {
    $id_customer = $_SESSION['id_customer'];
    $check = $_POST['check'];
    $payment = $_POST['method-payment'];
    $delivery = $_POST['delivery_method'];
    $time = $_POST['time'];
    $name_order = mt_rand(1000, 9999);
    if ($check == "cus") {
        $price = 0;
        $queryPrice = mysqli_query($conn, "SELECT * FROM book_list,cart WHERE book_list.id_book = cart.id_book");
        if ($queryPrice) {
            while ($priceOrder = mysqli_fetch_array($queryPrice)) {
                $price += $priceOrder['price'];
            }
        }
        $sqlCreateOrder = "INSERT INTO `don_hang`(`id_customer`, `name_order`, `total_money`, `payment`, `delivery_method`,`date`)
         VALUES('$id_customer','$name_order','$price','$payment','$delivery','$time')";
        $queryCreate = mysqli_query($conn, $sqlCreateOrder);

        if ($queryCreate) {
            $sqlGetIdOrder = mysqli_query($conn, "SELECT * FROM don_hang WHERE id_customer = '$id_customer' AND date = '$time';");
            if ($sqlGetIdOrder) {
                $arrIdOrder = mysqli_fetch_array($sqlGetIdOrder);
                $idOrder = $arrIdOrder['id_order'];
                unset($arrIdOrder);
            }
            
            $sqlCart = "SELECT * FROM book_list JOIN cart ON book_list.id_book = cart.id_book WHERE cart.id_customer = '$id_customer';";
            $queryTakeAllCart = mysqli_query($conn, $sqlCart);
            if ($queryTakeAllCart) {
                while ($arrCart = mysqli_fetch_array($queryTakeAllCart)) {
                    $total_price = $arrCart['price'] * $arrCart['number_cart'];
                    $sqlAddingtoArr = "INSERT INTO `array_book`(`id_order`, `id_customer`, `id_book`, `number_cart`, `total_price`) 
                        VALUES ('$idOrder','$id_customer',".$arrCart['id_book'].",".$arrCart['number_cart'].",'$total_price')";
                    $queryAddingtoArr = mysqli_query($conn, $sqlAddingtoArr);
                }
                $queryDeleteCart = mysqli_query($conn, "DELETE FROM cart WHERE id_customer = '$id_customer'");
                if ($queryDeleteCart) {
                    header("Location: Order.php");
                }
            } 
            else {
                echo "Khong dung query tim kiem gio hang";
            }
        }
    } else {
        $price = 0;
        $queryBook = mysqli_query($conn, "SELECT * FROM book_list WHERE id_book = '$check'");

        if ($queryBook) {
            $arrPrice = mysqli_fetch_array($queryBook);
            $price = $arrPrice['price'];
            $sqlCreateOrder = "INSERT INTO `don_hang`(`id_customer`, `name_order`, `total_money`, `payment`, `delivery_method`, `date`)
            VALUES ('$id_customer','$name_order','$price','$payment','$delivery','$time')";
            $queryCreateOrder = mysqli_query($conn, $sqlCreateOrder);
            $sqlGetIdOrder = mysqli_query($conn, "SELECT * FROM don_hang WHERE id_customer = '$id_customer' AND date = '$time'");
            if ($sqlGetIdOrder) {
                $arrIdOrder = mysqli_fetch_array($sqlGetIdOrder);
                $idOrder = $arrIdOrder['id_order'];
                $sqlInsertBook = "INSERT INTO `array_book`(`id_order`, `id_customer`, `id_book`, `number_cart`, `total_price`) 
                    VALUES ('$idOrder','$id_customer','$check','1','$price')";
                $queryInsertArr = mysqli_query($conn, $sqlInsertBook);
                if ($queryInsertArr) {
                    header("Location:Order.php");
                }
            }
        }
    }
}
