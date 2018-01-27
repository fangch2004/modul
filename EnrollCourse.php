<html>
	<head>

			<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

			<!-- Bootstrap theme -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">

			<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script> document.getElementById("Add Course").onclick = function () { alert('hello!'); }; </script>	
	<title> Module Anmelden | Modulverwaltung </title>

	</head>

<body>

			<!--Header-->

<div class="container">
<?php 

	
	?>
						<div class="page-header" style="  margin-top:-02px; margin-bottom:-10px; ">
						<div class="img-responsive "  ><img class="icon-bar" src="images/usa.jpg"</div>
						<h2>Modulverwaltung </h2><br>
						<h3 style="color:Indigo ;">TU Bergakademie Freiberg </h3>

						</div>



<!--Header-end-->


<!--Nav Bar-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.tu-freiberg.de">TUBAF</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li class="active"><a href="login.html">Student</a></li>
        <li><a href="A_login.html">Staff</a></li>

      </ul>
    </div>
  </div>
</nav>

<!--Nav Bar End-->



		<div class="well">
		<h5>Neue Module Anmelden</h5>
		</div>




						<div class="well">
						<h3>Von Liste Auswählen </h3>
						</div>

								<div class="jumbotron" >

								<table class="table table-hover" style="font-size:18px;">
									<thead>
										<tr>
											<th><b>Course ID</b></th>
											<th><b>Course Name</b></th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<!--Php code for Database Retrieval -->
										<form action="addcourse.php">
									<?php
									include("addcourse_class.php");
									
									class refactored extends Addcourse {
										
								
									function callData()
									{
									parent::conn();
									
										$sql = "SELECT * FROM courses";
										$result = mysqli_query($this->con,$sql);
									while($row = mysqli_fetch_array($result))
									{
									echo "<td>    <input type='checkbox' name='Course[]'  value='". $row['COURSE_ID']."'> "  .$_SESSION ['F_COURSE_ID']= $row['COURSE_ID']."<br>";
									echo "<td>".$_SESSION ['F_COURSE_NAME'] = $row['COURSE_NAME']."<br>"; echo "<tr>";
									
									};
									
									}
									
									}
									
									$object1 = new refactored();
									$object1->callData();
								
									session_destroy();
									?>
										
										</tr>
								
								</table>
								<div class="form-group">
								<input type="submit" class="btn btn-success" value="Submit" style="width:30%;" onclick="return confirm('Are you sure you want to add Courses ?');">
							</div>
								
											</form>
								</div>




						
						

		</div>

		</body>

		</html>
