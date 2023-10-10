<?php include("header.php");
?>
	<!---------------------- Cart --------------------->
	<section class = "cart">
	<div class="container">
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
	<div class="container">
		<div class="cart-cotent-row">
			<div style="margin-left: 30px" class="cart-cotent-left ">
				<table width="883" border="1">
				  <tbody>
					<tr>
					  <th width="128" >Ảnh sản phẩm</th>
					  <th width="509" >Tên sản phẩm</th>
					  <th width="100" >Số lượng</th>
					  <th width="79" >Thành tiền</th>
					  <th width="33" >Xóa</th>
					</tr>
					<tr>
					  <td ><img src="images/db4f09b6ee8bc317f097ebcca1933a2d.png.webp" alt="" width="130px" height="130px"></td>
					  <td><p>Kế Toán Vỉa Hè - Thực Hành Báo Cáo Tài Chính Căn Bản Từ Quầy Bán Nước Chanh</p></td>
					  <td><input type=number value="1" min="1"</td>
					  <td><p>169.000 <sub>đ</sub></p></td>
					  <td align="center"><span>X</span></td>
					</tr>
					  <tr>
					  <td><img src="images/61fb657f347d14d9d7bf6fe901001a8e.jpg.webp" alt="" width="130px" height="130px"></td>
					  <td><p>Sách Đi Tìm Lẽ Sống (Tái Bản )</p></td>
					  <td><input type=number value="1" min="1"</td>
					  <td><p>61.100 <sub>đ</sub></p></td>
					  <td align="center"><span>X</span></td>
					</tr>
				  </tbody>
				</table>
			</div>
			<div class="cart-content-right">
				<table>
					<tr>
						<th colspan="2">Tổng tiền giỏ hàng</th>
					</tr>
					<tr>
						<td>Tổng sản phẩm</td>
						<td>2</td>
					</tr>
					<tr>
						<td>Tổng tiền hàng</td>
						<td><p>230.100 <sub>đ</sub></p></td>
					</tr>
					<tr>
						<td>Tạm tính</td>
						<td><p style="color: black; font-weight: bold">230.100 <sub>đ</sub></p></td>
					</tr>
				</table>
				<div class="cart-content-right-text">
					<p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 đ</p>
					<p stype="color: red; font-weight: bold">Mua thêm <span style="font-size: 18px">1.769.900đ</span>để được miễn phí ship</p>
				</div>
				<div class="cart-content-right-button">
					<a href="fanpages.php"><button>TIẾP TỤC MUA SẮM</button></a>
					<a href="Pay.php"><button>THANH TOÁN</button></a>
				</div>
<!--
				<div class="cart-content-right-dangnhap">
					<p>TÀI KHOẢN</p> <br>
					<p>Hãy<a href=""> Đăng nhập </a>tài khoản của bạn để tích điểm thành viên</p>
				</div>
-->
			</div>
		</div>	
	</div>
	</section>
	<!-- footer -->
    <footer>
        <div class="footer-item">
            <div class="img-footer">
                <img src="img/logo.png" alt="" style="width: 120px;height: 139px;" />
            </div>
            <div class="social-footer">
                <li class="footer_icon"><a target="_blank" href="https://www.facebook.com/thanhlongdev">
                        <i class="fa-brands fa-facebook"></i>
                    </a></li>
                <li><a target="_blank" href="https://github.com/long1211">
                        <i class="fa-brands fa-github"></i>
                    </a></li>

            </div>
        </div>
    </footer>
</body>
</html>