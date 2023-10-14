<?php include("header.php");
?>
	<?php
	$count = 0;
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
	//Chọn CSDL để làm việc
	mysqli_select_db($conn,"qlsach") or die ("Không tìm thấy CSDL");
	//Tạo câu truy vấn
	$sql_select_cart="Select * from `cart`, `book_list` where `cart`.`ID_book` = `book_list`.`ID_book`";
	$result_cart=mysqli_query($conn,$sql_select_cart);
	$tong_bg=mysqli_num_rows($result_cart);// đếm số bản ghi
		//echo $tong_bg; die;
	$stt_cart=0;
	$tong_tien = 0;
	while($row=mysqli_fetch_object($result_cart))
	{
		$stt_cart++;
		$ID_cart[$stt_cart]=$row->ID_cart;
		$img[$stt_cart]=$row->img;
		$title[$stt_cart]=$row->title;
		$price[$stt_cart]=$row->price;
		$number_cart[$stt_cart] = $row->number_cart;
		$Total_price[$stt_cart] = $row->Total_price;
	}
	?>
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
						<th >STT</th>
					  <th width="128" >Ảnh sản phẩm</th>
					  <th width="509" >Tên sản phẩm</th>
					  <th width="79" >Giá sản phẩm</th>
					  <th width="33" >Xóa</th>
					</tr>
					<?php
	  for ($i=1;$i<=$tong_bg;$i++)
	  {
	  ?>
    <tr>
      	<td><?php echo $i;?></td>
      	<td></td>
      	<td><?php echo $title[$i]?></td>
		<td><?php echo $price[$i] ?></td>
		<td><a href="Cart_del.php?ID_cart=<?php echo $ID_cart[$i]?>">Xóa</a></td>
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
						<td><?php echo $tong_bg ?></td>
					</tr>
					<tr>
						<td>Tổng tiền hàng</td>
						<td><p><?php for($i=1;$i<=$tong_bg;$i++){ echo $tong_tien+=$Total_price[$i]; }?> VNĐ</p></td>
					</tr>
				</table>
				<div class="cart-content-right-text">
<!--					<p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 VNĐ</p>-->
					<?php
						$tong_tien = 0;
						for($i=1;$i<=$tong_bg;$i++){ echo $tong_tien += $Total_price[$i] ;}
						if($tong_tien > 2000000){ ?>
							<p>Bạn sẽ được miễn phí ship vì đơn hàng của bạn có tổng giá trị trên 2.000.000 VNĐ</p>
						<?php }
						else{ ?>
							<p stype="color: red; font-weight: bold">Mua thêm <span style="font-size:18px"><?php 2000000 - $tong_tien ?> </span> VNĐ để được miễn phí ship</p>
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
