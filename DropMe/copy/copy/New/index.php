<?php
	require 'config.php';
?>


<html>
	<head>
		<title>drop me</title>
	</head>
	
	<body>
		
		<hr>
		<!-- navigation Bar -->
			
	<div class="cancellation_request">	
		<table width="100%" border="1">
		
		<tr>
			<th>Cancellation_Request_ID</th>
			<th>Ticket_ID</th>
			<th>Member_ID</th>
			<th>Inquiry_Type</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php
			$sql = "select * from `cancellation_request`";
			$result = $conn->query($sql);
			
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					echo "<tr>
								<td>".$row["Cancellation_Request_ID"]."</td>
								<td>".$row["Ticket_ID"]."</td>
								<td>".$row["Member_ID"]."</td>
								<td>".$row["Inquiry_Type"]."</td>
								<td><a href='editRecord.php?id=$row[Cancellation_Request_ID]&ticket=$row[Ticket_ID]&member=$row[Member_ID]&inquiry=$row[Inquiry_Type]'>Edit</a></td>
								<td><a href='cancel.php?id=$row[Cancellation_Request_ID]'>Delete</a></td>
							</tr>";
				}
			}
			else{
				echo "Empty rows";
			}
		
		?>
		
		</table>
	</div>
		
		
	
		
		<!--footer-->
		
		<footer>
		</footer>
		
	</body>
</html>