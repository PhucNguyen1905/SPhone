<!-- Begin Breadcrumb -->
<nav id="nav-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="ml125 breadcrumb-item"><a href="http://localhost/BKPhone/Home">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
    </ol>
</nav>
<!-- End Breadcrumb -->

<div class="product-list-wrapper">
    <p style="font-weight:600">Danh mục sản phẩm</p>
    <button style="margin-bottom: 5px; margin-right: 5px;
        <?php
        if ($data["category_id"] == 0)
            echo "background-color:rgb(236, 79, 58)";
        ?>
        " type="button" class="btn btn-primary">
        <a style="color:white;text-decoration:none" href="http://localhost/BKPhone/Home/productList/0">Tất cả</a>
    </button>
    <?php
    $countCategory = count($data["allCategory"]);
    for ($i = 0; $i < $countCategory; $i++) {
        echo   '<button style="margin-bottom: 5px; margin-right: 5px;';
        if ($data["category_id"] == $data["allCategory"][$i]["id"]) echo "background-color:rgb(236, 79, 58)";
        echo '" type="button" class="btn btn-primary">
                    <a style="color:white;text-decoration:none" href="http://localhost/BKPhone/Home/productList/' . $data["allCategory"][$i]["id"] . '">' . $data["allCategory"][$i]["name"] . '</a></button>';
    }

    ?>

    <hr>
    <p style="font-weight:600">Bộ lọc</p>
    <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
            if ($data["fillter"] == 1)
                echo "background-color:rgb(236, 79, 58)";
            ?>
        " type="button" class="btn btn-primary">
        <a style="color:white;text-decoration:none  " href="http://localhost/BKPhone/Home/productList/<?= $data["category_id"] ?>/1/1">Giá (Cao &gt; Thấp)</a></button>
    <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
            if ($data["fillter"] == 2)
                echo "background-color:rgb(236, 79, 58)";
            ?>
        " type="button" class="btn btn-primary">
        <a style="color:white;text-decoration:none" href="http://localhost/BKPhone/Home/productList/<?= $data["category_id"] ?>/1/2">Giá (Thấp &gt; Cao)</a></button>
    <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
            if ($data["fillter"] == 3)
                echo "background-color:rgb(236, 79, 58)";
            ?>
        " type="button" class="btn btn-primary">
        <a style="color:white;text-decoration:none" href="http://localhost/BKPhone/Home/productList/<?= $data["category_id"] ?>/1/3">Tên (A &gt; Z)</a></button>
    <button style="margin-bottom: 5px; margin-right: 5px;
            <?php
            if ($data["fillter"] == 4)
                echo "background-color:rgb(236, 79, 58)";
            ?>
        " type="button" class="btn btn-primary">
        <a style="color:white;text-decoration:none" href="http://localhost/BKPhone/Home/productList/<?= $data["category_id"] ?>/1/4">Tên (Z &gt; A)</a></button>

    <hr>
    <?php
    $countCategoyCheck = 0;
    $countProduct = count($data["allProductCategory"]);
    echo '<p style="font-weight:600">Tổng cộng có ' . $countProduct . ' sản phẩm (Từ: ' . (1 + $data["currentIndex"]) . ' -> ';
    if ($data["currentIndex"] + 12 < $countProduct)
        echo $data["currentIndex"] + 12;
    else echo $countProduct;
    echo ')</p> ';
    ?>
    <hr>
    <div class="showproduct">
        <?php

        echo '<div class="container">';
        echo '<div class="row">';
        for ($i = $data["currentIndex"]; $i < $data["currentIndex"] + 12 && $i < $countProduct; $i++) {
            echo '<div class="col-sm">';
            echo    '<div style="margin-bottom:10px" class="card">';
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
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination pg-blue justify-content-center">
            <li class="page-item">
                <?php
                if ($data["numPages"] > 1) {
                    if ($data["pages"] == 1) {
                        echo    '<a href="http://localhost/BKPhone/Home/productList/' . $data["category_id"] . '/1" class="page-link"><i class="fa fa-chevron-left"></i> Previous</a>';
                    } else echo    '<a href="http://localhost/BKPhone/Home/productList/' . $data["category_id"] . '/' . ($data["pages"] - 1) . '" class="page-link"><i class="fa fa-chevron-left"></i> Previous</a>';
                    echo '</li>';
                    for ($i = 1; $i <= $data["numPages"]; $i++) {
                        if ($i == $data["pages"]) {
                            echo '<li class="page-item active"><a class="page-link" href="http://localhost/BKPhone/Home/productList/' . $data["category_id"] . '/' . $i . '">' . $i . '</a></li>';
                        } else echo '<li><a class="page-link" href="http://localhost/BKPhone/Home/productList/' . $data["category_id"] . '/' . $i . '">' . $i . '</a></li>';
                    }
                    echo '<li class="page-item">';
                    if ($data["pages"] == $data["numPages"]) {
                        echo '<a href="http://localhost/BKPhone/Home/productList/' . $data["category_id"] . '/' . $data["numPages"] . '" class="page-link"> Next <i class="fa fa-chevron-right"></i></a>';
                    } else echo '<a href="http://localhost/BKPhone/Home/productList/' . $data["category_id"] . '/' . ($data["pages"] + 1) . '" class="page-link "> Next <i class="fa fa-chevron-right"></i></a>';
                }
                ?>
            </li>
        </ul>
    </nav>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $(".btnOrder").click(function() {
            $("#alertSuccess").html('<p style="background-color: #55e073;padding: 10px;"><i class="fas fa-check-circle"></i>Thêm vào giỏ hàng thành công</p>');
        });
    });

    function addToCard(productId, priceProduct) {
        var action = "add";
        $.ajax({
            url: "http://localhost/BKPhone/home/addToCart",
            method: "POST",
            data: {
                action: action,
                productId: productId,
                num: 1,
                priceProduct: priceProduct
            },
            success: function(data) {
                location.reload();
            }
        });
    }
</script>