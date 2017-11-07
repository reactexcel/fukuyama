<?php
ob_start();
$username = "fukuyama";
$password = "fukuyama";
$nonsense = "yb4we5ywe4byue56une567byw4545v45t4";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>

<?php 
$site_name = "Fukuyama Transporting";
$page_title = "Submit News";
$page_description = "";
$key_words = "";
$author = "J-Cast";
?>
<?php include("includes/header.php"); ?>
<?php include("includes/topnav.php"); ?>


<!-- BODY --> 

<div class="container mt-40" >
   <div class="row no-gutters">
      <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 mt-50" >
         <div class="cognito">
            <script src="https://services.cognitoforms.com/s/j38VvttKjE-zDbkFzoWaUQ"></script>
            <script>Cognito.load("forms", { id: "3" });</script>
         </div><br>
         <p>Please note that we cannot guarantee placement on all requested areas, but we will review this information carefully. If you do not hear back within 5 working days or have any specific needs to be addressed, please contact Janica Southwick, Chief Advisor to the President's Office, Global Website Project Manager: jsouthwick@fukutsu.co.jp</p>
      </div>
   </div>
</div>
<?php
   exit;
   } else {
   echo "Bad Cookie.";
   exit;
   }
   }
   
   if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['user'] != $username) {
   echo "Sorry, that username does not match.";
   exit;
   } else if ($_POST['keypass'] != $password) {
   echo "Sorry, that password does not match.";
   exit;
   } else if ($_POST['user'] == $username && $_POST['keypass'] == $password) {
   setcookie('PrivatePageLogin', md5($_POST['keypass'].$nonsense));
   header("Location: $_SERVER[PHP_SELF]");
   } else {
   echo "Sorry, you could not be logged in at this time.";
   }
   }
   ?>
<div class="container">
   <div class="row mt-100">
      <div class="col-xs-4 col-xs-offset-4">
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
            <label><input type="text" name="user" id="user" /> Name</label><br />
            <label><input type="password" name="keypass" id="keypass" /> Password</label><br />
            <input type="submit" id="submit" value="Login" />
         </form>
      </div>
   </div>
</div>

