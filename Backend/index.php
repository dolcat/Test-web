<?php
include("header.php");

$sql = "SELECT * FROM `book_list`,danh_muc WHERE book_list.id_danhmuc = danh_muc.id_danhmuc;";
$query = mysqli_query($conn, $sql);
?>

<head>
    <title>Trang chủ Admin</title>
</head>

<div class="container" style="width: 100%; margin-bottom: 100px;">
    <div class="row">
        <div class="col-md-12">
            <div class="tool_bar">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="index.php" style="color: blue;">Quản lý sản phẩm</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="quanlydanhmuc.php">Quản lý danh mục</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="quanlydonhang.php">Quản lý đơn hàng</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="quanlytaikhoan.php">Quản lý tài khoản</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="insertBook.php"><button class="btn_seaching">Thêm sản phẩm</button></a>
                    </li>
                </ul>

                <div class="form_searching">
                    <form class="form-inline" action="timkiem.php" method="get">
                        <input type="text" class="form-control me-2 d-inline-block" placeholder="Tìm kiếm..." name="txt_searching">
                        <button type="submit" class="btn_seaching">Tìm kiếm</button>
                    </form>
                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr aria-colspan="13"><span class="header_table">Danh sách sản phẩm</span></tr>
                        </thead>
                        <thead class="thead-dark">
                            <tr>
                                <th class="id_column">ID</th>
                                <th class="col-md-2">Tiêu đề</th>
                                <th class="col-md-1">Tác giả</th>
                                <th class="col-md-1">Thể loại</th>
                                <th class="col-md-1">Nhà sách</th>
                                <th class="col-md-1">Dịch giả</th>
                                <th class="col-md-2">Nhà xuất bản</th>
                                <th class="col-md-1">Kích thước</th>
                                <th class="col-md-1">Loại bìa</th>
                                <th class="col-md-1">Số trang</th>
                                <th class="col-md-3">Ngày xuất bản</th>
                                <th class="col-md-1">Giá tiền</th>
                                <th class="col-md-1">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($query)) { ?>
                                <tr>
                                    <td class="id_column" style="width: 20px;"><?php echo $row['id_book'] ?></td>
                                    <td class="tieude_column" style="width: 100px;"><?php echo $row['title'] ?></td>
                                    <td class="col-md-1"><?php echo $row['author'] ?></td>
                                    <td class="col-md-1"><?php echo $row['ten_danhmuc'] ?></td>
                                    <td class="col-md-1"><?php echo $row['bookstore'] ?></td>
                                    <td class="col-md-1"><?php echo $row['translator'] ?></td>
                                    <td class="col-md-1"><?php echo $row['publisher'] ?></td>
                                    <td class="col-md-1"><?php echo $row['size'] ?></td>
                                    <td class="col-md-1"><?php echo $row['cover_type'] ?></td>
                                    <td class="col-md-1"><?php echo $row['number'] ?></td>
                                    <td class="col-md-1"><?php echo $row['publication_of_date'] ?></td>
                                    <td class="col-md-1"><?php echo $row['price'] ?></td>
                                    <td class="col-md-1">
                                        <a href="changeBook.php?id_book=<?php echo $row['id_book'] ?>">
                                            <button class="btn btn-primary" type="submit" style="margin-bottom: 2px;">Sửa</button></a>
                                        <a href="exeDeleteBook.php?id_book=<?php echo $row['id_book'] ?>">
                                            <button class="btn btn-danger btn_del" data-confirm="Bạn có chắc chắn muốn xóa?" onclick="btn_delete()">Xóa</button></a>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function btn_delete() {
        var response = confirm("Bạn có chắc chắn xóa sản phẩm này không?");
        if (response == true) {
            var link = "exeDeleteBook.php";
            window.location.href = link;
        }
    }
</script>
</body>


</html>