<?php

include './library.php';

$sql = 'select * from persyaratan';
$query = mysql_query($sql);
$row = mysql_fetch_assoc($query);
echo "<pre>";
print_r($row);
echo "</pre>";


