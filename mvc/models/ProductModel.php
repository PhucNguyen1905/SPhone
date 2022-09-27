<?php
require_once "mvc/utility/utility.php";
class ProductModel extends DB{
    
    public function getAllProduct($fillter){
        if($fillter == 2){
            $sql = "select Product.*, Category.name as category_name 
                    from Product left join Category on Product.category_id = Category.id 
                    where Product.deleted = 0
                    ORDER BY product.price ASC";
        }
        else if($fillter == 3){
            $sql = "select Product.*, Category.name as category_name 
                    from Product left join Category on Product.category_id = Category.id 
                    where Product.deleted = 0
                    ORDER BY product.title ASC";
        }
        else if($fillter == 4){
            $sql = "select Product.*, Category.name as category_name 
                    from Product left join Category on Product.category_id = Category.id 
                    where Product.deleted = 0
                    ORDER BY product.title DESC";
        }
        else $sql = "select Product.*, Category.name as category_name 
                    from Product left join Category on Product.category_id = Category.id 
                    where Product.deleted = 0
                    ORDER BY product.price DESC";
	    $data = $this->executeResult($sql);
        return $data;
    }

    public function insertProduct($category_id, $title, $price, $discount, $thumbnail, $description) {
        //insert
        $sql = "insert into product(category_id, title, price, discount, thumbnail, description, deleted ) values ('$category_id','$title', '$price','$discount','$thumbnail', '$description',0)";
        $this->execute($sql);
    }

    public function selectProduct($id){
        $sql = "select * from product where id = '$id' and deleted = 0";
        $userItem = $this->executeResult($sql, true);
        return $userItem;
    }

    public function updateProduct($id, $category_id, $title, $price, $discount, $thumbnail, $description) {
        $sql = "update product set title = '$title', price = $price, discount = $discount, description = '$description', category_id = '$category_id', thumbnail = '$thumbnail' where id = $id";
		$this->execute($sql);
    }

    public function selectProductDelete($id) {
        $sql = "delete from product where id = $id";
        $this->execute($sql);
    }

    public function selectProductCategory($id, $fillter){
        if($fillter == 2){
            $sql = "select * from product where category_id = '$id' and deleted = 0
                    ORDER BY product.price ASC";
        }
        else if($fillter == 3){
            $sql = "select * from product where category_id = '$id' and deleted = 0
                    ORDER BY product.title ASC";
        }
        else if($fillter == 4){
            $sql = "select * from product where category_id = '$id' and deleted = 0
                    ORDER BY product.title DESC";
        }
        else $sql = "select * from product where category_id = '$id' and deleted = 0
                    ORDER BY product.price DESC";
        $allProduct = $this->executeResult($sql);
        return $allProduct;
    }

    public function getProductOrder($idList){
        $sql = "select * from product where id in ($idList)";
        $cartList = $this->executeResult($sql);
        return $cartList;
    }

    public function searchProduct($name){

        $sql ="SELECT * FROM `product` 
                WHERE title LIKE '%$name%' 
                order by id 
                DESC LIMIT 5";
        $searchProducts = $this->executeResult($sql);
        return $searchProducts;
    }
}


