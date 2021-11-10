<?php
ob_start();
session_start();
$pageTitle = 'active';
include 'function.php';
include 'headerinner.php';
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
$active_code = isset($_GET['Activatecode']) && is_numeric($_GET['Activatecode']) ? intval($_GET['Activatecode']) : 0;
       $stmt = $con->prepare("SELECT * FROM users WHERE Activatecode = ?");
       $stmt->execute(array($active_code));
       $count = $stmt->rowCount();        
if ($stmt->rowCount() > 0) {
  $stmt = $con->prepare("UPDATE users SET Activate = 1 WHERE Activatecode = ?");
  $stmt->execute(array($active_code));
 echo "<div class='container text-message'>";
$theMsg = 'Your Account Is Activation - Log In Now';
redirectsuccess($theMsg);
 echo "<div>";  
}else{
 echo "bad";
}
ob_end_flush();