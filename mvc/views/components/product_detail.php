<nav id="nav-breadcrumb" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="ml125 breadcrumb-item"><a href="http://localhost/BKPhone/Home">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?= $data["productCategory"] ?></li>
  </ol>
</nav>
<!-- End Breadcrumb -->
<!--Section: Block Content-->
<div class="product-list-wrapper">

  <section class="mb-5">
    <div class="row">
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="mdb-lightbox">
          <div class="row product-gallery mx-1">
            <div class="col-12 mb-0">
              <figure class="overlay rounded z-depth-1 main-img">
                <img style="width: 400px;height: 400px;" src="<?= $data["productItem"]["thumbnail"] ?>" class="img-fluid z-depth-1">
              </figure>
            </div>
          </div>

        </div>

      </div>
      <div class="col-md-6">

        <h5><?= $data["productItem"]["title"] ?></h5>
        <hr>
        <p><span class="mr-1"><strong><?= number_format($data["productItem"]["discount"]) . ' đ' ?></strong></span>
          <span style="margin-left:12px; text-decoration: line-through;" class="mr-1">
            <?php
            if ($data["productItem"]["discount"] != 0) echo number_format($data["productItem"]["price"]) . ' đ';
            ?>
          </span>
        </p>
        <p class="pt-1"><?= $data["productItem"]["description"] ?></p>
        <button onclick="addToCard(<?= $data['productItem']['id'] ?>)" type="button" class="btn btn-light btn-md mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Thêm vào giỏ hàng</button>
      </div>
    </div>

  </section>
  <!--Section: Block Content-->
  <!-- Classic tabs -->
  <?php $countFeedback = count($data["feedbackProduct"]); ?>
  <div class="classic-tabs border rounded px-4 pt-1">

    <ul class="nav tabs-primary nav-justified" id="advancedTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link" id="info-tab" data-toggle="tab" href="#description" role="tab" aria-controls="info" aria-selected="false">Thông tin về sản phẩm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Đánh giá(<?= $countFeedback ?>)</a>
      </li>
    </ul>
    <div class="tab-content" id="advancedTabContent">
      <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
        <p class="pt-1"><?= $data["productItem"]["description"] ?></p>
      </div>
      <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">

        <h5><span><?= $countFeedback ?></span> đánh giá về <span><?= $data["productItem"]["title"] ?></span></h5>
        <?php
        for ($i = 0; $i < $countFeedback; $i++) {
          echo '<div class="media mt-3 mb-4">
            <img class="d-flex mr-3 z-depth-1" src="' . $data["feedbackProduct"][$i]["avatar"] . '" width="62"
              alt="Generic placeholder image">
            <div class="media-body">
              <div class="d-sm-flex justify-content-between">
                <p class="mt-1 mb-2">
                  <strong>' . $data["feedbackProduct"][$i]["fullname"] . '</strong>
                  <span>– </span><span>' . $data["feedbackProduct"][$i]["updated_at"] . '</span>
                </p>
              </div>
              <p class="mb-0">' . $data["feedbackProduct"][$i]["note"] . '</p>
            </div>
          </div>
          <hr>';
        }
        ?>
        <h5 class="mt-4">Thêm bài đánh giá</h5>
        <form form method="post" enctype="multipart/form-data" action="http://localhost/BKPhone/FeedbackAdmin/addFeedback">
          <!-- Your review -->
          <input type="text" name="product_id" value="<?= $data["productItem"]["id"] ?>" hidden="true">
          <input type="text" name="user_id" value="<?= $user["id"] ?>" hidden="true">
          <div class="md-form md-outline">
            <label for="form76">Nội dung</label>
            <textarea name="note" id="form76" class="md-textarea form-control pr-6" rows="4"></textarea>
          </div>
          <div class="text-right pb-2">
            <button class="btn btn-primary" name="btnReview" onclick="checkContentFeedback()">Thêm bài đánh giá</button>
          </div>
        </form>
      </div>
    </div>

  </div>

  <h3 style="color:red; margin-top:10px">Các sản phẩm cùng danh mục</h3>
  <div class="showproduct mt-3">
    <?php
    echo '<div class="container">';
    echo '<div class="row">';
    for ($i = 0; $i < 4; $i++) {
      echo '<div class="col-sm">';
      echo    '<div class="card">';
      echo        '<a href="http://localhost/BKPhone/Home/productDetail/' . $data["allProductCategory"][$i]["id"] . '">
                        <img class="card-img-top"
                            src="' . $data["allProductCategory"][$i]["thumbnail"] . '"
                            alt="Card image cap">
                    </a>';
      echo        '<div class="card-body">';
      echo            '<a id="taga" href="http://localhost/BKPhone/Home/productDetail/' . $data["allProductCategory"][$i]["id"] . '"><h5 class="card-title">' . $data["allProductCategory"][$i]["title"] . '</h5></a>
                        <hr />';
      echo            '<span class="card-text">' . number_format($data["allProductCategory"][$i]["discount"]) . 'đ</span>';
      echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">';
      if ($data["allProductCategory"][$i]["discount"] != 0) echo number_format($data["allProductCategory"][$i]["price"]) . 'đ';
      echo '</span>';
      echo        '</div>';
      echo        '<button type="button" class="btnOrder btn btn-warning" onclick="addToCard(' . $data["allProductCategory"][$i]["id"] . ')">Đặt hàng</button>';
      echo    '</div></div>';
    }
    echo '</div></div>';
    ?>
    <p id="user_id"><?php if (isset($user["id"])) echo $user["id"]; ?></p>
  </div>
</div>
<script type="text/javascript">
  function checkContentFeedback() {
    var note = document.getElementById("form76").value;
    var userId = document.getElementById("user_id").innerHTML;
    if (userId == '123')
      alert("Vui lòng đăng ngập để đánh giá!!!");
    else if (note == "")
      alert("Vui lòng nhập nội dung đánh giá!!!");
  }

  $(document).ready(function() {
    $(".btnOrder").click(function() {
      $("#alertSuccess").html('<p style="background-color: #55e073;padding: 10px;"><i class="fas fa-check-circle"></i>Thêm vào giỏ hàng thành công</p>');
    });
    $(".btn").click(function() {
      $("#alertSuccess").html('<p style="background-color: #55e073;padding: 10px;"><i class="fas fa-check-circle"></i>Thêm vào giỏ hàng thành công</p>');
    });
  });

  function addToCard(productId) {
    var action = "add";
    $.ajax({
      url: "../../home/addToCart",
      method: "POST",
      data: {
        action: action,
        productId: productId,
        num: 1
      },
      success: function(data) {
        location.reload();
      }
    });
  }
</script>