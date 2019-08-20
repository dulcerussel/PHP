<html>
	<head>
		<title>Edit Course by ID</title>
	</head>
	<body>
		<h1>MidTerm Practical Exam</h1>
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
					//gets the first record found
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
					$id = "";
				}
			}
			
			if(isset($_POST["btnSaveChanges"]))
			{
				$id = trim($_POST["id"]);
				$code = trim($_POST["code"]);
				$name = trim($_POST["name"]);
				
				PDO_DB::query("update courses set code = ?, name = ?  where id = ? ", array($code, $name, $id), "UPDATE");
				
				echo "<p>Updated successfully...</p>";
				$id = "";
				$code = "";
				$name = "";
				
			}
		?>
		<form method="POST" action="editform.php" />
		
			<table>
				<tr>
					<td>I.D.:</td>
					<td>
						<input type="text" name="id" value="<?php echo $id; ?>"  <?php echo $isReadOnly; ?> autofocus="autofocus" />
						<input type="submit" name="btnSearch" value="Search"  <?php echo $isDisabledSearch; ?> />					
						<?php
							if(count($course) > 0)
							{
								echo "<a href='editform.php'>Cancel</a>";
							}							
						?>
					</td>
				</tr>
				<tr>
					<td>Code:</td>
					<td>
						<input type="text" name="code" value="<?php echo $code; ?>" size="40" />
					</td>
				</tr>	
				<tr>
					<td>Name:</td>
					<td>
						<input type="text" name="name" value="<?php echo $name; ?>" size="40" />
					</td>
				</tr>
				<tr>				
					<td colspan="2">
						<input type="submit" name="btnSaveChanges" value="Save Changes" <?php echo $isDisabledSaveChanges; ?> />
					</td>
				</tr>				
			</table>
		</form>
	</body>
</html>