<?php
include ('dbcon.php');?>

                <h4>
                    <?php
                       if(isset($_GET['view']))
						{
						$Employee_No=$_GET['view'];
						$employee_query=mysql_query("select * from qualification where Employee_No='$Employee_No'")or die(mysql_error());
						$row=mysql_fetch_array($employee_query);
                      
						}
                    ?>
                </h4>

		<div class="row" style="margin-left:10px;margin-top:20px;">
			<div class="panel panel-default" style="width:97.5%;">
				<div class="panel-heading"><h4>Qualificaion</h4></div>
				<div class="panel-body" id="cont_personal_information">
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Education</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="driving_license"><?php echo $row['Qualification']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Start</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="other_id"><?php echo $row['Start_Date']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Completed</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="birthday"><?php echo $row['Completed_On']; ?></label>
					</div>
					<div class="col-xs-6 col-md-3" style="font-size:16px;">
						<label class="control-label col-xs-12" style="font-size:13px;">Institute</label>
						<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="gender"><?php echo $row['Institute']; ?></label>
					</div>

				</div>
			</div>
		</div>
		

	
	