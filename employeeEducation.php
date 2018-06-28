<div class="body">
<br>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Employee</th>
                                        <th>Qualification</th>
										<th>Institute</th>
										<th>Start ON</th>
										<th>Completed ON</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
								<tbody>
<?php 
include('dbcon.php');
$qualification_query=mysql_query("select * from qualification");
while($row=mysql_fetch_array($qualification_query)){ $id=$row['employeeID']; ?>
<?php
if(isset($_GET['del']))
{
$Employee_No=$_GET['del'];
$sql="DELETE FROM qualification where Employee_No='$Employee_No'";
$qualification_query=mysql_query($sql) or die("Failed".mysql_error());
echo"<meta http-equiv='refresh' content='0;url=index1.php?frm=education.html&n=employeeEducation.php&flag=1'>";
}?>
							<tr class="del<?php echo $id ?>">
                            <td><?php  echo $row['Employee_No']?></td>
							<td><?php echo $row['Employee']; ?></td>
                            <td><?php echo $row['Qualification']; ?></td>
							<td><?php echo $row['Institute']; ?></td>
							<td><?php echo $row['Start_Date']; ?></td>
							<td><?php echo $row['Completed_On']?></td>
							<td>      
<?php echo "<a href=index1.php?frm=edit_personal.php&flag=2 class= 'btn btn-primary'>Edit</a>&nbsp;";?> 
<?php echo "<a href=employeeEducation.php?del=$row[Employee_No] class='btn btn-danger'>Delete</a>";?>
 </td>
				 </tr>
                        <?php }?>
</tbody>
</table>
</div>