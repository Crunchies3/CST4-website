<?php ob_start(); ?>
<html>

<head>
    <title>PENDING CUSTOMERS</title>
</head>

<body>
    <?php
    include 'config.php';
    include 'admin_header.php';
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="application_num" placeholder="Application number" required>
        <input type="submit" name="search_application" value="Search">
    </form>

    <!-- displaying sa table -->
    <table border="1px" cellpadding="10">
        <th>#</th>
        <th>CUSTOMER NAME</th>
        <th>GENDER</th>
        <th>MOBILE NUMBER</th>
        <th>EMAIL ADDRESS</th>
        <th>FULL ADDRESS</th>
        <th>ZIP CODE</th>
        <th>BIRTHDAY</th>
        <th>BRANCH</th>
        <th>APPLICATION NUMBER</th>
        <th>DATE CREATED</th>
        <th>ACTION</th>


        <?php
        if (isset($_POST['search_application'])) {

            if (empty($_POST['application_num'])) {
                echo '<script>alert("Please enter application number")</script>';
            } else {
                //pangitaon niya ang match na search input ug application number sa user sa database.
                $application_num = $_SESSION['application_num'] = $_POST['application_num'];
                $sql = "SELECT*FROM pending_accounts WHERE application_num = '$application_num' ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    //murag iterator rani sya taga value +1
                    $Sl_no = 1;
                    //displaying sa content sa table na nasearch
                    while ($row = $result->fetch_assoc()) {
                        $application_num = $row['application_num'];
                        echo '
					<tr>
					<td>' . $Sl_no++ . '</td>
					<td>' . $row['name'] . '</td>
                    <td>' . $row['sex'] . '</td>
					<td>' . $row['mobile_number'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['full_address'] . '</td>
                    <td>' . $row['zip_code'] . '</td>
					<td>' . $row['date_of_birth'] . '</td>
                    <td>' . $row['branch'] . '</td>
                    <td>' . $row['application_num'] . '</td>
                    <td>' . $row['date_created'] . '</td>
                    <td><button class="btn btn-primary"><a href="admin_confirm_pending_cust.php?approve_cust=' . $application_num . '">APPROVE CUSTOMER</a></button>
                        <button class="btn btn-danger"><a href="admin_confirm_pending_cust.php?delete_cust=' . $application_num . '">DELETE CUSTOMER</a></button></td>
					</tr>';
                    }
                } else {
                    //if wala sa table ang gisearch mao ni mudsiplay
                    echo '<script>alert("Application not found")</script>';
                }
            }
        } else {

            $sql = "SELECT*FROM pending_accounts ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                //murag iterator rani sya taga value +1
                $Sl_no = 1;
                //displaying sa content sa table na nasearch
                while ($row = $result->fetch_assoc()) {
                    $application_num = $row['application_num'];
                    echo '
                <tr>
                <td>' . $Sl_no++ . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['sex'] . '</td>
                <td>' . $row['mobile_number'] . '</td>
                <td>' . $row['email'] . '</td>
                <td>' . $row['full_address'] . '</td>
                <td>' . $row['zip_code'] . '</td>
                <td>' . $row['date_of_birth'] . '</td>
                <td>' . $row['branch'] . '</td>
                <td>' . $row['application_num'] . '</td>
                <td>' . $row['date_created'] . '</td>
                <td><button class="btn btn-primary"><a href="admin_confirm_pending_cust.php?approve_cust=' . $application_num . '">APPROVE CUSTOMER</a></button>
                    <button class="btn btn-danger"><a href="admin_confirm_pending_cust.php?delete_cust=' . $application_num . '">DELETE CUSTOMER</a></button></td>
                </tr>';
                }
            }
        }
        ?>
    </table>
</body>

</html>
<?php include 'admin_confirm_pending_cust.php'; ?>