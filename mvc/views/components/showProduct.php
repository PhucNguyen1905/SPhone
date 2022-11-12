<div id="wrapper">

    <a style="color:black;text-decoration:none" href="http://localhost/SPhone/Home/productList/1">
        <h3 style="margin-left:20px; margin-top: 15px">Huawei</h3>
    </a>
    <hr />
    <div class="container container-fluid py-4">
        <div class="m-auto">
            <div class="owl-carousel owl-theme">
                <?php
                for ($i = 0; $i < 6; $i++) {
                    echo '<div class="item p-2">';
                    echo    '<div class="card">';
                    echo        '<a href="http://localhost/SPhone/Home/productDetail/' . $data["productHuawei"][$i]["id"] . '">
                            <img class="card-img-top "
                                src="' . $data["productHuawei"][$i]["thumbnail"] . '"
                                alt="Card image cap">
                        </a>';
                    echo        '<div class="card-body">';
                    echo            '<a id="taga" href="http://localhost/SPhone/Home/productDetail/' . $data["productHuawei"][$i]["id"] . '"><h5 class="card-title">' . $data["productHuawei"][$i]["title"] . '</h5></a>
                            <hr />';
                    echo            '<span class="card-text">' . number_format($data["productHuawei"][$i]["discount"]) . 'đ</span>';
                    echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">';
                    if ($data["productHuawei"][$i]["discount"] != 0) echo number_format($data["productHuawei"][$i]["price"]) . 'đ';
                    echo '</span>';
                    echo        '</div>';
                    echo        '<button type="button" class="btnOrder btn btn-warning" onclick="addToCard(' . $data["productHuawei"][$i]["id"] . ')">Đặt hàng</button>';
                    echo    '</div></div>';
                }
                ?>
            </div>
        </div>
    </div>

    <a style="color:black;text-decoration:none" href="http://localhost/SPhone/Home/productList/2">
        <h3 style="margin-left:20px; margin-top: 15px">Iphone</h3>
    </a>
    <hr />
    <div class="container container-fluid py-4">
        <div class="m-auto">
            <div class="owl-carousel owl-theme">
                <?php
                for ($i = 0; $i < 6; $i++) {
                    echo '<div class="item p-2">';
                    echo    '<div class="card">';
                    echo        '<a href="http://localhost/SPhone/Home/productDetail/' . $data["productIphone"][$i]["id"] . '">
                            <img class="card-img-top "
                                src="' . $data["productIphone"][$i]["thumbnail"] . '"
                                alt="Card image cap">
                        </a>';
                    echo        '<div class="card-body">';
                    echo            '<a id="taga" href="http://localhost/SPhone/Home/productDetail/' . $data["productIphone"][$i]["id"] . '"><h5 class="card-title">' . $data["productIphone"][$i]["title"] . '</h5></a>
                            <hr />';
                    echo            '<span class="card-text">' . number_format($data["productIphone"][$i]["discount"]) . 'đ</span>';
                    echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">';
                    if ($data["productIphone"][$i]["discount"] != 0) echo number_format($data["productIphone"][$i]["price"]) . 'đ';
                    echo '</span>';
                    echo        '</div>';
                    echo        '<button type="button" class="btnOrder btn btn-warning" onclick="addToCard(' . $data["productIphone"][$i]["id"] . ')">Đặt hàng</button>';
                    echo    '</div></div>';
                }
                ?>
            </div>
        </div>
    </div>

    <a style="color:black;text-decoration:none" href="http://localhost/SPhone/Home/productList/3">
        <h3 style="margin-left:20px; margin-top: 15px">Samsung</h3>
    </a>
    <hr />
    <div class="container container-fluid py-4">
        <div class="m-auto">
            <div class="owl-carousel owl-theme">
                <?php
                for ($i = 0; $i < 6; $i++) {
                    echo '<div class="item p-2">';
                    echo    '<div class="card">';
                    echo        '<a href="http://localhost/SPhone/Home/productDetail/' . $data["productSamsung"][$i]["id"] . '">
                            <img class="card-img-top "
                                src="' . $data["productSamsung"][$i]["thumbnail"] . '"
                                alt="Card image cap">
                        </a>';
                    echo        '<div class="card-body">';
                    echo            '<a id="taga" href="http://localhost/SPhone/Home/productDetail/' . $data["productSamsung"][$i]["id"] . '"><h5 class="card-title">' . $data["productSamsung"][$i]["title"] . '</h5></a>
                            <hr />';
                    echo            '<span class="card-text">' . number_format($data["productSamsung"][$i]["discount"]) . 'đ</span>';
                    echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">';
                    if ($data["productSamsung"][$i]["discount"] != 0) echo number_format($data["productSamsung"][$i]["price"]) . 'đ';
                    echo '</span>';
                    echo        '</div>';
                    echo        '<button type="button" class="btnOrder btn btn-warning" onclick="addToCard(' . $data["productSamsung"][$i]["id"] . ')">Đặt hàng</button>';
                    echo    '</div></div>';
                }
                ?>
            </div>
        </div>
    </div>

    <a style="color:black;text-decoration:none" href="http://localhost/SPhone/Home/productList/102">
        <h3 style="margin-left:20px; margin-top: 15px">Xiaomi</h3>
    </a>
    <hr />
    <div class="container container-fluid py-4">
        <div class="m-auto">
            <div class="owl-carousel owl-theme">
                <?php
                for ($i = 0; $i < 6; $i++) {
                    echo '<div class="item p-2">';
                    echo    '<div class="card">';
                    echo        '<a href="http://localhost/SPhone/Home/productDetail/' . $data["productXiaomi"][$i]["id"] . '">
                            <img class="card-img-top "
                                src="' . $data["productXiaomi"][$i]["thumbnail"] . '"
                                alt="Card image cap">
                        </a>';
                    echo        '<div class="card-body">';
                    echo            '<a id="taga" href="http://localhost/SPhone/Home/productDetail/' . $data["productXiaomi"][$i]["id"] . '"><h5 class="card-title">' . $data["productXiaomi"][$i]["title"] . '</h5></a>
                            <hr />';
                    echo            '<span class="card-text">' . number_format($data["productXiaomi"][$i]["discount"]) . 'đ</span>';
                    echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">';
                    if ($data["productXiaomi"][$i]["discount"] != 0) echo number_format($data["productXiaomi"][$i]["price"]) . 'đ';
                    echo '</span>';
                    echo        '</div>';
                    echo        '<button type="button" class="btnOrder btn btn-warning" onclick="addToCard(' . $data["productXiaomi"][$i]["id"] . ')">Đặt hàng</button>';
                    echo    '</div></div>';
                }
                ?>
            </div>
        </div>
    </div>

    <a style="color:black;text-decoration:none" href="http://localhost/SPhone/Home/productList/104">
        <h3 style="margin-left:20px; margin-top: 15px">Nokia</h3>
    </a>
    <hr />
    <div class="container container-fluid py-4">
        <div class="m-auto">
            <div class="owl-carousel owl-theme">
                <?php
                for ($i = 0; $i < 6; $i++) {
                    echo '<div class="item p-2">';
                    echo    '<div class="card">';
                    echo        '<a href="http://localhost/SPhone/Home/productDetail/' . $data["productNokia"][$i]["id"] . '">
                            <img class="card-img-top "
                                src="' . $data["productNokia"][$i]["thumbnail"] . '"
                                alt="Card image cap">
                        </a>';
                    echo        '<div class="card-body">';
                    echo            '<a id="taga" href="http://localhost/SPhone/Home/productDetail/' . $data["productNokia"][$i]["id"] . '"><h5 class="card-title">' . $data["productNokia"][$i]["title"] . '</h5></a>
                            <hr />';
                    echo            '<span class="card-text">' . number_format($data["productNokia"][$i]["discount"]) . 'đ</span>';
                    echo            '<span style="margin-left:12px; text-decoration: line-through;" class="card-text">';
                    if ($data["productNokia"][$i]["discount"] != 0) echo number_format($data["productNokia"][$i]["price"]) . 'đ';
                    echo '</span>';
                    echo        '</div>';
                    echo        '<button type="button" class="btnOrder btn btn-warning" onclick="addToCard(' . $data["productNokia"][$i]["id"] . ')">Đặt hàng</button>';
                    echo    '</div></div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        responsive: {
            0: {
                items: 1
            },
            550: {
                items: 2
            },
            900: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })
    $(document).ready(function() {
        $(".btnOrder").click(function() {
            $("#alertSuccess").html('<p style="background-color: #55e073;padding: 10px;"><i class="fas fa-check-circle"></i>Thêm vào giỏ hàng thành công</p>');
        });
    });

    function addToCard(productId) {
        var action = "add";
        $.ajax({
            url: "home/addToCart",
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