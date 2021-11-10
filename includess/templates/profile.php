<?php
ob_start();
session_start();
 $pageTitle = 'Profile'; 
include "initinner.php";
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';    
 $sessionUser = '';
 if(isset($_SESSION['UserName'])){
   $sessionUser = $_SESSION['UserName'];
 }   
if(isset($_SESSION['UserName'])){
$do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
$getUser = $con->prepare("SELECT * FROM users WHERE UserName= ? ");
$getUser->execute(array($sessionUser));
$info = $getUser->fetch();
if($do == 'Manage') {
 ?>
<div class="container-contact">
 <div class="container">
 <h1 class="text-center">My Profile</h1>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">My Information</h3>
  </div>
  <div class="panel-body">
     Full Name : <?php echo $info['FullName']; ?> <br>
     User Name : <?php echo $info['UserName']; ?> <br>
     Email : <?php echo $info['Email']; ?> <br>
  </div>
</div>
</div>
</div>
<?php
   }

   
if($do == 'edit') {
 $userid = isset($_GET['Activatecode']) && is_numeric($_GET['Activatecode']) ? intval($_GET['Activatecode']) : 0;
$stmt = $con->prepare("SELECT * FROM users WHERE Activatecode = ? LIMIT 1");
     $stmt->execute(array($userid));
     $row = $stmt->fetch();
     $count = $stmt->rowCount();
    if ($stmt->rowCount() > 0) {
 ?>
  <div class="container">
  <h1 class="text-center">Edit Your Profile</h1>
  <form class="signup contact-error contactform" action="?do=Update" method="post">
                   <input type="hidden" name="UserID" value="<?php echo $row['UserID']?>" />
                   <input type="hidden" name="Activatecode" value="<?php echo $row['Activatecode']?>" />          
               <?PHP if(! empty($formErrors)) { ?>
           <div class="alert alert-danger alert-dismissible" role="start">
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
            <?PHP
             foreach($formErrors as $error){
            echo $error . '<br/>';
           }
           ?>
           </div>
           <?PHP } ?>
           <div class="form-group>">
  <input type="text" placeholder="Full Name" name="FullName" class="form-control input-lg fullname" autocomplete"off" required="required" value="<?php echo $row['FullName']?>"/>
    <div class="alert alert-danger custom-alert">
   Full Name Must Be Larger Than <strong>4</strong> characters
  </div>
      </div>
      <div class="form-group>">
  <input type="text" placeholder="User Name" name="UserName" class="form-control input-lg username" autocomplete"off" required="required" value="<?php echo $row['UserName']?>"/>
      <div class="alert alert-danger custom-alert">
   User Name Must Be Larger Than <strong>4</strong> characters
  </div>
     </div>  
    <div class="form-group>">
  <input type="text" placeholder="Mobile Number" name="MobileNumber" class="form-control input-lg mobilenumber" autocomplete"off" required="required" value="<?php echo $row['MobileNumber']?>" />
  <div class="alert alert-danger custom-alert">
   Mobile Number cant Be  <strong>Empty</strong>
  </div>
  </div> 
  <input type="hidden" placeholder="Password" name="oldPassword" value= "<?php echo $row['Password']?>"/>
  <input type="password" placeholder="Password" name="newPassword" class="form-control input-lg" autocomplete="new-password"/>
    <div class="form-group>">
  <input type="text" placeholder="Your Company Name" name="CompanyName" class="form-control input-lg" autocomplete"off" required="required" value="<?php echo $row['CompanyName']?>"/>
    </div>
   <div class="form-group>">
  <input type="text" placeholder="Your Company Type" name="CompanyType" class="form-control input-lg" autocomplete"off" required="required" value="<?php echo $row['CompanyType']?>"/>
    </div>
    <div class="form-group>">
  <input type="text" placeholder="Your Department" name="Department" class="form-control input-lg" autocomplete"off" required="required" value="<?php echo $row['Department']?>"/>
    </div>
     <div class="form-group>">
  <input type="text" placeholder="Your Address Company" name="Address" class="form-control input-lg" autocomplete"off" required="required" value="<?php echo $row['Address']?>"/>
    </div>
       <div class="form-group>">
  <input type="text" placeholder="Your City" name="City" class="form-control input-lg" autocomplete"off" required="required" value="<?php echo $row['City']?>"/>
    </div>
        <div class="form-group>">
  <input type="text" placeholder="Your Country" name="Country" class="form-control input-lg" autocomplete"off" required="required" value="<?php echo $row['Country']?>"/>
    </div> 
  <input type="submit" value="Save" class="btn btn-primary btn-lg btn-block"/>
  </form>
 </div>

<?php
}
}

if($do == 'Update'){
 ?>
 <h1 class="text-center">Update Profile</h1>
 <?php
  $acti = $_POST['Activatecode'];
     $use = $_POST['UserName'];
    $id = $_POST['UserID'];
    $comp = $_POST['CompanyName'];
    $comptyp = $_POST['CompanyType'];
    $depar = $_POST['Department'];
    $addr = $_POST['Address'];
    $cit = $_POST['City'];
    $cant = $_POST['Country'];
    $full = $_POST['FullName'];
    $mobile = $_POST['MobileNumber'];
    $pass = '';
    if (empty($_POST['newPassword'])){
     $pass = $_POST['oldPassword'];
    }else{
     $pass = $_POST['newPassword'];
    }
    $stmt = $con->prepare("UPDATE users SET UserId = ?, FullName = ?, MobileNumber = ?, CompanyName = ?, CompanyType = ?, Department = ?, Address = ?, City = ?, Country = ?, Password = ?, UserName = ? WHERE Activatecode = ?");
    $stmt->execute(array($id, $full, $mobile, $comp, $comptyp, $depar, $addr, $cit, $cant, $pass, $use, $acti));
 echo "<div class='container text-message'>";
$theMsg = 'The Profile Was Updated Successfully <br> Login Now To View Your Edit';
redirectUpdate($theMsg);
 echo "<div>";
}   
   
   
   
   
 if($do == 'History') {
  ?>
<div class="container-contact">
 <div class="container">
 <h1 class="text-center">Logistic Services</h1>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">My Services</h3>
  </div>
  <div class="panel-body">

<?php
foreach(getLogistic('UserIdLogistic',$info['UserID'])as $logistic){
echo "<p>" . $logistic['Logistic'] . "</p>" . '</br>';
echo "<p>" . $logistic['Date'] . "</p>" . '</br>';
echo "<p>" . $logistic['Time'] . '</p>' . '</br>';
echo "<p>" . $logistic['Subject'] . '</p>' . '</br>';
echo "<p>" . $logistic['Message'] . '</p>' . '</br>';
}
?>
  </div>
</div>
</div>
</div>

<div class="container-contact">
 <div class="container">
 <h1 class="text-center">Product And Services</h1>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">My Services</h3>
  </div>
  <div class="panel-body">
<?php
foreach(getProduct('UserIdProduct',$info['UserID'])as $product){
echo "<p>" . $product['Product'] . "</p>" . '</br>';
echo "<p>" . $product['Date'] . "</p>" . '</br>';
echo "<p>" . $product['Time'] . '</p>' . '</br>';
echo "<p>" . $product['Subject'] . '</p>' . '</br>';
echo "<p>" . $product['Message'] . '</p>' . '</br>';
}
?>
  </div>
</div>
</div>
</div>

<div class="container-contact">
 <div class="container">
 <h1 class="text-center">Marine Services</h1>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">My Services</h3>
  </div>
  <div class="panel-body">
 <?php
foreach(getMarine('UserIdMarine',$info['UserID'])as $marine){
echo "<p>" . $marine['Marine'] . "</p>" . '</br>';
echo "<p>" . $marine['Date'] . "</p>" . '</br>';
echo "<p>" . $marine['Time'] . '</p>' . '</br>';
echo "<p>" . $marine['Subject'] . '</p>' . '</br>';
echo "<p>" . $marine['Message'] . '</p>' . '</br>';
}
?>
  </div>
</div>
</div>
</div>
<?php 
 } 
}else{
header('Location: login.php');
exit();
}
 include 'footinr.php';
include 'footerinner.php';
ob_end_flush();