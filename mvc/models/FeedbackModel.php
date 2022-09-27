<?php
require_once "mvc/utility/utility.php";
class FeedbackModel extends DB
{

    public function getAllFeedback()
    {
        $sql = "SELECT feedback.id,user.fullname,user.phone_number,user.email,feedback.note,feedback.updated_at,product.title,feedback.status
                FROM feedback,user,product
                WHERE feedback.user_id = user.id AND feedback.product_id=product.id
                order by status asc, updated_at desc";
        $data = $this->executeResult($sql);
        return $data;
    }

    public function getFeedbackProduct($id)
    {
        $sql = "SELECT user.fullname, feedback.updated_at,feedback.note, user.avatar
                FROM feedback,user
                WHERE feedback.product_id=$id AND feedback.user_id=user.id";
        $data = $this->executeResult($sql);
        return $data;
    }

    public function addFeedbackProduct($note, $userid, $product_id)
    {
        $updated_at = date("Y-m-d H:i:s");
        $created_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO feedback (note, user_id, product_id, created_at, updated_at) 
                VALUES ('$note', '$userid', '$product_id', '$created_at', '$updated_at')";
        $this->execute($sql);
    }

    public function addContact($note, $userid)
    {
        $updated_at = date("Y-m-d H:i:s");
        $created_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO feedback (note, user_id, product_id,  created_at, updated_at) 
                VALUES ('$note', '$userid', 48,'$created_at', '$updated_at')";
        $this->execute($sql);
    }

    public function updateStatus($id)
    {
        $updated_at = date("Y-m-d H:i:s");
        $sql = "update feedback set status = 1, updated_at = '$updated_at' where id = $id";
        $this->execute($sql);
    }
}
