<?php
	error_reporting(E_ALL);
?>
<html>
	<head>
		<title>Practice Delete</title>
	</head>
	<body>
		<form method="POST" action="courselist_controller.php">
		<?php
			include("db_class.php");
			
			$courses = PDO_DB::query("select * from courses", array(), "SELECT");
			
			if(count($courses) > 0)
			{
				echo "<table border='1' cellpadding='5'>";
				echo "	<thead>";
				echo "		<tr>";
				echo "			<th>ID</th>";
				echo "			<th>Code</th>";
				echo "			<th>Name</th>";
				echo "			<th>DELETE</th>";
				echo "		</tr>";
				echo "	</thead>";
				echo "	<tbody>";
				
				foreach($courses as $c)
				{
					echo "<tr>";
					echo "	<td>{$c["id"]}</td>";
					echo "	<td>{$c["code"]}</td>";
					echo "	<td>{$c["name"]}</td>";
					echo "	<td>";
				//	echo "		<input type='submit' name='btnDelete' value='{$c["id"]}' />";
				//	echo "      <input type='hidden' name='id[]' value='{$c["id"]}' />";
					echo " <button name = 'btnDelete' value = '{$c["id"]}'>DELETE</button>";

					echo "	</td>";
					echo "</tr>";
				}
				
				echo "	</tbody>";
				echo "</table>";
			}
			else 
			{
				echo "<h1>Sorry, no records found.</h1>";
			}
			
		
		?>		
		</form>
	</body>
</html>