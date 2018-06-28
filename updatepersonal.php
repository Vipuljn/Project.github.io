<?php include('dbcon.php');?>
<?php

//code to save data in sql
 if (isset($_POST['save'])){

       $Employee_No=$_POST['Employee_No'];
        $FirstName=$_POST['FirstName'];
		$MiddleName=$_POST['MiddleName'];
		$LastName=$_POST['LastName'];
		$Birth_date=$_POST['Birth_date'];
		$Spouse=$_POST['Spouse'];
		$sex=$_POST['sex'];
		$Identity_Mark=$_POST['Identity_Mark'];
		$Height=$_POST['Height'];
		$Caste=$_POST['Caste'];
		$Religion=$_POST['Religion'];
		$State=$_POST['State'];
		$Office_Type=$_POST['Office_Type'];
		$Remarks=$_POST['Remarks'];
		$Martial_Status=$_POST['Martial_Status'];
		$Category=$_POST['Category'];
		$Blood_type=$_POST['Blood_type'];
		$District=$_POST['District'];
		#$Office_Name=$_POST['Office_Name'];
		$LTC_Home_Town=$_POST['LTC_Home_Town'];
		$Station=$_POST['Station'];
		$Designation=$_POST['Designation'];
		$Curr_Office=$_POST['Curr_Office'];
		$Cadre=$_POST['Cadre'];
              
              
        $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name= addslashes($_FILES['image']['name']);
        $image_size= getimagesize($_FILES['image']['tmp_name']);


        move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);            
        $location="upload/" . $_FILES["image"]["name"];
        
        
        mysql_query("update employee set Employee_No='$Employee_No',FirstName='$FirstName',MiddleName='$MiddleName',LastName='$LastName',
		Birth_date='$Birth_date',Spouse='$Spouse',sex='$sex',Identity_Mark='$Identity_Mark',Height='$Height',Caste='$Caste',
		Religion='$Religion',State='$State',Office_Type='$Office_Type',
            Remarks='$Remarks',Martial_Status='$Martial_Status',Category='$Category',Blood_Type='$Blood_type',District='$District',
			LTC_Home_Town='$LTC_Home_Town',Station='$Station',Designation='$Designation',Curr_Office='$Curr_Office',
			Cadre='$Cadre',location='$location' where id='$id'
            ") or die(mysql_error());
 
 
 header("Location: index1.php?frm=personal.html&flag=1");

 }
?>