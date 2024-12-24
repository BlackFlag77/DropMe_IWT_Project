<?php
	require 'config.php';
	
		
	$Cancellation_Request_Id = $_GET['id'];
	
	$sql = "delete from item where Cancellation_Request_ID= '$Cancellation_Request_Id'";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record Updated successfully')</script>";
		header("Location:cancel.php");
	}
	else{
		echo "<script>alert('Error in updating')</script>";
	}
	
	mysqli_close($conn);
	
	
?>