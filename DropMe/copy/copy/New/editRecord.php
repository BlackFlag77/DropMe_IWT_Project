<?php
	require 'config.php';
	
	$Cancellation_Request_ID = $_GET['id'];
	$Ticket_ID = $_GET['ticket'];
	$Member_ID=$_GET['member'];
	$Inquiry_Type = $_GET['inquiry'];
	
	
?>

<html>
	<head>
		<title>dropme</title>
	</head>
	
	<body>
		
	<form action="submitEditRecord.php" method= "POST">
	Item Code:
	<input type="text" value="<?php echo "$Cancellation_Request_ID" ?>" name="Cancellation_Request_ID" readonly><br><br>
		
	Item Name:
	<input type="text" value="<?php echo "$Ticket_ID" ?>" name="Ticket_ID"><br><br>	
	
	Item Price:
	<input type="text" value="<?php echo "$Member_ID" ?>" name="Member_ID"><br><br>
	
	Quantity:
	<input type="text" value="<?php echo "$Inquiry_Type" ?>" name="Inquiry_Type"><br><br>
	
	<input type="submit" value="Update cancel">
	
	

</form>

	
		<footer>
		</footer>
		
	</body>
</html>