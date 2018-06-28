<?php
include ('dbcon.php');?>

                <h4>
                    <?php
                       if(isset($_GET['view']))
						{
						$Employee_No=$_GET['view'];
						$employee_query=mysql_query("select * from dependent where Employee_No='$Employee_No'")or die(mysql_error());
						$row=mysql_fetch_array($employee_query);
                      
						}
                    ?>
                </h4>

		<div class="row" style="margin-left:10px;margin-top:20px;">
			<div class="panel panel-default" style="width:97.5%;">
				<div class="panel-heading"><h4>Family Details</h4></div>
				<div class="panel-body" id="cont_personal_information">
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Member Name</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="driving_license"><?php echo $row['Member_Name']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Dependent</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="other_id"><?php echo $row['dependent']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Relation</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="birthday"><?php echo $row['Relation']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">E Salary Code</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="gender"><?php echo $row['E_Salary_Code']; ?></label>
					</div>

				</div>
			</div>
		</div>
		

	
	