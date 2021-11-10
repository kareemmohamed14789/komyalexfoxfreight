<?PHP
ob_start();
session_start();
$pageTitle = 'Request Logistic Services';
include "initinner.php";
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
  if ($do == 'Manage') {
   ?>
<form class="login contactform" action="?do=Insert" method="Post">
 <h2>Restore Password</h2>
 <input  class="form-control input-lg" type="email" name="Email" placeholder="Email" autocomplete="off" value="" />
 <input  class="btn btn-lg btn-primary btn-block" type="submit" value="Send" />
</form>

<?php 
  }
if($do == 'Insert') {
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$email = $_POST['Email'];
$acticode = rand(1,999999);
$title = "Restore Password message";
$message = '
Welcome '.$full.'
to Restore Your Account
Copy The Verification Code And Paste This in Verification Code Input Then Click On The Send Button
Verification Code ='.$acticode.'
';
mail($email,$title,$message);
  $stmt = $con->prepare("UPDATE users SET Activatecode = '$acticode' WHERE Email = '$email'");
  $stmt->execute(array($active_code));
  if($stmt)$_SESSION['active'] = $email; {
echo "<div class='container text-message'>";
$theMsg = 'Thank You For Sent Your Email <br> The Your Verification Code Was Sent To Your Email Now';
redirectRestore($theMsg);
 echo "<div>";
  }
}else
 {
echo "<div class='container text-message'>";
$theMsg = 'sorry you cant browse this page directly';
redirectForget($theMsg);
 echo "<div>";
 }
}

 include 'footinr.php';
include 'footerinner.php';
ob_end_flush();


