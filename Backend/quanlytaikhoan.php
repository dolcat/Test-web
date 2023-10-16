<?php
include("header.php");
$sqlTaiKhoan = "SELECT * FROM account";
$query = mysqli_query($conn, $sqlTaiKhoan);
?>

<head>
    <title>Quản lý tài khoản</title>
    <style>
        h4 {
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
                    <a href="quanlydonhang.php">Quản lý đơn hàng</a>
                </li>
                <li class="list-inline-item">
                    <a href="quanlytaikhoan.php" style="color: blue;">Quản lý tài khoản</a>
                </li>
            </ul>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <table class="table" style="border-radius: 8px;">
                        <thead>
                            <tr aria-colspan="3"><span class="header_table">Danh sách tài khoản</span></tr>
                        </thead>
                        <thead class="thead-dark">
                            <tr>
                                <th class="col-md-1">ID</th>
                                <th class="col-md-2">Tài khoản</th>
                                <th class="col-md-1">Mật khẩu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($query)) { ?>
                                <tr>
                                    <td class="col-md-1"><?php echo $row['id_user'] ?></td>
                                    <td class="col-md-2"><?php echo $row['user'] ?></td>
                                    <td class="col-md-2"><?php echo $row['password'] ?></td>
                                    <td class="col-md-2">
                                        <a href="changeTaiKhoan.php?id_user=<?php echo $row['id_user'] ?>">
                                            <button class="btn btn-primary" type="submit" style="margin-bottom: 2px;">Sửa</button>
                                        </a>
                                        <a href="exeDeleteTaiKhoan.php?id_user=<?php echo $row['id_user'] ?>">
                                            <button class="btn btn-danger btn_del" data-confirm="Bạn có chắc chắn muốn xóa?" onclick="btn_delete()">Xóa</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form_insert">
                <h4>Form thêm tài khoản</h4>
                <form class="form_insert" action="exeInsertTaiKhoan.php" method="post">
                    <div class="form-group">
                        <label for="user">Tên đăng nhập</label>
                        <input type="text" class="form-control" name="user" value="">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="text" class="form-control" name="password" value="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn_seaching" style="margin: 10px 0px;">Thêm tài khoản</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function btn_delete() {
        var response = confirm("Bạn có chắc chắn xóa tài khoản này không?");
        if (response == true) {
            var link = "exeDeleteTaiKhoan.php";
            window.location.href = link;
        }
    }
</script>
</body>

</html>