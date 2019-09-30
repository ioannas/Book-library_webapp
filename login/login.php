<?php
session_start();
include 'dbcon.php';

$Userid = $_POST['Userid'];
$Pass = $_POST['Pass']; 

$sql = "SELECT * FROM users WHERE Userid='$Userid' AND Pass='$Pass'";
$result = mysqli_query($conn,$sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo "Your username or password is incorrect!";
} else {
	$_SESSION['id'] = $row['id'];
	echo "you are log in!";
	
}
header("Location: index.php");
?>
