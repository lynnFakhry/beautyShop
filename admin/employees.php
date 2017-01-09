<!DOCTYPE html>
<html>
<head>
<title>View Employees</title>
<link rel="icon"  type="image/x-icon" href="favicon.png">
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


//edit button

if(isset($_POST['edit_employee'])) {
   if($_POST['categories'] != '') {
    $EditQuery = "UPDATE employees SET fname='$_POST[fname]',
                                       lname='$_POST[lname]',
                                       email='$_POST[email]',
                                       phone='$_POST[phone]',
                                       categories='$_POST[categories]'
                                       WHERE email = '$_POST[hidden]'";

    mysqli_query($db,$EditQuery);
}
else {
 
  // else if category is empty, dont insert its value
 
 $EditQuery = "UPDATE employees SET  fname='$_POST[fname]',
                                     lname='$_POST[lname]',
                                      email='$_POST[email]',
                                      phone='$_POST[phone]'
                                     
                                     
                                      WHERE email = '$_POST[hidden]'";
 
    mysqli_query($db,$EditQuery);
 
 
 
 
}

};

//delete button

if(isset($_POST['delete_employee'])) {

  


    $DeleteQuery = "DELETE FROM employees WHERE email = '$_POST[hidden]'";

    mysqli_query($db,$DeleteQuery);


};

// add button

if(isset($_POST['add_employee'])) {
    $AddQuery = "INSERT INTO employees (fname, lname, email, phone, categories) 
    VALUES ('$_POST[add_fname]','$_POST[add_lname]','$_POST[add_email]','$_POST[add_phone]','$_POST[add_categories]')";

    mysqli_query($db,$AddQuery);


};

// display records

$select_employee = "SELECT * FROM employees";
$result = $db->query($select_employee);
?>

<div id="records-table">
<?php
     echo "<table><caption>Employees Table</caption><tr>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Email</th>
     <th>Phone</th>
     
     <th>Categories</th>
     </tr>";

     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<form action=employees.php method=post>";
         echo "<tr>";
         echo "<td>" . "<input type=text name=fname required value=" . $row['fname']. " </td>";
         echo "<td>" . "<input type=text name=lname required value=" . $row['lname']. " </td>";
         echo "<td>" . "<input type=email name=email required value=" . $row["email"].  " </td>";
         echo "<td>" . "<input type=text pattern=[0-9]{8} name=phone required value=" . $row["phone"].  " </td>";

           



          echo "<td>" . "<select name=categories >
          <option value=>Please select a categories</option>
           <option value=Both>Both</option>
           <option value=Hair>Hair</option>
           <option value=Nails(hands)>Nails(hands)</option>
           <option value=Nails(feet)>Nails(feet)</option>
           <option value=Massage>Massage</option>
           <option value=Packages>Packages</option>
           </select> " . $row["categories"].  " </td>";

         echo "<td>" . "<input type=hidden name=hidden  value=" . $row["email"].  " </td>";
         echo "<td>" . "<input type=submit name=edit_employee value=Edit" . " </td>";
         echo "<td>" . "<input type=submit name=delete_employee value='Delete Employee' onclick='return confirmDelete()' "  . " </td>";
         echo "</tr>";




         echo "</form>";
     }


     // Add employee form

     echo "<form action=employees.php method=post>";
     echo "<tr>";
     echo "<td> <input type=text name=add_fname required> </td>";
     echo "<td> <input type=text name=add_lname required> </td>";
     echo "<td> <input type=email name=add_email required> </td>";
     echo "<td><input type=text pattern=[0-9]{8} name=add_phone required></td>";


          echo "<td><select name=add_categories required>
           <option >Both</option>
           <option >Hair</option>
           <option >Nails(hands)</option>
           <option >Nails(feet)</option>
           <option >Massage</option>
           <option >Packages</option>
           </select> </td>";


          echo "<td>" . "<input type=submit name=add_employee value=Add" . " </td>";
          echo "</tr>";
          echo "</form>";
          echo "</table>";




$db->close();
?> 

</div>

<div id="add-employee-notice">
   Please note that you can't have two or more employees with the same Email, they will be rejected.
 </div>
</body>
</html>