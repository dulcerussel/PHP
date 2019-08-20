


<html>
	<head>
		<title>Prelim Practical Exam By Russel Dulce</title>
	</head>
	<body>
	<form method="POST" action="prelim_practical_exam_controller.php"> 
		<h2>Prelim Practical Exam By Russel Dulce
		<h3>Employee
		ID: 
		<input type="text" maxlength="5" name="emp_id"/>
		<br/>
		Full Name:
		<input type="text" maxlength="50" name="emp_fullname"/>
		<br/>
		Sex:
		<select name = "cboSex" >
			<option value="" selected="selected">[Please Select]</option>
			<option value="MALE">MALE</option>
			<option value="FEMALE">FEMALE</option>
		</select>
		<br/>
		Department:
		<select name = "emp_department"  >
		<option value="" selected="selected">[Please Select]</option>
		<?php
			include("db_class.php");
			$courses = PDO_DB::query("select * from department order by dept_name",array(),"SELECT");
									
			if(count($courses) > 0)
			{
				
				foreach($courses as $c)
				{
					echo "<option value=".$c["dept_id"]." > ".$c["dept_name"]."</option>";
				}

			}
			else 			
			{
				echo "No courses retrieved.";
			}
		?>
		</option>
		</select>
		
		<br>
		
		
		<input type="submit" name = "btnSave" value="Save"/>
	</form>
	<body>
</html>