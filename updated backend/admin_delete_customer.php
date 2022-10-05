<html>
    <head><title>DELETE CUSTOMER</title></head>
    <body>
        <form action="" method="post">
            <label for="">CONFIRM DELETING</label>
            <button class="btn btn-primary" name="confirm_delete">CONFIRM</button>
            <button class="btn btn-secondary"><a href="admin_view_customer.php">CANCEL</a></button>
        </form>
    </body>
</html>
<?php
include 'config.php';
if(isset($_POST['confirm_delete'])){
    $customer_id = $_GET['delete_cust'];
    $sql1 = "DELETE FROM customers WHERE customer_id = '$customer_id'";
    $sql2 = "DROP TABLE passbook_$customer_id";

    if( ($conn->query($sql1)  && $conn->query($sql2)) == TRUE ){
        $conn->commit();
        echo '<script>alert("Customer Deleted Successfully")
        location="admin_view_customer.php"</script>';
    }
    else{
        $conn->rollback();
        echo '<script>alert("Customer not deleted")
        location="admin_view_customer.php"</script>';
    }
    
}

?>