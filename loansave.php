<?php include('dbcon.php');?>
<?php
//code to save data in sql
 if (isset($_POST['save'])){
	  $Employee_No=$_POST['Employee_No'];
		$Loan_Type=$_POST['Loan_Type'];
        $Loan_Account=$_POST['Loan_Account'];
        $Letter_NO=$_POST['Letter_NO'];
		$Sanction_Date=$_POST['Sanction_Date'];
		$Sanction_Amount=$_POST['Sanction_Amount'];
		$Return_Date=$_POST['Return_Date'];
		$Remark=$_POST['Remark'];
		
		
		 mysql_query("insert into loan  values ('id','$Employee_No','$Loan_Type','$Loan_Account','$Letter_NO','$Sanction_Date','$Sanction_Amount','$Return_Date','$Remark')")or die(mysql_error());
         
 header("Location: index1.php?frm=loan.html&n=employeeLoan.php&flag=1");
 }

?>