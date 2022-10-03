<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PROFILE</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="pending_cust" value="APPROVE PENDING CUSTOMERS"/>
        <input type="submit" name="delete_cust" value="DELETE CUSTOMERS ACCOUNT"/>
        <input type="submit" name="credit_cust" value="CREDIT CUSTOMERS"/>
    </form>
    
</body>
</html>

<?php
if(isset($_POST['pending_cust'])){
    header('location:pending_customers.php');
}

?>