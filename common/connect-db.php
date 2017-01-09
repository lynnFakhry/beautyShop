
<?php

$DBServer = 'localhost';
$DBUser ='lynnfakhry';
$DBPass = 'lynnfakhry';
$DBName = 'beautyshopphp';

$db = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
 
// check connection
if ($db->connect_error) {
  trigger_error('Database connection failed: '  . $db->connect_error, E_USER_ERROR);
}


?>