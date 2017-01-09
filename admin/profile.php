<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="icon"  type="image/x-icon" href="favicon.png">
</head>
<body>

<?php
require '../common/connect-db.php';
require_once 'admin-template.php';
session_start();
if(!isset($_SESSION['login_user']))
  {
  header("Location: login.php");
  }
?>
<div id="content" style="font-size:30px;text-align:center;color:#CC0033;">
      <center><h1><a style="color:#CC0033">Title</a></h1></center>
      <a href="dayoff.php">Employee Day-Off</a><br/>
      <a href="closedays.php">Closed Days</a><br/>
      <a href="register.php">Register</a>
    </div>



</body>
</html>

