<div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Action</th>
                                        <th>Data</th>
                                        <th>User</th>
                                    </tr>
                                </thead>
								<tbody>
<?php include ('dbcon.php');
$history_query=mysql_query("select * from history");
while($row=mysql_fetch_array($history_query)){  ?>

<tr>
	<td><?php echo $row['date']; ?></td>
	<td><?php echo $row['action']; ?></td>
	<td><?php  echo $row['data']?></td>
	<td><?php echo $row['user'] ?></td>
	

	
	</tr>
<?php }?>
</tbody>
</table>
									
									
									
									
									
									
									
									
</div>