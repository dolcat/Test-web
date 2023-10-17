<?php
include("header.php");
unset($_SESSION['stateOne']);
unset($_SESSION['stateArr']);
$name = "";
if (isset($_SESSION['id_user'])) {
	$sql_select_customer = "SELECT * FROM `customer` WHERE `id_user` = '$id_user'";
	$cus = mysqli_query($conn, $sql_select_customer);
	$row = mysqli_fetch_array($cus);
	$name = $row['name'];
	$id_customer = $row['id_customer'];
    $sql_donhang = "SELECT * FROM don_hang WHERE id_customer = '$id_customer'";
    $check = mysqli_query($conn, $sql_donhang);    
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
                            <form action="searchingOrder.php" method="GET">
                                <div class="order_searching_item">
                                    <input type="text" class="header_search_input" placeholder="Tìm kiếm đơn hàng của bạn..." name="key_word">
                                    <button type="submit">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>
						<?php
								if (isset($_SESSION['id_user']) && $check == true) {
									while ($don_hang = mysqli_fetch_array($check)) {

								?>

                        <div class="infor_detail_order">
							
                            <span class="info_title_order">Thông tin đơn hàng</span>
							
                                <div class="box_order">
                                <div class="detail_info_order_left">
                                    <div class="order_detail_column">
                                        <label class="label">Tên đơn hàng: </label>
                                        <label><?php echo $name_order = $don_hang['name_order']; ?></label>
                                    </div>
                                    <div class="order_detail_column">
                                        <label class="label">Tổng tiền: </label>
                                        <label><?php echo $total_money = $don_hang['total_money']; ?></label>
                                    </div>
                                    <div class="order_detail_column">
                                        <label class="label">Thời gian mua: </label>
                                        <label><?php echo $date = $don_hang['date']; ?></label>
                                    </div>
                                    
                                </div>
                                <div class="detail_info_order_right">
                                    <div class="order_detail_column">
                                        <label class="label">Phương thức mua hàng: </label>
                                        <label><?php echo $delivery_method = $don_hang['delivery_method']; ?></label>
                                    </div>
                                    <div class="order_detail_column">
                                        <label class="label">Phương thức thanh toán: </label>
                                        <label><?php echo $payment = $don_hang['payment']; ?></label>
                                    </div>
                                    <div class="order_detail_column">
                                        <label class="label">Trạng thái: </label>
                                        <label><?php echo $status = $don_hang['status']; ?></label>
                                    </div>
                                </div>
								
                            </div>
								<div class="order_book_list">
                                        <label class="label" >Danh sách sản phẩm đã mua: </label>
										<?php
											$id_order = $don_hang['id_order'];
											$sql_array = "SELECT * FROM array_book INNER JOIN book_list ON array_book.id_book = book_list.id_book WHERE id_order = '$id_order'";
											$check1 = mysqli_query($conn, $sql_array);
											if (isset($_SESSION['id_user']) && $check1 == true) {
												while ($array_book = mysqli_fetch_array($check1)) {
											?>
                                        		<label style="margin: 0;"><?php echo $array_book['title'].'; ' ?></label>
												
										<?php }
											}
										?>
                                    </div>
                        </div>
						<?php
									}
								}
								?>
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
