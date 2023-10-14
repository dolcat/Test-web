<!doctype html>
<html lang="en">
<head>
<title>Giỏ hàng</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Main CSS-->
<link rel="stylesheet" type="text/css" href="main1.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	
</head>
<body>
	<!-- header -->
    <header class="header">
        <div class="grid">
            <nav class="header_navbar">
                <ul class="header_navbar-list">
                    <li class="header_navbar-item header_navbar-item--separate">Vào cửa hàng trên ứng dụng</li>
                    <li class="header_navbar-item header_navbar-item--separate">
                        <span class="header_navbar-item_no-pointer">Kết nối</span>
                        <a href="" class="header_navbar-icon-link">
                            <i class="header_navbar-icon fa-brands fa-facebook"></i>
                        </a>
                        <a href="" class="header_navbar-icon-link">
                            <i class="header_navbar-icon fa-brands fa-github"></i>
                        </a>
                    </li>
                </ul>
                <ul class="header_navbar-list">
                    <li class="header_navbar-item">
                        <a href="" class="header_navbar-item-link">
                            <i class="header_navbar-icon fa-regular fa-circle-question"></i>
                            Trợ giúp</a>
                    </li>
                    <li class="header_navbar-item">
                        <a href="" class="header_navbar-item-link">
                            <i class="header_navbar-icon fa-solid fa-bell"></i>
                            Thông báo</a>
                    </li>
                    <li class="header_navbar-item header_navbar-item--strong">
                        <a href="" class="header_navbar-item-link">Đăng ký</a>
                    </li>
                    <li class="header_navbar-item header_navbar-item--strong">
                        <a href="" class="header_navbar-item-link">Đăng nhập</a>
                    </li>
                </ul>


            </nav>

            <!-- Header with search -->
            <div class="header_with_search" style="display: inline-flex;">
                <div class="header-logo">
                    <a href="" class="header_search-logo">
                        <img class="logo" style="width: 100px; margin-left: 0;"
                            src="https://png.pngtree.com/template/20191011/ourmid/pngtree-e-book-logo-design---modern-technology-image_317099.jpg"
                            alt="logo">
                    </a>
                </div>
                <div class="header_search" style="flex: 1;">
                    <input type="text" class="header_search_input" placeholder="Tìm kiếm sách bạn muốn...">
                    <div class="header_search_selection">
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
                    </div>
                    <button class="header_search_btn">
                        <i class="header_search_btn-icon fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <div class="header_icon header_profile">
                    <i class="header-icon-item fa-solid fa-house-user"></i>
                </div>
                <div class="header_icon header_cart">
                    <a href="Cart.php"><i class="header-icon-item fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>
    </header>
	<!---------------------- Cart --------------------->
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
	$stt_book=0;
	while($row=mysqli_fetch_object($result_cart))
	{
		$stt_book++;
		$ID_book[$stt_book]=$row->ID_book;
		$img[$stt_book]=$row->img;
		$title[$stt_book]=$row->title;
		$price[$stt_book]=$row->price;
		$number_cart[$stt_book] = $row->number_cart;
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
		<td><a href="Cart_del.php?id=<?php echo $ID_book[$i]?>">Xóa</a></td>
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
						<td><p><?php for($i=1;$i<=$tong_bg;$i++){ echo $number_cart[$i]*$price[$i]; }?> VNĐ</p></td>
					</tr>
				</table>
				<div class="cart-content-right-text">
<!--					<p>Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 VNĐ</p>-->
					<?php
						$tong_tien = 0;
						for($i=1;$i<=$tong_bg;$i++){ echo $tong_tien = $number_cart[$i]*$price[$i];}
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