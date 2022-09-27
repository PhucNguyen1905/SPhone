<?php
require_once "mvc/utility/utility.php";
class ProductDetail extends Controller{

    public $productModel;

    public function __construct() {
        $this->productModel = $this->model("ProductModel");
    }

    public function productDetail($id){
        $productItem = $this->productModel->selectProduct($id);
        $allProductCategory = $this->productModel->selectProductCategory($productItem["category_id"]);
        // echo $data["productItem"]["thumbnail"];
        $this->view("layoutmaster_productdetail",[
            "productItem"=>$productItem,
            "allProductCategory"=>$allProductCategory
        ]);
    }

}

?>