<!DOCTYPE html>
<html>
<head>
<title>View Orders</title>
<link rel="icon"  type="image/x-icon" href="favicon.png">
</script>
<script type='text/javascript'>
function confirmDelete()
{
   return confirm("Are you sure you want to delete this?");
}
</script>

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


//delete button

if(isset($_POST['delete_reservation'])) {

   $DeleteQuery = "DELETE FROM test2 WHERE id = '$_POST[hidden]'";

    mysqli_query($db,$DeleteQuery);


};


// display records

$select_employee = "SELECT distinct * FROM test2";
$result = $db->query($select_employee);
?>

<div id="records-table">
<?php
     echo "<table><caption>Orders</caption><tr>
     <th>Date</th>
     <th>Starting Time</th>
     <th>End Time</th>
     <th>Product-Name</th>
     <th>Employee-Name</th>
     <th>Client-Name</th>
     <th>Client-Phone</th>
     
     </tr>";

     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<form action=orders.php method=post>";
         echo "<tr>";
         echo"<td>" . $row["date"]. "</td>";
         echo"<td>" . $row["starttime"]. "</td>";
         echo"<td>" . $row["endtime"]. "</td>";
         echo" <td>" . $row["products"]. "</td>";
         echo"<td>" . $row["employeename"]. "</td>";
         echo" <td>" . $row["clientname"]. "</td>";
         echo"<td>" . $row["clientphone"]. "</td>";
         
         echo "<td>" . "<input type=hidden name=hidden  value=" . $row["id"].  " </td>";
        
         echo "<td>" . "<input type=submit name=delete_reservation value='Delete ' onclick='return confirmDelete()' "  . " </td>";
         echo "</tr>";
       
    
     
          echo "</form>";
       }  




     echo "</table>";




?> 

</div>

</body>
</html>
