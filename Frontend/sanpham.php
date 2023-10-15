<?php
include_once('header.php');
if (!$conn) {
    die("Connect failed: " . mysqli_connect_error());
}

$key = "";
if (isset($_COOKIE['value'])) {
    $key = $_COOKIE['value'];
}

$sql = "SELECT * FROM `book_list` WHERE id_book = '" . $key . "';";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>

<head>
    <style>
        .info_column {
            display: grid;
            grid-template-columns: 55% 45%;
            gap: 4px;
        }
    </style>
</head>

<body>
    <div class="product-item">
        <div class="grid">
            <div class="grid_row">

                <div class="grid_column-3-0">
                    <div class="box_img">
                        <div class="frame_img">
                            <img src="<?php echo $row['img'] ?>" alt="" width="380px">
                        </div>
                    </div>
                </div>
                <div class="grid_column-4-0">
                    <div class="container-info">
                        <div class="container1">
                            <div class="container1_tacgia">
                                <div class="tacgia_item">
                                    <div class="chinh_hang">
                                        <i class="fa-solid fa-circle-check"></i>
                                        <span>Chính hãng</span>
                                    </div>
                                    <div class="tacgia">
                                        <span>Tác giả: </span>
                                        <span><?php echo $row['author'] ?> </span>
                                    </div>
                                </div>
                            </div>
                            <h1 class="title_book"><?php echo $row['title'] ?></h1>
                            <div class="container1_giatien">
                                <div class="price-item">
                                    <div class="price">
                                        <?php echo $row['price'] ?>
                                        <sup class="đ">đ</sup>
                                    </div>
                                </div>
                                <div class="discount">30%</div>
                            </div>
                        </div>
                        <div class="container-delivery-info">
                            <div class="label_delivery">Thông tin vận chuyển</div>
                            <div class="info_delivery">
                                <div class="info">
                                    Giao đến 54 Triều Khúc, Thanh Xuân, Hà Nội
                                </div>
                                <span style="color: rgb(10, 104, 255);">Đổi</span>
                            </div>
                        </div>
                        <div class="container_note">
                            <div class="label_note">An tâm mua sắm</div>
                            <div class="info_note">
                                <div class="info_note-item">
                                    <i class="fa-solid fa-box-archive icon"></i>
                                    <div class="text">
                                        <span><b>Được mở hộp kiểm tra</b> khi nhận hàng</span>
                                    </div>
                                </div>
                                <div class="info_note-item">
                                    <i class="fa-regular fa-credit-card icon"></i></i>
                                    <div class="text">
                                        <span><b>Được hoàn tiền 100%</b> nếu là hàng giả.</span>
                                    </div>

                                </div>
                                <div class="info_note-item" style="border-bottom:none; padding-bottom:0;">
                                    <i class="fa-solid fa-arrows-rotate icon"></i>
                                    <div class="text">
                                        <span><b>Đổi trả miễn phí 30 ngày </b> nếu sản phẩm lỗi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container_detail_info">
                            <div class="detail_info_label">
                                Thông tin chi tiết
                            </div>
                            <div class="detail_info_table">
                                <div class="detail_info_column">
                                    <div class="info_column">
                                        <span>Hàng chính hãng</span>
                                        <span>Có</span>
                                    </div>
                                </div>
                                <div class="detail_info_column">
                                    <div class="info_column">
                                        <span>Công ty phát hành</span>
                                        <span><?php echo $row['bookstore'] ?></span>
                                    </div>
                                </div>
                                <div class="detail_info_column">
                                    <div class="info_column">
                                        <span>Ngày xuất bản</span>
                                        <span><?php echo $row['publication_of_date'] ?></span>
                                    </div>
                                </div>
                                <div class="detail_info_column">
                                    <div class="info_column">
                                        <span>Kích thước</span>
                                        <span><?php echo $row['size'] ?> cm</span>
                                    </div>
                                </div>
                                <div class="detail_info_column">
                                    <div class="info_column">
                                        <span>Dịch giả</span>
                                        <span><?php echo $row['translator'] ?></span>
                                    </div>
                                </div>
                                <div class="detail_info_column">
                                    <div class="info_column">
                                        <span>Loại bìa</span>
                                        <span>Bìa <?php echo $row['cover_type'] ?></span>
                                    </div>
                                </div>
                                <div class="detail_info_column">
                                    <div class="info_column">
                                        <span>Số trang</span>
                                        <span><?php echo $row['number'] ?></span>
                                    </div>
                                </div>
                                <div class="detail_info_column" style="border-bottom:none;">
                                    <div class="info_column">
                                        <span>Nhà xuất bản</span>
                                        <span><?php echo $row['publisher'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container_summary">
                            <div class="summary_label">
                                Mô tả sản phẩm
                            </div>
                            <div class="summary_text">
                                <div class="summary_detail">
                                    <?php echo $row['description'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid_column-3-0">
                    <div class="button_buy_cart">
                        <div class="box_item">
                            <div class="box_count">
                                <div class="label_count">Số lượng</div>
                                <div class="group_input">
                                    <button class="group_input_btn tru" value="-"><i class="fa-solid fa-minus"></i></button>
                                    <input type="text" class="text_count" value="1">
                                    <button class="group_input_btn cong" value="+"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="temp_count">
                                <div class="temp_count_label">Tạm tính</div>
                                <div class="temp_count_number">
                                    <?php $price = $row['price'];
                                    ?>
                                    <div><span class="price_text"><?php echo $price ?></span>
                                        <sub class="đ">đ</sub>
                                    </div>
                                </div>
                            </div>
                            <div class="group_button_bc">
                                <button class="button_bc_buy">
                                    <span>Mua ngay</span>
                                </button>
                                <button class="button_bc_cart">
                                    <span>Thêm vào giỏ</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script src="main.js"></script>
    <?php
    include_once('footer.php');
    ?>
</body>

</html>