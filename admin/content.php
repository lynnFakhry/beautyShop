<!DOCTYPE HTML>
<html>
<head>
<link rel="icon"  type="image/x-icon" href="favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>News</title>
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


if(isset($_POST['submit'])) {
    $AddQuery = "INSERT INTO content (title, description) VALUES ('$_POST[title]','$_POST[description]')";
    mysqli_query($db,$AddQuery);
};

?>

<form name="content" method="post" action="content.php" onSubmit="return validation()">
<table width="500" border="0" cellspacing="3" cellpadding="3" style="margin:auto;">
  <tr>
    <td align="right" id="one">Subject :<span style="color:#F00;">*</span></td>
    <td><input type="text" name="title" id="title"></td>
  </tr>
  <tr>
    <td align="right" id="one"></td>
    <td><textarea name="description" id="description"></textarea></td>
  </tr>
  <tr>
  <td align="right" id="one"></td>
  <td><input type="submit" name="submit" id="submit" value="Submit Article"></td>
  </tr>
</table>
</form>
</body>
</html>
