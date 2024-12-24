<?php
    require 'config.php';
?>
<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="css/Admin.css">
    </head>
    <body>
    <div class="productData">
			<table id="card">
				<tr>
				<th>Card ID</th>
				<th>Card Number</th>
				<th>Card Holder</th>
				<th>Expiration Month</th>
				<th>Expiration Year</th>
				<th>Edit details</th>
				<th>Delete details</th>
				</tr>
				<?php
				   $sql = "select * from cards";
				   
				   $result = $conn->query($sql);
				   
				   if($result->num_rows>0){
					   while($row = $result->fetch_assoc()){
						   
						   echo "<tr>
						            <td>".$row["Card_ID"]."</td>
									<td>".$row["Card_number"]."</td>
									<td>".$row["Card_holder"]."</td>
									<td>".$row["Expiration_month"]."</td>
									<td>".$row["Expiration_year"]."</td>
									<td><a href='editRecord.php?id=$row[Card_ID]&number=$row[Card_number]&holder=$row[Card_holder]&month=$row[Expiration_month]&year=$row[Expiration_year]&cvv=$row[CVV]'>Edit</a></td>
									<td><a href='deleteDetails.php?id=$row[Card_ID]'>Delete</a></td>
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