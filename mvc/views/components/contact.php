<!--Section: Contact v.2-->
<p class="d-none" id="alertSuccess"><?= $data["alertSuccess"] ?></p>

<nav id="nav-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="ml125 breadcrumb-item"><a href="http://localhost/SPhone/Home">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
    </ol>
</nav>
<div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5623.641672731866!2d106.65721623557643!3d10.772602968920005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec3c161a3fb%3A0xef77cd47a1cc691e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBCw6FjaCBraG9hIC0gxJDhuqFpIGjhu41jIFF14buRYyBnaWEgVFAuSENN!5e0!3m2!1svi!2s!4v1637332111149!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<section id="wrapper" class="mb-4">
    <!--Google map-->


    <!--Google Maps-->
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Bạn có bất kì câu hỏi nào cho chúng tôi không? Hãy hỏi ngay đừng ngần ngại nhé. Chúng tôi sẽ trả lời bạn sớm nhất có thể!!!</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="http://localhost/SPhone/FeedbackAdmin/addFeedback" method="POST">

                <!--Grid row-->
                <div class="row">
                </div>
                <!--Grid row-->
                <input type="text" name="user_id" value="<?= $user["id"] ?>" hidden="true">

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Chủ đề</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Nội dung</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div style="margin-top:10px" class="text-center text-md-left">
                    <button class="btn btn-primary" onclick=checkBtnContact() name="btnContact">Gửi</button>
                </div>

            </form>

            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>SPhone</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>0123 456 789</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>ngtrongphuc1905@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

    <h2 class="h1-responsive font-weight-bold text-center my-4">Chính sách bảo hành</h2>
    <h4 class="h1-responsive font-weight-bold text-center my-4">Bảo hành cam kết trong vòng 12 tháng</h4>
    <p class="w-responsive mx-auto mb-5">

        - Chỉ áp dụng cho sản phẩm chính, KHÔNG áp dụng cho phụ kiện đi kèm sản phẩm chính. <br>

        + Bảo hành trong vòng 15 ngày (tính từ ngày SPhone nhận máy ở trạng thái lỗi và đến ngày gọi khách hàng ra lấy lại máy đã bảo hành). <br>

        + Sản phẩm không bảo hành lại lần 2 trong 30 ngày kể từ ngày máy được bảo hành xong. <br>

        + Nếu SPhone vi phạm cam kết (bảo hành quá 15 ngày hoặc phải bảo hành lại sản phẩm lần nữa trong 30 ngày kể từ lần bảo hành trước), Khách hàng được áp dụng phương thức "Hư gì đổi nấy ngay và luôn" hoặc Hoàn tiền với mức phí giảm 50%. <br>

        *Từ tháng thứ 13 trở đi không áp dụng bảo hành cam kết, chỉ áp dụng bảo hành hãng (nếu có).</p>

    <h4 class="h1-responsive font-weight-bold text-center my-4">Hư gì đổi nấy ngay và luôn</h4>
    <p class="w-responsive mx-auto mb-5">
        Sản phẩm hư gì thì đổi đó (cùng model, cùng dung lượng, cùng màu sắc...) đối với sản phẩm chính và đổi tương đương đối với phụ kiện đi kèm, cụ thể:

    <h5>1) Hư sản phẩm chính thì đổi sản phẩm chính mới</h5>

    - Tháng đầu tiên kể từ ngày mua: miễn phí. <br>

    - Tháng thứ 2 đến tháng thứ 12: phí 10% giá trị hóa đơn/tháng.<br>

    (VD: tháng thứ 2 phí 10%, tháng thứ 3 phí 20%...).<br>


    Lưu ý: Nếu không có sản phẩm chính đổi cho Khách hàng thì áp dụng chính sách Bảo hành có cam kết hoặc Hoàn tiền với mức phí giảm 50%.<br>
    <br>

    <h5>2) Hư phụ kiện đi kèm thì đổi phụ kiện có cùng công năng mà SPhone đang kinh doanh:
    </h5>
    Phụ kiện đi kèm được đổi miễn phí trong vòng 12 tháng kể từ ngày mua sản phẩm chính bằng hàng phụ kiện SPhone đang kinh doanh mới với chất lượng tương đương. <br>

    Lưu ý: Nếu không có phụ kiện tương đương hoặc Khách hàng không thích thì áp dụng bảo hành hãng. <br> <br>

    <h5>3) Lỗi phần mềm không áp dụng, mà chỉ khắc phục lỗi phần mềm.</h5>
    </p>


</section>
<!--Section: Contact v.2-->
<script type="text/javascript">
    var alertSuccess = document.getElementById("alertSuccess").innerHTML;
    if (alertSuccess == 1)
        alert("Bạn đã gửi thành công!!!");

    function checkBtnContact() {
        var subject = document.getElementById("subject").value;
        var message = document.getElementById("message").value;
        if (subject == '' || message == '')
            alert("Vui lòng nhập đủ thông tin!!!");
    }
</script>