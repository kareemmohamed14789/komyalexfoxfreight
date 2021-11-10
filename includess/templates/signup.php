<?PHP
ob_start();
session_start();
$pageTitle = 'Sign Up';
include 'function.php';
include 'headerinner.php';
include 'navbarinner.php';
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
  if ($do == 'Manage') {
   ?>
  <h1 class="text-center">Sign Up</h1>
  <form class="signup contact-error contactform" action="?do=Insert" method="post">
<div class="form-group>">
  <input type="text" placeholder="Full Name" name="FullName" class="form-control input-lg fullname" autocomplete"off" required="required" value="<?php if (isset($full)) { echo  $full; }?>"/>
    <div class="alert alert-danger custom-alert">
   Full Name Must Be Larger Than <strong>4</strong> characters
  </div>
    </div>
    <div class="form-group>">
  <input type="text" placeholder="User Name" name="UserName" class="form-control input-lg username" autocomplete"off" required="required" value="<?php if (isset($usern)) { echo  $usern; }?>"/>
      <div class="alert alert-danger custom-alert">
   User Name Must Be Larger Than <strong>4</strong> characters
  </div>
     </div>   
      <div class="form-group>">
  <input type="email" placeholder="Email" name="Email" class="form-control input-lg email" autocomplete"off" required="required" value="<?php if (isset($email)) { echo  $email; }?>"/>
    <div class="alert alert-danger custom-alert">
   Email Cant Be  <strong>Empty</strong>
  </div>
      </div>
    <div class="form-group>">
  <input type="text" placeholder="Mobile Number" name="MobileNumber" class="form-control input-lg mobilenumber" autocomplete"off" required="required" value="<?php if (isset($mobile)) { echo  $mobile; }?>" />
  <div class="alert alert-danger custom-alert">
   Mobile Number cant Be  <strong>Empty</strong>
  </div>
  </div>    
  <input type="password" placeholder="Password" name="Password" class="form-control input-lg" autocomplete="new-password" required="required"/>
  <div class="form-group>">
  <input type="text" placeholder="Your Company Name" name="CompanyName" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($comp)) { echo  $comp; }?>"/>
    </div>
   <div class="form-group>">
  <input type="text" placeholder="Your Company Type" name="CompanyType" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($comptyp)) { echo  $comptyp; }?>"/>
    </div>
    <div class="form-group>">
  <input type="text" placeholder="Your Department" name="Department" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($depar)) { echo  $depar; }?>"/>
    </div>
     <div class="form-group>">
  <input type="text" placeholder="Your Address Company" name="Address" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($addr)) { echo  $addr; }?>"/>
    </div>
       <div class="form-group>">
  <input type="text" placeholder="Your City" name="City" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($cit)) { echo  $cit; }?>"/>
    </div>
        <div class="form-group>">
  <input type="text" placeholder="Your Country" name="Country" class="form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($cant)) { echo  $cant; }?>"/>
    </div>    
  <input type="submit" value="SignUp" class="btn btn-primary btn-lg btn-block"/>
  </form>
 </div>

<?php
}

if($do == 'Insert') {
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
$mobile = $_POST['MobileNumber'];
$comp = $_POST['CompanyName'];
$comptyp = $_POST['CompanyType'];
$depar = $_POST['Department'];
$addr = $_POST['Address'];
$cit = $_POST['City'];
$cant = $_POST['Country'];
$full = $_POST['FullName'];
$usern = $_POST['UserName'];
$email = $_POST['Email'];
$pass =  $_POST['Password'];
$acticode = rand(1,999999);
$title = "confirmation message";
$message = '
Welcome '.$full.'
to active your account click on this link
globalexpressms.com/includess/templates/active.php?Activatecode='.$acticode.'
';
mail($email,$title,$message);
 echo "<div class='container'>";
 $formErrors = array();
if(strlen($full) < 4){
 $formErrors[] = 'Full Name Cant Be Less Than <strong>4 Letters</strong>';
}

if(strlen($full) > 20){
 $formErrors[] = 'Full Name Cant Be More Than <strong>20 Letters</strong>';
}

if(empty($full)){
 $formErrors[] = 'Full Name Cant Be<strong> empty</strong>';
}

if(strlen($usern) < 4){
 $formErrors[] = 'User Name Cant Be Less Than <strong>4 Letters</strong>';
}

if(strlen($usern) > 20){
 $formErrors[] = 'User Name Cant Be More Than <strong>20 Letters</strong>';
}

if(empty($usern)){
 $formErrors[] = 'User Name Cant Be<strong> empty</strong>';
}

if(empty($email)){
 $formErrors[] = 'Email Cant Be<strong> empty</strong>';
}

if(empty($_POST['Password'])){
 $formErrors[] = 'Password Cant Be<strong> empty</strong>';
}

echo "</div>";
if (empty($formErrors)){
$check = checkItem("Email", "users", $email);
$checker = checkItem("UserName", "users", $usern);
if($check == 1) {
 echo "<div class='container text-message'>";
$theMsg = 'Your Registration Failed <br> This Email Is Already Exist';
redirectAct($theMsg);
 echo "<div>";
}elseif($checker == 1) {
 echo "<div class='container text-message'>";
$theMsg = 'Your Registration Failed <br> This User Is Already Exist';
redirectAct($theMsg);
 echo "<div>";
}else{
  
   $stmt = $con->prepare("INSERT INTO users(FullName, UserName, Email, Activatecode, Password, MobileNumber, CompanyName, CompanyType, Department, Address, City, Country)
                       VALUES(:zfulln, :zusern, :zemail, :zacti, :zpass, :zmob, :zcompa, :zcompt, :zdepa, :zaddr, :zctio,:zcontr) ");
 $stmt->execute(array(
    ':zmob' => $mobile,
  ':zcompa' => $comp,
  ':zcompt' => $comptyp,
    ':zdepa' => $depar,
  ':zaddr' => $addr,
  ':zctio' => $cit,
  ':zcontr' => $cant,
  ':zfulln' => $full,
  ':zusern' => $usern,
  ':zemail' => $email,
  ':zacti' => $acticode,
  ':zpass' => $_POST['Password']

  ));
 echo "<div class='container text-message'>";
$theMsg = 'Thank You For Your Registration With US <br> You Must Click On Link That Was Sent To Your Mail';
redirectActivate($theMsg);
 echo "<div>";
 }
}

}else
 {
   echo "<div class='container text-message'>";
$theMsg = 'sorry you cant browse this page directly';
redirectActivate($theMsg);
 echo "<div>";
 }
 }
 include 'footinr.php';
include 'footerinner.php';
ob_end_flush();
