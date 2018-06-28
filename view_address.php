<?php 
include ('dbcon.php');?>
<h4>
                    <?php
                       if(isset($_GET['view']))
						{
						$Employee_No=$_GET['view'];
						$employee_query=mysql_query("select * from address where Employee_No='$Employee_No'")or die(mysql_error());
						$row=mysql_fetch_array($employee_query);
						}
                    ?>
                </h4>
            