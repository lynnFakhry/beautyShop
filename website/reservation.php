<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="SPA DE VIE Lebanon, beautifying and nurturing experts in massage, special packages, nails, tattoos, facials and plenty other services for a beauty inside out.">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    

<link rel="stylesheet" href="datepicker/lib/themes/default.css">
<link rel="stylesheet" href="datepicker/lib/themes/default.date.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link type="image/x-icon" href="favicon.png" rel="shortcut icon" />
    <script src="js/jquery10.js"></script>
    <script src="js/migrate.js"></script>
  <script src="js/jquery.easing.js"></script>
    <script src="js/modernizr.custom.57033.js"></script>
    <script src="js/main.js"></script>
     <script type="text/javascript">
 

 
   
</script>
 
    <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
    
<style type="text/css">
body {

box-sizing: border-box;
background-repeat: no-repeat;
width: 100%;
height: 100%;

padding: 3px;
background-image: url(images/reservation.jpg);
border: 1px solid black;
background-size: 100% 100%;
}
</style>
</head>
<body background="" background-repeat:"no-repeat"; background="images/reservation.jpg" ; >
 <section class="wrapper">
    
      <header>
        
            <div class="head">
                <div class="resp-nav">
                  
                </div>
              <div class="logo">
                  <a href="index.html"><img src="images/logo.gif" width="248" height="132" alt=" "> </a>
                </div>
                <nav>
                  <ul>
                      <li><a href="about.php" class="active">ABOUT</a></li>
                        <li><a href="index.php?massage">MASSAGE</a></li>
                        <li><a href="index.php?beautycare">BEAUTY CARE</a></li>
                        
                        <li><a href="index.php?packages">PACKAGES</a></li>
                        <li><a href="reservation.php">RESERVATION</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li>
                          <a href="https://www.facebook.com/marinahabchy" target="_blank"><span></span></a>
                          <a href="https://instagram.com/lynn.fakhry" target="_blank"><span class="insta"></span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </header>

<div id="container" >
<?php
ob_start();
require '../common/connect-db.php';

$select_counter = "SELECT counter FROM temp";
$result_counter = $db->query($select_counter);
$row = mysqli_fetch_array($result_counter);

$select_id = "SELECT id FROM temp";
$id_id= $db->query($select_id);
$row1 = mysqli_fetch_array($id_id);
?>


<fieldset style="background-color:#CC0033;height:170px;weight:20px;">
<div id="content" style="text-align:center;margin-top:30px;">
<?php

if ($row['counter']==0 || $row['counter']==1  )
 {$counter=1;
  $select_categories = "SELECT DISTINCT categories FROM products";
  $result_categories = $db->query($select_categories);
echo "<form action=reservation.php method=post>";
echo "<label>Pick a category:</label>";
echo"<div class=styled-select>";
echo"<select name=form1 id=form1 required>";
    echo "<option  value=>". "Please select..."."</option>";
    while ($row = mysqli_fetch_array($result_categories)) {
    echo  "<option value=".  $row['categories'] .  "> ". $row['categories'] . "</option>";
    }
  echo  "</select>";
echo"</div>";
  echo "<br>"."<input type=submit  name=add_categories value='next >>'  "." </br>";
 
 
  
}?>


<?php
echo "</form>";
if ($row['counter']==2 && $row1['id']==1 )
 { 
$select_categories = "SELECT categories FROM temp";
$result = $db->query($select_categories);
while($row = $result->fetch_assoc()) {
$rr =$row['categories']; 

}
$select_products = "SELECT DISTINCT name FROM products WHERE categories= '$rr'";
$result_products = $db->query($select_products);

echo "<form action=reservation.php method=post>";
echo "<label>Select a product:</label>";
echo"<div class=styled-select>";
echo "<select name=form2 id=form2 required>";
    echo "<option value=>". "Please select..."."</option>";
    while ($row = mysqli_fetch_array($result_products)) {
    echo "<option value=".  $row['name'] .  "> ". $row['name'] . "</option>";
    }
  echo "</select>";
  echo "</div>";
  echo "<br>"."<input type=submit  name=add_product value='next >>' />"." </br>";
}
echo "</form>";

?>

<?php
if ($row['counter']==3 && $row1['id']==1 )
 {
require '../common/pdo_connect.php';



try{
  $stmt = $db->query("SELECT date FROM disabledate");
  $db_ddates = $stmt->fetchAll(\PDO::FETCH_ASSOC);

  $js_ddates = "";
  foreach ($db_ddates as $row => $record) {
    $js_ddates .= '"' . $record['date'] . '",';
  }

}
catch(\PDOException $e) {
  echo $e->getMessage();
}
    



echo "<section class=section>";

    echo "<form action=reservation.php method=post>";
    
  

        
           
            echo "<label datepicker_id>Pick a date:</label>";
             
               echo  "<input id=datepicker_id class=datepicker
                     type=text 
                    required
                    name=date
                    data-value=''
                     />";
                    
                    echo "<br>"."<input type=submit name=add_date value='next >>' />"." </br>";

          
        echo"</form>";

 echo "</section>";


if(isset($_POST['add_date'])) {
$date=$_POST['date'];
    $EditQuery = "UPDATE temp SET   counter='4',
                                    date='$date'
                                     WHERE id = '1'";



    // Prepare statement
    $stmt = $db->prepare($EditQuery);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
  header('Refresh: 0.5;url=reservation.php');
    }






}

?>



<?php
if ($row['counter']==4 && $row1['id']==1 )
 { 
$select_pickdate = "SELECT date FROM temp";
$result_pickdate = $db->query($select_pickdate);
while($row = $result_pickdate->fetch_assoc()) {
$pickdate =$row['date']; 
}$dayoff_fname='string';
 $dayoff_lname='string';
 $date = $pickdate;
 $my_date = date('20y-m-d', strtotime($date));
//select all employees who have day off at the picked date
$select_dayoff = "SELECT * FROM dayoff where date='$my_date' ";
$result_dayoff = $db->query($select_dayoff);

while($row= $result_dayoff->fetch_assoc()) {
$dayoff_fname =$row['employeefname']; 
$dayoff_lname =$row['employeelname'];
$dayoff_date =$row['date'];

}


$select_categories = "SELECT categories FROM temp";
$result = $db->query($select_categories);
while($row = $result->fetch_assoc()) {
$rr =$row['categories']; 
}





$select_employee = "SELECT DISTINCT fname,lname FROM employees where (categories='$rr' and fname<>'$dayoff_fname' and lname<>'$dayoff_lname' )";
$result_employee = $db->query($select_employee);
echo "<form action=reservation.php method=post>";
echo "<label>Select a employee</label>";
echo"<div class=styled-select>";
echo "<select name=form4 id=form4 required>";
    echo "<option value=>". "Please select..."."</option>";
    while ($row = mysqli_fetch_array($result_employee)) {
    echo "<option value='". $row['fname']."-".$row['lname'] . "'>" . $row['fname'] ." ". $row['lname'] . "</option>";
    }
   echo "</select>";
   echo"</div>";
   echo "<br>";
  echo "<input type=submit  name=add_employee value='next >>' />";
}
echo "</form>";
?>

<?php
if ($row['counter']==5 && $row1['id']==1 )
 {
echo "<label>Pick a time:</label>";
echo "<form action=reservation.php method=post style>";
echo "<td> <input type=time name=time required> </td>";
echo"<br>";
 echo "<input type=submit  name=add_time value='next >>' />";
}
echo "</form>";
?>
<?php
if ($row['counter']==6 && $row1['id']==1 )
 {
echo "<label>Enter you name:</label>";
echo "<form action=reservation.php method=post >";
echo "<td> <input type=text name=clientname required> </td>";
echo"<br>";
 echo "<input type=submit  name=add_clientname value='next >>' />";
}
echo "</form>";
?>
<?php
if ($row['counter']==7 && $row1['id']==1 )
 {
echo "<label>Enter you number:</label>";
echo "<form action=reservation.php method=post >";
echo "<td> <input type=text pattern=[0-9]{8} name=clientphone required> </td>";
echo"<br>";
 echo "<input type=submit  name=add_clientphone value='next >>' />";
}
echo "</form>";
?>

<?php
if ($row['counter']==8 && $row1['id']==1 )
 {

echo "<form action=reservation.php method=post>";

echo"<br>";
 echo "<input type=submit  name=finish value='finish !!'/>";
}
echo "</form>";

?>
<?php
if ($row['counter']==9 && $row1['id']==1 )
 {

echo "<form action=reservation.php method=post>";

echo"<br>";
 echo "<input id=new type=submit  name=new value='new appoitment'  />";
}
echo "</form>";

?>



<?php
if(isset($_POST['add_categories'])) {
    $cat_var=$_POST['form1'];
    list($cat_value) = explode('-', "$cat_var");
    $counter=2;
    $id=1;
    $AddQuery = "INSERT INTO temp (counter,categories,id) VALUES ('$counter','$cat_value','$id')";// query should be like this 
    mysqli_query($db,$AddQuery);

header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;
}
?>
<?php
if(isset($_POST['finish'])) {
  $select_temp = "SELECT * FROM temp where id='1'";
$result_temp = $db->query($select_temp);
while($row = $result_temp->fetch_assoc()) {
$products=$row['products']; 
$starttime=$row['starttime'];
$date=$row['date'];
$endtime=$row['endtime'];
$clientname=$row['clientname'];
$clientphone=$row['clientphone'];
$employeename=$row['employeename'];
} 
 $AddQuery = "INSERT INTO test2 (employeename,date,products,starttime,endtime,clientname,clientphone) VALUES ('$employeename','$date','$products','$starttime','$endtime','$clientname','$clientphone')";
 mysqli_query($db,$AddQuery);
   $EditQuery = "UPDATE temp SET   counter='9'
                                   
                                    WHERE id = '1'";
    
    mysqli_query($db,$EditQuery);
    header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;




}
?>
<?php
echo"<form action=reservation.php method=post>";
echo"<br>";

echo"<input type=submit   name=goback value='<< back'/>";
echo"</form>";
?>
</div>
</fieldset>


</body>
</html>





 <script src="datepicker/tests/jquery.1.9.1.js"></script>
    <script src="datepicker/lib/picker.js"></script>
    <script src="datepicker/lib/picker.date.js"></script>
    <script src="datepicker/lib/legacy.js"></script>



    <script type="text/javascript">
    //datepicker
    // take dates as array of strings from db
var ddates_str_arr = [ <?php echo $js_ddates; ?> ];
// build dates array for picker
var disdates = [];
for (var i = 0; i < ddates_str_arr.length; i++) {
  disdates.push(new Date(ddates_str_arr[i]));
}
    
var $input = $( '.datepicker' ).pickadate({
  formatSubmit: 'yyyy/mm/dd',
  min: true,
  container: '#container',
  // editable: true,
  closeOnSelect: true,
  closeOnClear: false,
  disable: disdates
});

        var picker = $input.pickadate('picker')

        // picker.set('select', '14 October, 2014')
        // picker.open()
        // $('button').on('click', function() {
        //     picker.set('disable', true);
        // });
    </script>


<?php
if(isset($_POST['add_product'])) {
    $products=$_POST['form2'];
    list($cat_value) = explode('-', "$products");
    $counter=3;
    $EditQuery = "UPDATE temp SET   counter='3',
                                    products='$cat_value'
                                    WHERE id = '1'";
                                    $select_temp = "SELECT categories FROM temp where id='1'";




    mysqli_query($db,$EditQuery);
    header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;

}




if(isset($_POST['add_employee'])) {
    $employee=$_POST['form4'];
    list($cat_value) = explode('-', "$employee");
    $counter=5;
    $EditQuery = "UPDATE temp SET   counter='5',
                                    employeename='$employee'
                                    WHERE id = '1'";
    mysqli_query($db,$EditQuery);
header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;
}



if(isset($_POST['add_time'])) {
$time=$_POST['time'];



$select_orders = "SELECT * FROM orders";
$result_orders = $db->query($select_orders);
while($row = $result_orders->fetch_assoc()) {
$orders_date=$row['date']; 
$starting_time=$row['start-time'];
$ending_time=$row['end-time'];
$employee_name=$row['employee-name'];
}

$select_temp = "SELECT * FROM temp";
$result_temp = $db->query($select_temp);
while($row = $result_temp->fetch_assoc()) {
$date=$row['date']; 
$employeename=$row['employeename'];
$products=$row['products'];
}


$select_duration = "SELECT duration FROM products where name='$products'";
$result_duration= $db->query($select_duration);
while($row = $result_duration->fetch_assoc()) {
$duration=$row['duration']; 
}

$test=$duration;
$endTime = strtotime("+ $test minutes", strtotime($time));
$endTime=date('H:i:s', $endTime);


    $counter=6;
    $EditQuery = "UPDATE temp SET   counter='6',
                                    starttime='$time',
                                    endtime='$endTime'
                                    WHERE id = '1'";
    mysqli_query($db,$EditQuery);
header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;
}

if(isset($_POST['add_clientname'])) {
$clientname=$_POST['clientname'];





    $counter=7;
    $EditQuery = "UPDATE temp SET   counter='7',
                                    clientname='$clientname'
                                    WHERE id = '1'";
    mysqli_query($db,$EditQuery);
header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;
}

if(isset($_POST['add_clientphone'])) {
$clientphone=$_POST['clientphone'];





    $counter=8;
    $EditQuery = "UPDATE temp SET   counter='8',
                                    clientphone='$clientphone'
                                    WHERE id = '1'";
    mysqli_query($db,$EditQuery);
header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;
}

if(isset($_POST['goback'])) {
 $select_counter = "SELECT counter FROM temp where id='1'";
$result_counter = $db->query($select_counter);
while($row = $result_counter->fetch_assoc()) {
$counter=$row['counter']; 
}
$counter--;
$EditQuery = "UPDATE temp SET   counter='$counter'
                                    
                                    WHERE id = '1'";
    mysqli_query($db,$EditQuery);
header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;
}

if(isset($_POST['new'])) {

$DeleteQuery = "DELETE FROM temp WHERE id = '1'";

    mysqli_query($db,$DeleteQuery);
header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
exit;
}


