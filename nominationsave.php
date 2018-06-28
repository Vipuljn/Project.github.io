<?php include('dbcon.php');?>
<?php
//code to save data in sql
 if (isset($_POST['save'])){
		 $Employee_No=$_POST['Employee_No'];
		$Nominee_Name=$_POST['Nominee_Name'];
		$Relation=$_POST['Relation'];
		$Nomination_Age=$_POST['Nomination_Age'];
		$Nomination_Type=$_POST['Nomination_Type'];
		$PresentAddress=$_POST['PresentAddress'];
        $State=$_POST['State'];
        $Block=$_POST['Block'];
		$PinCode=$_POST['PinCode'];
		$District=$_POST['District'];
		$Panchayat=$_POST['Panchayat'];
		$phone_no=$_POST['phone_no'];
		
		 mysql_query("insert into nomination  values ('id','$Employee_No','$Nominee_Name','$Relation','$Nomination_Age','$Nomination_Type','$PresentAddress',
		 '$State','$Block','$PinCode','$District','$Panchayat','$phone_no')")or die(mysql_error());

 header("Location: index1.php?frm=nomination.html&n=employeeNomination.php&flag=1");

 }

?>