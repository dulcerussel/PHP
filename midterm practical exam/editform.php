<?php
	error_reporting(E_ALL);
?>

<html>
	<head>
		<title>Midterm Practical Exam</title>
	</head>
	<body>
		<?php			
			include("db_class.php");
			
			$id = "";
			$code = "";
			$name = "";
			
			$isReadOnly = "";
			$isDisabledSearch = "";
			$isDisabledSaveChanges = "disabled='disabled'";
			
			$course = null;
			if(isset($_POST["btnSearch"]))
			{
				$id = trim($_POST["id"]);
				
				$course = PDO_DB::query("select * from courses where id = ?", array($id), "SELECT");
				if(count($course) > 0)
				{
					$course = $course[0];
					
					$code = $course["code"];
					$name = $course["name"];
					
					$isReadOnly = "readOnly='true'";
					$isDisabledSearch = "disabled='disabled'";
					$isDisabledSaveChanges = "";
				}
				else 
				{
					echo "<p>Sorry, record not found...</p>";
					$isDisabledSaveChanges = "disabled='disabled'";
				}
			}
			
			
			
			if(isset($_POST["delete"]))
			{
				$id = trim($_POST["id"]);
				
				
						PDO_DB::query("delete from courses where id = ? ", array($id), "DELETE");
					$id="";
				     
			    echo"Successfully Deleted";
			}
			
		?>
		<form method="POST" action="editform.php" />
			<table>
				<tr>
					<td>I.D:</td>
					<td>
						<input type="text" name="id" value="<?php echo $id; ?>"  <?php echo $isReadOnly; ?> autofocus="autofocus" />
						<input type="submit" name="btnSearch" value="Search"  <?php echo $isDisabledSearch; ?> />					
					</td>
				</tr>
				<tr>
					<td>Code:</td> 
					<td>
						
						<label ><?php echo $code; ?></label>
					</td>
				</tr>	
				<tr>
					<td>Name:</td>
					<td>
						
						<label> <?php echo $name; ?></label>
					</td>
				</tr>
				<tr>				
					<td colspan="2">
						<input type="submit" name="delete" value="Delete" <?php echo $isDisabledSaveChanges; ?> />
					</td>
				</tr>				
			</table>
		</form>
	</body>
</html>