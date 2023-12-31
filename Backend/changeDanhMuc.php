<?php
include("header.php");
$sqlDanhMuc = "SELECT * FROM danh_muc";
$query = mysqli_query($conn, $sqlDanhMuc);
$id = "";
if(isset($_GET['id_danhmuc'])){
    $id = $_GET['id_danhmuc'];
}
$queryChangeDm = mysqli_query($conn, "SELECT * FROM danh_muc WHERE id_danhmuc = '$id'");
$danhmuc = mysqli_fetch_array($queryChangeDm);

?><head>
    <title>Quản lý danh mục</title>
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
                    <a href="quanlydanhmuc.php" style="color: blue;">Quản lý danh mục</a>
                </li>
                <li class="list-inline-item">
                    <a href="quanlydonhang.php">Quản lý đơn hàng</a>
                </li>
                <li class="list-inline-item">
                    <a href="quanlytaikhoan.php">Quản lý tài khoản</a>
                </li>
                
            </ul>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <table class="table" style="border-radius: 8px;">
                        <thead>
                            <tr aria-colspan="3"><span class="header_table">Danh sách danh mục</span></tr>
                        </thead>
                        <thead class="thead-dark">
                            <tr>
                                <th class="col-md-1">ID</th>
                                <th class="col-md-2">Tên danh mục</th>
                                <th class="col-md-1">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($query)) { ?>
                                <tr>
                                    <td class="col-md-1"><?php echo $row['id_danhmuc'] ?></td>
                                    <td class="col-md-2"><?php echo $row['ten_danhmuc'] ?></td>
                                    <td class="col-md-2">
                                        <a href="changeDanhMuc.php?id_danhmuc=<?php echo $row['id_danhmuc'] ?>"> <button class="btn btn-primary" type="submit" style="margin-bottom: 2px;">Sửa</button></a>
                                        <button class="btn btn-danger btn_del" data-confirm="Bạn có chắc chắn muốn xóa?" onclick="btn_delete()">Xóa</button>
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
                <h4>Form sửa thông tin danh mục</h4>
            <form class="form_insertDanhMuc" action="exeChangeDm.php" method="post">
                <div class="form-group">
                    <label for="id_danhmuc">ID</label>
                    <input type="text" class="form-control" name="id_danhmuc" value="<?php echo $danhmuc['id_danhmuc']?>">
                </div>
                <div class="form-group">
                    <label for="ten_danhmuc">Danh mục</label>
                    <input type="text" class="form-control" name="ten_danhmuc" value="<?php echo $danhmuc['ten_danhmuc']?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn_seaching" style="margin: 10px 0px;">Lưu thay đổi</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
    var id = document.querySelector(".id_danhmuc");

    function btn_delete() {
        var response = confirm("Bạn có chắc chắn xóa danh mục này không?");
        if (response == true) {
            var id_danhmuc = parseInt(id.innerText);
            var link = "exeDeleteDm.php?id_muc=" + encodeURIComponent(id_danhmuc);
            window.location.href = link;
        }
    }
</script>
</body>

</html>
