<?php include('dbcon.php');?>
<?php
//code to save data in sql
if (isset($_POST['save'])){
	 $Employee_No=$_POST['Employee_No'];
		$Transaction_Type=$_POST['Transaction_Type'];
        $Office=$_POST['Office'];
        $Position=$_POST['Position'];
		$Class=$_POST['Class'];
		$Order_Number=$_POST['Order_Number'];
		$Order_Date=$_POST['Order_Date'];
		$Increment_Date=$_POST['Increment_Date'];
		$Pay_Scale=$_POST['Pay_Scale'];
		$Name_Deptt=$_POST['Name_Deptt'];
		$Area_Type=$_POST['Area_Type'];
		$Remark=$_POST['Remark'];
		
		 mysql_query("insert into  service_history  values ('id','$Employee_No','$Transaction_Type','$Office','$Position','$Class','$Order_Number','$Order_Date','$Increment_Date'
		 ,'$Pay_Scale','$Name_Deptt','$Area_Type','$Remark')")or die(mysql_error());
		 
 header("Location: index1.php?frm=servicehistory.html&n=employeeServicehistory.php&flag=1");

}

?>