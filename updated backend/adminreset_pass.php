<?php

$confirm_password = $new_password = "";
$new_password_err = $confirm_password_err = "";
$sql2 = "SELECT * FROM customers where customer_id = '$customer_id'";
$result = mysqli_query($conn, $sql2);
$row = $result->fetch_assoc();

if (isset($_POST['submit_reset'])) {

    if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "Please Enter a New Password";
    } else {
        $new_password = trim($_POST['new_password']);
    }

    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm Password";
    } else {
        $confirm_password = trim($_POST['confirm_password']);
    }

    $length = strlen(trim($new_password));

    if ($length > 5) {
        if ($new_password === $confirm_password) {
            $new_password = password_hash($new_password, PASSWORD_DEFAULT);
            $sql3 = "UPDATE customers SET password='$new_password' WHERE customer_id='$customer_id'";
            $result = mysqli_query($conn, $sql3);
            echo  '<script>alert("Password Reset Successfully")location="admin_view_customer.php</script>';
        } else $confirm_password_err = "Password did not match";
    } else $new_password_err = "Password must have atleast 6 characters.";
}
?>

<div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="mb-3" style="margin-top: 20px;">
            <label>New Password</label>
            <?php if (!empty($new_password_err)) {
                echo '<div class="alert alert-danger col-lg-4 p-2" style="text-align:center;">' . $new_password_err . '</div>';
            }
            ?>
            <input type="password" style="margin-top: 10px;" class="form-control" name="new_password" required>
        </div>
        <div class="mb-3" style="margin-top: 20px;">
            <label>Confirm Password</label>
            <?php if (!empty($confirm_password_err)) {
                echo '<div class="alert alert-danger col-lg-4 p-2" style="text-align:center;">' . $confirm_password_err . '</div>';
            }
            ?>
            <input type="password" style="margin-top: 10px;" class="form-control" name="confirm_password" required>
        </div>
        <div style="margin-top: 20px;">
            <button type="submit" class="btn buttColor" name="submit_reset">Submit</button>
        </div>
    </form>
</div>