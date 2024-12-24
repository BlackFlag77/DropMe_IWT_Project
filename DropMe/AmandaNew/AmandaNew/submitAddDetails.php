<?php
   require 'config.php';
   
   $number = $_POST["CardNumber"];
   $holder = $_POST["CardHolder"];
   $month = $_POST["Ex_month"];
   $year = $_POST["Ex_year"];
   $cvv = $_POST["CVV"];

   $sql = "insert into cards(Card_ID,Card_number,Card_holder,Expiration_month,Expiration_year,CVV)
           values('','$number','$holder','$month','$year','$cvv')";
	   
	if(mysqli_query($conn,$sql)){
		echo "Record added successfully";
		header('Location: paymentSuccess.php');
	}
	else
	{
		echo "Cannot insert the record";
	}

	$sql = "insert into cards(Card_ID,Card_number,Card_holder,Expiration_month,Expiration_year,CVV)
           values('','$number','$holder','$month','$year','$cvv')";
	   
	if(mysqli_query($conn,$sql)){
		echo "Record added successfully";
		header('Location: paymentSuccess.php');
	}
	else
	{
		echo "Cannot insert the record";
	}

	mysqli_close($conn);
	
	
?>