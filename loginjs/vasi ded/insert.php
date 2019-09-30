<?php 
include "connectdb.php";
$data=json_decode(file_get_contents("php://input"));
$id=$dbhandle->real_escape_string($data->id);
$username=$dbhandle->real_escape_string($data->username);
$email=$dbhandle->real_escape_string($data->email);
$pass1=$dbhandle->real_escape_string($data->pass1);
$pass2=$dbhandle->real_escape_string($data->pass2);


$query="INSERT INTO x VALUES($id, '".$username"')";

$dbhandle->query($query);



?>