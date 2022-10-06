<?php session_start();  ?>

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
    <?php include_once 'admin_header.php'; ?>
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
                                    <h3><?php echo "$_SESSION[admin_name]" ?></h3>
                                </div>
                            </div>
                            <div class="slidebarNavArea">
                                <nav>
                                    <ul>
                                        <li class="navItem active"><a href="">Dashboard</a></li>
                                        <li class="navItem submenu"><a href="admin_view_customer.php">View User</a></li>
                                        <li class="navItem submenu"><a href="admin_pending_customers.php">View Pending Customer</a></li>
                                        <li class="navItem submenu"><a href="">Settings</a></li>
                                        <li class="navItem"><a href="admin_logout.php">Logout</a></li>
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
                                        <h4>Dashboard</h4>
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
                                                        <h4>3</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="balanceLabel">
                                                            <p>Total Users</p>
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
                                                        <h4><?php echo "$_SESSION[admin_name]"?></h4>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-4">
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="balanceLabel">
                                                            <p>Pending Accounts</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <br>
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