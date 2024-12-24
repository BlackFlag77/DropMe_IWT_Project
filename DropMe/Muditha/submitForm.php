<?php
	require 'config.php';
	
	$fName = $_POST["fName"];
	$lName = $_POST["lName"];
	$mobileNo = $_POST["mobile"];
	$address = $_POST["address"];
	$dob = $_POST["dob"];
	$lice = $_POST["lice"];
	$Exp = $_POST["Exp"];
    
	$userName = $_POST["userName"];
	$pwd = $_POST["pwd"];
	$rePwd = $_POST["rePwd"];
	
    $sql = "insert into account(Account_ID, Username, Passwords, Confirm_Password, User_Type) 
			    values('','$userName','$pwd','$rePwd','Driver')";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record inserted to account successfully')</script>";
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}

    $accID ="select Account_ID from account where Username = $userName";

	$sql ="insert into driver(Driver_ID,First_Name,Last_Name,dob,Contact_No,Address,License_No,Experience) 
				values('$accID','$fName','$lName','$mobileNo','$address','$dob','$lice','$Exp')";
		
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record inserted to driver successfully')</script>";
		header("Location:DriverRegistrationPage.html");
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}

	mysqli_close($conn);	
?>