<?php
    require 'config.php';
	
	$bNo = $_POST["busNo"];
	$bRteNo = $_POST["busrouteNo"];
    $bDriveId = $_POST["busdriveId"];
    $bType = $_POST["busType"];
    $bNoOfSeat = $_POST["busNoOfSeat"];
	
	
	$sql ="insert into bus (Bus_ID,	Bus_No,	Route_No,Driver_ID,	Bus_Type,No_of_Seats)	
		   values('','$bNo','$bRteNo','$bDriveId','$bType',$bNoOfSeat)";
				
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