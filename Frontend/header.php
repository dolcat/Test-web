<?php include_once('connect.php');
$id_user = "";
$id_customer = "";
if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];
} else {
    unset($id_user);
}
if (isset($_SESSION['id_customer'])) {
    $id_customer = $_SESSION['id_customer'];
} else {
    unset($id_customer);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./asset/font/fontawesome-free-6.4.2-web/css/all.css">
    <link type="text/css" rel="stylesheet" href="main.css">
    <link type="text/css" rel="stylesheet" href="main1.css">
    <style>
        .grid_column-2-4:hover {
            text-decoration: none;
        }
    </style>

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
                    <?php
                    if (isset($_SESSION['user'])) { ?>
                        <li class="header_navbar-item header_navbar-item--strong">
                            <div href="" class="header_navbar-item-link"><?php echo $_SESSION['user'] ?></div>
                        </li>
                        <li class="header_navbar-item header_navbar-item--strong">
                            <a href="logout.php" class="header_navbar-item-link">Đăng xuất</a>
                        </li>
                    <?php } else { ?>

                        <li class="header_navbar-item header_navbar-item--strong">
                            <a href="Dang_ki.php" class="header_navbar-item-link">Đăng ký</a>
                        </li>
                        <li class="header_navbar-item header_navbar-item--strong">
                            <a href="Login.php" class="header_navbar-item-link">Đăng nhập</a>
                        </li>
                    <?php } ?>

                </ul>


            </nav>

            <!-- Header with search -->
            <div class="header_with_search" style="display: inline-flex; height: 81px;">
                <div class="header-logo">
                    <a href="index.php" class="header_search-logo">
                        <img class="logo" style="width: 100px; margin-left: 0;" src="https://png.pngtree.com/template/20191011/ourmid/pngtree-e-book-logo-design---modern-technology-image_317099.jpg" alt="logo">
                    </a>
                </div>
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
                <a class="header_icon header_profile" href="profile.php">
                    <i class="header-icon-item fa-solid fa-house-user"></i>
                </a>
                <a class="header_icon header_cart" href="Cart.php">
                    <i class="header-icon-item fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </header>