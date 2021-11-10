<?PHP
ob_start();
session_start();
$pageTitle = 'Request Logistic Services';
include "initinner.php";
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
$do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
if($do == 'Insert') {
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
$full = $_POST['FullName'];
$usern = $_POST['Link'];
$email = $_POST['Image'];
$pass =  $_POST['Title'];
$desc =  $_POST['Description'];

  
   $stmt = $con->prepare("INSERT INTO search(FullName, Link, Image, Title, Description)
                       VALUES(:zfulln, :zusern, :zemail, :zpass, :zdescp) ");
 $stmt->execute(array(
  ':zfulln' => $full,
  ':zusern' => $usern,
  ':zemail' => $email,
  ':zpass' => $pass,
  ':zdescp' => $desc
  ));
}
}

   ?>

  <h1 class="text-center">Sign Up</h1>
  <form class="signup contact-error contactform" action="?do=Insert" method="post">
<div class="form-group>">
  <input type="text" placeholder="Full Name" name="FullName" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($full)) { echo  $full; }?>"/>
    <div class="alert alert-danger custom-alert">
   Full Name Must Be Larger Than <strong>4</strong> characters
  </div>
    </div>
  <div class="form-group>">
  <input type="text" placeholder="Link" name="Link" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($usern)) { echo  $usern; }?>"/>
    <div class="alert alert-danger custom-alert">
   Full Name Must Be Larger Than <strong>4</strong> characters
  </div>
    </div>
     <div class="form-group>">
  <input type="text" placeholder="Image" name="Image" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($email)) { echo  $email; }?>"/>
    <div class="alert alert-danger custom-alert">
   Full Name Must Be Larger Than <strong>4</strong> characters
  </div>
    </div>
     <div class="form-group>">
  <input type="text" placeholder="Title" name="Title" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($pass)) { echo  $pass; }?>"/>
    <div class="alert alert-danger custom-alert">
   Full Name Must Be Larger Than <strong>4</strong> characters
  </div>
    </div>
     <div class="form-group>">
  <input type="text" placeholder="Description" name="Description" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($desc)) { echo  $desc; }?>"/>
    <div class="alert alert-danger custom-alert">
   Full Name Must Be Larger Than <strong>4</strong> characters
  </div>
    </div> 
  <input type="submit" value="SignUp" class="btn btn-primary btn-lg btn-block"/>
  </form>
 </div>

<?php
 include 'footinr.php';
include 'footerinner.php';
ob_end_flush();
