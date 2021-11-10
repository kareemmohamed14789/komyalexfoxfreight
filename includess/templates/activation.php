<?PHP
ob_start();
session_start();
$pageTitle = 'Request Logistic Services';
include "initinner.php";
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
  if(!isset($_SESSION['active'])) {
 header('Location: forgetpassword.php');
  }
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
  if ($do == 'Manage') {
?>
<form class="login contactform" action="?do=Insert" method="Post">
 <h2>Verification Code</h2>
 <input  class="form-control input-lg" type="text" name="code" placeholder="Verification Code" autocomplete="off" value="" />
 <input  class="btn btn-lg btn-primary btn-block" type="submit" value="Send" />
</form>

<?php 
  }
if($do == 'Insert') {
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$coding = $_POST['code'];

$stmt = $con->prepare("SELECT * FROM users WHERE Email = ?");
$stmt->execute([$_SESSION['active']]);
$codex = $stmt->fetch();
if($coding == $codex['Activatecode']){
 $_SESSION['reset'] = $_SESSION['active'];
echo "<div class='container text-message'>";
$theMsg = 'The Verification Code Is Right';
redirectVerifi($theMsg);
 echo "<div>";
}else
 {
echo "<div class='container text-message'>";
$theMsg = 'Sorry The Verification Code Is Wrong';
redirectForget($theMsg);
 echo "<div>";
 }

}
}

 include 'footinr.php';
include 'footerinner.php';
ob_end_flush();


