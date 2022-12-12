<!-- display database-->
<!-- Spring 2022 -->

<html>

	<head>
		<meta charset = "utf-8">
		<title> Display Database </title>
	</head>
	
	<body>
	
		<?php

			$field = $_POST["field"];
			$i = 1;
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "visitors";
			
			$conn = new mysqli ($servername, $username, $password, $db);
			
			if ($conn -> connect_error){
				die("error: Connection to DB Server Fails </body></html>");
			}
			
			$sql = "SELECT $field FROM visitor";
			$result = $conn -> query($sql);
			
			if ($result -> num_rows > 0)
				while ($row = $result -> fetch_assoc()){
					echo "<p> $field [$i]: ".$row["$field"]. "</p>";
					$i = $i + 1;
				}
			else
				echo "0 results";
			
			$conn -> close();
			
		?>
		
	</body>

</html>