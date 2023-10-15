<?php
include("connect.php");

if (isset($_POST['title']) && isset($_REQUEST['id_book'])){
    $txt_idbook = $_REQUEST['id_book'];
    $txt_title = $_POST['title'];
    $txt_bookstore = $_POST['bookstore'];
    $txt_author = $_POST['author'];
    $txt_danhmuc = $_POST['danhmuc'];
    $txt_translator = $_POST['translator'];
    $txt_publisher = $_POST['publisher'];
    $txt_coverType = $_POST['cover_type'];
    $txt_numberOfPages = $_POST['number'];
    $txt_publicationDate = $_POST['publication_of_date'];
    $txt_description = $_POST['description'];
    $txt_img = $_POST['img'];
    $txt_price = $_POST['price'];
    $txt_size = $_POST['size'];

    $sql_update = "UPDATE `book_list` SET `bookstore`='$txt_bookstore',`title`='$txt_title',`id_danhmuc`='$txt_danhmuc',
    `author`='$txt_author',`translator`='$txt_translator',`publisher`='$txt_publisher',`size`='$txt_size',`cover_type`='$txt_coverType',
    `number`='$txt_numberOfPages',`publication_of_date`='$txt_publicationDate',`description`='$txt_description',`img`='$txt_img',`price`='$txt_price'
     WHERE `id_book` = '$txt_idbook'";

    $check = mysqli_query($conn, $sql_update);
    
    if($check){
        mysqli_close($conn);
        header("Location:index.php");
        
    }
    else{
        echo "Cant update";
    }

} else {
    echo "Cant execute!";
}