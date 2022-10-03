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
                                        <li class="navItem"><a href="Dashboard.php">Dashboard</a></li>
                                        <li class="navItem"><a href="WithdrawPage.php">Withdraw</a></li>
                                        <li class="navItem"><a href="DepositPage.php">Deposit</a></li>
                                        <li class="navItem submenu show active">
                                            <a href="DTransferown.php">Transfer
                                                <span class="pull-right-container">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                                        focusable="false" width="1em" height="1em"
                                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"
                                                        class="iconify" data-icon="dashicons:arrow-right-alt2"
                                                        data-inline="false" style="transform: rotate(360deg);">
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
                                <div class="col-lg-12">
                                    <div>
                                        <h4>OWN BANK TRANSFER</h4>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="container">
                                <form action="">
                                    <div class="mb-3" style="margin-top: 20px;">
                                        <label>Account Number</label>
                                        <input type="text" style="margin-top: 10px;" class="form-control">
                                    </div>
                                    <div class="mb-3" style="margin-top: 20px;">
                                        <label>Transfer Amount</label>
                                        <input type="text" style="margin-top: 10px;" class="form-control">
                                    </div>
                                    <div style="margin-top: 20px;">
                                        <button type="submit" class="btn buttColor">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== footer Section ========== -->
    
    <!-- ========== End Section ========== -->
</body>

</html>