<?php
echo "testing connection the db <br/>";
 
$mysqli1 = new mysqli("krmittawebdbmysql-server.mysql.database.azure.com", "nwmsnopjfr.mysql.database.azure.com", "233845YOJ353H675$", "sys");
 
if ($mysqli1->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}
else {
   echo "Connected.";
}
?>
