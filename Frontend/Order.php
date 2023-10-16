<?php
include("header.php");
$id_order = "";
$name = "";
$id_customer= "";
$title = "";
$number= "";
$total_price= "";
$date= "";
if (isset($_SESSION['id_user'])) {
    $sql_donhang = "SELECT * FROM customer,account,array_book,book_list WHERE customer.id_user = '$id_user' AND customer.id_user = account.id_user AND array_book.id_customer = customer.id_customer AND array_book.id_book = book_list.id_book";
    $check = mysqli_query($conn, $sql_donhang);
    if ($check == true) {
        $don_hang = mysqli_fetch_array($check);
		$name = $don_hang['name'];
		$id_order= $don_hang['id_order'];
        $id_customer= $don_hang['id_customer'];
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
                    <div class="info">
                        <div class="info_left">
							<div class="header_with_search" style="display: inline-flex; height: 70px;">
								<form action="searching.php" method="GET">
									<div class="header_search" style="flex: 1;">
										<input type="text" class="header_search_input" placeholder="Tìm kiếm sách bạn muốn..." name="key_word">
										<!-- <div class="header_search_selection">
										<span class="header_search_select-label">Thể loại</span>
										<i class="header_search_select-icon fa-solid fa-chevron-down" style="padding: 0 16px;"></i>
										<ul class="header_search-option">
											<li class="header_search_option-item">
												<span>Triết học</span>
											</li>
											<li class="header_search_option-item">
												<span>Khoa học</span>
											</li>
											<li class="header_search_option-item">
												<span>Y học</span>
											</li>
										</ul>
									</div> -->
										<button class="header_search_btn" name="btn_search">
											<i class="header_search_btn-icon fa-solid fa-magnifying-glass"></i>
										</button>
									</div>
								</form>
            			</div>
                            <span class="info_title">Thông tin đơn hàng</span>
                            <div class="detail_info">
                                <form action="updateProfile.php" method="post">
                                    <div class="fomr_info">
                                        <div class="form_avatar">
                                            <div class="avatar_detail">
                                                <div class="avatar_view">
                                                    <img src="https://salt.tikicdn.com/cache/368x368/ts/product/87/08/0e/db4f09b6ee8bc317f097ebcca1933a2d.png.webp" alt="avatar" class="avatar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_name">
                                            <div class="form-control">
                                                <div class="label_name">Tên sản phẩm</div>
                                                <div class="input_info name">
                                                    <div><?php echo $title ?></div>
                                                </div>
                                            </div>
                                            <div class="form-control">
                                                <div class="label_name">Tổng tiền</div>
                                                <div class="input_info nickname">
                                                    <div><?php echo $total_price ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-control">
                                        <div class="label_name">&nbsp;</div>
                                        <div class="input_info name">
                                            <button class="btn_submit" type="submit">Xem chi tiết</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="info_center"></div>
                        <div class="info_right"></div>
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
