<?php
    session_start();
    $id_user = $_SESSION['id_user'];
    include 'connect.php';
    $id_book = $_GET['id_book'];
    $query_cart = "DELETE FROM giohang WHERE id_book = $id_book";
    $result_cart = mysqli_query($con, $query_cart);
    header("location: Cart.php");
?>
