<?php
session_start();
$pageTitle = 'Edit Profile';
    include "initinnerclintKFGLNSASFGHOSFGHJUGF.php";
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
  if ($do == 'Manage') {
   ?>

   <div class="container-contact">
  <div class="container">
  <h1 class="text-center">Contact Form</h1>
  <form class="contactform" action="?do=Insert" method="post">
  
  

  <input type="text" placeholder="Full Name" name="FullName" class="form-control input-lg" autocomplete"off" required="required"/>

  

  <input type="text" placeholder="Mobile Number" name="MobileNumber" class="form-control input-lg" autocomplete"off" required="required"/>

  

  <input type="email" placeholder="Email Address" name="EmailAddress" class="form-control input-lg" autocomplete"off" required="required"/>

  

  <input type="text" placeholder="Subject" name="Subject" class="form-control input-lg" autocomplete"off" required="required"/>

  

  <input type="text" placeholder="Message" name="Message" class="form-control input-lg" autocomplete"off" required="required"/>

  

  <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block"/>

    </div>
</div>

<?php }
if($do == 'edit') {
$userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
       $stmt = $con->prepare("SELECT * FROM contact WHERE UserId = ? LIMIT 1");
     $stmt->execute(array($userid));
     $row = $stmt->fetch();
     $count = $stmt->rowCount();        
if ($stmt->rowCount() > 0) { ?>
  <div class="container">
  <h1 class="text-center">Edit Your Profile</h1>
  <form class="signup contact-error" action="?do=Update" method="post">
                <input type="hidden" name="userid" value="<?php echo $userid ?>" />
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
  <input type="text" placeholder="Full Name" name="FullName" class="fullname form-control input-lg" autocomplete"off" required="required" value="<?php echo $row['FullName']?>" />
  <div class="alert alert-danger custom-alert">
   User Name Must Be Larger Than <strong> 4 </strong> characters
  </div>
  </div>
  <div class="form-group>">
  <input type="text" placeholder="Mobile Number" name="MobileNumber" class="form-control input-lg mobilenumber" autocomplete"off" required="required" value="<?php echo $row['MobileNumber']?>" />
  <div class="alert alert-danger custom-alert">
   Mobile Number cant Be  <strong>Empty</strong>
  </div>
  </div>
  
<div class="form-group>">
  <input type="email" placeholder="Email Address" name="EmailAddress" class="form-control input-lg email" autocomplete"off" required="required" value="<?php echo $row['EmailAddress']?>" />
  <div class="alert alert-danger custom-alert">
   Email Cant Be  <strong>Empty</strong>
  </div>
    </div>
  <div class="form-group>">
  <input type="text" placeholder="Subject" name="Subject" class="form-control input-lg subject" autocomplete"off" required="required" value="<?php echo $row['Subject']?>" />
  <div class="alert alert-danger custom-alert">
   Subject Cant Be  <strong>Empty</strong>
  </div>
    </div>
<div class="form-group>">
  <input type="text" placeholder="Message" name="Message" class="form-control input-lg message" autocomplete"off" required="required" value="<?php echo $row['Message']?>" />
    <div class="alert alert-danger custom-alert">
   Message Cant Be less than <strong>10</strong> characters
   </div>
      </div>
      <div class="form-group>">
  <input type="text" placeholder="Comment" name="COMMENT" class="form-control input-lg " autocomplete"off" required="required" value="<?php echo $row['COMMENT']?>" />
    <div class="alert alert-danger custom-alert">
   Message Cant Be less than <strong>10</strong> characters
   </div>
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
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['userid'];
    $full = $_POST['FullName'];
    $mobl = $_POST['MobileNumber'];
    $emal= $_POST['EmailAddress'];
     $subjj = $_POST['Subject'];
     $messga = $_POST['Message'];
     $comme = $_POST['COMMENT'];
    $stmt = $con->prepare("UPDATE contact SET FullName = ?, MobileNumber = ?, EmailAddress = ?, Subject = ?, Message = ?,  COMMENT = ? WHERE UserId = ?");
    $stmt->execute(array($full, $mobl, $emal, $subjj, $messga, $comme, $id));
    /*echo $stmt->rowCount();*/
 echo
"
<div class= 'container'>
<div class='alert alert-success text-center'>Your Profile Was Updated</div>
</div>
";
 }else{
  echo 'Sorry You Cant Browse This Page Directly';
 }
}

if($do == 'Insert') {
 echo "<div class='container'>";
 $formErrors = array();
if(strlen($_POST['FullName']) < 4){
 $formErrors[] = 'Full Name Cant Be Less Than <strong>4 Letters</strong>';
}

if(strlen($_POST['FullName']) > 20){
 $formErrors[] = 'Full Name Cant Be More Than <strong>20 Letters</strong>';
}

if(empty($_POST['FullName'])){
 $formErrors[] = 'Full Name Cant Be<strong> empty</strong>';
}

if(empty($_POST['MobileNumber'])){
 $formErrors[] = 'Full Name Cant Be<strong> empty</strong>';
}

if(empty($_POST['EmailAddress'])){
 $formErrors[] = 'Full Name Cant Be<strong> empty</strong>';
}

if(empty($_POST['Subject'])){
 $formErrors[] = 'Full Name Cant Be<strong> empty</strong>';
}

if(empty($_POST['Message'])){
 $formErrors[] = 'Full Name Cant Be<strong> empty</strong>';
}

foreach($formErrors as $error){
 echo '<div class="alert alert-danger">' . $error . '</div>';
}
echo "</div>";
if (empty($formErrors)){

   $stmt = $con->prepare("INSERT INTO contact(FullName, MobileNumber, EmailAddress, Subject, Message)
                       VALUES(:zfulln, :zmobilen, :zemaila, :zsubj, :zmessa) ");
 $stmt->execute(array(
  ':zfulln' => $_POST['FullName'],
  ':zmobilen' => $_POST['MobileNumber'],
  ':zemaila' => $_POST['EmailAddress'],
  ':zsubj' => $_POST['Subject'],
  ':zmessa' => $_POST['Message']
  ));
 echo
"
<div class='alert alert-success text-center'>Thank You For Contacting With US <br> Your Message Was Sent Successfuly</div>
";
}

 }
 
 
 
 
 if($do == 'Delete') {

$userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
       $stmt = $con->prepare("SELECT * FROM contact WHERE UserId = ? LIMIT 1");
     $stmt->execute(array($userid));
     $count = $stmt->rowCount();        
if ($stmt->rowCount() > 0) {
 $stmt = $con->prepare("DELETE FROM contact WHERE UserID = :zuser");
 $stmt->bindParam(":zuser", $userid);
 $stmt->execute();
  echo
"
<div class= 'container'>
<div class='alert alert-success text-center'>One Record Deleted</div>
</div>
";
}
 }
include 'footerdash.php';
?>
