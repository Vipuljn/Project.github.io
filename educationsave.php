
<?php include('dbcon.php');?>
<?php
//code to save data in sql
 if (isset($_POST['save'])){
	 $Employee_No=$_POST['Employee_No'];
		$Employee=$_POST['Employee'];
        $Qualification=$_POST['Qualification'];
        $Institute=$_POST['Institute'];
		$Start_Date=$_POST['Start_Date'];
		$Completed_On=$_POST['Completed_On'];
		
		
		 mysql_query("insert into qualification  values ( 'id','$Employee_No','$Employee','$Qualification','$Institute','$Start_Date','$Completed_On')")or die(mysql_error());
         
 header("Location: index1.php?frm=education.html&n=employeeEducation.php&flag=1");
 
 }

?>