<?php

if(isset($_POST['submit'])){
    include 'config.php';
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    $full_address = $_POST['full_address'];
    $zip_code = $_POST['zip_code'];
    $date_of_birth = $_POST['date_of_birth'];
    $branch = $_POST['branch'];

    //randoming application no.
    $application_number = rand(1000,9999).mt_rand(10000,99999);

    $sql="INSERT INTO pending_user (name, sex, mobile_number,email,address,birth_of_date,branch,application_number)
    VALUES('$name','$sex','$mobile_number','$email','$full_address','$date_of_birth','$branch','$application_number')";

 if($conn->query($sql) == true){
    echo  '<script>alert("Application submitted successfully\n\nApplication number : '.$account_num .'\n\nPlease visit bank with application number for account approval\n\nHint: From staff login, approve application")
    location="index.php"
    </script>';
    //continue to admin login.
    }
    else{
        echo $sql;
    }

}
?>
