<?php session_start(); ?>

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
                                    <h3>name</h3>
                                </div>
                            </div>
                            <div class="slidebarNavArea">
                                <nav>
                                    <ul>
                                        <li class="navItem"><a href="admin_dashboard.php">Dashboard</a></li>
                                        <li class="navItem"><a href="admin_view_customer.php">View User</a></li>
                                        <li class="navItem active"><a href="admin_pending_customers.php">View Pending Customer</a></li>
                                        <li class="navItem"><a href="">Settings</a></li>
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
                                        <h4>Pending Customers</h4>
                                    </div>
                                </div>

                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" style="margin-top: 15px;">
                                    <input type="text" name="application_num" placeholder="Application number" required>
                                    <input type="submit" name="search_application" value="Search">
                                </form>
                                <div class="card" style="margin-top: 20px;">
                                    <div class="card-body table-responsive">
                                        <div class="table-loader text-center">
                                            <span class="loader" style="display: none;">
                                                <img src="https://e-bank.amcoders.com/frontend/assets/img/loader.gif" alt="" width="100">
                                            </span>
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Application Number</th>
                                                    <th>Name</th>
                                                    <th>Branch</th>
                                                    <th>Date Created</th>
                                                    <th>Actions</th>



                                                </tr>
                                            </thead>
                                            <tbody class="transactions">
                                                <?php
                                                if (isset($_POST['search_application'])) {

                                                    if (empty($_POST['application_num'])) {
                                                        echo '<script>alert("Please enter application number")</script>';
                                                    } else {
                                                        //pangitaon niya ang match na search input ug application number sa user sa database.
                                                        $application_num = $_SESSION['application_num'] = $_POST['application_num'];
                                                        $sql = "SELECT*FROM pending_accounts WHERE application_num = '$application_num' ";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
                                                            //murag iterator rani sya taga value +1
                                                            $Sl_no = 1;
                                                            //displaying sa content sa table na nasearch
                                                            while ($row = $result->fetch_assoc()) {
                                                                $application_num = $row['application_num'];
                                                                echo '
                                                                    <tr>
                                                                    <td>' . $Sl_no++ . '</td>
                                                                    <td>' . $row['application_num'] . '</td>
                                                                    <td>' . $row['name'] . '</td>
                                                                    <td>' . $row['branch'] . '</td>
                                                                    <td>' . $row['date_created'] . '</td>
                                                                    <td scope="col-2">
                                                                        <div >
                                                                                <button class="btn btn-primary"><a href="admin_confirm_pending_cust.php">Approve</a></button>
                                                                                <button class="btn btn-warning">More</button>
                                                                        </div>
                                                                    </td>
                                                                    </tr>';
                                                            }
                                                        } else {
                                                            //if wala sa table ang gisearch mao ni mudsiplay
                                                            echo '<script>alert("Application not found")</script>';
                                                        }
                                                    }
                                                } else {

                                                    $sql = "SELECT*FROM pending_accounts ";
                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        //murag iterator rani sya taga value +1
                                                        $Sl_no = 1;
                                                        //displaying sa content sa table na nasearch
                                                        while ($row = $result->fetch_assoc()) {
                                                            $application_num = $row['application_num'];
                                                            echo '
                                                            <tr>
                                                            <td>' . $Sl_no++ . '</td>
                                                            <td>' . $row['application_num'] . '</td>
                                                            <td>' . $row['name'] . '</td>
                                                            <td>' . $row['branch'] . '</td>
                                                            <td>' . $row['date_created'] . '</td>
                                                            <td scope="col-2">
                                                                <div >
                                                                        <button class="btn btn-primary">Approve</button>
                                                                        <button class="btn btn-warning">More</button>
                                                                </div>
                                                            </td>
                                                            </tr>';
                                                        }
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
    </section>

</body>

</html>