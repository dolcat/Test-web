<?php
include('header.php');
include('connect.php');

if(isset($_COOKIE['danhmuc'])){
    $id = $_COOKIE['danhmuc'];
    
}
?>

<head>
    <title id = "title">Tìm kiếm</title>
</head>
<!-- content -->
<body>
    <div class="content">
        <div class="grid">
            <div class="grid_row">
                <div class="grid_column-10">
                    <div class="filter">
                        <div class="filter_item filter_author">
                            <span class="filter_item_label">Tác giả</span>
                            <div class="filter_item_btn">
                                <button class="btn_filter btn_author">
                                    <div class="btn_name">Nguyễn Nhật Ánh</div>
                                </button>
                                <button class="btn_filter btn_author">
                                    <div class="btn_name">Nicholas Nassim Taleb
                                </button>
                                <button class="btn_filter btn_author">
                                    <div class="btn_name">Thích Nhất Hạnh
                                </button>
                                <button class="btn_filter btn_author"><i class="btn_down fa-solid fa-chevron-down"></i></button>
                            </div>
                        </div>
                        <div class="filter_item filter_bookStore">
                            <span class="filter_item_label">Nhà Sách</span>
                            <div class="filter_item_btn">
                                <button class="btn_filter btn_bookStore">
                                    <div class="btn_name">Nguyễn Nhật Ánh</div>
                                </button>
                                <button class="btn_filter btn_bookStore">
                                    <div class="btn_name">Nicholas Nassim Taleb
                                </button>
                                <button class="btn_filter btn_bookStore">
                                    <div class="btn_name">Thích Nhất Hạnh
                                </button>
                                <button class="btn_filter btn_bookStore"><i class="btn_down fa-solid fa-chevron-down"></i></button>
                            </div>
                        </div>
                        <div class="filter_btn_filter">
                            <button class="btn_filter_all">
                                <i class="fa-solid fa-filter"></i> Tất cả
                            </button>
                        </div>
                    </div>

                    <?php
                    $sql = "";
                    $keyword = "";
                    if (isset($_GET['key_word'])) {
                        $keyword = $_GET['key_word'];
                        $sql = "Select * from book_list where title like '%" . $keyword . "%' order by id_book asc;";
                    } else {
                        $sql = "select * from book_list;";
                    }

                    $query = mysqli_query($conn, $sql);
                    ?>
                    <!-- Product -->
                    <div class="product">
                        <div class="grid_row">
                            <?php
                            while ($row = mysqli_fetch_array($query)) { ?>
                                <a class="grid_column-2-4" href="sanpham.php?product= " <?php $row['title']?> onclick="sendValue(<?php echo $row['id_book'] ?>)">
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
                                            <span class="home-product-item_publisher"><?php echo $row['id_bookstore'] ?></span>
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
    
    <script>
    function sendValue(value) {
      document.cookie = "value=" + value;
    }
  </script>

<?php
    include('footer.php');
    ?>
</body>
<script src="main.js"></script>

    