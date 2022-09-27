<?php
require_once "mvc/utility/utility.php";
class CategoryModel extends DB{
    
    public function getCategory(){
        $id = $name = '';
        if(isset($_GET['id'])) {
            $id = getGet('id');
            $sql = "select * from category where id = $id";
            $data = $this->executeResult($sql, true);

            if($data != null) {
                $name = $data['name'];
            }
        }

        $sql = "select * from category";
        $data = $this->executeResult($sql);
        return $data;
    }

    public function insertCategory($name) {
        //insert
        $sql = "insert into Category(name) values ('$name')";
        $this->execute($sql);
    }

    public function updateCategory($name, $id) {
        $sql = "update Category set name = '$name' where id = $id";
		$this->execute($sql);
    }

    public function selectCategory($id) {
        $name = '';
        $sql = "select * from category where id = $id";
        $data = $this->executeResult($sql, true);

        if($data != null) {
            $name = $data['name'];
        }
        
        return $name;
    }

    public function selectCategoryDelete($id) {
        $result = true;
        $sql = "select count(*) as total from product where category_id = $id and deleted = 0";
        $data = $this->executeResult($sql, true);
        $total = $data['total'];

        if($total > 0) {
            $result = false;
            return $result;
        }
        $sql = "delete from category where id = $id";
        $this->execute($sql);
        return $result;
    }
}


