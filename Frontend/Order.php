<?php
include("header.php");
$id_order = "";
$name = "";
$id_customer = "";
$title = "";
$number = "";
$total_price = "";
$date = "";
if (isset($_SESSION['id_user'])) {
    $sql_donhang = "SELECT * FROM customer,account,array_book,book_list WHERE customer.id_user = '$id_user' AND customer.id_user = account.id_user AND array_book.id_customer = customer.id_customer AND array_book.id_book = book_list.id_book";
    $check = mysqli_query($conn, $sql_donhang);
    if ($check == true) {
        $don_hang = mysqli_fetch_array($check);
        $name = $don_hang['name'];
        $id_order = $don_hang['id_order'];
        $id_customer = $don_hang['id_customer'];
        $title = $don_hang['title'];
        $number = $don_hang['number_cart'];
        $total_price = $don_hang['total_price'];
        $date = $don_hang['date'];
    }
}


?>
<div class="profile_content">
    <div class="grid">
        <div class="infomation">
            <div class="info-container">
                <aside class="left_column">
                    <div class="info_image_account">
                        <div class="img_default" style="background-image: url(https://icons.iconarchive.com/icons/papirus-team/papirus-status/512/avatar-default-icon.png)"></div>
                        <div class="account_info_name">
                            Tài khoản của
                            <strong><?php echo $name ?></strong>
                        </div>
                    </div>
                    <ul class="category_profile">
                        <li><a href="profile.php"><i class="cate_profile_icon fa-solid fa-user"></i><span>Thông tin tài khoản</span></a></li>
                        <li><a href="Cart.php"><i class="cate_profile_icon fa-solid fa-cart-shopping"></i></i></i><span>Giỏ hàng</span></a></li>
                        <li><a href="Order.php"><i class="cate_profile_icon fa-solid fa-box-open"></i><span>Đơn hàng</span></a></li>
                        <li><a href="logout.php"><i class="cate_profile_icon fa-solid fa-right-from-bracket"></i></i><span>Đăng xuất</span></a></li>
                    </ul>
                </aside>
                <div class="right_column">
                    <div class="label_info">Đơn hàng</div>
                    <div class="info_list_order">
                        <div class="form_searching">
                            <form action="" method="GET">
                                <div class="order_searching_item">
                                    <input type="text" class="header_search_input" placeholder="Tìm kiếm đơn hàng của bạn..." name="key_word">
                                    <button type="submit">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>
                        <div class="infor_detail_order">
                            <span class="info_title_order">Thông tin đơn hàng</span>
                            <div class="box_order">
                                <div class="detail_info_order_left">
                                    <div class="order_detail_column">
                                        <label class="label">Tên đơn hàng: </label>
                                        <label><?php echo $name ?></label>
                                    </div>
                                    <div class="order_detail_column">
                                        <label class="label">Tổng tiền: </label>
                                        <label><?php echo $name ?></label>
                                    </div>
                                    <div class="order_detail_column">
                                        <label class="label">Thời gian mua: </label>
                                        <label><?php echo $name ?></label>
                                    </div>
                                    <div class="order_detail_column">
                                        <label class="label">Danh sách sản phẩm đã mua: </label>
                                        <label><?php echo $name ?></label>
                                    </div>
                                </div>
                                <div class="detail_info_order_right">
                                    <div class="order_detail_column">
                                        <label class="label">Phương thức mua hàng: </label>
                                        <label><?php echo $name ?></label>
                                    </div>
                                    <div class="order_detail_column">
                                        <label class="label">Phương thức thanh toán: </label>
                                        <label><?php echo $name ?></label>
                                    </div>
                                    <div class="order_detail_column">
                                        <label class="label">Trạng thái: </label>
                                        <label><?php echo $name ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include("footer.php");
?>
</body>

</html>