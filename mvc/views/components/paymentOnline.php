<div style="margin-top:70px" class="container">
    <h3>Chi tiết đơn hàng</h3>
    <div class="table-responsive">
        <form action="http://localhost/BKPhone/PaymentOnline" id="create_form" method="post">
            <input type="text" name="user_id" value="<?= $user["id"] ?>" hidden="true">

            <div class="form-group">
                <label for="form11">Họ và tên </label>
                <input type="text" name="fullname" id="form11" class="form-control" placeholder="Họ và tên">
            </div>
            <div class="form-group">
                <label for="form18">Số điện thoại </label>
                <input type="text" name="phone" id="form18" class="form-control" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <label for="form19">Email </label>
                <input type="email" name="email" id="form19" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="form14">Địa chỉ </label>
                <input type="text" name="address" id="form14" placeholder="Địa chỉ" class="form-control">
            </div>
            <div class="form-group">
                <label for="language">Loại hàng hóa </label>
                <select name="order_type" id="order_type" class="form-control">
                    <option value="billpayment">Thanh toán hóa đơn</option>
                </select>
            </div>
            <div class="form-group">
                <label for="order_id">Mã hóa đơn</label>
                <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo date("YmdHis") ?>" />
            </div>
            <div class="form-group">
                <label for="amount">Số tiền</label>
                <input class="form-control" id="amount" name="amount" type="number" value="<?= $data["totalMoney"] ?>" />
            </div>
            <div class="form-group">
                <label for="order_desc">Nội dung thanh toán</label>
                <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Noi dung thanh toan</textarea>
            </div>
            <div class="form-group">
                <label for="bank_code">Ngân hàng</label>
                <select name="bank_code" id="bank_code" class="form-control">
                    <option value="">Không chọn</option>
                    <option value="NCB"> Ngan hang NCB</option>
                    <option value="AGRIBANK"> Ngan hang Agribank</option>
                    <option value="SCB"> Ngan hang SCB</option>
                    <option value="SACOMBANK">Ngan hang SacomBank</option>
                    <option value="EXIMBANK"> Ngan hang EximBank</option>
                    <option value="MSBANK"> Ngan hang MSBANK</option>
                    <option value="NAMABANK"> Ngan hang NamABank</option>
                    <option value="VNMART"> Vi dien tu VnMart</option>
                    <option value="VIETINBANK">Ngan hang Vietinbank</option>
                    <option value="VIETCOMBANK"> Ngan hang VCB</option>
                    <option value="HDBANK">Ngan hang HDBank</option>
                    <option value="DONGABANK"> Ngan hang Dong A</option>
                    <option value="TPBANK"> Ngân hàng TPBank</option>
                    <option value="OJB"> Ngân hàng OceanBank</option>
                    <option value="BIDV"> Ngân hàng BIDV</option>
                    <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                    <option value="VPBANK"> Ngan hang VPBank</option>
                    <option value="MBBANK"> Ngan hang MBBank</option>
                    <option value="ACB"> Ngan hang ACB</option>
                    <option value="OCB"> Ngan hang OCB</option>
                    <option value="IVB"> Ngan hang IVB</option>
                    <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                </select>
            </div>
            <div class="form-group">
                <label for="language">Ngôn ngữ</label>
                <select name="language" id="language" class="form-control">
                    <option value="vn">Tiếng Việt</option>
                    <option value="en">English</option>
                </select>
            </div>
            <!-- <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Post</button> -->
            <button type="submit" name="redirect" id="redirect" class="btn btn-primary">Thanh toán Redirect</button>

        </form>
    </div>
    <p>
        &nbsp;
    </p>
    <footer class="footer">
        <p>&copy; VNPAY <?php echo date('Y') ?></p>
    </footer>
</div>