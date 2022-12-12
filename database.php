<!DOCTYPE html>
<html>

	<head>
		<meta charset = "utf-8">
		<title> Database </title>
	</head>
	
	<body>
		<?php
			$Name = $_POST["visitor_name"];
			$Type = $_POST["visitor_type"];
			$Email = $_POST["visitor_email"];
			$Mail = $_POST["visitor_mail"];
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "visitors";
			
			$conn = new mysqli ($servername, $username, $password, $db);
			
			if ($conn -> connect_error){
				die("error: Connection to DB Server Fails </body></html>");
			}
			
			$sql = "INSERT INTO visitor (Name, Type, Email, Mail) VALUES ('$Name', '$Type', '$Email', '$Mail')";
			if ($conn -> query($sql)) {
				echo "<p>New Records are created successfully</p>";
			}
			else {
				echo "Error: ". $sql. "<br>". $conn -> error;
			}
			
			$conn -> close();
			
			print("<p> thanks </p>");

		?>
	</body>

</html>