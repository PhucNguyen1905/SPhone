<?php
require_once "mvc/utility/utility.php";

class UserModel extends DB
{

    public function InsertNewUser($fullname, $email, $password, $phone_number, $address)
    {
        $result = false;

        if ($fullname == '' || $email == '' || $password == '' || $phone_number == '' || $address == ''  || strlen($password) < 6) {
            return [
                "result" => $result
            ];
        }
        $userExist = $this->executeResult("select * from User where email = '$email'", true);
        if ($userExist != NULL) {
            return [
                "result" => $result
            ];
        } else {
            $qr = "INSERT INTO user(fullname, email, phone_number, address, password, role_id)
            VALUES('$fullname','$email','$phone_number','$address','$password',1)";
            $this->execute($qr);
            $result = true;
            return [
                "result" => $result
            ];
        }
    }

    public function Authenticate($email, $password)
    {
        $result = false;
        $qr = "SELECT * FROM user WHERE email='$email' AND password='$password' AND deleted=0  ";
        $userExist = $this->executeResult($qr, true);
        if ($userExist == null) {
            return [
                "result" => $result
            ];
        } else {
            $token = getSecurityMD5($userExist['email'] . time());
            setcookie('token', $token, time() + 7 * 24 * 60 * 60, '/');
            $created_at = date('Y-m-d H:i:s');

            $_SESSION['user'] = $userExist;

            $userId = $userExist['id'];
            $sql = "insert into Tokens (user_id, token, created_at) values ('$userId', '$token', '$created_at')";
            $this->execute($sql);
            $result = true;
            return [
                "result" => $result,
                "role_id" => $userExist["role_id"]
            ];
        }
    }

    public function deleteToken($id, $token)
    {
        $sql = "delete from tokens where user_id = '$id' and token = '$token'";
        $this->execute($sql);
    }
}
