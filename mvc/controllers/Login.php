<?php
require_once "mvc/utility/utility.php";

class Login extends Controller
{

    public $UserModel;

    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }

    public function GetPage()
    {
        $this->view("login", []);
    }

    public function UserLogin()
    {

        if (isset($_POST["btnLogin"])) {
            // get data
            $email = getPost('email');
            $password = getPost('password');
            $password = getSecurityMD5($password);


            $kq = $this->UserModel->Authenticate($email, $password);

            // show home

            if ($kq["result"]) {
                if ($kq["role_id"] == 1) {
                    header('Location: http://localhost/BKPhone/Home');
                } else {
                    header('Location: http://localhost/BKPhone/OrderAdmin');
                }
            } else {
                header('Location: http://localhost/BKPhone/Login');
            }
        }
    }

    public function UserLogout()
    {
        $user = getUserToken();
        if ($user != null) {
            $token = getCookie('token');
            $id = $user['id'];
            $this->UserModel->deleteToken($id, $token);
            setcookie('token', '', time() - 100, '/');
        }
        session_destroy();
        header('Location: http://localhost/BKPhone/Home');
    }
}
