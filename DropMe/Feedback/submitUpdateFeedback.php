<?php
   require 'config.php';
   
   $id = $_POST["FeedbackID"];

   $inq = $_POST["InquiryType"];
   $com = $_POST["comment"];
  
   
   $sql = "update feedback set Inquiry_Type	 = '$inq',Comment = '$com'";
   
  if(mysqli_query($conn,$sql)){
		echo "Record added successfully";
		header ("Location:indexFeedback.php");
	}
	else
	{
		echo"Cannot update the record";
	}
	mysqli_close($conn);
   
   ?>