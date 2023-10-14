<!doctype html>
<html lang="en">
<head>
<title>Giao hàng</title>
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
	<!---------------------- Delivery --------------------->
	<section class = "delivery">
	<div class="container">
		<div class="delivery-top-wrap">
			<div class="delivery-top">
				<div class="delivery-top-delivery delivery-top-item">
					<i class="fas fa-shopping-cart"></i>
				</div>
				<div class="delivery-top-address delivery-top-item">
					<i class="fas fa-map-marked-alt"></i>
				</div>
				<div class="delivery-top-payment delivery-top-item">
					<i class="fas fa-money-check-alt"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="delivery-content row">
			<div class="delivery-content-left">
				<div class="delivery-content-left-input-top row">
					<div class="delivery-content-left-input-top-item">
						<label for="">Họ tên <span style="color: red;">*</span></label>
						<input type="text">
					</div>
					<div class="delivery-content-left-input-top-item">
						<label for="">Điện thoại <span style="color: red;">*</span></label>
						<input type="text">
					</div>
				</div>
				<div class="delivery-content-left-input-bottom">
					<label for="">Địa chỉ <span style="color: red;">*</span></label>
					<input type="text">
				</div>
				<div class="delivery-content-left-button row">
					<a href="Cart.php"><p>Quay lại giỏ hàng</p></a>
					<button><p style="font-weight: bold;">THANH TOÁN VÀ GIAO HÀNG</p></button>
				</div>
			</div>
			<div class="delivery-content-right">
				<table>
					<tr>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
					</tr>
					<tr>
						<td style="font-weight: bold;" colspan="2">Tổng tiền</td>
						<td></td>
					</tr>
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