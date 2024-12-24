<?php
	require 'config.php';
	
		
	$Bus_ID	 = $_GET['Id'];
	
	$sql = "delete from item where Bus_ID = '$bid'";
				
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