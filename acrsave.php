<?php include('dbcon.php');?> 
<?php
//code to save data in sql

if (isset($_POST['save'])){
 
 $Employee_No=$_POST['Employee_No'];
$ACR_Submitted=$_POST['ACR_Submitted'];
$Assessment_Year=$_POST['Assessment_Year'];
$Assest_Liabilities=$_POST['Assest_Liabilities'];
$Assessment_From=$_POST['Assessment_From'];
$Assessment_To=$_POST['Assessment_To'];
$Remarks=$_POST['Remarks'];

 mysql_query("insert into acr_detail  values ('id','$Employee_No','$ACR_Submitted','$Assessment_Year','$Assest_Liabilities','$Assessment_From',
 '$Assessment_To','$Remarks')")or die(mysql_error());
         
 header("Location: index1.php?frm=acr.html&n=employeeAcr.php&flag=1");
}

?>