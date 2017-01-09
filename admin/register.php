<!DOCTYPE html>
<html>
  <head>
    <title>Register Account</title>
    <link rel="icon"  type="image/x-icon" href="favicon.png">
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




//delete button

if(isset($_POST['delete_dayOff'])) {

   $DeleteQuery = "DELETE FROM dayoff WHERE id = '$_POST[hidden]'";

    mysqli_query($db,$DeleteQuery);


};

?>
   <div id="content" style="text-align:right;color:#CC0033;">
<a href="profile.php">GO BACK</a>
</div>
   <div id="content" style="font-size:30px;text-align:center;color:#CC0033;">

      <h2>Register</h2>
      <form action="register.php" method="POST">
        <label>
          <input name="username" placeholder="Username" />
        </label>
        <label>
          <input name="email" placeholder="E-Mail" />
        </label>
        <label>
          <input name="pass" type="password" placeholder="Password" />
        </label>
        <label>
          <input name="retyped_password" type="password" placeholder="Retype Password" />
        </label>
        <label>
          <input name="name" placeholder="Name" />
        </label>
        <label>
          <button name="submit">Register</button>
        </label>
      </form>
      <?php
       function validEmail($email = ""){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }
 
      if( isset($_POST['submit']) ){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $retyped_password = $_POST['retyped_password'];
        $name = $_POST['name'];
 
        $select_user = "SELECT username FROM user
       WHERE username = '".$username."'";
        $result = $db->query($select_user);
 
 
        if( $username == "" || $email == "" || $password == '' || $retyped_password == '' || $name == '' ){
            echo "<h2>Fields Left Blank</h2>", "<p>Some Fields were left blank. Please fill up all fields.</p>";
        }elseif( !validEmail($email) ){
            echo "<h2>E-Mail Is Not Valid</h2>", "<p>The E-Mail you gave is not valid</p>";
        }elseif( !ctype_alnum($username) ){
            echo "<h2>Invalid Username</h2>", "<p>The Username is not valid. Only ALPHANUMERIC characters are allowed and shouldn't exceed 10 characters.</p>";
        }elseif($password != $retyped_password){
            echo "<h2>Passwords Don't Match</h2>", "<p>The Passwords you entered didn't match</p>";
 
 
 
 
        }elseif(mysqli_num_rows($result)>=1)
 
        {
 
          echo "Your username ";
          echo $username;
          echo " aready exists, please select another one";
        }else {
 
          echo "Congratulations! We created an account for you";
 
          $AddQuery = "INSERT INTO user(username, password,retyped_password,email,name)
   VALUES ('$username','$retyped_password','$retyped_password','$email','$name')";
       
 
        mysqli_query($db,$AddQuery);
 
}
}
      ?>
      <style>
        label{
          display: block;
          margin-bottom: 5px;
        }
      </style>
    </div>
    <!-- https://subinsb.com/php-logsys -->
  </body>
</html>