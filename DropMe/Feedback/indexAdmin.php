<?php
    require 'config.php';
?>
<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="css/AdminFeedback.css">
    </head>
    <body>
    <div class="productData">
			<table id="feedback">
				<tr>
				<th>Feedback ID</th>
				<th>Inquiry Type</th>
				<th>Comment</th>
				
				</tr>
				<?php
				   $sql = "select * from feedback";
				   
				   $result = $conn->query($sql);
				   
				   if($result->num_rows>0){
					   while($row = $result->fetch_assoc()){
						   
						   echo "<tr>
						            <td>".$row["Feedback_ID"]."</td>
									<td>".$row["Inquiry_Type"]."</td>
									<td>".$row["Comment"]."</td>
									
									<td><a href='editRecord.php?id=$row[Feedback_ID]&inq=$row[Inquiry_Type]&com=$row[Comment]'>Edit</a></td>
									<td><a href='deleteDetails.php?id=$row[Feedback_ID]'>Delete</a></td>
								</tr>";
					   }
				   }
				   else
				   {
					   echo "Table is empty";
				   }
				?>
			</table>
		</div>
        </body>
</html>