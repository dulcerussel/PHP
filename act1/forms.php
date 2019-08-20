<!DOCTYPE html>
<html>
	<head>
		<title>Forms</title>
	</head>
	<body>
	<hr>
	<form method="GET" action="forms_controller.php">
		Select your favorite Subjects:
		<br >
		<input type="checkbox" name="chkSubjects[]" value="Math" /> Math
		<br >
		<input type="checkbox" name="chkSubjects[]" value="Science" checked="checked"/>Science
		<br >
		<input type="checkbox" name="chkSubjects[]" value="History" checked="checked" /> History
		<br >
		<input type="checkbox" name="chkSubjects[]" value="English" /> English
		<br >
		<input type="checkbox" name="chkSubjects[]" value="Recess" /> Recess
		<br />
		<p>Enter Your Comment</p>
		<textarea 
			name="txtcomment" 
			placeholder="Enter your comment here..." 
			maxlength="1000" 
			cols="40" 
			rows="5"
			required="required" 
		></textarea>
		
		<br />
		
		<select name="cboSex" required="required" >
			<option value="" selected="selected">Please Select</option>
			<option value="M" >Male</option>
			<option value="F">Female</option>
		</select>
		
		<br />
		Select your most favorite female artist: <br />
		<input type="radio" name="rdArtist" value="Kathryn Bernardo"  required="required" />Kathryn Bernardo
		<br />
		<input type="radio" name="rdArtist" value="Nadine Samonte" >Nadine Samonte
		<br />
		<input type="radio" name="rdArtist" value="Liza Soberano" />Liza Soberano
		<br />
		<input type="radio" name="rdArtist" value="Angel Locsin" />	Angel Locsin
		<br>
		<br>
		<br>
		<br>
		<input type="submit" name="btnsubmit" value="Register"></input>
		
		</form>
		<hr>
	</body>
</html>



