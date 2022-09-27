
<!--Begin display -->
<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">Thông tin đơn hàng</h3>
    </div>
    <div class="table-responsive">
        <div class="form-group">
            <label >Mã đơn hàng:</label>
            
            <label><?php echo $data["order_id"] ?></label>
        </div>    
        <div class="form-group">

            <label >Số tiền:</label>
            <label><?=number_format($data["money"]/100) ?> VNĐ</label>
        </div>  
        <div class="form-group">
            <label >Nội dung thanh toán:</label>
            <label><?php $data["note"] ?></label>
        </div> 
        <div class="form-group">
            <label >Mã phản hồi (vnp_ResponseCode):</label>
            <label><?php echo $data["vnp_response_code"] ?></label>
        </div> 
        <div class="form-group">
            <label >Mã GD Tại VNPAY:</label>
            <label><?php echo $data["code_vnpay"] ?></label>
        </div> 
        <div class="form-group">
            <label >Mã Ngân hàng:</label>
            <label><?php echo $data["code_bank"] ?></label>
        </div> 
        <div class="form-group">
            <label >Thời gian thanh toán:</label>
            <label><?php echo $data["time"] ?></label>
        </div> 
        <div class="form-group">
            <label >Kết quả:</label>
            <label>
                <?php
                if ($data["secureHash"] == $data["vnp_SecureHash"]) {
                        echo "GD Thanh cong";
                    } else {
                        echo "GD Khong thanh cong";
                    }
                } else {
                    echo "Chu ky khong hop le";
                }
                ?>

            </label>
            <br>
            <a href="../code/hocvien_thanhtoan.php">
                <button>Quay lại</button>
            </a>
        </div> 
    </div>
    <p>
        &nbsp;
    </p>
    <footer class="footer">
        <p>&copy; Quản lý Tiếng Anh 2020</p>
    </footer>
</div>  