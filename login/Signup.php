<?php
session_start();
include 'dbcon.php';

$Name = $_POST['Name'];
$Lastname = $_POST['Lastname'];
$Userid = $_POST['Userid'];
$Pass = $_POST['Pass']; 

$sql = "INSERT INTO users (Name,Lastname,Userid,Pass)
VALUES ('$Name', '$Lastname', '$Userid', '$Pass')";
$result = mysqli_query($conn,$sql);

header("Location: index.php");
?>