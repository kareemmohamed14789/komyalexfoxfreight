<?php
session_start();
$pageTitle = 'Members';
    include "initinnerdashboard(&%$#@%&&^^$#@.php";
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
  if ($do == 'Manage') {
   
   $stmt = $con->prepare("SELECT * FROM contact WHERE GroupID != 1");
   $stmt->execute();
   $rows = $stmt->fetchAll();
   ?>

  <h1 class="text-center">MANAGE CONTACT FORM</h1>
  <div class="table-responsive">
   <table class="main-table text-center table table-bordered">
    <tr>
     <td>
      #UserID
     </td>
      <td>
      Full Name
     </td>
      <td>
      Mobile Number
     </td>
      <td>
      Email Address
     </td>
      <td>
      Subject
     </td>
    <td>
    Message
     </td>
        <td>
    Comment
     </td>
    <td>
    Control
     </td> 
    </tr>
    <?php
    foreach($rows as $row){
     echo "<tr>";
     echo "<td>" . $row['UserId'] . "</td>";
     echo "<td>" . $row['FullName'] . "</td>";
     echo "<td>" . $row['MobileNumber'] . "</td>";
     echo "<td>" . $row['EmailAddress'] . "</td>";
     echo "<td>" . $row['Subject'] . "</td>";
     echo "<td>" . $row['Message'] . "</td>";
     echo "<td>" . $row['COMMENT'] . "</td>";
         echo "<td>
     <a href='editcontactOHDFOANGLFSHNOSRHTESJ.php?do=edit&userid=" . $row['UserId'] . "' class='btn btn-success'>Edit</a><br><br>
     <a href='editcontactOHDFOANGLFSHNOSRHTESJ.php?do=Delete&userid=" . $row['UserId'] . "' class='btn btn-danger confirm'>Delete</a>
     </td>";
     echo "</tr>";
    }
    ?>
   </table>
  </div>

<?php }
if($do == 'edit') {
 $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;
$stmt = $con->prepare("SELECT * FROM users WHERE UserId = ? LIMIT 1");
     $stmt->execute(array($userid));
     $row = $stmt->fetch();
     $count = $stmt->rowCount();
    if ($stmt->rowCount() > 0) { 
 ?>
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
  <input type="email" placeholder="Email" name="Email" class="form-control input-lg email" autocomplete"off" required="required" value="<?php echo $row['Email']?>"/>
    <div class="alert alert-danger custom-alert">
   Email Cant Be  <strong>Empty</strong>
  </div>
      </div>
  <input type="hidden" placeholder="Password" name="oldPassword" value= "<?php echo $row['Password']?>"/>
  <input type="password" placeholder="Password" name="newPassword" class="form-control input-lg" autocomplete="new-password"/>
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
    $use = $_POST['UserName'];
    $ema= $_POST['Email'];
    $pass = '';
    if (empty($_POST['newPassword'])){
     $pass = $_POST['oldPassword'];
    }else{
     $pass = $_POST['newPassword'];
    }
    $stmt = $con->prepare("UPDATE users SET UserName = ?, Email = ?, FullName = ?, Password = ? WHERE UserID = ?");
    $stmt->execute(array($use, $ema, $full, $pass, $id));
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
include 'footerdash.php';
?>
