<div class="body">
<br>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Nominee Name</th>
										<th>Relation</th>
										<th>Nomination (%age)</th>
										<th>Phone Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
								<tbody>
<?php 
include('dbcon.php');
$nomination_query=mysql_query("select * from nomination");
while($row=mysql_fetch_array($nomination_query)) { $id=$row['employeeID']; ?>

<?php if(isset($_GET['del']))
{
$Employee_No=$_GET['del'];
$sql="DELETE FROM nomination where Employee_No='$Employee_No'";
$nomination_query=mysql_query($sql) or die("Failed".mysql_error());
echo"<meta http-equiv='refresh' content='0;url=index1.php?frm=nomination.html&n=employeeNomination.php&flag=1'>";
}?>
<tr class="del<?php echo $id ?>">
                            <td><?php  echo $row['Employee_No']?></td>
							<td><?php echo $row['Nominee_Name']; ?></td>
                            <td><?php echo $row['Relation']; ?></td>
							<td><?php echo $row['Nomination_Age']; ?></td>
							<td><?php echo $row['phone_no']; ?></td>
							<td>  
			<?php echo "<a href=index1.php?frm=edit_personal.php&flag=2 class= 'btn btn-primary'>Edit</a>&nbsp;";?>
			<?php echo "<a href=employeeNomination.php?del=$row[Employee_No] class='btn btn-danger'>Delete</a>";?>
</td>
				 </tr>
                        <?php }?>
</tbody>
</table>
</div>
