<?php
require_once "mvc/utility/utility.php";
$user = getUserToken();
if ($user != null) {
  if ($user["role_id"] == 1) {
    header('Location: http://localhost/SPhone/Login');
  }
} else header('Location: http://localhost/SPhone/Home');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!-- Material Icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" />
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" />
  <!-- Custom css -->
  <?php define('SCRIPT_ROOT', 'http://localhost/SPhone'); ?>
  <link rel="stylesheet" href="<?php echo SCRIPT_ROOT . '/public/css/admin_style.css'; ?>">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>


</head>


<body>
  <div class="d-flex" id="wrapper">
    <!-- ===========SIDE BAR============ -->
    <div class="bg-white" id="sidebar-wrapper">
      <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
        <img src="<?php echo SCRIPT_ROOT . '/public/images/logo.png'; ?>" alt=""> <a href="http://localhost/SPhone/Home" style="text-decoration: none;">SPhone</a>
      </div>
      <div class="list-group list-group-flush my-3">
        <a href="http://localhost/SPhone/OrderAdmin" class="<?php echo $activeNav == 'order' ? 'active ' : ' '; ?>list-group-item list-group-item-action bg-transparent second-text">
          <span class="material-icons-sharp me-2">receipt_long</span>Order
        </a>
        <a href="http://localhost/SPhone/CategoryAdmin" class="<?php echo $activeNav == 'category' ? 'active ' : ' '; ?>list-group-item list-group-item-action transparent second-text fw-bold">
          <span class="material-icons-sharp me-2">format_list_bulleted</span>Category
        </a>
        <a href="http://localhost/SPhone/ProductAdmin" class="<?php echo $activeNav == 'phone' ? 'active ' : ' '; ?>list-group-item list-group-item-action transparent second-text fw-bold">
          <span class="material-icons-sharp me-2">smartphone</span>Phone
        </a>
        <a href="http://localhost/SPhone/UserAdmin" class="<?php echo $activeNav == 'user' ? 'active ' : ' '; ?>list-group-item list-group-item-action transparent second-text fw-bold">
          <span class="material-icons-sharp me-2">person_outline</span>User
        </a>
        <a href="http://localhost/SPhone/FeedbackAdmin" class="<?php echo $activeNav == 'feedback' ? 'active ' : ' '; ?>list-group-item list-group-item-action transparent second-text fw-bold">
          <span class="material-icons-sharp me-2">chat</span>Feedback
        </a>
        <a href="http://localhost/SPhone/Admin" class="<?php echo $activeNav == 'analytic' ? 'active ' : ' '; ?>list-group-item list-group-item-action transparent second-text fw-bold">
          <span class="material-icons-sharp me-2">insights</span>Analytics
        </a>
        <a href="http://localhost/SPhone/Login/UserLogout" class="list-group-item list-group-item-action transparent second-text fw-bold">
          <span class="material-icons-sharp me-2">logout</span>Logout
        </a>

      </div>
    </div>
    <!-- ===========SIDE BAR============ -->
    <!-- ===========Page Content============ -->
    <div id="page-content-wrapper">
      <!-- ===========NavBar============ -->
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
          <h2 class="fs-2 m-0">Dashboard</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user me-2"></i>Phuc Nguyen
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- ===========NavBar============ -->