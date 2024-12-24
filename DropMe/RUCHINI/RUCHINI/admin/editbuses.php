<?php
	require 'config.php';


    $bId = $_POST["id"];
    $bNo = $_POST["bno"];
	$bRteNo = $_POST["rno"];
    $bDriveId = $_POST["did"];
    $bType = $_POST["type"];
    $bNoOfSeat = $_POST["seats"];
	
	
	$sql = "Update bus 
			set Bus_No = '$bNo',
			Route_No = '$bRteNo',
			Driver_ID = '$bDriveId',
			Bus_Type = '$bType',
            Bus_Type = '$bNoOfSeat'
            where Bus_ID ='$ID'";
				
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