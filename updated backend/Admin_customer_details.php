<?php
session_start();
include 'config.php';
    $customer_id =$_GET['view_cust'];
    $sql = "SELECT*FROM customers WHERE customer_id = '$customer_id' ";
    $result1 = $conn->query($sql);
    $row1 = $result1->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="default.css">
    <title>ACTIVE CUSTOMERS</title>
</head>

<body>

    <?php
    include 'admin_header.php';
    ?>
    <section>
        <div class="dashboardArea pt-150 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sidebaArea">
                            <div class="sidebarTopArea text-center">
                                <div class="userName">
                                    <h3><?php echo $row['name']; ?></h3>
                                </div>
                            </div>
                            <div class="slidebarNavArea">
                                <nav>
                                    <ul>
                                        <li class="navItem"><a href="admin_dashboard.php">Dashboard</a></li>
                                        <li class="navItem active"><a href="admin_view_customer.php">View User</a></li>
                                        <li class="navItem"><a href="admin_pending_customers.php">View Pending Customer</a></li>
                                        <li class="navItem"><a href="admin_reset_pass.php">Reset Password</a></li>
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
                                        <h4>Customer Details</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Title</th>
                                                                <th scope="col">Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Account Number</td>
                                                                <td><?php echo $row1['customer_id'] ?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Name</td>
                                                                <td><?php echo $row1['name'] ?> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mobile Number</td>
                                                                <td><?php echo $row1['mobile_number'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email</td>
                                                                <td><?php echo $row1['email'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Adress</td>
                                                                <td><?php echo $row1['full_address'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Date of Birth</td>
                                                                <td><?php echo $row1['date_of_birth'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sex</td>
                                                                <td><?php echo $row1['sex'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Date Created</td>
                                                                <td><?php echo $row1['date_created'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Balance</td>
                                                                <td><?php echo $row1['net_balance'] ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <h6>Add Balance</h6>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                                Credit
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Credit Amount</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="" method="post">
                                                                                <?php
                                                                                $credit_cust = $customer_id;
                                                                                include "admin_credit_customer.php";
                                                                                ?>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <h6>Delete User</h6>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                Delete
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Confirm Delete?</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="" method="post">
                                                                                <?php
                                                                                $customer_id; 
                                                                                $delete_cust = $customer_id;
                                                                                include "admin_delete_customer.php";
                                                                                ?>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <h6>Reset Password</h6>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                                Reset Password
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <?php 
                                                                            require 'adminreset_pass.php'; 
                                                                            ?>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="card" style="margin-top: 30px;">
                                                            <div class="card-header">
                                                                <h5>Latest Transactions</h5>
                                                            </div>
                                                            <div class="card-body table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Description</th>
                                                                            <th scope="col">Balance</th>
                                                                            <th scope="col">Withdraw</th>
                                                                            <th scope="col">Deposit</th>
                                                                            <th scope="col">Transaction Date</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="transactions">
                                                                        <?php
                                                                        $sql1 = "SELECT*FROM passbook_$row1[customer_id]";
                                                                        $result = $conn->query($sql1);
                                                                        if ($result->num_rows > 0) {
                                                                            $Sl_no = 1;
                                                                            while ($row = $result->fetch_assoc()) {
                                                                                echo '<tr>
                                                                                <td>' . $row['Description'] . '</td>
                                                                                <td>' . $row['Net_Balance'] . '</td>
                                                                                <td>' . $row['Dr_amount'] . '</td>
                                                                                <td>' . $row['Cr_amount'] . '</td>                         
                                                                                <td>' . $row['Transaction_date'] . '</td>                                   
                                                                                </tr>';
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once 'admin_footer.php'; ?>

</body>

</html>