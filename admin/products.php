<!DOCTYPE html>
<html>
<head>
<title>View Products</title>
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

if(isset($_POST['edit_product'])) {
   if($_POST['categories'] != '') {
    $EditQuery = "UPDATE products SET id='$_POST[id]',
                                       name='$_POST[name]',
                                       duration='$_POST[duration]',
                                       categories='$_POST[categories]',
                                       price='$_POST[price]'
                                       
                                       
                                       WHERE id = '$_POST[hidden]'";

    mysqli_query($db,$EditQuery);
}
 
else {
 
  // else if category is empty, dont insert its value
 
 $EditQuery = "UPDATE products SET id='$_POST[id]',
                                       name='$_POST[name]',
                                       duration='$_POST[duration]',
                                       
                                       price='$_POST[price]'
                                       
                                       
                                       WHERE id = '$_POST[hidden]'";

 
    mysqli_query($db,$EditQuery);
 
 
 
 
}
 
};



//delete button

if(isset($_POST['delete_product'])) {

  


    $DeleteQuery = "DELETE FROM products WHERE id = '$_POST[hidden]'";

    mysqli_query($db,$DeleteQuery);


};

// add button

if(isset($_POST['add_product'])) {
   
    $AddQuery = "INSERT INTO products (id, name, duration,categories, price) 
    VALUES ('$_POST[add_id]','$_POST[add_name]','$_POST[add_duration]','$_POST[add_categories]' ,'$_POST[add_price]')";

    mysqli_query($db,$AddQuery);

};

// display records

$select_product = "SELECT * FROM products";
$result = $db->query($select_product);
?>

<div id="records-table">
<?php
     echo "<table><caption>Products Table</caption><tr>
     <th>ID</th>
     <th> Name</th>
     <th>Duration(min)</th>
     <th>Categories</th>
     <th>Price($)</th>
     </tr>";

     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<form action=products.php method=post>";
         echo "<tr>";
         echo "<td>" . "<input type=number name=id min=I(1) max=(100) required value=" . $row['id']. " </td>";
         echo "<td>" . "<input type=text name=name required value=" . $row['name']. " </td>";
         echo "<td>" . "<input type=text  name=duration required value=" . $row["duration"].  " </td>";

           


         echo "<td>" . "<select name=categories >
            <option value=>Please select a categories</option>
            <option value=Both>Both</option>
           <option value=Hair>Hair</option>
           <option value=Nails(hands)>Nails(hands)</option>
           <option value=Nails(feet)>Nails(feet)</option>
           <option value=Massage>Massage</option>
           <option value=Packages>Packages</option>
           </select> " . $row["categories"].  " </td>";
         echo "<td>" . "<input type=type=text  name=price required value=" . $row["price"].  " </td>";
         

         echo "<td>" . "<input type=hidden name=hidden  value=" . $row["id"].  " </td>";
         echo "<td>" . "<input type=submit name=edit_product value=Edit" . " </td>";
         echo "<td>" . "<input type=submit name=delete_product value='Delete Product' onclick='return confirmDelete()' "  . " </td>";
         echo "</tr>";




         echo "</form>";
     }


     // Add product form

     echo "<form action=products.php method=post>";
     echo "<tr>";
     echo "<td> <input type=number name=add_id min(1) max(100) required> </td>";
     echo "<td> <input type=text name=add_name required> </td>";
     echo "<td> <input type=duration name=add_duration required> </td>";
     

     echo "<td><select name=add_categories required>
            <option >Both</option>
           <option >Hair</option>
           <option >Nails(hands)</option>
           <option >Nails(feet)</option>
           <option >Massage</option>
           <option >Pachages</option>
           </select> </td>";
      echo "<td><input type=text name=add_price required></td>";
      

          echo "<td>" . "<input type=submit name=add_product value=Add" . " </td>";
          echo "</tr>";
          echo "</form>";
          echo "</table>";




$db->close();
?> 

</div>

<div id="add-product-notice">
  
 </div>
 <div id="add-employee-notice">
   Please note that you can't have two or more employees with the same ID, they will be rejected.
 </div>
</body>
</html>