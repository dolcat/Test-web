<?php
include("header.php");
$id = "";
if (isset($_GET['id_book'])) {
    $id = $_GET['id_book'];
} else {
    echo "Khong ton tai!";
}

$sql = "SELECT * FROM book_list, danh_muc WHERE id_book = '$id' AND danh_muc.id_danhmuc = book_list.id_danhmuc";
$query_book = mysqli_query($conn, $sql);

?>

<div class="container" style="width: 100%; margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-6">
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

                </ul>
            </div>
            <h4>Form sửa thông tin sách</h4>
            <form action="exeChangeBook.php?id_book=<?php echo $id ?>" method="post" class="formBook">
                <?php if ($query_book) {
                    $book = mysqli_fetch_array($query_book);
                ?>
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $book['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="bookstore">Nhà sách</label>
                        <input type="text" class="form-control" name="bookstore" value="<?php echo $book['bookstore'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="author">Tác giả</label>
                        <input type="text" class="form-control" name="author" value="<?php echo $book['author'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="danhmuc">Thể loại</label>
                        <?php
                        $sql_DanhMuc = "SELECT * FROM danh_muc";
                        $query = mysqli_query($conn, $sql_DanhMuc);
                        ?>
                        <select class="form-control" name="danhmuc">
                            <?php while ($danhMuc =  mysqli_fetch_array($query)) { ?>
                                <option value="<?php echo $danhMuc['id_danhmuc'] ?>" class="danhmuc"><?php echo $danhMuc['ten_danhmuc'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="translator">Dịch giả</label>
                        <input type="text" class="form-control" name="translator" value="<?php echo $book['translator'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="publisher">Nhà xuất bản</label>
                        <input type="text" class="form-control" name="publisher" value="<?php echo $book['publisher'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="cover_type">Bìa</label>
                        <input type="text" class="form-control" name="cover_type" value="<?php echo $book['cover_type'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="number">Số trang</label>
                        <input type="text" class="form-control" name="number" value="<?php echo $book['number'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="size">Kích thước</label>
                        <input type="text" class="form-control" name="size" value="<?php echo $book['size'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="publication_of_date">Ngày xuất bản</label>
                        <input type="date" class="form-control" name="publication_of_date" value="<?php echo $book['publication_of_date'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="img">Link ảnh</label>
                        <input type="text" class="form-control" name="img" value="<?php echo $book['img'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Giá tiền</label>
                        <input type="number" class="form-control" name="price" value="<?php echo $book['price'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <textarea class="form-control" name="description" value="<?php echo $book['description'] ?>"><?php echo $book['description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn_seaching" style="margin: 10px 0px;">Xóa trắng</button>
                        <button type="submit" class="btn_seaching" style="margin: 10px 0px;">Lưu thông tin</button>
                    </div>
                <?php } ?>
            </form>

        </div>
    </div>
</div>

</body>