<?php include('dbcon.php'); include('session.php'); $get_id=$_GET['id'];?>
<form method="post" enctype="multipart/form-data" action="updatepersonal.php">
	
  <table class="table table-striped table-bordered table-hover">
 <?php
				$Employee_No=$_GET['edit'];
                $employee_query=mysql_query("select * from employee where Employee_No='$Employee_No'")or die(mysql_error());
                $row=mysql_fetch_array($employee_query);
                
                
            ?>
<tbody>
<tr>
<td>Employee No</label></td>
<td><input type="text" name="Employee_No" value="<?php echo  $row['Employee_No']; ?>" readonly="yes" required class="form-control"></td>
</tr>
<tr>
<td>FirstName</td>
<td><input type="text" name="FirstName" value="<?php echo  $row['FirstName']; ?>" disabled="disabled"  class="form-control"></td></br>
</tr>
<tr>
<td>MiddleName<label style="color:#FF0000;"></label></td>
<td><input type ="text" name="MiddleName" value="<?php echo  $row['MiddleName']; ?>"class="form-control" ></td>
</tr>
<tr>
<td>LastName<label style="color:#FF0000;"></label></td>
<td><input type ="text" name="LastName" value="<?php echo  $row['LastName']; ?>" class="form-control"></td>
</tr>
<tr>
<td>Date of Birth<label style="color:#FF0000;"></label></td>
<td><input type="date" name="Birth_date" value="<?php echo  $row['Birth_date']; ?>" class="form-control" ></td>
</tr>
<tr>
<td>Father/Spouse<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Spouse" value="<?php echo  $row['Spouse']; ?>" class="form-control"></td>
</tr>
<tr>
<td>Sex<label style="color:#FF0000;"></label></td>
<td><select name="sex" class="form-control">
							<option><?php echo  $row['sex']; ?></option>
                                    <option>Male</option>
                                    <option>Female</option>
		                 </select></td>
</tr>
<tr>
<td>Martial Status<label style="color:#FF0000;"></label></td>
<td><select name="Martial_Status" class="form-control">
									<option><?php echo  $row['Martial_Status']; ?></option>
                                    <option>Married</option>
                                    <option>UnMarried</option>
                                </select></td>
</tr>
<tr>
<td>Identity Mark<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Identity_Mark" value="<?php echo  $row['Identity_Mark']; ?>" class="form-control"></td>
</tr>
<tr>
<td>Height<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Height" value="<?php echo  $row['Height']; ?>" class="form-control"></td>
</tr>
<tr>
<td>Blood Type<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Blood_type" value="<?php echo  $row['Blood_type']; ?>" class="form-control"></td>
</tr>
<tr>
<tr>
<td>Category<label style="color:#FF0000;"></label></td>
<td><select name="Category" class="form-control">
									<option><?php echo  $row['Category']; ?></option>
                                    <option>General</option>
                                    <option>SC</option>
									  <option>ST</option>
									    <option>Other</option>
                                </select></td>
</tr>
<tr>
<td>Caste<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Caste" value="<?php echo  $row['Caste']; ?>"class="form-control"></td>
</tr>
<tr>
<td>Religion<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Religion" value="<?php echo  $row['Religion']; ?>"class="form-control"></td>
</tr>
<tr>
<td>District<label style="color:#FF0000;"></label></td>
<td><input type="text" name="District" value="<?php echo  $row['District']; ?>" class="form-control"></td>
</tr>
<tr>
<td>Home State<label style="color:#FF0000;"></label></td>
<td><input type="text" name="State" value="<?php echo  $row['State']; ?>" class="form-control"></td>
</tr>
<tr>
<td>Home Office Type<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Office_Type" value="<?php echo  $row['Office_Type']; ?>" class="form-control"></td>
</tr>
<tr>
<td>LTC Home Town<label style="color:#FF0000;"></label></td>
<td><input type="text" name="LTC_Home_Town" value="<?php echo  $row['LTC_Home_Town']; ?>"class="form-control"></td>
</tr>
<tr>
<td>Nearest Railway Station <label style="color:#FF0000;"></label></td>
<td><input type="text" name="Station" value="<?php echo  $row['Station']; ?>" class="form-control"></td>
</tr>
<tr>
<td>Remarks<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Remarks" value="<?php echo  $row['Remarks']; ?>" class="form-control"></td>
</tr>
<tr>
<td>Designation<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Designation" value="<?php echo  $row['Designation']; ?>"class="form-control"></td>
</tr>
<tr>
<td>Current Office<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Curr_Office" value="<?php echo  $row['Curr_Office']; ?>"class="form-control"></td>
</tr>
<tr>
<td>Cadre<label style="color:#FF0000;"></label></td>
<td><input type="text" name="Cadre" value="<?php echo  $row['Cadre']; ?>" class="form-control"></td>
</tr>
<tr>
<td>Image<label style="color:#FF0000;"></label></td>
<td> <input type="file" name="image" class="font" value="<?php echo  $row['location']; ?>"  class="form-control"></td>
</tr>
</tbody>
</table>
<br> <center> <button type="submit" name="save" class="btn btn-success">Save</button>
			
 </form>