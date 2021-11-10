<?PHP
ob_start();
session_start();
$pageTitle = 'Request Logistic Services';
include "initinner.php";
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
  if(!isset($_SESSION['reset'])) {
 header('Location: forgetpassword.php');
  }
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
  if ($do == 'Manage') {
?>
<form class="login contactform" action="?do=Insert" method="Post">
 <h2>New Password</h2>
 <input  class="form-control input-lg" type="password" name="passwo" placeholder="New Password" autocomplete="off" value="" />
  <input  class="form-control input-lg" type="password" name="compasswo" placeholder="New Password" autocomplete="off" value="" />
 <input  class="btn btn-lg btn-primary btn-block" type="submit" value="Send" />
</form>

<?php 
  }
if($do == 'Insert') {
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$email = $_SESSION['reset'];
$passwording = $_POST['passwo'];
$compasswording = $_POST['compasswo'];
if($passwording == $compasswording){
  $stmt = $con->prepare("UPDATE users SET Password = ? WHERE Email = ?");
  $stmt->execute([$passwording,$email]);
  echo "<div class='container text-message'>";
$theMsg = 'Your Password Was Changed - Login Now';
redirectlogination($theMsg);
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


