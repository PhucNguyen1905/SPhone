<?php
require_once "mvc/utility/utility.php";
class FeedbackAdmin extends Controller
{

    public $feedbackModel;

    public function __construct()
    {
        $this->feedbackModel = $this->model("FeedbackModel");
    }

    public function GetPage()
    {
        $allFeedback = $this->feedbackModel->getAllFeedback();
        $this->view("feedback/feedbackAdmin", [
            "allFeedback" => $allFeedback
        ]);
    }

    public function updateStatusFeedback($id)
    {
        $this->feedbackModel->updateStatus($id);
        header('Location: http://localhost/BKPhone/FeedbackAdmin');
    }

    public function addFeedback()
    {
        if (isset($_POST["btnReview"])) {
            if (isset($_POST["note"]))
                $note = getPost('note');
            $product_id = getPost('product_id');
            if (isset($_POST["user_id"]))
                $user_id = getPost('user_id');
            var_dump($note);
            if (!$user_id || $note == "")
                header('Location: http://localhost/BKPhone/Home/productDetail/' . $product_id);
            else $this->feedbackModel->addFeedbackProduct($note, $user_id, $product_id);
            header('Location: http://localhost/BKPhone/Home/productDetail/' . $product_id);
        } else if (isset($_POST["btnContact"])) {
            if (isset($_POST["subject"]))
                $subject = getPost('subject');
            if (isset($_POST["message"]))
                $message = getPost('message');
            $note = 'Chủ đề ' . $subject . '- Nội dung ' . $message;
            if (isset($_POST["user_id"]))
                $user_id = getPost('user_id');
            if (!$user_id)
                header('Location: http://localhost/BKPhone/Home/contact');
            else if ($subject == "" || $message == "")
                header('Location: http://localhost/BKPhone/Home/contact');
            else {
                $this->feedbackModel->addContact($note, $user_id);
                header('Location: http://localhost/BKPhone/Home/contact/1');
            }
        }
    }
}
