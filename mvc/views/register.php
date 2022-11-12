<?php
require_once "mvc/utility/utility.php";
$user = getUserToken();
if ($user != null) {
  if ($user["role_id"] == 1) {
    header('Location: http://localhost/SPhone/Home');
  } else {
    header('Location: http://localhost/SPhone/admin');
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
  <link rel="stylesheet" href="http://localhost/SPhone/public/css/register.css">
  <title>Register</title>
</head>

<body>

  <form id="form_register" action="http://localhost/SPhone/Register/UserRegister" method="post">
    <h4>ĐĂNG KÝ TÀI KHOẢN</h4>
    <p class="d-none" id="checkEmail"><?= $data["checkEmail"] ?></p>
    <div class="form-group">
      <label for="exampleInputEmail1">Họ và tên</label>
      <input type="text" class="form-control" id="fullname" name="fullname">
      <div id="mes_fullname"></div>
    </div>

    <div class="md-form md-outline mt-0">
      <label for="form19">Email</label>
      <input type="email" name="email" id="form19" class="form-control" placeholder="Email">
    </div>
    <?php
    if (isset($data["result"])) {
      if ($data["result"] == false)
        echo '<p style="color:red">Email đã tồn tại!!!</p>';
    }
    ?>
    <div class="form-group">
      <label for="exampleInputPassword1">Mật khẩu</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Số điện thoại</label>
      <input type="text" class="form-control" id="phone_number" name="phone_number">
    </div>


    <div class="form-group">
      <label for="exampleInputPassword1">Địa chỉ</label>
      <input type="text" class="form-control" id="address" name="address">
    </div>
    <div>
      <a id="link_login" href="http://localhost/SPhone/Login">Tôi đã có tài khoản</a>
      <button type="submit" onclick="checkRegister()" name="btnRegister" class="btn btn-primary">Đăng ký</button>
      <a id="link_register" href="http://localhost/SPhone/Home">Trở về trang chủ</a>
    </div>

  </form>

  <script type="text/javascript">
    var checkEmail = document.getElementById("checkEmail").innerHTML;
    if (checkEmail == 0)
      alert("Email đã tồn tại!!!");

    function checkRegister() {
      var fullname = document.getElementById("fullname").value;
      var email = document.getElementById("form19").value;
      var password = document.getElementById("password").value;
      var phone_number = document.getElementById("phone_number").value;
      var address = document.getElementById("address").value;

      if (fullname == '' || email == '' || password == '' || phone_number == '' || address == '')
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