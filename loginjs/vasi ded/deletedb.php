<?php
include "connectdb.php";

$data= json_decode(file_get_contents("php://input");

$query="DELETE FROM x WHERE id=".$id;

$dbhandle->query($query);

?>