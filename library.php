<?php

$username       ="localhost";
$root           ="root";
$pass           ="";
$database       ="desa";

$konek=mysql_connect($username,$root,$pass) or die ("Oops! Server not connected"); // Connect to the host
mysql_select_db($database,$konek) or die ("Oops! DB not connected"); // select the database


?>