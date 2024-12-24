<?php
	
	require 'config.php';
	
	$cCancellation_Request_ID = $_POST["Cancellation_Request_ID"];
	$cTicket_ID = $_POST["Ticket_ID"];
	$cMember_ID=$_POST["Member_ID"];
	$cInquiry_Type = $_POST["Inquiry_Type"];
	
	
	$sql ="insert into cancel(Cancellation_Request_ID,Member_ID,Inquiry_Type) 
				values('','$cCancellation_Request_ID','$cTicket_ID ','$cMember_ID','$cInquiry_Type')";
				
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Record inserted successfully')</script>";
		header("Location:index.php");
	}
	else{
		echo "<script>alert('Error in insertion')</script>";
	}
	
	mysqli_close($conn);
	
?>