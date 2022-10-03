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
  <header>
    <div class="headerArea fixed">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-start">
            <h3>Northland Bank</h3>
          </div>
          <div class="col-lg-9 d-flex flex-wrap justify-content-center justify-content-lg-end">
            <div class="headerRightArea">
              <div class="headerMenu f-right">
                <nav>
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="Dashboard.php">Account</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
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
                  <h3>Cyril Charles O Alvez</h3>
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
                    <li class="navItem"><a href="">Logout</a></li>
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
                    <p>Account Number: 1234567</p>
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
  <footer class="py-5">
    <ul class="nav justify-content-center pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
    </ul>
    <p class="text-center">© 2022 Company, Inc</p>
  </footer>
  <!-- ========== End Section ========== -->
</body>

</html>