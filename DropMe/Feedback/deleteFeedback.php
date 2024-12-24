<?php
   require 'config.php';
   $feedbackId = $_GET['id']; 
   
   $sql = "delete from feedback where Feedback_id = '$feedbackId'";
   
   if(mysqli_query($conn,$sql)){
		echo "Record added successfully";
		header ("Location:index.php");
	}
	else
	{
		echo"Cannot update the record";
	}
	mysqli_close($conn);
   
?>