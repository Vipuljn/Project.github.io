<div class="body">
<br>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
										<th>ACR Submitted By</th>
										<th>Year</th>
										<th>Assets&Liabilities</th>
										<th>From</th>
										<th>To</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
								<tbody>
<?php include ('dbcon.php');
include('session.php'); 
                    $acr_detail_query=mysql_query("select * from acr_detail");
                        while($row=mysql_fetch_array($acr_detail_query)){ $id=$row['id']; ?>
							
<?php if(isset($_GET['del']))
{
$Employee_No=$_GET['del'];
$sql="DELETE FROM acr_detail where Employee_No='$Employee_No'";
$acr_detail_query=mysql_query($sql) or die("Failed".mysql_error());
echo"<meta http-equiv='refresh' content='0;url=index1.php?frm=acr.html&n=employeeAcr.php&flag=1'>";
}
?>
                        <tr class="del<?php echo $id ?>">
                            <td><?php  echo $row['Employee_No']?></td>
							<td><?php echo $row['Acr_Submitted']; ?></td>
                            <td><?php echo $row['Assessment_Year']; ?></td>
							<td><?php echo $row['Assest_Liabilities']; ?></td>
                            <td><?php echo $row['Assessment_From']; ?></td>
							<td><?php echo $row['Assessment_To']; ?></td>
							<td>      
						  <?php echo "<a href=index1.php?frm=view_profile.php&view=$row[Employee_No]&flag=2 class= 'btn btn-warning'>View</a>&nbsp;";?>
                          <?php echo "<a href=employeeAcr.php?del=$row[Employee_No] class='btn btn-danger'>Delete</a>";?>
						  </td>
							  </tr>
                        <?php }?>
</tbody>
</table>
</div>