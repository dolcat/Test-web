<?php
include("header.php");
$name = "";
$phone = "";
$address = "";

if (isset($_SESSION['id_user'])) {
    $sql_profile = "SELECT * FROM customer,account WHERE customer.id_user = '$id_user' AND customer.id_user = account.id_user";
    $check = mysqli_query($conn, $sql_profile);
    if ($check == true) {
        $profile = mysqli_fetch_array($check);
        $name = $profile['name'];
        $phone = $profile['phone'];
        $address = $profile['address'];
    }
} else {
    $name = "Nhập họ tên";
    $phone = "Nhập số điện thoại";
    $address = "Nhập địa chỉ";
}

$queryOrder = "";
$price = 0;
$resultOrder = "";
$id_b = "";
if (isset($_GET['price']) && isset($_SESSION['id_customer'])) {
    $queryOrder = mysqli_query($conn, "SELECT title, price FROM `book_list`,`cart` WHERE cart.id_customer = '$id_customer' AND book_list.id_book = cart.id_book;");
    $id_b = "cus";
} else if (isset($_GET['id_book'])) {
    $id = $_GET['id_book'];
    $id_b = $id;
    $queryOrder = mysqli_query($conn, "SELECT title, price FROM `book_list` WHERE id_book = '$id'");
}

?>


<section class="cart">
    <div class="grid">
        <div class="grid-row">
            <div class="label_heading_cart">
                <h4>Xác nhận thanh toán</h4>
            </div>
            <div class="confirmPay">
                <div class="payment-content-row">
                    <div class="payment-content-left">
                        <div class="state_line" style="width:98%;">
                            <div class="cart-top-wrap">
                                <div class="cart-top">
                                    <div class="payment-top-cart payment-top-item">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <div class="payment-top-address payment-top-item" style="border: 1px solid #0DB7EA;">
                                        <i class="fas fa-map-marked-alt" style="color: #0DB7EA;"></i>
                                    </div>
                                    <div class="payment-top-payment payment-top-item">
                                        <i class="fas fa-money-check-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="information_payment">
                            <form action="addingOrder.php" method="post">
                                <div class="payment-content-left-method-delivery">
                                    <p>Phương thức giao hàng</p>
                                    <div class="payment-content-left-method-delivery-item">
                                        <input checked type="radio" name="delivery_method" value="Giao hàng tiết kiệm">
                                        <label for="delivery_method">Giao hàng tiết kiệm</label>
                                    </div>
                                    <div class="payment-content-left-method-delivery-item">
                                        <input type="radio" name="delivery_method" value="Giao hàng chuyển phát nhanh">
                                        <label for="delivery_method">Giao hàng chuyển phát nhanh</label>
                                    </div>

                                </div>
                                <div class="payment-content-left-method-delivery">
                                    <p>Phương thức thanh toán</p>

                                    <div class="payment-content-left-method-payment-item">
                                        <input checked name="method-payment" type="radio" value="Trả tiền trực tiếp">
                                        <label for="">Trả tiền trực tiếp</label>
                                    </div>
                                    <div class="payment-content-left-method-payment-item">
                                        <input name="method-payment" type="radio" value="Thẻ tín dụng(OnePay)">
                                        <label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                                    </div>
                                    <div class="payment-content-left-method-payment-item">
                                        <input name="method-payment" type="radio" value="Thẻ ATM(OnePay)">
                                        <label for="">Thanh toán bằng thẻ ATM(OnePay)</label>
                                    </div>
                                    <p style="color: #FD6670; font-weight:400; line-height: 150%; font-size: 20px;">
                                        Lưu ý: Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.
                                    </p>
                                </div>
                                <div class="" style="display: flex;flex-direction: row;">
                                    <div class="" style="visibility: hidden;pointer-events: none;cursor: none;">
                                        <input name="check" type="text" value="<?php echo $id_b; ?>">
                                    </div>
                                    <div class="" style="visibility: hidden;pointer-events: none;cursor: none;">
                                        <input name="time" type="text" value="<?php echo date("d-m-Y H:i:s");?>">
                                    </div>
                                </div>
                                <div class="btn_completePay">
                                    <button type="submit" class="btn_complete_pay" style="width: 97%;">Hoàn tất thanh toán</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="payment-content-right">
                        <div class="box_pay" style="padding-top: 10px; border: 1px solid #DFDFDF; margin-bottom: 10px; border-radius: 4px;">
                            <table class="table_content_pay">
                                <tr>
                                    <th colspan="2" style="font-size: 20px; padding: 0px 0px 10px;">Xác nhận thông tin đơn hàng</th>
                                </tr>
                                <tr>
                                    <td style="font-size: 17px; font-weight: 400; height: auto; width: fit-content;">Danh sách sản phẩm: </td>
                                    <td style="padding-right: 5px; font-size: 17px;">
                                        <?php
                                        if ($queryOrder) {
                                            while ($resultOrder = mysqli_fetch_array($queryOrder)) {
                                                echo $resultOrder['title'] . '; ';
                                                $price += $resultOrder['price'];
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tổng tiền đơn hàng: </td>
                                    <td>
                                        <?php echo $price ?> VNĐ
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="form_infor_user_payment">
                            <h4 style="padding: 10px 0px 0px 10px;">Thông tin người nhận</h4>
                            <form class="form_insertDanhMuc" method="post" action="updateInforPay.php">
                                <div class="form-group_infor">
                                    <label for="name">Tên người nhận</label>
                                    <input type="text" class="input_infor" name="name" value="<?php echo $name ?>">
                                </div>
                                <div class="form-group_infor">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="tel" maxlength="10" class="input_infor" name="phone" value="<?php echo $phone ?>">
                                </div>
                                <div class="form-group_infor">
                                    <label for="address">Địa chỉ nhận hàng (lưu ý: chỉ chuyển trong nội quốc)</label>
                                    <input type="a" class="input_infor" name="address" value="<?php echo $address ?>">
                                </div>
                                <div class="form-group_infor_button">

                                    <button type="submit" style="width: 100%;" class="btn_seaching">Lưu xác nhận thông tin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
include("footer.php");
?>
</body>

</html>