<?php include 'AP_BACKEND.php'; ?>
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
    <header>
        <div class="headerArea fixed">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-start">
                        <h3>Northland Bank</h3>
                    </div>
                    <div class="col-lg-9 d-flex flex-wrap justify-content-center justify-content-lg-end">
                        <div class="headerRightArea">
                            <div class="headerMenu f-right">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="index.html#About">About</a></li>
                                        <li><a href="index.html#Services">Services</a></li>
                                        <li><a href="">Contact</a></li>
                                        <li><a href="Dashboard.html">Account</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select name="sex" id="sex" class="dropbtn" style="margin-top: 10px;">
                                        <option value="">Sex</option>
                                        <option value="Married">Male</option>
                                        <option value="Divorced">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" name="mobile_number" class="form-control"
                                        placeholder="Mobile no.">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="full_address" class="form-control"
                                        placeholder="Full Address">
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
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="date_of_birth" class="form-control"
                                        placeholder="Date of Birth">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <select name="branch" id="branch" class="dropbtn" style="margin-top: 10px;">
                                        <option value="">branch</option>
                                        <option value="Tagum">Tagum</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <button type="submit" class="btn" name="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>


    <!-- ========== End Section ========== -->
    <!-- ========== footer Section ========== -->
    <footer class="py-5">
        <ul class="nav justify-content-center pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>
        <p class="text-center">© 2022 Company, Inc</p>
    </footer>
    <!-- ========== End Section ========== -->
</body>

</html>