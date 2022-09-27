<?php
require_once "mvc/views/blocks/header.php";

if ($data["render"] == "home") {
    require_once "mvc/views/components/sliderbar.php";
    require_once "mvc/views/components/showProduct.php";
} else if ($data["render"] == "productDetail") {
    require_once "mvc/views/components/product_detail.php";
} else if ($data["render"] == "productList") {
    require_once "mvc/views/components/productList.php";
} else if ($data["render"] == "card") {
    require_once "mvc/views/components/card.php";
} else if ($data["render"] == "contact") {
    require_once "mvc/views/components/contact.php";
} else if ($data["render"] == "gioithieu") {
    require_once "mvc/views/components/gioithieu.php";
} else if ($data["render"] == "tintuc") {
    require_once "mvc/views/components/tintuc.php";
} else if ($data["render"] == "ManageAccount") {
    require_once "mvc/views/components/updateInfoUser.php";
} else if ($data["render"] == "checkout") {
    require_once "mvc/views/components/checkout.php";
} else if ($data["render"] == "succesOrder") {
    require_once "mvc/views/components/succesOrder.php";
} else if ($data["render"] == "quanlydonhang") {
    require_once "mvc/views/components/quanlydonhang.php";
} else if ($data["render"] == "orderDetail") {
    require_once "mvc/views/components/detail.php";
} else if ($data["render"] == "paymentOnline") {
    require_once "mvc/views/components/paymentOnline.php";
} else if ($data["render"] == "paymentReturn") {
    require_once "mvc/views/components/paymentReturn.php";
}

require_once "mvc/views/blocks/footer.php";
