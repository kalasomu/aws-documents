

<?php
$username = "rdsdbuser";
$password = "rdsdbuser";
$hostname = "rdsdbuser.ctyx2qkvjuvc.ap-south-1.rds.amazonaws.com:3306";
$dbname = "rdsdbuser";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "connected to MySQL using username - $username, password - $password, host - $hostname<br>";
$selected = mysql_select_db("$dbname",$dbhandle)
  or die("Could not connect to database");
echo "Connected to Database - $dbname";
?>