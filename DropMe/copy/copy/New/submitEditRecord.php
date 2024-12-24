<?php
	require 'config.php';
	
	
	
	$cCancellation_Request_ID = $_POST["Cancellation_Request_ID"];
	$cTicket_ID = $_POST["Ticket_ID"];
	$cMember_ID=$_POST["Member_ID"];
	$cInquiry_Type = $_POST["Inquiry_Type"];
	
	
	$sql = "Update item 
			set Cancellation_Request_ID = '$cCancellation_Request_ID',
			Ticket_ID = '$cTicket_ID',
			Member_ID = '$cMember_ID',
			Inquiry_Type = '$cInquiry_Type'
			where Cancellation_Request_ID = '$cCancellation_Request_ID'";
				
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