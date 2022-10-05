<?php

session_start();
if (isset($_SESSION['staff_login'])) {

    //sudlan ra nato ni sya pag mahuman na natong backend murag controller ni sa login session  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="default.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
    <title>ADMIN LOGIN</title>
</head>

<body>

    <?php include_once 'admin_out_header.php'; ?>

    <section>
        <div class="pt-150 pb-100 dashboardArea">
            <div class="container">
                <div class="col-lg-6 offset-lg-3">
                    <div class="col-lg-12 text-center" style="color: #37517eeb;">
                        <h1>LOG IN</h1>
                    </div>
                    <div class="container" style="background-color: white;">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <div class="mb-3" style="margin-top: 20px;">
                                <input style="margin-top: 10px;" type="text" name="admin_username" class="form-control" placeholder="Admin Username">
                            </div>
                            <div class="mb-3">
                                <input style="margin-top: 10px;" type="password" name="admin_password" class="form-control" placeholder="Password">
                                <div style="margin-top: 20px; text-align: center;">
                                    <button type="submit" class="btn submit-btn " name="staff_login-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once 'admin_footer.php'; ?>

<?php
include 'config.php';
if (isset($_POST['staff_login-btn'])) {
    if (isset($_POST['admin_username'])) {
        $admin_username = $_POST['admin_username'];
        $admin_password = $_POST['admin_password'];
    }
    //pag pangita if mag match ang admin input ug password sa database
    $sql = "SELECT * FROM admin WHERE username = '$admin_username' and password = '$admin_password' ";
    $result = $conn->query($sql);
    //pagkuha sa mga elements sa database
    while ($row = $result->fetch_assoc()) {
        $username = $row['username'];
        $password = $row['password'];


        if ($admin_username == $username && $admin_password == $password) {
            $_SESSION['admin_login'] = true;
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['admin_username'] = $row['username'];
            header('location:admin_dashboard.php');
        }
    }
    echo '<script>alert("iNCORRECT DETAILS")</script>';
}


?>