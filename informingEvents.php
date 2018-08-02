<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p style="border:2px solid black; width:auto; height:100px; text-align:center; font-size:20px">
Upcoming Events!	 
</p>
<p><h2 style="text-align:center">Photo Workshop 1</h2><br>
It is a workshop to be hold on dd:mm::yyyy.<br>
The objectives of the programs is to make the participants familiar with handling DSLR<br>
<img src="picture1.png" style="position:relative;left:500px">
</p>
<p>Fill out this form to learn more</p>
<form action="admin.php" method="POST" style="position:relative; left:500px; border:5px solid black;background-color:yellow; font-family:Comic Sans MS" >
	Name            : <input type="text" name="name"><br>
	Email ID        : <input type="text" name="emailID"><br>
	Contact Details : <input type="text" name="contactDetails"><br>
	Let us hear what you want to ask:<br><input type="textarea" name="comments"><br>
	<input type="submit" name="submit" value="Submit">
	<?php
	GLOBAL $i=0; 
	 mysqli_connect("localhost","root","") or die(mysqli_error()); 
     mysqli_select_db("check_data") or die("Cannot connect to database");
     $query = mysqli_query("SELECT id from data"); // SQL Query
	 while($row = mysqli_fetch_array($query))
	 {
          $i++;
	 }
	 if($i!=0)
	 {
        PRINT "<p>These peeps have already did it!".$i."</p>"; 
	 }
	 else
	 {
	 	PRINT "<p>Register fast!</p>";
	 }
	 ?></p>
</form>
</body>
</html>