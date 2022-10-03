<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
</head>
<body>
    <form action="" method="POST">
        <label>ADMIN USER</label>
        <input type="text" name="admin_user" placeholder="username" required/>
        <label>ADMIN PASSWORD</label>
        <input type="password" name="admin_password" placeholder="password" required/>
        <input type="submit" name="admin-btn-login" value="LOGIN"/>
    </form>
</body>
</html>
<?php ob_start();?>

<?php
    include 'config.php';
    if(isset($_POST['admin-btn-login'])){
        if(isset($_POST['admin_user'])){
            $admin_user = $_POST['admin_user'];
            $password = $_POST['admin_password'];
        }
        $sql = "SELECT*FROM admin WHERE username = '$admin_user' AND password = '$password' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if($admin_user != $row['username'] && $password != $row['password']){
            echo '<script> alert("INCORRECT ID/PASSWORD.")</script>';
        }
        else{
            $_SESSION['admin_login'] = true;
            $_SESSION['name'] = $row['name'];
            $_SESSION['username']= $row['username'];
            header('location: admin_profile.php');
        }
    }
?>