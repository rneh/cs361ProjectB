<?php

$dbhost = 'oniddb.cws.oregonstate.edu';
$dbname = 'pattejon-db';
$dbuser = 'pattejon-db';
$dbpass = 'NEPgxdC5DpW28WGl';

$mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
    or die("Error connecting to database server");

mysql_select_db($dbname, $mysql_handle)
    or die("Error selecting database: $dbname");

echo 'Successfully connected to database!';

mysql_close($mysql_handle);


phpinfo();
?>
