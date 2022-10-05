<?php
// Initialize the session
include 'config.php';

session_start();


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["client_login"]) || $_SESSION["client_login"] !== true) {
    header("location: LoginPage.php");
    exit;
}

$sql = "SELECT * FROM customers Where customer_id = $_SESSION[account_number]";
$result = mysqli_query($conn,$sql);
$row = $result->fetch_assoc();
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
  <section>
    <div class="dashboardArea pt-150 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="sidebaArea">
              <div class="sidebarTopArea text-center">
                <div class="userName">
                  <h3><?php echo $row['name'];?></h3>
                </div>
              </div>
              <div class="slidebarNavArea">
                <nav>
                  <ul>
                    <li class="navItem active"><a href="">Dashboard</a></li>
                    <li class="navItem"><a href="WithdrawPage.php">Withdraw</a></li>
                    <li class="navItem"><a href="DepositPage.php">Deposit</a></li>
                    <li class="navItem submenu">
                      <a href="DTransferown.php">Transfer
                        <span class="pull-right-container">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" focusable="false" width="1em" height="1em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" class="iconify"
                            data-icon="dashicons:arrow-right-alt2" data-inline="false"
                            style="transform: rotate(360deg);">
                            <path fill="currentColor" d="m6 15l5-5l-5-5l1-2l7 7l-7 7z">
                            </path>
                          </svg>
                        </span>
                      </a>
                      <ul class="submenu">
                        <li><a href="">Own Bank Transfer</a></li>
                        <li><a href="">Other Bank Transfer</a></li>
                      </ul>
                    </li>
                    <li class="navItem submenu"><a href="DSupport.php">Support</a></li>
                    <li class="navItem submenu"><a href="">Settings</a></li>
                    <li class="navItem"><a href="client_logout.php">Logout</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div>
                    <h4>Dashboard</h4>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="f-right">
                    <p>Account Number: <?php echo $row['customer_id'] ?></p>
                  </div>
                </div>
              </div>
              <div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="singleCard position-relative">
                      <div class="row">
                        <div class="col-lg-8">
                          <div class="count">
                            <h4>P 100000</h4>
                          </div>
                        </div>
                        <div class="col-lg-4">

                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="balanceLabel">
                              <p>Total Balance</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="singleCard position-relative">
                      <div class="row">
                        <div class="col-lg-8">
                          <div class="count">
                            <h4>P 100000</h4>
                          </div>
                        </div>
                        <div class="col-lg-4">
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="balanceLabel">
                              <p>Total Balance</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="singleCard position-relative">
                      <div class="row">
                        <div class="col-lg-8">
                          <div class="count">
                            <h4>P 100000</h4>
                          </div>
                        </div>
                        <div class="col-lg-4">
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="balanceLabel">
                              <p>Total Balance</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
              </div>
              <div class="card">
                <div class="card-header">
                  <h5>Latest Transactions</h5>
                </div>
                <div class="card-body table-responsive">
                  <div class="table-loader text-center">
                    <span class="loader" style="display: none;">
                      <img src="https://e-bank.amcoders.com/frontend/assets/img/loader.gif" alt="" width="100">
                    </span>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">ID</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Type</th>
                        <th scope="col">Date / Time</th>
                      </tr>
                    </thead>
                    <tbody class="transactions">
                      <tr>
                        <td colspan="8" class="text-center">No Data</td>
                      </tr>
                      <tr>
                        <td colspan="8" class="text-center">No Data</td>
                      </tr>
                      <tr>
                        <td colspan="8" class="text-center">No Data</td>
                      </tr>
                      <tr>
                        <td colspan="8" class="text-center">No Data</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========== End Section ========== -->


  <!-- ========== footer Section ========== -->
  <?php include_once 'D_footer.php'; ?>
  <!-- ========== End Section ========== -->
</body>

</html>