<?php
include_once("header.php");
?>

<div class="container" style="width: 100%; margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-6">
            <form action="exeInsertBook.php" method="post">
                <div class="form-group">
                    <label for="title">Tiêu đề</label>
                    <input type="text" class="form-control" name="title" value="">
                </div>
                <div class="form-group">
                    <label for="bookstore">Nhà sách</label>
                    <input type="text" class="form-control" name="bookstore" value="">
                </div>
                <div class="form-group">
                    <label for="author">Tác giả</label>
                    <input type="text" class="form-control" name="author" value="">
                </div>
                <div class="form-group">
                    <label for="danhmuc">Thể loại</label>
                    <?php
                    $sql_DanhMuc = "SELECT * FROM danh_muc";
                    $query = mysqli_query($conn, $sql_DanhMuc);
                    ?>
                    <select class="form-control" name="danhmuc">
                        <?php while ($danhMuc =  mysqli_fetch_array($query)) { ?>
                            <option value="<?php echo $danhMuc['id_danhmuc'] ?>"><?php echo $danhMuc['ten_danhmuc'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="translator">Dịch giả</label>
                    <input type="text" class="form-control" name="translator" value="">
                </div>
                <div class="form-group">
                    <label for="publisher">Nhà xuất bản</label>
                    <input type="text" class="form-control" name="publisher" value="">
                </div>
                <div class="form-group">
                    <label for="cover_type">Bìa</label>
                    <input type="text" class="form-control" name="cover_type" value="">
                </div>
                <div class="form-group">
                    <label for="number">Số trang</label>
                    <input type="text" class="form-control" name="number" value="">
                </div>
                <div class="form-group">
                    <label for="size">Kích thước</label>
                    <input type="text" class="form-control" name="size" value="">
                </div>
                <div class="form-group">
                    <label for="publication_of_date">Ngày xuất bản</label>
                    <input type="date" class="form-control" name="publication_of_date" value="">
                </div>

                <div class="form-group">
                    <label for="img">Link ảnh</label>
                    <input type="text" class="form-control" name="img" value="">
                </div>
                <div class="form-group">
                    <label for="price">Giá tiền</label>
                    <input type="number" class="form-control" name="price" value="">
                </div>
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <textarea class="form-control" name="description" value="This is a description."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn_seaching" style="margin: 10px 0px;">Thêm sách</button>
                </div>
            </form>

        </div>
    </div>
</div>