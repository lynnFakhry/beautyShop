<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="icon"  type="image/x-icon" href="favicon.png">
 
<script type='text/javascript'>
function confirmDelete()
{
   return confirm("Are you sure you want to delete this?");
}
</script>
 
 
 <script type="text/javascript">
 
    function disable() {
        x=document.getElementsByClassName("edit")[0];
        x.disabled=true;
    setTimeout(enable, 50000);
}
 
    function enable() {
       x.disabled=false;
 
    }
</script>
 
</head>
<body bgcolor="#00FF66">
 
<?php
require '../common/connect-db.php';
require_once 'admin-template.php';
 
 session_start();
if(!isset($_SESSION['login_user']))
  {
  header("Location: login.php");
  }
// disabling edit button every 30 days
$date = date('Y-m-d');
$select_disable_button = "SELECT disable_buttons FROM disablebutton";
$result_disable_button = $db->query($select_disable_button);
$row = mysqli_fetch_array($result_disable_button);
$disabled_date = $row['disable_buttons'];
echo $date;
 
 
//delete button
 
if(isset($_POST['delete_dayOff'])) {
 $DeleteQuery = "DELETE FROM dayoff WHERE id = '" . (int) $_POST['hidden'] . "'" ;
 
 
    mysqli_query($db,$DeleteQuery);
 
 
};
 
// display records
 
$select_employee = "SELECT * FROM dayoff";
$result = $db->query($select_employee);
 
 
?>
<div id="content" style="text-align:right;color:#CC0033;">
<a href="profile.php">GO BACK</a>
</div>
<table>
<div id="Day-off Employees">
<?php
     echo "<table><tr>
    <th>Employee First Name</th>
    <th>Employee Last Name</th>
    <th>Day-Off</th>
   
    </tr>";
 
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<form action=dayoff.php method=post>";
         echo "<tr>";
 
         echo "<td>" . $row["employeefname"]. "</td>";
         echo "<td>" . $row["employeelname"]. "</td>";
         echo "<td>" . $row["date"]. "</td>";
         
 
echo "<td>" . "<input type=hidden name=hidden  value=" . $row["id"].  " </td>";
echo "<td>" . "<input  type=submit   name=delete_dayOff value=delete  >" . " </td>";
echo "</tr>";
echo "</form>";
}
 
 
 
echo "</table>";
 
 
?>
 
 
 
<form id="form1" name="form1" method="post" action="dayoff.php">
    <?php
    // add button
    if(isset($_POST['add_dayoff'])) {
    $fname=$_POST['select1'];
    list($employeefname, $employeelname) = explode('-', "$fname");
    $datef=$_POST['date'];
    $AddQuery = "INSERT INTO dayoff (employeefname,employeelname,date) VALUES ('$employeefname','$employeelname','$datef')";// query should be like this
    mysqli_query($db,$AddQuery);
header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;
   
    };
    ?>
 
 
    <?php
    $query="SELECT DISTINCT fname, lname FROM employees";
    $result2 = $db->query($query);
    ?>
 
    <table>
 
    <tr>
    <td><select name="select1" id="select1" >
 
 
    <?php
    echo '<option value="">Please select...</option>';
    while ($row = mysqli_fetch_array($result2)) {
    echo "<option value='". $row['fname']."-".$row['lname'] . "'>" . $row['fname'] ." ". $row['lname'] . "</option>";
    }
    ?>
    <td><input type="date"  name="date"  /></td>
    </select></td>
    <?php

         if ($date< $disabled_date) {

           echo "<td>" . "<input type=submit name=add_dayoff class=edit_employee value='Add' disabled" . " </td>";

}

elseif ($date == $disabled_date) {
     
     echo "<td>" . "<input type=submit name=add_dayoff class=edit_employee value='Add'" . " </td>";
}
elseif ($date > $disabled_date)// if today > date in db, add a month to the date in db and disable button

{
     echo "<td>" . "<input type=submit name=add_dayoff class=edit_employee value='Add' disabled" . " </td>";
    $newDate = date('Y-m-d', strtotime($date. " + 1 month"));
    $updatedate = "UPDATE disablebutton SET disable_buttons='$newDate'";
    mysqli_query($db,$updatedate);
}

  echo "</tr>";
    echo"</table>";
echo"</form>";

    
?>
 
</div>
 <?php


 if ($date< $disabled_date) {

           echo " Editing is allowed on";
           echo " ";
           echo $disabled_date;

}



$db->close();
?>

</div>
</html