<?php
include("connect.php");
if (isset($_POST['title'])) {
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

    $sql_insert = "INSERT INTO `book_list`( `bookstore`, `title`, `id_danhmuc`, `author`, `translator`, `publisher`, `size`,
     `cover_type`, `number`, `publication_of_date`, `description`, `img`, `price`)  
    VALUES ('$txt_bookstore','$txt_title','$txt_danhmuc','$txt_author','$txt_translator','$txt_publisher', '$txt_size',
    '$txt_coverType','$txt_numberOfPages','$txt_publicationDate','$txt_description','$txt_img','$txt_price')";


    $check = mysqli_query($conn, $sql_insert);
    
    if($check){
        header("Location:index.php");
    }
    mysqli_close($conn);

} else {
    echo "Cant execute!";
}
