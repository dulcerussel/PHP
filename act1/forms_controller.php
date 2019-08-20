<?php
 
   $txtcomment="";
   $cboSex="";
   $rdTeacher="";
   if (isset($_GET["btnsubmit"])) {
   
        $txtcomment=trim($_GET["txtcomment"]);
        $cboSex=$_GET["cboSex"];

      if(empty($_GET["chkSubjects"])){
        	echo "You didn't select any Subjects.";
        	echo "<br>";
        	echo "<a href='forms.php'>Go Back</a>";
        }
       
      
    
      elseif($txtcomment==null){
        	echo "You need to input comment";
        	echo "<br>";
        	echo "<a href='forms.php'>Go Back</a>";
        }
       
       
      elseif ($cboSex==null) {
             echo "Choose Sex";
             echo "<br>";
             echo "<a href='forms.php'>Go Back</a>";
        }
      elseif (empty($_GET["rdArtist"])) {
        	echo "Choose Artist";
        	echo "<br>";
        	echo "<a href='forms.php'>Go Back</a>";
        }
     else{
     	     $rdArtist=$_GET["rdArtist"]; 
        	 echo "<hr>";
             foreach ($_GET["chkSubjects"] as $sub) {
              
                echo "<br>"; 
             	echo "{$sub}";
             }
             echo "<br>Comment: {$txtcomment}";
             echo "<br> SEX: {$cboSex}";
             echo "<br>Artist: {$rdArtist}";
             echo "<br>";
             echo "<br>";
             echo "<br>";
             echo "<hr>";
        	 echo "<a href='forms.php'><--- Go Back</a>";
        }
       
   }
   else 
	{
		echo "Invalid action taken <br />";
		echo "<a href='forms.php'>Go Back</a>";
	}







?>