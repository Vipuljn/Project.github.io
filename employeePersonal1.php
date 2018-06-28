<div class="body">
<br>
<form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form> <!--excel code-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
										<th>Gender</th>
										<th>Designation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
								<tbody>
<?php include ('dbcon.php');
include('session.php'); 
                    $emp_query=mysql_query("SELECT * FROM `employee` ORDER BY `employee`.`id` DESC ");
                        while($row=mysql_fetch_array($emp_query)){ $id=$row['employeeID']; ?>
							
<?php if(isset($_GET['del']))
{
$Employee_No=$_GET['del'];
$sql="DELETE FROM employee where Employee_No='$Employee_No'";
$emp_query=mysql_query($sql) or die("Failed".mysql_error());
echo"<meta http-equiv='refresh' content='0;url=index1.php?frm=personal.html&n=employeePersonal1.php&flag=1'>";
}?>
                        <tr class="del<?php echo $id ?>">
                            <td><?php  echo $row['Employee_No']?></td>
							<td><?php echo $row['FirstName']; ?></td>
                            <td><?php echo $row['LastName']; ?></td>
							<td><?php echo $row['sex']; ?></td>
							<td><?php echo $row['Designation']; ?></td>
							<td>      
                          <?php echo "<a href=index1.php?frm=edit_personal.php&edit=$row[Employee_No]&flag=2 class= 'btn btn-primary'>Edit</a>&nbsp;";?>
						  <?php echo "<a href=index1.php?frm=view_profile.php&view=$row[Employee_No]&flag=2 class= 'btn btn-warning'>View</a>&nbsp;";?>
                          <?php echo "<a href=employeePersonal1.php?del=$row[Employee_No] class='btn btn-danger'>Delete</a>";?>
						  </td>
							  </tr>
                        <?php }?>
</tbody>
</table>
</div>