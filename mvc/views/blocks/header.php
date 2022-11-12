<?php
require_once "mvc/utility/utility.php";
if (isset($data["render"])) {
    if ($data["render"] == "ManageAccount")
        $user = getUserToken(1);
    else $user = getUserToken();
} else $user = getUserToken();
if ($user != null) {
    $fullname = $user["fullname"];
}
$cart = [];
if (isset($_COOKIE['cart'])) {
    $json = $_COOKIE['cart'];
    $cart = json_decode($json, true);
}
$count = 0;
foreach ($cart as $item) {
    $count += $item['num'];
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<!-- index28:48-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SPhone</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/SPhone/public/images/favicon.png">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="http://localhost/SPhone/public/css/style.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <!-- Modernizr js -->
    <link href="http://localhost/SPhone/public/fontawesome-free-5.15.4-web/css/all.min.css" rel="stylesheet">
    <!--load all styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
</head>
<style>
    #alertSuccess {
        position: fixed;
        z-index: 999;
        right: 45px;
        font-weight: 500;
        border-radius: 2px;
    }
</style>

<body>
    <!-- Begin Header -->
    <nav id="navColor" class=" navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand my-2 my-md-1" href="http://localhost/SPhone/Home">
            <img src="https://raw.githubusercontent.com/PhucNguyen1905/SPhone/main/public/images/sphone.png" alt="logo-school">
            <span class="h2 mb-0 fw-bold text-warning">SPhone</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if ($data["render"] != "tintuc" && $data["render"] != "gioithieu" && $data["render"] != "contact") echo "active"; ?>">
                    <a class="nav-link text-warning fw-bold" href="http://localhost/SPhone/Home">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-warning fw-bold dropdown-toggle" href="http://localhost/SPhone/Home/productList" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sản phẩm
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link text-warning fw-bold dropdown-item" href="http://localhost/SPhone/Home/productList/0">Tất cả</a>
                        <?php
                        $countCategory = count($data["allCategory"]);
                        for ($i = 0; $i < $countCategory; $i++) {
                            echo   '<a class="text-warning fw-bold dropdown-item" href="http://localhost/SPhone/Home/productList/' . $data["allCategory"][$i]["id"] . '">' . $data["allCategory"][$i]["name"] . '</a>';
                        }

                        ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning fw-bold <?php if ($data["render"] == "tintuc") echo "active"; ?>" href="http://localhost/SPhone/Home/tintuc">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning fw-bold <?php if ($data["render"] == "gioithieu") echo "active"; ?>" href="http://localhost/SPhone/Home/gioithieu">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning fw-bold <?php if ($data["render"] == "contact") echo "active"; ?>" href="http://localhost/SPhone/Home/contact">Liên hệ</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="POST" action="http://localhost/SPhone/Home/search_buttuon">
                <input class="form-control mr-sm-2" type="search" id="search_name" name="search_name" placeholder="Search..." aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
            <div style="margin-right: 20px;" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                    if (isset($fullname))
                        echo $fullname;
                    else echo '<i style="font-size: 27px;color:rgb(236, 79, 58)" class="far fa-user"></i>';
                    ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    if (!isset($fullname)) {
                        echo '<a class="dropdown-item" href="http://localhost/SPhone/Login">Đăng nhập</a>';
                        echo '<a class="dropdown-item" href="http://localhost/SPhone/Register">Đăng ký</a>';
                    } else {
                        if ($user["role_id"] == 2) echo '<a class="dropdown-item" href="http://localhost/SPhone/OrderAdmin">Quản lý trang web</a>';
                        echo '<a class="dropdown-item" href="http://localhost/SPhone/Home/ManageAccount">Quản lý tài khoản</a>';
                        echo '<a class="dropdown-item" href="http://localhost/SPhone/Home/quanlydonhang/' . $user["id"] . '">Quản lý đơn hàng</a>';
                        echo '<a class="dropdown-item" href="http://localhost/SPhone/Login/UserLogout">Đăng xuất</a>';
                    }

                    ?>

                </div>
            </div>
            <div class="shopping_cart">
                <a style="font-size: 30px;color:#ffc107" href="http://localhost/SPhone/Home/card"><i class="shopping_cart fas fa-shopping-cart"></i></a>
                <span class="mount_product"><?= $count ?></span>
            </div>
        </div>


    </nav>
    <ul style="border-radius: 7px;width: 20%;position: fixed;z-index: 9999;background-color: #d2d3d4;right: 435px;top: 49px;" class="list-group" id="output_search">
    </ul>
    <!-- End Header -->
    <p id="alertSuccess"></p>
    <script type="text/javascript">
        $(document).ready(function() {
            var action = "search";
            $("#search_name").keyup(function() {
                var search_name = $("#search_name").val();
                if ($("#search_name").val() != '') {
                    $.ajax({
                        url: "http://localhost/SPhone/Home/search",
                        method: "POST",
                        data: {
                            action: action,
                            search_name: search_name
                        },
                        success: function(data) {
                            $("#output_search").html(data);
                        }
                    });
                } else $("#output_search").html("");
            });
            $(window).click(function() {
                //Hide the menus if visible
                $("#output_search").html("");
            });
        });
    </script>