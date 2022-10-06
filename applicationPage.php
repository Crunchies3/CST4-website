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
    <section class="dashboardArea">
        <div class="pt-150 pb-100">
            <div class="container">
                <div class="col-lg-6 offset-lg-3">
                    <div class="col-lg-12 text-center" style="color: #37517eeb;">
                        <h1>ONLINE APPLICATION FORM</h1>
                    </div>
                    <div class="container" style="margin-top: 50px;">
                        <div class="container applicationForm">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div style="text-align:center;">
                                            <div class="form-group" >
                                                <select name="sex" id="sex" class="dropbtn form-control">
                                                    <option value="">Sex</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" style="margin-top: 20px;">
                                            <input type="text" name="mobile_number" class="form-control" placeholder="Mobile no.">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" style="margin-top: 20px;">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group" style="margin-top: 20px;">
                                        <input type="text" name="full_address" class="form-control" placeholder="Full Address">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group" style="margin-top: 20px;">
                                            <input onfocus="(this.type='date')" type="text" name="date_of_birth" class="form-control" placeholder="Date of Birth" id="date">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div style="text-align:center;">
                                            <div class="form-group" style="margin-top: 20px;">
                                                <select name="branch" id="branch" class="dropbtn form-control" style="margin-top: 10px;">
                                                    <option value="">Branch</option>
                                                    <option value="Tagum">Tagum</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="text-align: center;">
                                    <button type="submit" class="btn submit-btn" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- connecting sa backend ani -->
    <?php require 'AP_BACKEND.php'; ?>

    <!-- ========== footer Section ========== -->
    <?php include_once 'footer.php'; ?>
    <!-- ========== End Section ========== -->
</body>

</html>