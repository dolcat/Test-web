<?php
	include('header.php');
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
		<?php
        $query_giohang = "SELECT * FROM cart INNER JOIN book_list sp ON cart.id_book = book_list.id_book WHERE id_user = $id_user";
        $result_giohang = mysqli_query($conn, $query_giohang);
                ?>
		<div class="cart-cotent-row">
			<div style="margin-left: 30px" class="cart-cotent-left1">
				<table width="883" border="1">
				  <tbody>
					<tr>
						<th >STT</th>
					  <th width="128" >Ảnh sản phẩm</th>
					  <th width="509" >Tên sản phẩm</th>
					  <th width="79" >Giá sản phẩm</th>
					  <th width="33" >Xóa</th>
					</tr>
					  <?php
                    $i = 0;
                    $tongtien = 0;
                    while($row = mysqli_fetch_object($result_giohang)){
                    $i++;
                    $id_book = $row -> id_book ;
                    $ten_sp = $row -> title;
                    $img = $row -> img;
                    $price = $row -> price;
					$number_cart = $row -> number_cart;
                    $tien = $price * $number_cart;
                    $tongtien += $tien;
                ?>
    <tr>
      	<td><?php echo $i;?></td>
      	<td><?php ?></td>
      	<td><?php echo $title ?></td>
		<td><?php echo $price ?></td>
		<td><a href="Cart_del.php?ID_book=<?php echo $id_book[$i]?>">Xóa</a></td>
    </tr>
	  <?php
	  }
	  ?>
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
						<td><?php echo $i ?></td>
					</tr>
					<tr>
						<td>Tổng tiền hàng</td>
						<td><p><?php  echo $tongtien; ?> VNĐ</p></td>
					</tr>
				</table>
				<div class="cart-content-right-text">
					<?php
						if($tongtien > 2000000){ ?>
							<p>Bạn sẽ được miễn phí ship vì đơn hàng của bạn có tổng giá trị trên 2.000.000 VNĐ</p>
						<?php }
						else{ ?>
							<p stype="color: red; font-weight: bold">Mua thêm <span style="font-size:18px"><?php 2000000 - $tongtien ?> </span> VNĐ để được miễn phí ship</p>
						<?php } ?>
				</div>
				<div class="cart-content-right-button">
					<a href="fanpages.php"><button>TIẾP TỤC MUA SẮM</button></a>
					<a href="Pay.php"><button>THANH TOÁN</button></a>
				</div>
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
