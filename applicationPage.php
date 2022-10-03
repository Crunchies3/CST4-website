<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, init<!DOCTYPE html>
<html lang=" en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.2.1-dist\css\bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="default.css">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
        <title>Northland Bank</title>

    </head>

<body>
    <!-- ========== Nav bar ========== -->
    <?php include_once 'header.php'; ?>
    <!-- ========== End Section ========== -->

    <!-- ========== Dashboard area ========== -->
    <section>
        <div class="pt-150 pb-100 dashboardArea">
            <div class="container">
                <div class="col-lg-12 text-center">
                    <h1>Online Account Application Form</h1>
                </div>
                <div class="container" style="background-color: white;">
                    <form action="#">

                        <div class="main-user-info">
                            <div class="user-input-box">
                                <label for="firstName">Fisrt  Name:</label>
                                    <input type="text" id="firstName" placeholder="Enter First Name" required>
                                </div>
                           <div class="user-input-box">
                               <label for="lastName">Last  Name:</label>
                                    <input type="text" id="lastName" placeholder="Enter Last Name" required>
                                </div>
                               
                            <div class="user-input-box">
                                <label for="emailAdd">Email Address:</label>
                                    <input type="text" id="emailAdd" placeholder="Enter Email Address" required>
                                </div>

                            <div class="user-input-box">
                                <label for="phoneNum">Phone Number:</label>
                                    <input type="text" id="phoneNum" placeholder="Enter Phone Number" required>
                                </div>
                            <div class="user-input-box">
                               <label for="birthdate">Birth Date:</label>
                                    <input type="text" id="birthdate" placeholder="MM/DD/YYYY" required>
                              </div>
                             <div class="user-input-box">
                                <label for="streetAdd">Street Address:</label>
                                    <input type="text" id="streetAdd" placeholder="Enter Street Address" required>
                                </div>  
                            
                            <div class="user-input-box">
                                <label for="barangay">Barangay:</label>
                                    <input type="text" id="barangay" placeholder="Enter Barangay" required>
                                </div>            
                             <div class="user-input-box">
                                <label for="city">City:</label>
                                    <input type="text" id="city" placeholder="Enter City" required>
                                </div>   
                             <div class="user-input-box">
                                <label for="province">Province:</label>
                                    <input type="text" id="province" placeholder="Enter Province" required>
                                </div>
                            <div class="user-input-box">
                                <label for="zipcode">Zip Code:</label>
                                    <input type="text" id="zipcode" placeholder="Enter Zip Code" required>
                                </div>   
                            </div>
                            <div class="gender-details-box">
                                <span class="gender-title">Sex:</span>
                                <div class="gender category">
                                    <input type="radio" name="gender" id="male">
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" id="female">
                                    <label for="female">Female</label>
                                </div>
                            </div>
                            <div class="format-submit-btn" >
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                        <div>
                            
                    
                    </form>

                </div>
            </div>

        </div>
    </section>
                                                                            
    <!-- connecting sa backend ani -->
    <?php include 'AP_BACKEND.php' ?>
                                                                            
    <!-- ========== footer Section ========== -->
    <?php include_once 'footer.php'; ?>
    <!-- ========== End Section ========== -->
</body>

</html>
