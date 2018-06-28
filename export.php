<?php  
//export.php  
include ('dbcon.php');
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM employee";
 $result = mysql_query($query);
 if(mysql_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                                        <th>Employee Number</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
										<th>Gender</th>
										<th>Designation</th>
                    </tr>
  ';
  while($row = mysql_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["Employee_No"].'</td>  
                         <td>'.$row["FirstName"].'</td>  
                         <td>'.$row["LastName"].'</td>  
       <td>'.$row["sex"].'</td>  
       <td>'.$row["Designation"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename=download.xls');
  header("Pragma: no-cache");
	header("Expires: 0");
  echo $output;
 
 
 }
}
?>