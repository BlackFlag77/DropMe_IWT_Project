<?php
   require 'config.php';
   
   $id = $_POST["CardID"];

   $number = $_POST["CardNumber"];
   $holder = $_POST["CardHolder"];
   $month = $_POST["Ex_month"];
   $year = $_POST["Ex_year"];
   $cvv = $_POST["CVV"];
   
   $sql = "update cards set Card_number = '$number',Card_holder = '$holder',Expiration_month= '$month',Expiration_year = '$year',CVV = '$cvv' where Card_ID = '$id'";
   
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