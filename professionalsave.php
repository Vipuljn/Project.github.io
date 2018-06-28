<?php include('dbcon.php');?>
<?php
//code to save data in sql
 if (isset($_POST['save'])){
  $Employee_No=$_POST['Employee_No'];
$Appointment=$_POST['Appointment'];
$Order_Number=$_POST['Order_Number'];
$Office_Name=$_POST['Office_Name'];
$Initial_Designation=$_POST['Initial_Designation'];
$Joining_Date=$_POST['Joining_Date'];
$class=$_POST['class'];
$Type=$_POST['Type'];
$Recruitment_Mode=$_POST['Recruitment_Mode'];
$Employee_Type=$_POST['Employee_Type'];
$Basic_Pay=$_POST['Basic_Pay'];
$Retirement_Date=$_POST['Retirement_Date'];
$Deduction_Type=$_POST['Deduction_Type'];
$GIS_Member=$_POST['GIS_Member'];
$GPF_CPS_Number=$_POST['GPF_CPS_Number'];
$E_Salary_Code=$_POST['E_Salary_Code'];

mysql_query("insert into professional  values ('id','$Employee_No','$Appointment','$Order_Number','$Office_Name','$Initial_Designation',
'$Joining_Date','$class','$Type','$Recruitment_Mode','$Employee_Type','$Basic_Pay','$Retirement_Date',
'$Deduction_Type','$GIS_Member','$GPF_CPS_Number','$E_Salary_Code')")or die(mysql_error());
  
 header("Location: index1.php?frm=professional.html&n=employeeProfessional.php&flag=1");
 
 }

?>