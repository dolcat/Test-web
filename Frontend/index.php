<?php
include('header.php');
unset($_SESSION['stateOne']);
unset($_SESSION['stateArr']);
?>

<head>
    <title>Trang Chủ</title>
</head>
<!-- content -->
<div class="content">
    <div class="grid">
        <div class="grid_row">
            <div class="grid_column-2">
                <nav class="category">
                    <h3 class="category_heading" style="border-bottom: 1px solid rgba(0, 0, 0, 0.05);">
                        <i class="category_heading-icon fa-solid fa-list"></i>
                        Danh mục
                    </h3>
                    <ul class="category-list">
                        <?php
                        $sql_danhmuc = "select * from danh_muc";
                        $query_dm = mysqli_query($conn, $sql_danhmuc);

                        while ($dm = mysqli_fetch_array($query_dm)) {
                        ?>
                            <li class="category_item">
                                <a href="searching.php" class="category_item_link" onclick="sendDanhMuc(<?php echo $dm['id_danhmuc'] ?>)"><?php echo $dm['ten_danhmuc'] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
            <div class="grid_column-10">
                <!-- <div class="author_filter">
                        <span class="author_filter_label"></span>
                        <button class="btn"></button>
                    </div> -->
                <div class="home-product">
                    <!-- product -->
                    <div class="grid_row">

                        <div class="row_danhmuc">
                            <div class="row_danhmuc_label">
                                <div class="fanpages_label">Có thể bạn yêu thích</div>
                            </div>
                            <div class="row_content">
                                <?php
                                $sql = "SELECT * FROM `book_list` GROUP BY id_book ORDER BY RAND() LIMIT 5;";
                                $query = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($query)) { ?>
                                    <a class="grid_column-2-4" href="sanpham.php?key=" <?php $row['title'] ?> name="key" onclick="sendValue(<?php echo $row['id_book'] ?>)">
                                        <div class="home-product-item">
                                            <div class="home-product-item_img" style="background-image: url(<?php echo $row['img'] ?>); ">
                                            </div>
                                            <h4 class="home-product-item_name">
                                                <?php echo $row['title'] ?>
                                            </h4>
                                            <div class="home-product-item_price_discount">
                                                <span class="home-product-item_price"><?php echo $row['price'] ?></span>
                                                <span class="home-product-item_discount">30%</span>
                                            </div>
                                            <div class="home-product-item_publisher_author">
                                                <span class="home-product-item_publisher"><?php echo $row['bookstore'] ?></span>
                                                <span class="home-product-item_author"><?php echo $row['author'] ?></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        <div class="row_danhmuc">
                            <div class="row_danhmuc_label">
                                <div class="fanpages_label">Sách được đề xuất</div>
                            </div>
                            <div class="row_content">
                                <?php
                                $sql = "SELECT * FROM `book_list` GROUP BY id_book ORDER BY RAND() LIMIT 5;";
                                $query = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($query)) { ?>
                                    <a class="grid_column-2-4" href="sanpham.php?product=" <?php $row['title'] ?> name="key" onclick="sendValue(<?php echo $row['id_book'] ?>)">
                                        <div class="home-product-item">
                                            <div class="home-product-item_img" style="background-image: url(<?php echo $row['img'] ?>); ">
                                            </div>
                                            <h4 class="home-product-item_name">
                                                <?php echo $row['title'] ?>
                                            </h4>
                                            <div class="home-product-item_price_discount">
                                                <span class="home-product-item_price"><?php echo $row['price'] ?></span>
                                                <span class="home-product-item_discount">30%</span>
                                            </div>
                                            <div class="home-product-item_publisher_author">
                                                <span class="home-product-item_publisher"><?php echo $row['bookstore'] ?></span>
                                                <span class="home-product-item_author"><?php echo $row['author'] ?></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
</div>

<!-- footer -->
<?php
include('footer.php');
if (isset($_GET['check'])) {
    $check = $_GET['check'];
    if ($check == "a") {
?>
        <script>
            alert("Thêm vào giỏ hàng thành công!\nMời bạn tiếp tục mua sắm!");
        </script>
    <?php
    } else if ($check == "b") {
    ?>
        <script>
            alert("Sản phẩm đã có sẵn trong giỏ hàng!\nĐã thêm số lượng trong giỏ hàng!");
        </script>
<?php
    }
    unset($_GET['check']);
} else {
    echo "ko co";
}

?>
<script>
    function sendValue(value) {
        document.cookie = "value=" + value;
    }

    function sendDanhMuc(danhmuc) {
        document.cookie = "danhmuc=" + danhmuc;
    }

    function incrementBook() {
        alert("Sản phẩm đã được tăng số lượng trong giỏ hàng!");
    }
</script>

</body>

</html>

<?php
mysqli_close($conn);
?>