<?php

if(isset($_POST['submit'])){
    include 'config.php';
    //assign sa mga value sa mga variables gikan sa form
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    $full_address = $_POST['full_address'];
    $zip_code = $_POST['zip_code'];
    $date_of_birth = $_POST['date_of_birth'];
    $branch = $_POST['branch'];

    //randomizer para sa application number
    $application_num = rand(1000,9999).mt_rand(10000,99999);


    //insert sa user credentials padulong pending_acc data base
    $sql = "INSERT INTO pending_accounts (name,sex,mobile_number,email,full_address,zip_code,date_of_birth,branch,application_num)
    VALUES ('$name','$sex','$mobile_number','$email','$full_address','$zip_code','$date_of_birth','$branch','$application_num')";

    //pagsuccessful ang insert padulong sa pending_accounts
    if($conn->query($sql) == true){
        echo  '<script>alert("Application submitted successfully\n\nApplication number : '.$application_num .'\n\nPlease visit bank with application number for account approval")
        location="index.php"
        </script>';
    }
    else{
        //i echo niya asa ang mali sa sql if mag error man
        echo $sql;
    }

   //next ani muproceed dayon sa admin acc/login para ma approve ang pending na account
    
}


?>