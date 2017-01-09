<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="SPA DE VIE Lebanon, beautifying and nurturing experts in massage, special packages, nails, tattoos, facials and plenty other services for a beauty inside out.">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link type="image/x-icon" href="favicon.png" rel="shortcut icon" />
    <script src="js/jquery10.js"></script>
    <script src="js/migrate.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/modernizr.custom.57033.js"></script>
    <script src="js/main.js"></script>
    <title>SPA DE VIE Lebanon - Beauty Care - Massage</title>
    
</head>
        
<body>
<?php
require '../common/connect-db.php';
?>
    <section class="wrapper">
    
        <header>
        
            <div class="head">
                <div class="resp-nav">
                    <img src="images/menu.jpg" width="50" height="50" alt=" "> 
                </div>
                <div class="logo">
                    <a href="index.php"><img src="images/logo.gif" width="248" height="132" alt=" "> </a>
                </div>
                <nav>
                    <ul>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="index.php?massage">MASSAGE</a></li>
                        <li><a href="index.php?beautycare">BEAUTY CARE</a></li>
                        <li><a href="index.php?packages">PACKAGES</a></li>
                        <li><a href="reservation.php">RESERVATION</a></li>
                        <li><a href="contact.php" class="active">CONTACT</a></li>
                        <li>
                            <a href="https://www.facebook.com/marinahabchy" target="_blank"><span></span></a>
                            <a href="https://instagram.com/lynn.fakhry" target="_blank"><span class="insta"></span></a>
                        </li>
                     </ul>
                </nav>
            </div>
            
        </header>
        
        <div class="content content-contact">
        
            <div class="contact">
                <div class="contact-inner">
                
                    <div class="contact-left">
                        <h1>WE'D LOVE TO HEAR FROM YOU</h1>
                          <?php
$sql = "SELECT location FROM admin";
$result = $db->query($sql);

if ($result->num_rows > 0) {
     echo "<table>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo "<td>" . $row["location"]. "</td>";
         }
     echo "</table>";
} else {
     echo "0 results";
}
?>

                        <div class="contact-left-left">
                            <span class="email"></span><br/>
                            <span class="phone"></span><br/>
                            <span class="facebook"></span>
                            <span class="instaa"><img src="images/insta.png" width="17" height="17" alt=" "></span>
                            <span class="map"></span>
                        </div>
                        <div class="contact-left-right">
                              <?php
$sql = "SELECT email FROM admin";
$result = $db->query($sql);

if ($result->num_rows > 0) {
     echo "<table>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>";
         
         echo "<td>" . $row["email"]. "</td>";
         
         echo "</tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>
<span style="margin-top:-5px;margin-bottom:35px;"></span>
                            
                              <?php
$sql = "SELECT telephon_num,mobile_num FROM admin";
$result = $db->query($sql);

if ($result->num_rows > 0) {
     echo "<table>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>";
         echo "<td>" . $row["mobile_num"]. "</td>";
         echo "<tr>" . $row["telephon_num"]. "</tr>";
         
         echo "</tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>

                            <span style="margin-top:-5px;margin-bottom:25px;"></span>
                            <span><a href="https://www.facebook.com/marinahabchy" target="_blank">Spa de vie</a></span>
                            <span><a href="https://instagram.com/lynn.fakhry" target="_blank">Spa de vie</a></span>
                            <span><a href="https://www.google.com.lb/maps/place/Sahel+Aalma/@33.9916844,35.6427231,15z/data=!4m2!3m1!1s0x151f40d36cea44b1:0x1d1f4c5c82c1c8c2?hl=en" target="_blank">VIEW MAP</a></span>
                        </div>
                       
                        <p> <b>Opening Hours</b><br/>
                            Monday till Sunday<br/>
                            From <b>10:00 AM</b> to <b>12:00 AM</b><br/><br/>
                             
                           
                            
                            
                        </p>
                    </div>





<!-- Do not change the code! -->
<a id="foxyform_embed_link_730760" href="http://www.foxyform.com/"></a>
<script type="text/javascript">
(function(d, t){
   var g = d.createElement(t),
       s = d.getElementsByTagName(t)[0];
   g.src = "http://www.foxyform.com/js.php?id=730760&sec_hash=d148a173bb3&width=350px";
   s.parentNode.insertBefore(g, s);
}(document, "script"));
</script>
<!-- Do not change the code! -->
    
</body>
</html>
