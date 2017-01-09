<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="SPA DE VIE Lebanon, beautifying and nurturing experts in massage, special packages, nails, tattoos, facials and plenty other services for a beauty inside out.">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link type="image/x-icon" href="favicon.png" rel="shortcut icon" />
    <script src="js/jquery10.js"></script>
    <script src="js/migrate.js"></script>
  <script src="js/jquery.easing.js"></script>
    <script src="js/modernizr.custom.57033.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>

    
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-55324080-1', 'auto');
    ga('send', 'pageview');

  </script>
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
                        <li id="massage"><a href="index.php#">MASSAGE</a></li>
                        <li id="beauti"><a href="index.php#">BEAUTY CARE</a></li>
                        <li id="pack"><a href="index.php#">PACKAGES</a></li>
                        <li><a href="reservation.php">RESERVATION</a></li>
                        <li><a href="contact.php" class="active">CONTACT</a></li>
                        <li>
                          <a  href="https://www.facebook.com/marinahabchy" target="_blank"><span></span></a>
                            <a  href="https://instagram.com/lynn.fakhry" target="_blank"><span class="insta"></span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        </header>
      
        <div class="content">
        
          <div class="allslides">
            
                <div class="slides slide1">
                    <div>
                        <h1>BEAUTY CARE</h1>
                        <h2>“WE APPROACH OUR ESTHETICS WITH EXTRA CARE AND HYGIENE”</h2>
                    </div>
                </div>
                
                <div class="slides slide2">
                    <div>
                        <h1>MASSAGE</h1>
                        <h2>“WE APPROACH OUR ASIATIC MASSAGE WITH OIL &amp; NON OIL TECHNIQUES”</h2>
                    </div>
                </div>
                
                <div class="slides slide3">
                    <div>
                        <h1>PACKAGES</h1>
                        <h2>“WE CUSTOMIZE OUR PACKAGES TO FIT ALL YOUR NEEDS”</h2>
                    </div>
                </div>
                
            </div>
            
            <div class="allinfo" id="beautifi">
                  <a class="xbtn"></a>
              <div class="beauti-inner">
                    <h1>BEAUTY CARE</h1>
                    <h2>“WE APPROACH OUR ESTHETICS WITH EXTRA CARE AND HYGIENE”</h2>
                    
                  <div class="beauti-info beautycare-info">
                      <span class="beautybg"></span>
                      <div class="beauti-left">
                              <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:12px;">NAME</span>
                                <?php
$sql = "SELECT name FROM products
WHERE categories=('Nails(hands)'or'Nails(feet)'or'Both')";
$result = $db->query($sql);

if ($result->num_rows > 0) {
     echo "<table>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>";
         
         echo "<td>" . $row["name"]. "</td>";
         
         echo "</tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>

                        </div>
                        
                        <div class="beauti-right">
                              <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:12px;">PRICE</span>
                                                                <?php
$sql = "SELECT price FROM products
WHERE categories=('Nails(hands)'or'Nails(feet)'or'Both')";
$result = $db->query($sql);

if ($result->num_rows > 0) {
     echo "<table>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>";
         
         echo "<td>" . $row["price"]. "</td>";
         
         echo "</tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>


                        </div>
                        
                    </div>
                  <img src="images/download.jpg" width="237" height="135" alt=" "> 
                    
                 </div>
                 <span class="price-pos" style="bottom:30px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:12px;">PAY IN ADVANCE 6 SERVICES AND GET 1 FREE</span>
                 <span class="price-pos">ALL PRICES ARE IN $</span>
            </div>


            <div class="allinfo" id="packages">
                <a class="xbtn"></a>
              <div class="beauti-inner">
                    <h1>PACKAGES</h1>
                    <h2>“WE CUSTOMIZE OUR PACKAGES TO FIT ALL YOUR NEEDS”</h2>
                    <div class="packages-wrapper beautycare-info">
                    
                        <div class="packages-div">
                            <h1>Solarium Package 1  </h1>
                            <p> - 60 minutes -<br/>
                                <b>Price 75 000</b>
                            </p>
                        </div>
                        
                        <div class="packages-div">
                            <h1>Solarium Package 2</h1>
                            <p> - 130 minutes -<br/>
                                <b>Price 150 000</b>
                            </p>
                        </div>
                        
                        <div class="packages-div">
                            <h1>SPOIL HER 1</h1>
                            <p> - Swedish massage 50 minutes -<br/>
                                - Mani &amp; Pedi -<br/>
                                - Solarium 10 minutes -<br/>
                                <b>Price 90 000</b>
                            </p>
                        </div>
                        
                       <div class="packages-div">
                            <h1>SPOIL HER 2</h1>
                            <p> - Facial / Preparation + Anti-Age -<br/>
                             - Spa De Vie Special Pedicure - <br/>
                             - Spa De Vie Special Manicure - <br/>
                             - Swedish & Thai Massage 90 minutes - <br/>
                                <b>Price 245 000</b>
                            </p>
                        </div>
                        
                        <div class="packages-div">
                            <h1>BUSINESS MAN ESCAPE 1</h1>
                            <p> - Reflexology 30 minutes -<br/>
                                - Pedicure -<br/>
                                - Facial / Preparation + Anti-Age -<br/>
                                <b>Price 120 000</b>
                            </p>
                        </div>
                        
                        <div class="packages-div">
                            <h1>BUSINESS MAN ESCAPE 2</h1>
                            <p> - Spa De Vie Special Massage 90 minutes -<br/>
                                - Facial / Preparation + Anti-Age  -<br/>
                                - Spa De Vie Pedicure -<br/>
                                <b>Price 310 000</b>
                            </p>
                        </div>
                        
                        <div class="packages-div">
                            <h1>FOR HIM AND HER 1 (COUPLES)</h1>
                            <p> - Couples Massage (Swedish) 60 minutes -<br/>
                                - Mani &amp; Pedi -<br/>
                                - Facial / Preparation + Anti-Age -<br/>
                                <b>Price 380 000</b>
                            </p>
                        </div>
                        
                        <div class="packages-div">
                            <h1>FOR HIM AND HER 2 (COUPLES)</h1>
                            <p> - Couples Massage (Spa De Vie Special) 120 minutes -<br/>
                                - Spa De Vie Mani &amp; Pedi -<br/>
                                - Facial / Preparation + Anti-Age + Whitening -<br/>
                                <b>Price 650 000</b>
                            </p>
                        </div>
                        
                        <div class="packages-div">
                            <h1>SWEET SIXTEEN 1</h1>
                            <p> - Polish N Go (Hands and Toes) -<br/>
                                - Eyebrow &amp; Upper Lip -<br/>
                                - Solarium 10 minutes -<br/>
                                <b>Price 35 000</b>
                            </p>
                        </div>
                        
                        <div class="packages-div">
                            <h1>SWEET SIXTEEN 2</h1>
                            <p> - Mani &amp; Pedi -<br/>
                              - Full Body Waxing -<br/>
                                - Eyebrow &amp; Upper Lip -<br/>
                                <b>Price 80 000</b>
                            </p>
                        </div>
                    
                   </div>
                  <span class="price-pos" style="bottom:30px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:11px;text-transform:uppercase;float:left;margin-top:52px;position:relative;margin-left:17px;">Pay 6 packages in advance and get 1 for free</span>
                </div>
                <div class="gift-vouch">
                  <h1 class="gift">GIFT VOUCHER</h1>
                    <p>
                    A smart way to treat your friend or beloved.
You can buy a gift voucher at the same prices mentioned above.<br/>
We accept all major credit cards.
          </p>
                  <img src="images/cards.png" width="119" height="23" alt=" ">
                </div>
            </div>
            
            
            <div class="allinfo" id="massa">
            
                <a class="xbtn"></a>
              <div class="beauti-inner">
                    <h1>MASSAGE</h1>
                    <h2>“WE APPROACH OUR ASIATIC MASSAGE WITH OIL &amp; NON OIL TECHNIQUES”</h2>
                    
                    <div class="beauti-info beautycare-info">
                        <span class="beautybg"></span>
                      <div class="massa-type">
                        
                          <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:12px;">TYPE</span>
                                                            <?php
$sql = "SELECT name FROM products
WHERE categories='Massage'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
     echo "<table>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>";
         
         echo "<td>" . $row["name"]. "</td>";
         
         echo "</tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>
                            
                            
                        </div>

                        
                        <div class="massa-price">
                        
<span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:12px; padding-left:15px ">PRICE</span>

                            <div id="msg-padding" style="margin-left:40px"> 
           

           <?php
$sql = "SELECT price FROM products
WHERE categories='Massage'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
     echo "<table>";
     // output data of each row
     while($row = $result->fetch_assoc()) {


         echo "<tr>";

         
         echo "<td>"  . $row["price"]. "</td>";
         
         echo "</tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>
</div>
                        

                        </div>
 <div class="massa-time">
                        
                            <span style="font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:12px;padding-left:15px">DURATION(min)</span>

                            <div id="msg--dur-padding" style="margin-left:75px"> 
                                                           <?php
$sql = "SELECT duration FROM products
WHERE categories='Massage'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
     echo "<table>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>";
         
         echo "<td>" . $row["duration"]. "</td>";
         echo "</td>";
         echo "<td>";

         
         echo "</tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>
    </div>                        
                        </div>
    

                        
                     </div>
                       <img src="images/download1.jpg" width="237" height="135" alt=" ">                  
                </div>
                <span class="price-pos" style="bottom:30px;font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:11px;text-transform:uppercase;">All couples massage include private Jacuzzi</span>

                <span class="price-pos">ALL PRICES ARE IN $</span>
            </div>
            
        </div>
    
    </section>
    

 <script>
    if(w>1000)
     {
      $(".beautycare-info").mCustomScrollbar();
     }
     else
     {
      $(".beautycare-info").css({"overflow":"auto"});  
     }
     
 </script> 
 
  
</body>
</html>
