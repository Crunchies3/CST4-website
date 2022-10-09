<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.1-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="default.css">
    <title>CONFIRM DELETE CUSTOMERS</title>
</head>

<body>
    <form action="" method="post">
        <button class="btn btn-danger" name="confirm_delete">Confirm</button>
    </form>
</body>

</html>
<?php
include 'config.php';
if (isset($_POST['confirm_delete'])) {
    $customer_id = $delete_cust;
    $sql1 = "DELETE FROM customers WHERE customer_id = '$customer_id'";
    $sql2 = "DROP TABLE passbook_$customer_id";

    if (($conn->query($sql1)  && $conn->query($sql2)) == TRUE) {
        $conn->commit();
        $_SESSION['client_login'] = false;
        echo '<script>alert("Customer Deleted Successfully")
        location="admin_view_customer.php"</script>';
    } else {
        $conn->rollback();
        echo '<script>alert("Customer not deleted")
        location="admin_view_customer.php"</script>';
    }
}

?>