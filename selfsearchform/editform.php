<?php
	error_reporting(E_ALL);
?>

<html>
	<head>
		<title>Search Courses</title>
	</head>
	<body>
		<?php			
			include("db_class.php");
			
			$searchvalue="";
			$id = "";
			$code = "";
			$name = "";
			$isReadOnly = "";
			$isDisabledSearch = "";
			$isDisabledSaveChanges = "disabled='disabled'";
			
			$courses = null;
			if(isset($_POST["btnSearch"]))
			{
				$searchvalue = trim($_POST["txtsearch"]);
				$searchvalue = "$searchvalue";
				
				$count =  PDO_DB::query("select * from courses  where CONCAT(code,name) like '%$searchvalue%' ",array(),"SELECT"); 	
				//$course = PDO_DB::query("select * from courses where CONCAT(id,code,name) like '%'.?.'%' ", array($searchvalue), "SELECT");
				//$course = PDO_DB::query("select * from courses WHERE name LIKE '%$searchvalue'", array(), "SELECT");
				
				if(count($courses) > 0)
				{
					echo "count($course)+ rows found";
					
					echo "<a href='editform.php' value='displayAll'>List All</a>"; 
					
					echo "<table border='1' cellpadding='50'>";
					echo "	<thead>";
					echo "		<tr>";
					echo "			<th>ID</th>";
					echo "			<th>Code</th>";
					echo "			<th>Name</th>";
					echo "		</tr>";
					echo "	</thead>";
					echo "	<tbody>";
				
					foreach((array)$courses as $c)
					{
						echo "<tr>";
						echo "	<td>{$c["id"]}</td>";
						echo "	<td>{$c["code"]}</td>";
						echo "	<td>{$c["name"]}</td>";
						echo "</tr>";
					}
				
				echo "	</tbody>";
				echo "</table>";
					
					$isReadOnly = "readOnly='true'";
					$isDisabledSearch = "disabled='disabled'";
					$isDisabledSaveChanges = "";
				}
				else 
				{
					echo "<p>Sorry, record not found...</p>";
					$isDisabledSaveChanges = "disabled='disabled'";
					$searchvalue = "";
				}
			}
			
			if(isset($_POST["displayAll"]))
			{
				
				PDO_DB::query("select * courses", array(), "SELECT");
				
			}
		?>
		<form method="POST" action="editform.php" />
			<h1>SEARCHBOX</h1> 
			<input type="text" name="txtsearch" value="<?php $searchvalue ?>" <?php echo $isReadOnly; ?> autofocus="autofocus" />
			<input type="submit" name="btnSearch" value="Search"  <?php echo $isDisabledSearch; ?> />				
			
			
					
		</form>
	</body>
</html>