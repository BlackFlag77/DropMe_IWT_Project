<?php
   require 'config.php';
   
   $inquiry = $_POST["InquiryType"];
   $comment = $_POST["Comment"];
   
   $sql = "insert into feedback(Feedback_ID,Comment)
           values('','$inquiry','$comment')";
	   
	if(mysqli_query($conn,$sql)){
		echo "Record added successfully";
		
	}
	else
	{
		echo "Cannot insert the record";
	}

	$sql = "insert into feedback(Feedback_ID,Inquiry_Type,Comment)
           values('','$inquiry','$comment')";
	   
	if(mysqli_query($conn,$sql)){
		echo "Record added successfully";
		
	}
	else
	{
		echo "Cannot insert the record";
	}

	mysqli_close($conn);
	
	
?>