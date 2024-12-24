<?php
	require 'config.php';
	
	$fName = $_POST["fName"];
	$lName = $_POST["lName"];
	$mNo = $_POST["mNo"];
	$address = $_POST["address"];
	$dob = $_POST["dob"];
    $uName = $_POST["uName"];
	$pwd = $_POST["pwd"];
	$rePwd = $_POST["rePwd"];
	$lice = $_POST["lice"];
	$Exp = $_POST["Exp"];
	
	
	$sql = "Update account 
			set Account_ID = '$iName',
			Username = '$iprice',
			Password = '$iQty',
			Confirm_Password = '$rePwd'
			where Account_ID = '$id'";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record Updated successfully')</script>";
		header("Location:index.php");
	}
	else{
		echo "<script>alert('Error in updating')</script>";
	}
	
	mysqli_close($conn);
	
?>