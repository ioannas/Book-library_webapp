<?php //for database connection
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("EMAIL", "");
define("PASS1", "");
define("PASS2", "");
define("DATABASE", "mhtour");

$dbhandle=new mysqli(HOSTNAME,USERNAME, EMAIL, PASS1, PASS2) or die( "Unable to connect DB");

?>