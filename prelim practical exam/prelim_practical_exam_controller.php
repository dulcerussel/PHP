<?php
	include("db_class.php");
	$emp_id="";
	$emp_fullname="";
	$cboSex="";
	$emp_department="";
	
	$employee="";
	$empcheck="";
	
	
	if(isset($_POST["btnSave"]))
	{
		$emp_id=trim($_POST["emp_id"]);
		$emp_fullname=trim($_POST["emp_fullname"]);
		$cboSex=$_POST["cboSex"];
		$emp_department=trim($_POST["emp_department"]);
			
			
		if($emp_id==null){
        	echo "You need to input id number";
        	echo "<br>";
        	echo "<a href='prelim_practical_exam_ui.php'>Go Back</a>";
        }
		else if($emp_fullname==null){
        	echo "You need to input fullname";
        	echo "<br>";
        	echo "<a href='prelim_practical_exam_ui.php'>Go Back</a>";
        }
		else if($cboSex==null){
             echo "Choose Sex:";
             echo "<br>";
             echo "<a href='prelim_practical_exam_ui.php'>Go Back</a>";
        }

		else if($emp_department==null){
        	echo "You need to input department";
        	echo "<br>";
        	echo "<a href='prelim_practical_exam_ui.php'>Go Back</a>";
        }else{
			
			
			

		
			$checker = PDO_DB::query(
										"select 
											*
										 from
											employee
											
										 WHERE
										  emp_id = ?
										",
										array($emp_id),
										"SELECT"
									);
									
			if(count($checker)> 0)
			{	
				echo"Duplicates";			
		
			}else{
				PDO_DB::query("insert into employee VALUES(?,?,?,?)",array($emp_id,$emp_fullname,$cboSex,$emp_department),"CREATE");
				echo "Saved Successfully";
			
			
			}
		}
	}
?>