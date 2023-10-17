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
        .btn_chucnang{
            display: flex; flex-direction: row;
        }
        .btn_chucnang a{
            padding: 5px;
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
        <div class="col-md-12">
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
                                <th class="col-md-1">Tên đơn hàng</th>
								<th class="col-md-1">Tổng tiền (VNĐ)</th>
								<th class="col-md-2">Phương thức thanh toán</th>
                                <th class="col-md-2">Phương thức vận chuyển</th>
								<th class="col-md-2">Ngày đặt</th>
								<th class="col-md-2">Trạng thái</th>
                                <th class="col-md-3">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($query)) { ?>
                                <tr>
                                    <td class="col-md-1"><?php echo $row['id_order'] ?></td>
									<td class="col-md-1"><?php echo $row['id_customer'] ?></td>
                                    <td class="col-md-1"><?php echo $row['name_order'] ?></td>
									<td class="col-md-1"><?php echo $row['total_money'] ?></td>
									<td class="col-md-2"><?php echo $row['payment'] ?></td>
                                    <td class="col-md-2"><?php echo $row['delivery_method'] ?></td>
									<td class="col-md-2"><?php echo $row['date'] ?></td>
									<td class="col-md-2"><?php echo $row['status'] ?></td>
                                    <td class="col-md-3 btn_chucnang">
                                        <a href="Xemdonhang.php?id_order=<?php echo $row['id_order'] ?>"> <button class="btn btn-primary" type="submit" style="margin-bottom: 2px;">Xem</button></a>
										<a href="exeUpdateStatus.php?id_order=<?php echo $row['id_order'] ?>"> <button class="btn btn-danger btn_del" data-confirm="Bạn có chắc chắn muốn cập nhật trạng thái của đơn hàng?" onclick="btn_delete()">UP</button></a>
                                        <a href="exeDeleteorder.php?id_order=<?php echo $row['id_order'] ?>"> <button class="btn btn-danger btn_del" data-confirm="Bạn có chắc chắn muốn xóa đơn hàng?" onclick="btn_delete()">Xóa</button></a>

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
            var link = "exeDeleteorder.php";
            window.location.href = link;
        }
    }
	function btn_update() {
		var response = confirm("Bạn có chắc chắn cập nhật trạng thái của đơn hàng này không?");
		if(response == true){
			var id_order = parseInt(id.innerText);
			var link = "exeUpdateStatus.php";
			window.location.href = link;
		}
	}
</script>
</body>

</html>
