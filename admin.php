<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1px" width="100%">
			<tr>
				<th>Name</th>
				<th>EmailID</th>
				<th>Contact</th>
				<th>Comments</th>
			</tr>
<?php 
    $name=mysqli_real_escape_string($_POST['name']);
    $emailID=mysqli_real_escape_string($_POST['emailID']);
    $contactDetails==mysqli_real_escape_string($_POST['contactDetails']);
    $comments==mysqli_real_escape_string($_POST['comments']);  
    $time=DATE("Y-m-d H:i:s"); 
       mysqli_connect("localhost","root","") or die(mysqli_error()); 
       mysqli_select_db("check_data") or die("Cannot connect to database"); 
       mysqli_query("INSERT INTO data(Name,EmailID,Contact,Comments,timeToIdn) VALUES ('$name','$emailID','$contactDetails','$comments','$time')"); 

			
				$query = mysqli_query("Select * from data"); // SQL Query
				while($row = mysqli_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['name'] . "</td>";
						Print '<td align="center">'. $row['emailID'] . "</td>";
						Print '<td align="center">'. $row['contactDetails'] . "</td>";
						Print '<td align="center">'. $row['comments'] . "</td>";
					Print "</tr>";
				}
			?>
		</table>
		</body>
</html>