<!DOCTYPE html>
<html>
	<head>
		<title>Activity2</title>
	</head>
	<body>
	<hr>
	<form method="GET" action="forms_controller.php">
		
		IDNO: <input type = "text" name = "txtidno"/>
		<br>
		<br>
		Type:
		<br>
	    <input type="radio" name="rdmajor" value="Computer" />Computer
		<br />
		<input type="radio" name="rdmajor" value="Businness" >Businness
		<br />
		<input type="radio" name="rdmajor" value="Engineering" />Engineering
		<br />
		<br>
		<br>
		
		Type:
		<select name = "cboType" >
			<option value="" selected="selected">[Please Select]</option>
			<option value="O">OLD</option>
			<option value="N">NEW</option>
		</select>
		<br>
		<br>
		<br>
	
		Select your classes:
		<br >
		<input type="checkbox" name="chkSubjects[]" value="English " /> English  3.0
		<br >
		<input type="checkbox" name="chkSubjects[]" value="Math" />Math   4.0
		<br >
		<input type="checkbox" name="chkSubjects[]" value="Science"  />Science  3.0
		<br >
		<input type="checkbox" name="chkSubjects[]" value="History" /> History   3.0
		<br >
		<br />
		<br>
		<br>
		<br>
		<br>
		<input type="submit" name="btnEnroll" value="Enroll"></input>
		
		</form>
		<hr>
	</body>
</html>



