<?php
include 'config.php';
session_start();
if (!isset($_SESSION["client_login"]) || $_SESSION["client_login"] !== true) {
  header("location: LoginPage.php");
  exit;
}
$password = $confirm_password = $new_password = "";
$account_number_err = $password_err = $new_password_err = $confirm_password_err = "";

$sql = "SELECT * FROM customers where customer_id = '$_SESSION[account_number]'";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();

if (isset($_POST['submit_reset'])) {
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please Enter Current Password";
  } else {
    $password = trim($_POST['password']);
  }

  if (empty(trim($_POST["new_password"]))) {
    $new_password_err = "Please Enter a New Password";
  } else {
    $new_password = trim($_POST['new_password']);
  }

  if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Please confirm Password";
  } else {
    $confirm_password = trim($_POST['confirm_password']);
  }

  $hashed_password = $row['password'];

  if (password_verify($password, $hashed_password)) {
    $length = strlen(trim($new_password));
    if ($length > 5) {
      if ($new_password === $confirm_password) {
          $new_password = password_hash($new_password, PASSWORD_DEFAULT);
          $sql1 = "UPDATE customers SET password='$new_password' WHERE name='$_SESSION[name]'";
          $result = mysqli_query($conn, $sql1);
          echo  '<script>alert("Password Reset Successfully")</script>';
      } else $confirm_password_err = "Password did not match";  
    } else $new_password_err = "Password must have atleast 6 characters.";
  } else $password_err = "Wrong Password";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-5.2.1-dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="default.css">


  <title>Northland Bank</title>

</head>

<body>
  <!-- ========== Nav bar ========== -->
  <?php include_once 'D_header.php'; ?>
  <!-- ========== End Section ========== -->
  <!-- ========== Dashboard area ========== -->
  <section class="dashboardArea">
    <div class=" pt-150 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="sidebaArea">
              <div class="sidebarTopArea text-center">
                <div class="userName">
                  <h3>Cyril Charles O Alvez</h3>
                </div>
              </div>
              <div class="slidebarNavArea">
                <nav>
                  <ul>
                    <li class="navItem"><a href="Dashboard.php">Dashboard</a></li>
                    <li class="navItem"><a href="WithdrawPage.php">Withdraw</a></li>
                    <li class="navItem"><a href="DepositPage.php">Deposit</a></li>
                    <li class="navItem submenu">
                      <a href="DTransferown.php">Transfer
                        <span class="pull-right-container">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false" style="transform: rotate(360deg);">
                            <path fill="currentColor" d="m6 15l5-5l-5-5l1-2l7 7l-7 7z">
                            </path>
                          </svg>
                        </span>
                      </a>
                      <ul class="submenu">
                        <li><a href="DTransferown.php">Own Bank Transfer</a></li>
                        <li><a href="DTransferother.php">Other Bank Transfer</a></li>
                      </ul>
                    </li>
                    <li class="navItem submenu show active">
                      <a href="DSupport.php">Reset Password </a>
                    </li>
                    <li class="navItem"><a href="client_logout.php">Logout</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-12">
                  <div>
                    <h4>RESET PASSWORD</h4>
                  </div>
                </div>

              </div>
              <div class="container">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                  <div class="mb-3" style="margin-top: 20px;">
                    <label>Current Password</label>
                    <?php if (!empty($password_err)) {
                      echo '<div class="alert alert-danger col-lg-4 p-2" style="text-align:center;">' . $password_err . '</div>';
                    }
                    ?>
                    <input type="password" style="margin-top: 10px;" class="form-control" name="password" required>
                  </div>
                  <div class="mb-3" style="margin-top: 20px;">
                    <label>New Password</label>
                    <?php if (!empty($new_password_err)) {
                      echo '<div class="alert alert-danger col-lg-4 p-2" style="text-align:center;">' . $new_password_err . '</div>';
                    }
                    ?>
                    <input type="password" style="margin-top: 10px;" class="form-control" name="new_password" required >
                  </div>
                  <div class="mb-3" style="margin-top: 20px;">
                    <label>Confirm Password</label>
                    <?php if (!empty($confirm_password_err)) {
                      echo '<div class="alert alert-danger col-lg-4 p-2" style="text-align:center;">' . $confirm_password_err . '</div>';
                    }
                    ?>
                    <input type="password" style="margin-top: 10px;" class="form-control" name="confirm_password" required>
                  </div>
                  <div style="margin-top: 20px;">
                    <button type="submit" class="btn buttColor" name="submit_reset">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>
  </section>
  <!-- ========== End Section ========== -->
  <!-- ========== footer Section ========== -->s
  <?php include_once 'D_footer.php'; ?>
  <!-- ========== End Section ========== -->
</body>

</html>