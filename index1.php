<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SSPL</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
	<!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                       
                    </a>
                </div>
              
                 <span class="logout-spn" >
                </span>
				<center>
              <font color= 'white'>
                    <h2>Solid State Physics Laboratory Personnel Information System</h2>
                     </font>
                 </center>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li>
                        <a href="index1.php"><i class="fa fa-desktop "></i>Home </a>
                    </li>

                    <li>
                        <a href="index1.php?frm=personal.html&n=employeePersonal1.php&flag=1"><i class="fa fa-user "></i>Personal Information</a>
                    </li>
                    <li>
                        <a href="index1.php?frm=address.html&n=employeeAddress.php&flag=1"><i class="fa fa-th "></i>Address Information </a>
                    </li>

                 <li>
                        <a href="index1.php?frm=education.html&n=employeeEducation.php&flag=1"><i class="fa fa-graduation-cap "></i>Education</a>
                    </li>
                    <li>
                        <a href="index1.php?frm=professional.html&n=employeeProfessional.php&flag=1"><i class="fa fa-table"></i>Professional Information</a>
                    </li>

                    <li>
                        <a href="index1.php?frm=nomination.html&n=employeeNomination.php&flag=1"><i class="fa fa-sliders "></i>Nomination </a>
                    </li>
                    <li>
                        <a href="index1.php?frm=family.html&n=employeeFamily.php&flag=1"><i class="fa fa-sliders "></i>Family Detail</a>
                    </li>
                     <li>
                        <a href="index1.php?frm=loan.html&n=employeeLoan.php&flag=1"><i class="fa fa-shield "></i>Loan </a>
                    </li>
					 <li>
                        <a href="index1.php?frm=servicehistory.html&n=employeeServicehistory.php&flag=1"><i class="fa fa-th "></i>Service History </a>
                    </li>
					<li>
                        <a href="index1.php?frm=acr.html&n=employeeAcr.php&flag=1"><i class="fa fa-th "></i>Employee ACR</a>
                    </li>
					<li>
                        <a href="index1.php?&n=history1.php"><i class="fa fa-th "></i>History</a>
                    </li>
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                                  
                 <!-- /. ROW  -->
			<legend>Home
			<div class="pull-right">
     <button type="button" a href="#myModal" data-toggle="modal" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </button>
			  </div>&nbsp;</legend>
                 <!-- /. ROW  --> 
  <?php
error_reporting(0);//will not show any error
if($_GET['flag'] ==  1)
{
	echo "<a href=index1.php?frm=".$_GET['frm']."&flag=2 class= 'btn btn-primary'>Add New +</a>";

			include $_GET['n'];
}
else{ include $_GET['n'];}
if($_GET['flag'] == 2)
{
         include $_GET['frm']; 
}
	?>
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
	<!--jquery datables-->
	<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery-datatable.js"></script>
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
<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">  
					<button type="button" class="close" data-dismiss="modal">×</button>		
					<h4><span class="glyphicon glyphicon-lock"></span> Logout</h4>
				</div>
		<div class="modal-body">
			<p><font color="gray">Are You Sure you Want to LogOut?</font></p>
				
		</div>  
<div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">No</a>
        <a href="logout.php" class="btn btn-primary">Yes</a>
    </div>		
		     </div>
    
		</div>
	</div>
<div class="modal hide fade" id="myModal1">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">?</button>
        <h3> </h3>
    </div>
    <div class="modal-body">
        <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">No</a>
        <a href="logout.php" class="btn btn-primary">Yes</a>
    </div>
        </div>
   
</body>
</html>
