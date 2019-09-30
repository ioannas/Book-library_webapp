<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title> Εγραφή</title>
<link href="cp.css" type="text/css" rel="stylesheet">
</head>

<body>
<center>
<form method="get" action="../htmlcss/new.html">
    <button type="submit">Aρχική Σελίδα</button>
</form>
<br><br>

<form action="login.php" method="POST">
<input type="text" name="Userid" placeholder="Username"><br>
    <input type="password" name="Pass" placeholder="Password"><br>
	<button type="submit">LOGIN</button> 
</form>
</center>

<?php
	if (isset($_SESSION['id'])){
	    echo "You are loged in";
	}else{
		echo "You are not logged in!";
	}
?>


<br><br><br>
<center>
<form action="Signup.php" method="POST">
	<input type="text" name="Name" placeholder="Firstname"><br>
	<input type="text" name="Lastname" placeholder="Lastname"><br>
	<input type="text" name="Userid" placeholder="Username"><br>
	<input type="password" name="Pass" placeholder="Password"><br>
	<button type="submit">SIGN UP</button>         
</form>
<br><br>



<form action="logout.php">
	<button>LOG OUT</button>
</form>

</center>

</body>

</html>