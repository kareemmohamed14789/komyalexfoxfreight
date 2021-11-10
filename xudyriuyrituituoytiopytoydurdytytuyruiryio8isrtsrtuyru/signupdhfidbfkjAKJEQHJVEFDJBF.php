<?PHP
session_start();
include 'connectDWRTRGSFGHHTYHEHSFGFG.php';
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
if($_SERVER['REQUEST_METHOD'] == 'POST') {

 $full = filter_var($_POST['FullName'], FILTER_SANITIZE_STRING);
 $mobile = filter_var($_POST['MobileNumber'], FILTER_SANITIZE_NUMBER_INT);
 $email = filter_var($_POST['EmailAddress'], FILTER_SANITIZE_EMAIL);
 $subject = filter_var($_POST['Subject'], FILTER_SANITIZE_STRING);
 $mess =    filter_var($_POST['Message'], FILTER_SANITIZE_STRING);
 $commys =    filter_var($_POST['COMMENT'], FILTER_SANITIZE_STRING);
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

if(empty($mobile)){
 $formErrors[] = 'Mobile Number Cant Be<strong> empty</strong>';
}

if(empty($email)){
 $formErrors[] = 'Email Address Cant Be<strong> empty</strong>';
}

if(empty($subject)){
 $formErrors[] = 'Subject Cant Be<strong> empty</strong>';
}

if(empty($mess)){
 $formErrors[] = 'Message Cant Be<strong> empty</strong>';
}

echo "</div>";
if (empty($formErrors)){

 $stmt = $con->prepare("INSERT INTO contact(FullName, MobileNumber, EmailAddress, Subject, Message, COMMENT)
                       VALUES(:zfulln, :zmobilen, :zemaila, :zsubj, :zmessa, :zcommy) ");
 $stmt->execute(array(
  ':zfulln' => $full,
  ':zmobilen' => $mobile,
  ':zemaila' => $email,
  ':zsubj' => $subject,
  ':zmessa' => $mess,
  ':zcommy' => $commys,
  ));
 echo
"
<div class='container'>
<div class='col-sm-12 alert alert-success text-center'>Thank You For Contacting With US <br> Your Message Was Sent Successfuly</div>
</div>
";
}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- IE compitability meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- first mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEMS</title>
    <link rel= "stylesheet" href="../layoutt/css/normalize.css">
    <link rel= "stylesheet" href="../layoutt/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel= "stylesheet" href="../layoutt/css/bootstrap.min.css">
    <link rel= "stylesheet" href="../layoutt/css/rtl.css">
    <link rel= "stylesheet" href="../layoutt/css/main.css">
    <!--[if lt IE 9]>
    <script src="../layoutt/js/html5shiv.min.js"></script>
    <script src="../layoutt/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="navbarr-media">
  <div class="container-fluid">
    
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">

        <li><a href="membercontactghsbvkqqfvhjkqefvqfnbvn.php">MANAGE DATA<span class="sr-only">(current)</span></a></li>
        <li><a href="signupdhfidbfkjAKJEQHJVEFDJBF.php">INSERT DATA<span class="sr-only">(current)</span></a></li>
    </div>
  </div>
  </div>
</nav>
  
  
  
  
<div class="container-contact">
  <div class="container">
  <h1 class="text-center">Contact Form</h1>
  <form class="contactform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  
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
<?php if(isset($success)) {echo $success; } ?>
<div class="form-group>">
  <input type="text" placeholder="Full Name" name="FullName" class="fullname form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($full)) { echo  $full; }?>" />
  <div class="alert alert-danger custom-alert">
   User Name Must Be Larger Than <strong> 4 </strong> characters
  </div>
  </div>
  <div class="form-group>">
  <input type="text" placeholder="Mobile Number" name="MobileNumber" class="form-control input-lg mobilenumber" autocomplete"off" required="required" value="<?php if (isset($mobile)) { echo  $mobile; }?>" />
  <div class="alert alert-danger custom-alert">
   Mobile Number cant Be  <strong>Empty</strong>
  </div>
  </div>
  
<div class="form-group>">
  <input type="email" placeholder="Email Address" name="EmailAddress" class="form-control input-lg email" autocomplete"off" required="required" value="<?php if (isset($email)) { echo  $email; }?>" />
  <div class="alert alert-danger custom-alert">
   Email Cant Be  <strong>Empty</strong>
  </div>
    </div>
  <div class="form-group>">
  <input type="text" placeholder="Subject" name="Subject" class="form-control input-lg subject" autocomplete"off" required="required" value="<?php if (isset($subject)) { echo  $subject; }?>" />
  <div class="alert alert-danger custom-alert">
   Subject Cant Be  <strong>Empty</strong>
  </div>
    </div>
<div class="form-group>">
  <input type="text" placeholder="Message" name="Message" class="form-control input-lg message" autocomplete"off" required="required" value="<?php if (isset($mess)) { echo  $mess; }?>" />
    <div class="alert alert-danger custom-alert">
   Message Cant Be less than <strong>10</strong> characters
   </div>
      </div>
      
   <div class="form-group>">
  <input type="text" placeholder="Comment" name="COMMENT" class="form-control input-lg message" autocomplete"off" required="required" value="<?php if (isset($commys)) { echo  $commys; }?>" />
    <div class="alert alert-danger custom-alert">
   Message Cant Be less than <strong>10</strong> characters
   </div>
      </div>   
  <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block"/>
  </form>
    </div>
</div>

  <script src="../layoutt/js/jquery-1.12.4.min.js"></script>
  <script src="../layoutt/js/bootstrap.min.js"></script>
  <script src="../layoutt/js/main.js"></script>
  </body>
  </html> 
