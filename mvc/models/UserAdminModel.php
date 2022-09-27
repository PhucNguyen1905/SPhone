<?php
require_once "mvc/utility/utility.php";
class UserAdminModel extends DB
{

    public function getAllUser()
    {
        $sql = "select User.*, Role.name as role_name from User left join Role on User.role_id = Role.id where User.deleted = 0";
        $data = $this->executeResult($sql);
        return $data;
    }

    public function deletedUser($id)
    {
        $sql = "update user set deleted = 1 where id = $id";
        $this->execute($sql);
    }

    public function selectUser($id)
    {
        $sql = "select * from user where id = '$id'";
        $userItem = $this->executeResult($sql, true);
        return $userItem;
    }

    public function getRole()
    {
        $sql = "select * from role";
        $role = $this->executeResult($sql);
        return $role;
    }

    public function updateuser($id, $fullname, $email, $role_id, $phone_number, $address, $password, $avatar)
    {
        $sql = "select * from User where email = '$email' and id <> $id";
        $userItem = $this->executeResult($sql, true);
        if ($userItem != null) {
            return false;
        }
        if ($password != '' && strlen($password >= 6)) {
            $password = getSecurityMD5($password);
            $sql = "update user set fullname = '$fullname', email = '$email', phone_number = '$phone_number', address = '$address', password = '$password',avatar = '$avatar', role_id = $role_id where id = $id";
        } else $sql = "update user set fullname = '$fullname', email = '$email', phone_number = '$phone_number', address = '$address',avatar = '$avatar', role_id = $role_id where id = $id";
        $this->execute($sql);
        return true;
    }

    public function addUser($fullname, $email, $role_id, $phone_number, $address, $password)
    {
        $sql = "select * from User where email = '$email'";
        $userItem = $this->executeResult($sql, true);
        if ($userItem != null) {
            return false;
        }
        $sql = "insert into user(fullname, email, phone_number, address, password, role_id, deleted) values ('$fullname', '$email', '$phone_number', '$address', '$password', '$role_id', 0)";
        $this->execute($sql);
        return true;
    }
}
