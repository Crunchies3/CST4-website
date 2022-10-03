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
                    <form action="">

                        <div class="row1">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name"><br>
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="form-group">
                                    <select name="sex" id="sex" class="dropbtn;">
                                        <option value="">Sex</option>
                                        <option value="Married">Male</option>
                                        <option value="Divorced">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile no.">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" name="full_address" class="form-control" placeholder="Enter Full Address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" name="barangay" class="form-control" placeholder="Barangay">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" placeholder="City">
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" name="province" class="form-control" placeholder="Province">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" name="zip_code" class="form-control" placeholder="Zip Code">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" name="date_of_birth" class="form-control" placeholder="Date of Birth">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <select name="branch" id="branch" class="dropbtn" style="margin-top: 10px;">
                                        <option value="">Branch</option>
                                        <option value="Tagum">Tagum</option>
                                    </select>
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

    <!-- ========== footer Section ========== -->
    <?php include_once 'footer.php'; ?>
    <!-- ========== End Section ========== -->
</body>

</html>