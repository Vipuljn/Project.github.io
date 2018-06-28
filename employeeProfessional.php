<div class="body">
<br>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Office</th>
										<th>Join Date</th>
										<th>Type</th>
										<th>PayScale</th>
										<th>E Salary Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
								<tbody>
<?php 
include('dbcon.php');
$professional_query=mysql_query("select * from professional");
while($row=mysql_fetch_array($professional_query)){ $id=$row['employeeID']; ?>

<?php if(isset($_GET['del']))
{
$Employee_No=$_GET['del'];
$sql="DELETE FROM professional where Employee_No='$Employee_No'";
$professional_query=mysql_query($sql) or die("Failed".mysql_error());
echo"<meta http-equiv='refresh' content='0;url=index1.php?frm=professional.html&n=employeeProfessional.php&flag=1'>";
}?>
<tr class="del<?php echo $id ?>">
                            <td><?php  echo $row['Employee_No']?></td>
							<td><?php echo $row['Office_Name']; ?></td>
                            <td><?php echo $row['Joining_Date']; ?></td>
							<td><?php echo $row['Type']; ?></td>
							<td><?php echo $row['Basic_Pay']; ?></td>
							<td><?php echo $row['E_Salary_Code'];?></td>
							<td>

				<?php echo "<a href=index1.php?frm=edit_personal.php&flag=2 class= 'btn btn-primary'>Edit</a>&nbsp;";?>
				<?php echo "<a href=employeeProfessional.php?del=$row[Employee_No] class='btn btn-danger'>Delete</a>";?>
</td>
				 </tr>
                        <?php }?>
</tbody>
</table>
</div>
