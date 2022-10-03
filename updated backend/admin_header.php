<?php 
session_start();
if($_SESSION['admin_login'] != true)
{
	

}	

?>

<html>
    <head>
    
	
	</head>
    
<body>
    		
			
	<?php	
		include 'config.php';
        //normal select rani sya dinhi aron madisplay ang info sa admin (eg.name).
        $admin_username = $_SESSION['admin_username'];
		$sql="SELECT * FROM admin WHERE username= '$admin_username' ";
        $result=$conn->query($sql);
        if($result->num_rows > 0)
		$row = $result->fetch_assoc();

	?>
       <div class="head">
            
            <div class="customer_details">
			
			
			
			</div>
             <div class="welcome">
            <!-- mudisplay rani sya dapat ug pangalan sa admin -->
             <label>Welcome <?php echo $_SESSION['admin_name']; ?></label>
            <a class="staff_home" href="staff_profile.php"><input type="button" name="home" value="Home"></a>
            <a class="staff_logout" href="staff_logout.php"><input type="button" name="logout_btn" value="Logout"></a>
        
        </div>
        <br>
			

    </body>
</html>