<html>

<head>
    <title>ACTIVE CUSTOMERS</title>
</head>

<body>
    <h1>ACTIVE CUSTOMERS</h1>
    <?php

    use LDAP\Result;

    include 'config.php';
    include 'admin_header.php';
    ?>

    <div class="admin_view_customer_container">

        <table border="1px" cellpadding="10">
            <th>#</th>
            <th>CUSTOMER ID</th>
            <th>CUSTOMER NAME</th>
            <th>GENDER</th>
            <th>MOBILE NUMBER</th>
            <th>EMAIL</th>
            <th>FULL ADDRESS</th>
            <th>ZIP CODE</th>
            <th>DATE OF BIRTH</th>
            <th>BRANCH</th>
            <th>DATE CREATED</th>
            <th>ACTION</th>


            <?php
            $sql = "SELECT*FROM customers";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $Sl_no = 1;
                while ($row = $result->fetch_assoc()) {
                    $customer_id = $row['customer_id'];

                    echo '
                        <tr>
                        <td>' . $Sl_no++ . '</td>
                        <td>' . $row['customer_id'] . '</td>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['sex'] . '</td>
                        <td>' . $row['mobile_number'] . '</td>
                        <td>' . $row['email'] . '</td>
                        <td>' . $row['full_address'] . '</td>
                        <td>' . $row['zip_code'] . '</td>
                        <td>' . $row['date_of_birth'] . '</td>
                        <td>' . $row['branch'] . '</td>
                        <td>' . $row['date_created'] . '</td> 
                        <td><button class="btn btn-primary"><a href="admin_credit_customer.php?credit_cust='.$customer_id.'">CREDIT CUSTOMER</a></button>
                        <button class="btn btn-danger"><a href="admin_delete_customer.php?delete_cust='.$customer_id.'">DELETE CUSTOMER</a></button></td>              
                        </tr>';
                       
                }
            }

            ?>
        </table>
    </div>


    </table>
</body>

</html>