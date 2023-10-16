<?php
include("header.php");
$sqldonhangchitiet = "SELECT * FROM array_book";
$query = mysqli_query($conn, $sqldonhangchitiet);
$id_order = "";
if(isset($_GET['id_order'])){
    $id_order = $_GET['id_order'];
}
$queryXemdonhang = mysqli_query($conn, "SELECT * FROM array_book INNER JOIN book_list ON array_book.id_book = book_list.id_book WHERE id_order = '$id_order'");
$donhang_chitiet = mysqli_fetch_array($queryXemdonhang);

?><head>
    <title>Quản lý đơn hàng</title>
    <style>
        h4{
            margin: 10px 0px 10px 10px;
            
        }
    </style>
</head>


<div class="container" style="width: 100%; margin-bottom: 100px;">
    <div class="row">
        <div class="tool_bar">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="index.php">Quản lý sản phẩm</a>
                </li>
                <li class="list-inline-item">
                    <a href="quanlydanhmuc.php">Quản lý danh mục</a>
                </li>
                <li class="list-inline-item">
                    <a href="quanlydonhang.php" style="color: blue;">Quản lý đơn hàng</a>
                </li>
                <li class="list-inline-item">
                    <a href="quanlytaikhoan.php" >Quản lý tài khoản</a>
                </li>
                <li class="list-inline-item">
                    <a href="insertBook.php"><button class="btn_seaching">Thêm sản phẩm</button></a>
                </li>
            </ul>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <table class="table" style="border-radius: 8px;">
                        <thead>
                            <tr aria-colspan="3"><span class="header_table">Danh sách đơn hàng chi tiết</span></tr>
                        </thead>
                        <thead class="thead-dark">
                            <tr>
                                <th class="col-md-1">ID đơn hàng</th>
								<th class="col-md-1">ID khách hàng</th>
								<th class="col-md-1">Tên sản phẩm</th>
                                <th class="col-md-2">Số lượng</th>
                                <th class="col-md-1">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($donhang_chitiet = mysqli_fetch_array($queryXemdonhang)) { ?>
                                <tr>
                                    <td class="col-md-1"><?php echo $donhang_chitiet['id_order'] ?></td>
									<td class="col-md-1"><?php echo $donhang_chitiet['id_customer'] ?></td>
                                    <td class="col-md-2"><?php echo $donhang_chitiet['title'] ?></td>
									<td class="col-md-2"><?php echo $donhang_chitiet['number_cart'] ?></td>
									<td class="col-md-2"><?php echo $donhang_chitiet['total_price'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>