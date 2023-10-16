<?php
include('header.php');
$cart = "";
if (isset($_SESSION['id_customer'])) {
	$sql = "SELECT DISTINCT * FROM `book_list`,cart WHERE cart.id_customer = '$id_customer' AND book_list.id_book = cart.id_book;";
	$query = mysqli_query($conn, $sql);
}
$i = 1;
$tong_tien = 0;
?>

<head>
	<title>Giỏ hàng</title>
	<style>
		.table_content_book td {
			border-right: 1px solid #DDDDDD;
			border-bottom: 1px solid #DDDDDD;
		}

		a:hover {
			text-decoration: none;
			cursor: pointer;
		}

		.table_content_book th {
			border-bottom: 1px solid #DDDDDD;
		}
	</style>
</head>
<!---------------------- Cart --------------------->
<section class="cart">
	<div class="grid">
		<div class="grid-row">
			<div class="label_heading_cart">
				<h4>Giỏ hàng</h4>
			</div>
			<div class="cart_infomation">
				<div class="cart-cotent-left">
					<div class="state_line">
						<div class="cart-top-wrap">
							<div class="cart-top">
								<div class="cart-top-cart cart-top-item">
									<i class="fas fa-shopping-cart"></i>
								</div>
								<div class="cart-top-address cart-top-item">
									<i class="fas fa-map-marked-alt"></i>
								</div>
								<div class="cart-top-payment cart-top-item">
									<i class="fas fa-money-check-alt"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="cart-content-book">
						<table class="table_content_book">
							<tbody>
								<tr style=" text-align: center;">
									<th style="width: 5%;">STT</th>
									<th style="width: 20%;">Ảnh sản phẩm</th>
									<th style="width: 45%;">Thông tin sản phẩm</th>
									<th style="width: 10%;">Số lượng</th>
									<th style="width: 15%;">Giá sản phẩm (VND)</th>
									<th style="width: 5%;">Xóa</th>
								</tr>
								<?php
								if (isset($_SESSION['id_user']) && $query == true) {

									while ($cart = mysqli_fetch_array($query)) {
								?>
										<tr>
											<td style="text-align:center;"><?php echo $i ?></td>
											<td>
												<div class="img_item" style="background-image: url(<?php echo $cart['img'] ?>);"></div>
											</td>
											<td style="text-align:start; padding: 5px; font-size: 20px;">
												Tiêu đề: <?php echo $cart['title'] . '</br>' ?>
												Tác giả: <?php echo $cart['author'] . '</br>' ?>
												Nhà xuất bản: <?php echo $cart['publisher'] . '</br>' ?>
												Nhà sách: <?php echo $cart['bookstore'] . '</br>' ?>
											</td>
											<td style="text-align:center; font-size: 1.3rem;"><?php echo $cart['number_cart'] ?></td>
											<td style="text-align:end; padding: 5px; font-size: 20px;">
												<?php echo ($cart['price'] * $cart['number_cart']) ?>
											</td>
											<td style="text-align:center;"><a href="Cart_del.php?ID_book=<?php echo $id_book[$i] ?>">Xóa</a></td>
										</tr>
								<?php
										$tong_tien += $cart['price'];
										$i++;
									}
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="cart-content-right">
					<div class="box_pay">
						<table class="table_content_pay" style="margin-top: 10px;">
							<tr>
								<th colspan="2" style="font-size: 20px;">Tổng tiền giỏ hàng</th>
							</tr>
							<tr>
								<td style="font-size: 17px; font-weight: 400;">Tổng sản phẩm</td>
								<td style="padding-right: 5px; font-size: 17px;"><?php echo $i -1 ?></td>
							</tr>
							<tr>
								<td>Tổng tiền hàng</td>
								<td>
									<p><?php echo $tong_tien; ?> VNĐ</p>
								</td>
							</tr>
						</table>
						<div class="cart-content-right-text">
							<?php
							if ($tong_tien > 2000000) { ?>
								<p>Bạn sẽ được miễn phí ship vì đơn hàng của bạn có tổng giá trị trên 2.000.000 VNĐ</p>
							<?php } else { ?>
								<p style="color: red; font-weight: bold; font-size:18px; ">Mua thêm <span style="font-size:18px"><?php echo 2000000 - $tong_tien ?> </span> VNĐ để được miễn phí ship</p>
							<?php } ?>
						</div>
						<div class="cart-content-right-button" style="padding-bottom: 10px;">
							<a href="fanpages.php"><button>TIẾP TỤC MUA SẮM</button></a>
							<a href="Pay.php"><button>THANH TOÁN</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<!-- footer -->
<?php include("footer.php"); ?>
</body>

</html>