 <table class="table">
<tbody>
<thead>
				<tr>
				<th>Date/Time</th>
				<th>Action</th>
				<th>Data</th>
				<th>User</th>
				</tr>
			</thead>
<?php include ('dbcon.php');
$history_query=mysql_query("select * from history LIMIT 10");
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
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
		
		
     <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                     <a href="http://binarytheme.com" style="color:#fff;"  target="_blank"></a>
                </div>
        </div>
        </div>     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
	<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


</script>

   
</body>
</html>
