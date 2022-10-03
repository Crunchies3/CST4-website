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
                    <h1>Log In</h1>
                </div>
                <div class="container" style="background-color: white;">
                    <form action="">
                        <div class="mb-3" style="margin-top: 20px;">
                            <label>Email</label>
                            <input style="margin-top: 10px;" type="text" name="username" class="form-control">

                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input style="margin-top: 10px;" type="text" name="username" class="form-control">
                            <div style="margin-top: 20px;">
                                <button type="submit" class="btn buttColor">Submit</button>
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