<?php
  session_start();
   
   $con = new mysqli("localhost", "root", "", "signlogin");

   $data = json_decode("php://input");
   $emailadd = mysqli_real_escape_string($con, $data->collectedmail);
   $pswr = mysqli_real_escape_string($con, $data->collectedpassword);

   $query=("SELECT id FROM signlogin WHERE email= '$emailadd' and password= '$pswr'");
   $que = mysqli_query($con, $query);
   $count = mysqli_num_rows($que);


   if($count==1){
      echo 'correct';

   }
   else {
      echo 'wrong';
   }
?>


<!DOCTYPE html>
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
<body ng-controller = "logctrl">
	
	<div class="back">

<form  method="post" style="border:1px solid #ccc">
	<div class="container">
		<h1>Σύνδεση</h1>
		
		<hr>

		<label for="email"><b>Email</b></label> 
		<input type="text" placeholder="Email" ng-model='theemailadd' required>

		<label for="psw"><b>Κωδικός</b></label>
		<input type="password" placeholder="Κωδικός" ng-model='thepswr' required>

		
        <label>
        	<input type="checkbox" name="checked" name="remember" style="margin-bottom: 15px"> Remember me

        </label>

        

        <div class="clearfix">
 
		
			<input type = "submit" value = 'Σύνδεση' class="signupbtn" ng-click = 'signin()'/>
		</div>
		
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>





	</div>
	





</form>

</div>


</body>
</html>
