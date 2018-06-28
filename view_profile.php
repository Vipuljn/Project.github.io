<?php
include ('dbcon.php');?>
<div class="alert alert-info">
                <h4>
                    <?php
                       if(isset($_GET['view']))
						{
						$Employee_No=$_GET['view'];
						$employee_query=mysql_query("select * from employee where Employee_No='$Employee_No'")or die(mysql_error());
						$row=mysql_fetch_array($employee_query);
                        echo 'Personal Information of'." ".$row['FirstName']." ".$row['LastName'];
						}
                    ?>
                </h4>
            </div>
		<div class="row">
	<div class="col-xs-12 col-md-2">
		<div class="row-fluid">
			<div class="col-xs-12" style="text-align: center;">
				<img id="profile_image__id_" src="<?php echo $row['location']; ?>" class="img-polaroid img-thumbnail" style="max-width: 140px;max-height: 140px;">
			</div>

		</div>
	</div>
	<div class="col-xs-12 col-md-10">
		<div class="row-fluid">
			<div class="col-md-12"><h2 id="name"></h2><?php echo $row['FirstName']." ".$row['LastName']; ?></div>
		</div>
		
		<div class="row-fluid">
			<div class="col-xs-12" style="font-size:18px;border-bottom: 1px solid #DDD;margin-bottom: 10px;padding-bottom: 10px;">
				<?php echo "<a href=index1.php?frm=edit_personal.php&edit=$row[Employee_No]&flag=2 class= 'btn btn-small btn-success'><i class='fa fa-edit'></i>Edit</a>&nbsp;";?>
				<?php echo "<a href=employeePersonal1.php?del=$row[Employee_No] class='btn btn-danger'>Delete</a>";?>
			</div>
		</div>

<div class="row-fluid" style="border-top: 1px;">
	<div class="col-xs-6 col-md-4" style="font-size:16px;">
		<label class="control-label col-xs-12" style="font-size:13px;font-size:13px;">Employee Number</label>
		<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="employee_id"><?php echo $row['Employee_No']; ?></label>
			</div>
			<div class="col-xs-6 col-md-4" style="font-size:16px;">
				<label class="control-label col-xs-12" style="font-size:13px;">Designation</label>
				<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="nic_num"><?php echo $row['Designation']; ?></label>
			</div>
		</div>
	</div>
</div>


<ul class="nav nav-tabs" id="subModTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
	<li class="active"><a data-toggle="tab" id="tabBasic" href="#tabPageBasic">Basic Information</a></li>
	<li class=""><a data-toggle="tab" id="tabQualifications" href="#tabPageQualifications">Qualifications</a></li>
	<li class=""><a data-toggle="tab" id="tabFamily" href="#tabPageFamily">Family</a></li>
	
</ul>

<div class="tab-content">
	<div class="tab-pane sub-tab active" id="tabPageBasic">
		<div class="row" style="margin-left:10px;margin-top:20px;">
			<div class="panel panel-default" style="width:97.5%;">
				<div class="panel-heading"><h4>Personal Information</h4></div>
				<div class="panel-body" id="cont_personal_information">
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Father/Mother/Spouse Name</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="driving_license"><?php echo $row['Spouse']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Category</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="other_id"><?php echo $row['Category']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Date Of Birth</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="birthday"><?php echo $row['Birth_date']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Gender</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="gender"><?php echo $row['sex']; ?></label>
					</div>

					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Blood Group</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="nationality_Name"><?php echo $row['Blood_type']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Martial Status</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="marital_status"><?php echo $row['Martial_Status']; ?></label>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-left:10px;margin-top:20px;">
			<div class="panel panel-default" style="width:97.5%;">
				<div class="panel-heading"><h4>Job Details</h4></div>
				<div class="panel-body" id="cont_job_details">
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Designation</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="job_title_Name"<?php echo $row['Designation']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Cadre</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="employment_status_Name"><?php echo $row['Cadre']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">#_label_supervisor_#</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="supervisor_Name"></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Direct Reports</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="subordinates"></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">#_label_department_#</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="department_Name"></label>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-left:10px;margin-top:20px;">
			<div class="panel panel-default" style="width:97.5%;">
			<?php include ('view_address.php');?>
				<div class="panel-heading"><h4>Contact Information</h4></div>
				<div class="panel-body" id="cont_contact_information">
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Present Address</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="address1"><?php echo $row['PresentAddress']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">State</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="address2"><?php echo $row['State']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Email</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="city"><?php echo $row['Email']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Postal Code</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="country_Name"><?php echo $row['PinCode']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Phone Number</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="postal_code"><?php echo $row['phone_no']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Mobile Number</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="home_phone"><?php echo $row['mobile_no']; ?></label>
					</div>
					
					
				</div>
			</div>
		</div>

		


		<div id="customFieldsCont">

		</div>


		<div class="modal" id="adminUsersModel" tabindex="-1" role="dialog" aria-labelledby="messageModelLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><li class="fa fa-times"/></button>
						<h3 style="font-size: 17px;">Change User Password</h3>
					</div>
					<div class="modal-body">
						<form id="adminUsersChangePwd">
							<div class="control-group">
								<div class="controls">
									<span class="label label-warning" id="adminUsersChangePwd_error" style="display:none;"></span>
								</div>
							</div>
							<div class="control-group" id="field_newpwd">
								<label class="control-label" for="newpwd">New Password</label>
								<div class="controls">
									<input class="" type="password" id="newpwd" name="newpwd" value="" class="form-control"/>
									<span class="help-inline" id="help_newpwd"></span>
								</div>
							</div>
							<div class="control-group" id="field_conpwd">
								<label class="control-label" for="conpwd">Confirm Password</label>
								<div class="controls">
									<input class="" type="password" id="conpwd" name="conpwd" value="" class="form-control"/>
									<span class="help-inline" id="help_conpwd"></span>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button class="btn btn-primary" onclick="modJs.changePasswordConfirm();">Change Password</button>
						<button class="btn" onclick="modJs.closeChangePassword();">Not Now</button>
					</div>
				</div>
			</div>
		</div>
	</div><!-- End tabPageBasic -->
	<div class="tab-pane sub-tab" id="tabPageQualifications">
		<div class="row" style="margin-top:20px;">
			
	<?php include('view_qualification.php');?>
		</div><!-- End tabPageQualifications -->
	</div>
	<div class="tab-pane sub-tab" id="tabPageFamily">
		<div class="row" style="margin-top:20px;">
			<?php include('view_family.php');?>
			</div>
			
		</div>
	</div>
	
</div><!-- End tab-content -->