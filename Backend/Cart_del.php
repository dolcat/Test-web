<?php
include("connect.php");
if (isset($_GET['id_book'])) {
    $id_book = $_GET['id_book'];
    $query_cart = "DELETE FROM cart WHERE id_book = $id_book";
    $result_cart = mysqli_query($conn, $query_cart);
    if ($result_cart) {
        header("location: ../Frontend/Cart.php");
    }
}
