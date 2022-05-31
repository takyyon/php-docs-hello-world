<?php
echo "<h2>Connecting....</h2><br/>";

$con = mysqli_connect("krmittawebdbmysql-server.mysql.database.azure.com","nwmsnopjfr","233845YOJ353H675$","mysql");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
