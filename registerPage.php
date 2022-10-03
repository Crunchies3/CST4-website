<!DOCTYPE html>
<html lang="en">

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
                    <h1>E-Account Registration</h1>
                </div>
                <div class="container" style="background-color: white;">
                    <form action="">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="account_holder" class="form-control"
                                        placeholder="Account Holder">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="account_number" class="form-control"
                                        placeholder="Account Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="registered_number" class="form-control"
                                        placeholder="Registered Phone Number">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="d_o_b" class="form-control"
                                        placeholder="Date of Birth">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="password" name="d_o_b" class="form-control"
                                        placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>

                        <div style="text-align: center;">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>


    <!-- ========== End Section ========== -->

    <!-- ========== footer Section ========== -->
    <?php include_once 'footer.php'; ?>
    <!-- ========== End Section ========== -->
    
</body>

</html>