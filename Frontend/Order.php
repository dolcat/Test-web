<?php include("header.php");
?>
	<!---------------------- Order --------------------->
	<?php
	$count = 0;
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
	//Chọn CSDL để làm việc
	mysqli_select_db($conn,"qlsach") or die ("Không tìm thấy CSDL");
	//Tạo câu truy vấn
	$sql_select_order="Select * from `order`, `book_list` where `order`.`ID_book` = `book_list`.`ID_book`";
	$result_order=mysqli_query($conn,$sql_select_order);
	$tong_bg=mysqli_num_rows($result_order);// đếm số bản ghi
		//echo $tong_bg; die;
	$stt_order=0;
	while($row=mysqli_fetch_object($result_order))
	{
		$stt_order++;
		$ID_order[$stt_order]=$row->ID_order;
		$title[$stt_order]=$row->title;
		$number_cart[$stt_order] = $row->number_cart;
		$price[$stt_order] = $row->price;
		$Total_price[$stt_order] = $row->Total_price;
	}
	?>
	<section>
		<div class="container">
		<div class="order-cotent-row">
			<div style="margin-left: 30px" class="cart-cotent-left ">
				<table style="width:100%" border="1" style="border-collapse: collapse;">
				  <tr>
					<th>STT</th>
					<th>Mã đơn hàng</th>
					<th>Tên sản phẩm</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>
					<th>Thành tiền</th>
					<th>Xem chi tiết sản phẩm</th>
				  </tr>
					<?php
	  for ($i=1;$i<=$tong_bg;$i++)
	  {
	  ?>
    <tr>
      	<td><?php echo $i;?></td>
      	<td><?php echo $ID_order[$i] ?></td>
      	<td><?php echo $title[$i]?></td>
		<td><?php echo $number_cart[$i] ?></td>
		<td><?php echo $price[$i] ?></td>
		<td><?php echo $Total_price[$i]?></td>
		<td><a href="?id=<?php echo $ID_book[$i]?>">Xem</a></td>
    </tr>
	  <?php
	  }
	  ?>
				</table>
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
