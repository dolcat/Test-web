<?php
include("header.php");
$sqldonhang = "SELECT * FROM don_hang";
$query = mysqli_query($conn, $sqldonhang);
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
                    <a href="quanlytaikhoan.php">Quản lý tài khoản</a>
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
                            <tr aria-colspan="3"><span class="header_table">Danh sách đơn hàng</span></tr>
                        </thead>
                        <thead class="thead-dark">
                            <tr>
                                <th class="col-md-1">ID đơn hàng</th>
								<th class="col-md-1">ID khách hàng</th>
                                <th class="col-md-2">Tên khách hàng</th>
								<th class="col-md-2">Tổng tiền</th>
								<th class="col-md-2">Phương thức thanh toán</th>
								<th class="col-md-2">Ngày đặt</th>
                                <th class="col-md-1">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($query)) { ?>
                                <tr>
                                    <td class="col-md-1"><?php echo $row['id_order'] ?></td>
									<td class="col-md-1"><?php echo $row['id_customer'] ?></td>
                                    <td class="col-md-2"><?php echo $row['name'] ?></td>
									<td class="col-md-2"><?php echo $row['total_money'] ?></td>
									<td class="col-md-2"><?php echo $row['payment'] ?></td>
									<td class="col-md-2"><?php echo $row['date'] ?></td>
                                    <td class="col-md-2">
                                        <a href="Xemdonhang.php?id_order=<?php echo $row['id_order'] ?>"> <button class="btn btn-primary" type="submit" style="margin-bottom: 2px;">Xem</button></a>
                                        <button class="btn btn-danger btn_del" data-confirm="Bạn có chắc chắn muốn xóa?" onclick="btn_delete()">Xóa</button>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var id = document.querySelector(".id_order");

    function btn_delete() {
        var response = confirm("Bạn có chắc chắn xóa đơn hàng này không?");
        if (response == true) {
            var id_order = parseInt(id.innerText);
            var link = "exeDeleteorder.php?id_order=" + encodeURIComponent(id_order);
            window.location.href = link;
        }
    }
</script>
</body>

</html>