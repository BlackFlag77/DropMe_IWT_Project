<?php
   require 'config.php';
   $cardId = $_GET['id']; 
   
   $sql = "delete from cards where Card_id = '$cardId'";
   
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