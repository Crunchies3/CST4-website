<?php ob_start(); ?>
<html>
    <head><title>STAFF PROFILE</title></head>
    <body>
        <form action="" method="POST">
        <!-- mao ni syang mga button na pag tuplukon muredirect sa iyang redirectanan/ design nalang kulang ani -->
        <input type="submit" name="approve_account" value="Approve Pending Account"/><br>
        <input type="submit" name="view_customer" value="View Customer Details"/>	<br>
        </form>
    </body>
</html>

<?php

//pag tuplukon ang approve pending account muambak sya sa pending customers na page/table
if(isset($_POST['approve_account'])){
	
	header('LOCATION: admin_pending_customers.php');
}
if(isset($_POST['view_customer'])){
	
	header('LOCATION: admin_view_customer.php');
}


?>