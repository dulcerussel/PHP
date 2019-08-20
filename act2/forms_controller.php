<?php
 
   $txtidno="";
   $rdmajor="";
   $cboType="";
   $chkSubjects="";
   
   $total="";
   
   if (isset($_GET["btnEnroll"])) {
		
		
		$txtidno=$_GET["txtidno"];
		$rdmajor=$_GET["rdmajor"];
		$cboType=$_GET["cboType"];
		$strlth =  strlen($txtidno);
		

      if(empty($_GET["chkSubjects"])){
        	echo "You didn't select any Subjects.";
        	echo "<br>";
        	echo "<a href='forms.php'>Go Back</a>";
        }
       
      
    
      elseif($txtidno==null||$strlth<8){
        	echo "You need to input idno or needs to be 8 numbers of length";
        	echo "<br>";
        	echo "<a href='forms.php'>Go Back</a>";
        }
       
       
      elseif ($cboType==null) {
             echo "Choose Type:";
             echo "<br>";
             echo "<a href='forms.php'>Go Back</a>";
        }
      elseif (empty($_GET["rdmajor"])) {
        	echo "Choose Artist";
        	echo "<br>";
        	echo "<a href='forms.php'>Go Back</a>";
        }
     else{
     	     $rdmajor=$_GET["rdmajor"]; 
        	 
             echo "<br>ID Number:: {$txtidno}";
			 $Typeprint="";
			 if($cboType=='O'){
				echo "<br> Type: Old";
			 }else{
				echo "<br> Type: New";
			 }
             echo "<br>Major: {$rdmajor}";
			 echo "<hr>";
             foreach ($_GET["chkSubjects"] as $sub) {
				if(strcmp($sub,'Math') == 0){
					echo "<br>"; 
					echo "{$sub}";
					echo"&nbsp";
					echo "4 units";
				}else{
					echo "<br>"; 
					echo "{$sub}";
					echo"&nbsp";
					echo "3 units";
				}
                
             }
			 echo "<br>"; 
			 
			 echo "Total units enrolled:";
			 
			 foreach ($_GET["chkSubjects"] as $sub ) {
				if(strcmp($sub,'Math') == 0){
					$total+=4;
				}else{
					$total+=3;
				}
             }
			 echo "<br>"; 
			 
			 echo "{$total}";
			 
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