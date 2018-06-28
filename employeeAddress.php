<div class="body">
<br>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Present Address</th>
                                        <th>Permanent Address</th>
										<th>State</th>
										<th>Mobile No</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
								<tbody>
<?php include ('dbcon.php');
include('session.php'); 
				$address_query=mysql_query("select * from address");
				while($row=mysql_fetch_array($address_query)){ $id=$row['employeeID']; ?>
							
<?php if(isset($_GET['del']))
{
$Employee_No=$_GET['del'];
$sql="DELETE FROM address where Employee_No='$Employee_No'";
$address_query=mysql_query($sql) or die("Failed".mysql_error());
echo"<meta http-equiv='refresh' content='0;url=index1.php?frm=address.html&n=employeeaddress.php&flag=1'>";
}?>
                        <tr class="del<?php echo $id ?>">
                            <td><?php  echo $row['Employee_No']?></td>
							<td><?php echo $row['PresentAddress']; ?></td>
                            <td><?php echo $row['PermanentAddress']; ?></td>
							<td><?php echo $row['State']; ?></td>
							<td><?php echo $row['mobile_no']; ?></td>
							<td>      
                          <?php echo "<a href=index1.php?frm=edit_personal.php&flag=2 class= 'btn btn-primary'>Edit</a>&nbsp;";?>
						  
                          <?php echo "<a href=employeePersonal1.php?del=$row[Employee_No] class='btn btn-danger'>Delete</a>";?>
						  </td>
							  </tr>
                        <?php }?>
</tbody>
</table>
</div>