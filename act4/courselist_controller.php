<?php
	error_reporting(E_ALL);
?>
<html>
	<head>
		<title>Delete</title>
	</head>
	<body>
		<?php
			include("db_class.php");
			$id = null;
			if(isset($_POST["btnDelete"]))
			{
				
					
					$id = $_POST["btnDelete"];
					
					echo "<h2>The id numbers of the courses that have been deleted:</h2>";
					echo "<ul>";

						echo "<li>{$id}</li>";
						
						PDO_DB::query("delete from courses where id = ? ", array($id), "DELETE");
						
					
					echo "</ul>";
					echo "<h2>Sucessfully deleted...</h2>";
				
			}
			echo "<a href='courseslist_ui.php'>Back</a>";
		
		?>
	</body>
</html>