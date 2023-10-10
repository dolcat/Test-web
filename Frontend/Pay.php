<?php 
include("header.php");
?>
	<!---------------------- Payment --------------------->
<section class="payment">
	<div class="container">
		<div class="payment-top-wrap">
			<div class="payment-top">
				<div class="payment-top-payment payment-top-item">
					<i class="fas fa-shopping-cart"></i>
				</div>
				<div class="payment-top-address payment-top-item">
					<i class="fas fa-map-marked-alt"></i>
				</div>
				<div class="payment-top-payment payment-top-item">
					<i class="fas fa-money-check-alt"></i>
				</div>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="payment-content-row">
			<div style="margin-left: 130px" class="payment-content-left">
				<div class="payment-content-left-method-delivery">
					<p style="font-weight: bold;color: rgb(39,39,42);">Phương thức giao hàng</p>
					<div class="payment-content-left-method-delivery-item">
						<input  type="checkbox">
						<label for="">Giao hàng chuyển phát nhanh</label>
					</div>
				</div>
				<div class="payment-content-left-method-payment">
					<p style="font-weight: bold;color: rgb(39,39,42);">Phương thức thanh toán</p>
					<p style="color: rgb(39,39,42);">Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
					<div class="payment-content-left-method-payment-item">
						<input name="method-payment" type="radio">
						<label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
					</div>
					<div class="payment-content-left-method-payment-item-img">
						<img src="images/visa.png" alt="">
					</div>
					<div class="payment-content-left-method-payment-item">
						<input checked name="method-payment" type="radio">
						<label for="">Thanh toán bằng thẻ ATM(OnePay)</label>
					</div>
					<div class="payment-content-left-method-payment-item-img">
						<img src="images/ATM.png" alt="">
					</div>
					<div class="payment-content-left-method-payment-item">
						<input name="method-payment" type="radio">
						<label for="">Thu tiền tận nơi</label>
					</div>
				</div>
			</div>
			<div class="payment-content-right">
				<div class="payment-content-right-button">
					<input type="text" placeholder="Mã giảm giá/Quà tặng">
					<button class="payment-content-right-button-btn"><i class="fas fa-check-square" ></i></button>
				</div>
				<div class="payment-content-right-button">
					<input type="text" placeholder="Mã cộng tác viên">
					<button class="payment-content-right-button-btn"><i class="fas fa-check-square"></i></button>
				</div>
			</div>
		</div>
		<div class="payment-content-right-payment">
			<button>Tiếp tục thanh toán</button>
		</div>
	</div>
</section>
	<!-- footer -->
    <?php 
    include("footer.php");
    ?>
</html>