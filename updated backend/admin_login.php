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
    <title>ADMIN LOGIN</title>
</head>

<body>
    <!-- self refer form kay naa ra sa ubos ang php -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label class="">ADMIN USERNAME</label><br>
        <input class="" type="text" name="admin_username" required /><br>
        <label class="">ADMIN PASSWORD</label><br>
        <input class="" type="password" name="admin_password" required /><br>
        <input class="" type="submit" name="staff_login-btn" value="LOGIN" /><br>
    </form>

</body>
</html>
<!-- aron ma display ang mga script echo sa ubos -->
<?php ob_start(); ?>

<?php
include 'config.php';
if(isset($_POST['staff_login-btn'])){
    
    if(isset($_POST['staff_id'])){
        $admin_username = $_POST['admin_username'];
        $admin_password = $_POST['admin_password'];
    }
    //pag pangita if mag match ang admin input ug password sa database
    $sql = "SELECT*FROM admin WHERE username = '$admin_username' AND password ='$admin_password' ";
    $result = $conn->query($sql);
    //pagkuha sa mga elements sa database
    $row = $result->fetch_assoc();
    if($admin_username != $row['username'] && $admin_password != $row['password']){
		//pag dili mag match kay mag error
		echo '<script>alert("Incorrect Id/Password.")</script>';
			
		}
    else{
        //declare nato ni globally kay gamitunon ni admin_header.php nato
        $_SESSION['admin_login'] = true;
        $_SESSION['admin_name'] = $row['name'];
        $_SESSION['admin_username'] = $row['username'];
        header('location:admin_dashboard.php');
    }
}
?>