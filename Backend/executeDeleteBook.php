<?php 
include("connect.php");

if(isset($_GET['id_book'])){
    $id_book = $_GET['id_book'];

    $sqlDeleteBook = "DELETE FROM `book_list` WHERE id_book = '$id_book'";
    $check = mysqli_query($conn, $sqlDeleteBook);
    if($check == true){
        
        header("location: index.php");

    }
}
else{
    echo "Ko co";
}