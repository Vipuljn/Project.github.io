<div class="body">
<br>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Transaction Type</th>
										<th>To Office</th>
										<th>Position</th>
										<th>Increment Date</th>
										<th>PayScale</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
								<tbody>
<?php 
include('dbcon.php');
$service_history_query=mysql_query("select * from service_history");
while($row=mysql_fetch_array($service_history_query)){ $id=$row['employeeID'];?>

<?php if(isset($_GET['del']))
{
$Employee_No=$_GET['del'];
$sql="DELETE FROM service_history where Employee_No='$Employee_No'";
$service_history_query=mysql_query($sql) or die("Failed".mysql_error());
echo"<meta http-equiv='refresh' content='0;url=index1.php?frm=servicehistory.html&n=employeeServicehistory.php&flag=1'>";
}?>
<tr class="del<?php echo $id ?>">
                            <td><?php  echo $row['Employee_No']?></td>
							<td><?php echo $row['Transaction_Type']; ?></td>
                            <td><?php echo $row['Office']; ?></td>
							<td><?php echo $row['Position']; ?></td>
							<td><?php echo $row['Increment_Date']; ?></td>
							<td><?php echo $row['Pay_Scale'];?></td>
							<td>
				<?php echo "<a href=index1.php?frm=edit_personal.php&flag=2 class= 'btn btn-primary'>Edit</a>&nbsp;";?>
				<?php echo "<a href=employeeServicehistory.php?del=$row[Employee_No] class='btn btn-danger'>Delete</a>";?>
</td>
				 </tr>
                        <?php }?>
</tbody>
</table>
</div>
