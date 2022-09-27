<?php
require_once "mvc/utility/utility.php";
class Register extends Controller
{

    public $UserModel;

    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }

    public function GetPage($checkEmail = 1)
    {
        $this->view("register", [
            "checkEmail" => $checkEmail
        ]);
    }

    public function UserRegister()
    {

        if (isset($_POST["btnRegister"])) {
            // get data
            $fullname = getPost('fullname');
            $email = getPost('email');
            $password = getPost('password');
            $password = getSecurityMD5($password);
            $phone_number = getPost('phone_number');
            $address = getPost('address');

            // insert database
            $kq = $this->UserModel->InsertNewUser($fullname, $email, $password, $phone_number, $address);
            // show home
            if ($kq["result"]) {
                header('Location: http://localhost/BKPhone/Login');
            } else header('Location: http://localhost/BKPhone/Register/GetPage/0');
        }
    }
}
