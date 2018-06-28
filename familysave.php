<?php include('dbcon.php');?>
<?php
//code to save data in sql
if (isset($_POST['save'])){
	 $Employee_No=$_POST['Employee_No'];
		$Member_Name=$_POST['Member_Name'];
        $Relation=$_POST['Relation'];
        $dependent=$_POST['dependent'];
		$employed=$_POST['employed'];
		$same_deptt=$_POST['same_deptt'];
		$Employee_Code=$_POST['Employee_Code'];
		$deptt_name=$_POST['deptt_name'];
		$E_Salary_Code=$_POST['E_Salary_Code'];
		
		
		 mysql_query("insert into dependent  values ('id','$Employee_No','$Member_Name','$Relation','$dependent','$employed','$same_deptt','$Employee_Code',
		 '$deptt_name','$E_Salary_Code')")or die(mysql_error());
         

 header("Location: index1.php?frm=family.html&n=employeeFamily.php&flag=1");
}

?>