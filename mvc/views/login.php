<?php
require_once "mvc/utility/utility.php";
$user = getUserToken();
if ($user != null) {
    if ($user["role_id"] == 1) {
        header('Location: http://localhost/SPhone/Home');
    } else {
        header('Location: http://localhost/SPhone/OrderAdmin');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/SPhone/public/css/login.css">
    <title>Login</title>
</head>

<body>

    <form id="form_login" action="http://localhost/SPhone/Login/UserLogin" method="post">
        <h4>ĐĂNG NHẬP</h4>
        <div class="md-form md-outline mt-0">
            <label for="form19">Email</label>
            <input type="email" name="email" id="form19" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password...">
        </div>
        <?php
        if (isset($data["result"])) {
            if (!$data["result"])
                echo '<h6 style="color:red">Email or Password incorrect!!!</h6>';
        }

        ?>
        <div>
            <a id="link_register" href="http://localhost/SPhone/Register">Đăng ký tài khoản</a>
            <button type="submit" onclick="checkLogin()" name="btnLogin" class="btn btn-primary">Login</button>
            <a id="link_register" href="http://localhost/SPhone/Home">Trở về trang chủ</a>
        </div>
    </form>

    <script type="text/javascript">
        function checkLogin() {
            var email = document.getElementById("form19").value;
            var password = document.getElementById("password").value;
            if (email == '' || password == '')
                alert("Vui lòng nhập đủ thông tin!!!");
            else if (password.length < 6)
                alert("Vui lòng nhập mật khẩu có ít nhất 6 ký tự!!!");
        }
    </script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>