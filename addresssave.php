<?php include('dbcon.php');?>

<?php
//code to save data in sql
    if (isset($_POST['save'])){
		 $Employee_No=$_POST['Employee_No'];
		$PresentAddress=$_POST['PresentAddress'];
        $State=$_POST['State'];
        $Block=$_POST['Block'];
		$PinCode=$_POST['PinCode'];
		$Email=$_POST['Email'];
		$District=$_POST['District'];
		$Panchayat=$_POST['Panchayat'];
		$phone_no=$_POST['phone_no'];
		$mobile_no=$_POST['mobile_no'];
		$PermanentAddress=$_POST['PermanentAddress'];
		
		 mysql_query("insert into address  values ('id','$Employee_No','$PresentAddress','$State','$Block','$PinCode','$Email','$District','$Panchayat','$phone_no','$mobile_no','$PermanentAddress')")or die(mysql_error());
         
 header("Location: index1.php?frm=address.html&n=employeeAddress.php&flag=1");

	}

?>