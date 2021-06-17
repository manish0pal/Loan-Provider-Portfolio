<?php
$hostname = "sql202.epizy.com";
//Define your database username here.
$username = "epiz_28460548";
//Define your database password here.
$password = "v4LaQR9A7VKbfFD";
//Define your database name here.
$dbname = "epiz_28460548_fintech";
$conn = mysqli_connect($hostname, $username, $password,$dbname) or die(mysqli_error('error'));
  
?>