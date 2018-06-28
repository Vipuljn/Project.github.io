<div class="body">
<br>
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Loan Type</th>
										<th>Loan A/c Number</th>
										<th>Sanction Amount</th>
										<th>Sanction Date</th>
										<th>Return Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
								<tbody>
<?php 
include('dbcon.php');
$loan_query=mysql_query("select * from loan");
while($row=mysql_fetch_array($loan_query)){ $id=$row['employeeID']; ?>

<?php if(isset($_GET['del']))
{
$Employee_No=$_GET['del'];
$sql="DELETE FROM loan where Employee_No='$Employee_No'";
$loan_query=mysql_query($sql) or die("Failed".mysql_error());
echo"<meta http-equiv='refresh' content='0;url=index1.php?frm=loan.html&n=employeeLoan.php&flag=1'>";
}?>
<tr class="del<?php echo $id ?>">
                            <td><?php  echo $row['Employee_No']?></td>
							<td><?php echo $row['Loan_Type']; ?></td>
                            <td><?php echo $row['Loan_Account']; ?></td>
							<td><?php echo $row['Sanction_Amount']; ?></td>
							<td><?php echo $row['Sanction_Date']; ?></td>
							<td><?php echo $row['Return_Date'];?></td>
							<td>  
			<?php echo "<a href=index1.php?frm=edit_personal.php&flag=2 class= 'btn btn-primary'>Edit</a>&nbsp;"; ?>
			<?php echo "<a href=employeeLoan.php?del=$row[Employee_No] class='btn btn-danger'>Delete</a>";?>
</td>
				 </tr>
                        <?php }?>
</tbody>
</table>
</div>
