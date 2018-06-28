<div class="body">
<br>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Member Name</th>
										<th>Relation</th>
										<th>Dependent</th>
										<th>Employed</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
								<tbody>
<?php 
include('dbcon.php');
$dependent_query=mysql_query("select * from dependent");
while($row=mysql_fetch_array($dependent_query)){ $id=$row['employeeID']; ?>

<?php if(isset($_GET['del']))
{
$Employee_No=$_GET['del'];
$sql="DELETE FROM dependent where Employee_No='$Employee_No'";
$dependent_query=mysql_query($sql) or die("Failed".mysql_error());
echo"<meta http-equiv='refresh' content='0;url=index1.php?frm=family.html&n=employeeFamily.php&flag=1'>";
}?>
							<tr class="del<?php echo $id ?>">
                            <td><?php  echo $row['Employee_No']?></td>
							<td><?php echo $row['Member_Name']; ?></td>
                            <td><?php echo $row['Relation']; ?></td>
							<td><?php echo $row['dependent']; ?></td>
							<td><?php echo $row['employed']; ?></td>
							<td>      
<?php echo  "<a href=index1.php?frm=edit_personal.php&flag=2 class= 'btn btn-primary'>Edit</a>&nbsp;";?> 
<?php echo "<a href=employeeFamily.php?del=$row[Employee_No] class='btn btn-danger'>Delete</a>";?>
 </td>
				 </tr>
                        <?php }?>
</tbody>
</table>
</div>
