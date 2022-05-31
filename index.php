<?php
echo "testing connection the db <br/>";
 
$mysqli1 = new mysqli("sumuthwebappdb1-server.mysql.database.azure.com", "sumuth", "iis6!dfu", "mysql");
 
if ($mysqli1->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}
else {
   echo "Connected.";
}
?>
