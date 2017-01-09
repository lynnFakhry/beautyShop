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
 ?>
 <div id="content" style="text-align:right;color:#CC0033;">
<a href="profile.php">GO BACK</a>
</div>
 <?php
 // disabling edit button every 30 days
$date = date('Y-m-d');
$select_disable_button = "SELECT disable_buttons FROM disablebutton";
$result_disable_button = $db->query($select_disable_button);
$row = mysqli_fetch_array($result_disable_button);
$disabled_date = $row['disable_buttons'];
echo $date;

//delete button
if(isset($_POST['delete_closeDay'])) {
   
   $DeleteQuery = "DELETE FROM disabledate WHERE id = '" . (int) $_POST['hidden'] . "'" ;

    mysqli_query($db,$DeleteQuery);


};

// add button

if(isset($_POST['add_closeDay'])) {
    $AddQuery = "INSERT INTO disabledate (date) 
    VALUES ('$_POST[date]')";

    mysqli_query($db,$AddQuery);


};
// display records

$select_employee = "SELECT * FROM disabledate";
$result = $db->query($select_employee);
?>

<div id="records-table">
<?php
     echo "<table ><tr>
     <th>Date</th>
    
   
 
     </tr>";

     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<form action=closedays.php method=post>";
         echo "<tr>";
         echo "<td>" . $row['date']. " </td>";
         

         echo "<td>" . "<input type=hidden name=hidden  value=" . $row["id"].  " </td>";
         echo "<td>" . "<input type=submit name=delete_closeDay value='Delete ' onclick='return confirmDelete()' "  . " </td>";
         echo "</tr>";
         echo"</form>";
       }
    
     echo "<tr>";
     echo "<td> <input type=date name=date > </td>";
       if ($date< $disabled_date) {

           echo "<td>" . "<input type=submit name=add_closeDay class=edit_employee value='add' disabled" . " </td>";

}

elseif ($date == $disabled_date) {
     
     echo "<td>" . "<input type=submit name=add_closeDay class=edit_employee value='add'" . " </td>";
}
elseif ($date > $disabled_date)// if today > date in db, add a month to the date in db and disable button

{
     echo "<td>" . "<input type=submit name=add_closeDay class=edit_employee value='add' disabled" . " </td>";
    $newDate = date('Y-m-d', strtotime($date. " +1 month"));
    $updatedate = "UPDATE disablebutton SET disable_buttons='$newDate'";
    mysqli_query($db,$updatedate);
}

          
          echo "</tr>";
          echo "</form>";
         




     echo "</table>";
?> 

 <?php


 if ($date< $disabled_date) {

           echo " Editing is allowed on";
           echo " ";
           echo $disabled_date;

}



$db->close();
?>

</div>


</div>
</body>
</html>