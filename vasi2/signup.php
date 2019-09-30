<?php 
//include("config.php");
session_start();

if(isset ($_POST["firstname"]) && ($_POST["lastname"]) && ($_POST["email"])&& ($_POST["password"])){ 

$con = mysqli_connect("localhost", "root", "", "signlogin");
$data = json_decode(file_get_contents("php://input"));

$thefirstname = mysqli_real_escape_string($con, $_POST['firstname']);
$thelastname = mysqli_real_escape_string($con,  $_POST['lastname']);
$theemailadd = mysqli_real_escape_string($con,  $_POST['email']);
$thepswr = mysqli_real_escape_string($con,  $_POST['password']);

$sql = "INSERT INTO signlogin (id, first_name, last_name, email, password) 
VALUES (NULL, '$thefirstname', '$thelastname', '$theemailadd', '$thepswr' )";
$que = mysqli_query($con, $query);
if($que){
	echo 'correct';}
else{
		echo 'wrong';
	}


	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	  }
	  echo "1 record added";
	  
		mysqli_close($con);
		
	}
	  ?>



<html  lang="el" ng-app = "myApp">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>

<script type = "text/javascript" src = "app.js"></script>
<head>
	<title>OnLine-Πρότυπο Εκπαίδευσης</title>
	<meta charset="UTF-8">
	<meta name="description" content="OnLine-Πρότυπο Εκπαίδευσης">
	<meta name="keywords" content="OnLine, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body ng-controller="logctrl">
	<div class="back">

<form method="post" style="border:1px solid #ccc">
	<div class="container">
		<h1>Εγγραφή</h1>
		<p>Παρακαλώ συμπληρώστε τα παρακάτω πεδία. Όλα είναι υποχρεωτικά</p>
		<hr>

		<label for="first"><b>FirstName</b></label> 
		<input type="text" name='firstname' placeholder="firstName"  ng-model='firstname' required>

		<label for="last"><b>LastName</b></label> 
		<input type="text" placeholder="LastName" ng-molel='lastname' required>
		


		<label for="email"><b>Email</b></label> 
		<input type="text" placeholder="Email" ng-model='emailadd' required>

		


		<label for="psw"><b>Κωδικός</b></label>
		<input type="password" placeholder="Κωδικός" ng-model='pswr' required>

		<!----<label for="psw-repeat"><b>Επανέλαβε Κωδικό</b></label>
        <input type="password" placeholder="Επανέλαβε Κωδικό" ng-model='psw-repeat' required>-->

        
 
        	<input type="submit" value = 'Get Started'class="button button-block" ng-click = 'signup()'/>
        </div>




	</div>
	





</form>

</div>


</body>
</html>


	





