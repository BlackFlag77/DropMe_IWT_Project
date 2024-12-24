<?php
	require 'config.php';

			$sql = "select * from bus";
			$result = $conn->query($sql);
			
			if($result->num_rows>0)
			{
				while($row=$result->fetch_assoc())
				{
					echo "<tr>
								<td>".$row["Bus_ID"]."</td>
								<td>".$row["Bus_No"]."</td>
								<td>".$row["Route_No"]."</td>
								<td>".$row["Driver_ID"]."</td>
								<td>".$row["Bus_Type"]."</td>
                                <td>".$row["No_of_Seats"]."</td>
								
								<td><a href='editbuses.php?id=$row[Bus_ID]&bno=$row[Bus_No]&rno=$row[Route_No]&did=$row[Driver_ID]&type=$row[Bus_Type]&seats=$row[No_of_Seats]'>Edit</a></td>
								<td><a href='deleteBuses.php?id=$row[Bus_ID]'>Delete</a></td>
							</tr>";
				}
			}
			else{
				echo "Empty rows";
			}
		
		?>