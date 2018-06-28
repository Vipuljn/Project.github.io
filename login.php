<?php include('dbcon.php');?>
<?php

if (isset($_POST['Login'])){

$UserName=$_POST['UserName'];
$Password=$_POST['Password'];

$login_query=mysql_query("select * from user where UserName='$UserName' and Password='$Password' and User_Type='Admin'");
$count=mysql_num_rows($login_query);

$login_query1=mysql_query("select * from user where UserName='$UserName' and Password='$Password' and User_Type='User'");
$count1=mysql_num_rows($login_query1);



$row1=mysql_fetch_array($login_query1);
$f=$row1['FirstName'];
$l=$row1['LastName'];

$row=mysql_fetch_array($login_query);
$f=$row['FirstName'];
$l=$row['LastName'];





if ($count1 == 1){
session_start();
$_SESSION['id']=$row1['User_id'];
$_SESSION['User_Type']=$row1['User_Type'];
$type=$row1['User_Type'];

mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'$type')")or die(mysql_error());


header('location:home_user.php');
}

if ($count > 0){
session_start();
$_SESSION['id']=$row['User_id'];
$_SESSION['User_Type']=$row['User_Type'];
$type=$row['User_Type'];

mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Login', NOW(),'$type')")or die(mysql_error());


header('location:index1.php');
}else{
?>
    <div class="alert alert-error">
    <button class="close" data-dismiss="alert">×</button>
   Please check your UserName and Password
    </div>
<?php } 

}

?>	
