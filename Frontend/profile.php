<?php
include("header.php");
?>
<div class="profile_content">
    <div class="grid">
        <div class="infomation">
            <div class="info-container">
                <aside class="left_column">
                    <div class="info_image_account">
                        <div class="img_default" style="background-image: url(https://icons.iconarchive.com/icons/papirus-team/papirus-status/512/avatar-default-icon.png)"></div>
                        <div class="account_info_name">
                            Tài khoản của
                            <strong>Nguyễn Văn Sơn</strong>
                        </div>
                    </div>
                    <ul class="category_profile">
                        <li><a href=""><i class="cate_profile_icon fa-solid fa-user"></i><span>Thông tin tài khoản</span></a></li>
                        <li><a href=""><i class="cate_profile_icon fa-solid fa-cart-shopping"></i></i></i><span>Giỏ hàng</span></a></li>
                        <li><a href=""><i class="cate_profile_icon fa-solid fa-box-open"></i><span>Đơn hàng</span></a></li>
                        <li><a href=""><i class="cate_profile_icon fa-solid fa-right-from-bracket"></i></i><span>Đăng xuất</span></a></li>
                    </ul>
                </aside>
                <div class="right_column">
                    <div class="label_info">Thông tin tài khoản</div>
                    <div class="info">
                        <div class="info_left">
                            <span class="info_title">Thông tin cá nhân</span>
                            <div class="detail_info">
                                <form action="">
                                    <div class="fomr_info">
                                        <div class="form_avatar">
                                            <div class="avatar_detail">
                                                <div class="avatar_view">
                                                    <img src="https://www.testhouse.net/wp-content/uploads/2021/11/default-avatar.jpg" alt="avatar" class="avatar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form_name">
                                            <div class="form-control">
                                                <div class="label_name">Họ & Tên</div>
                                                <div class="input_info name">
                                                    <input type="search" class="input" name="fullName" maxlength="128" placeholder="Thêm họ tên" value="Nguyễn Văn Sơn">
                                                </div>
                                            </div>
                                            <div class="form-control">
                                                <div class="label_name">Nick name</div>
                                                <div class="input_info nickname">
                                                    <input type="search" class="input" name="nickName" maxlength="128" placeholder="Thêm biệt danh" value="Dolcats">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <div class="label_name" style="margin-bottom: 8px;">Giới tính</div>
                                        <label for="" class="radio_option">
                                            <input type="radio" name="gender" value="male">
                                            <span class="label">Nam</span>
                                        </label>
                                        <label for="" class="radio_option">
                                            <input type="radio" name="gender" value="Female">
                                            <span class="label">Nữ</span>
                                        </label>
                                        <label for="" class="radio_option">
                                            <input type="radio" name="gender" value="Diff">
                                            <span class="label">Khác</span>
                                        </label>
                                    </div>
                                    <div class="form-control">
                                        <div class="label_name">Địa chỉ</div>
                                        <div class="input_info name">
                                            <input type="search" class="input" name="address" maxlength="128" placeholder="Nhập địa chỉ nhận hàng" value="Nghi Diên, Nghi Lộc, Nghệ An">
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <div class="label_name">Email</div>
                                        <div class="input_info name">
                                            <input type="email" class="input" name="email" maxlength="128" placeholder="Nhập email" value="nguyenvanson@gmail.com">
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <div class="label_name">&nbsp;</div>
                                        <div class="input_info name">
                                            <button class="btn_submit" type="submit">Lưu thay đổi</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="info_center"></div>
                        <div class="info_right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php");
?>
</body>

</html>